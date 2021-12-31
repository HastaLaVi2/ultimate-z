<?php
/**
 * Copyright since 2021 the ultimate z and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@theultimatez.com so we can send you a copy immediately.
 *
 */

class zPageStarter extends zPage {
    public function __construct($id_page = NULL, $id_lang = NULL) {
        parent::__construct($id_page, $id_lang);
    }

    public function _zStarter(array $data = NULL, $zSmarty = NULL) {
        $zThis = zThis::get()->table;
        $zContent = $zSmarty->tpl_vars["zContent"]->value;

        /********************************
        Simple PHP File Manager
        Copyright John Campbell (jcampbell1)

        Liscense: MIT
        ********************************/

        //Security options
        $allow_delete = true; // Set to false to disable delete button and delete POST request.
        $allow_upload = true; // Set to true to allow upload files
        $allow_create_folder = true; // Set to false to disable folder creation
        $allow_direct_link = true; // Set to false to only allow downloads and not direct link
        $allow_show_folders = true; // Set to false to hide all subdirectories

        $zSmarty->assign("allow_delete", $allow_delete);
        $zSmarty->assign("allow_upload", $allow_upload);
        $zSmarty->assign("allow_create_folder", $allow_create_folder);
        $zSmarty->assign("allow_direct_link", $allow_direct_link);
        $zSmarty->assign("allow_show_folders", $allow_show_folders);

        $disallowed_patterns = ['*.php'];  // must be an array.  Matching files not allowed to be uploaded
        $hidden_patterns = ['*.php','.*']; // Matching files hidden in directory index

        $zSmarty->assign("disallowed_patterns", $disallowed_patterns);
        $zSmarty->assign("hidden_patterns", $hidden_patterns);

        $PASSWORD = "";  // Set the password, to access the file manager... (optional)

        if($PASSWORD) {
        	if(!$_SESSION['_sfm_allowed']) {
        		// sha1, and random bytes to thwart timing attacks.  Not meant as secure hashing.
        		$t = bin2hex(openssl_random_pseudo_bytes(10));
        		if($data['p'] && sha1($t.$data['p']) === sha1($t.$PASSWORD)) {
        			$_SESSION['_sfm_allowed'] = true;
        			header('Location: ?');
        		}
        		echo '<html><body><form action=? method=post>PASSWORD:<input type=password name=p autofocus/></form></body></html>';
        		exit;
        	}
        }

        $tmp_dir = dirname($_SERVER['SCRIPT_FILENAME']);
        if(DIRECTORY_SEPARATOR==='\\') $tmp_dir = str_replace('/',DIRECTORY_SEPARATOR,$tmp_dir);
        $tmp = $this->get_absolute_path($tmp_dir . '/' .$_REQUEST['file']);

        if($tmp === false)
        	$this->err(404,'File or Directory Not Found');
        if(substr($tmp, 0,strlen($tmp_dir)) !== $tmp_dir)
        	$this->err(403,"Forbidden");
        if(strpos($_REQUEST['file'], DIRECTORY_SEPARATOR) === 0)
        	$this->err(403,"Forbidden");
        if(preg_match('@^.+://@',$_REQUEST['file'])) {
        	$this->err(403,"Forbidden");
        }


        if(!$_COOKIE['_z_xsrf'])
        	setcookie('_z_xsrf',bin2hex(openssl_random_pseudo_bytes(16)));
        if($data) {
        	if($_COOKIE['_z_xsrf'] !== $data['xsrf'] || !$data['xsrf'])
        		$this->err(403,"XSRF Failure");
        }

        $file = $_REQUEST['file'] ?: '.';

        if($_GET['do'] == 'list') {
        	if (is_dir($file)) {
        		$directory = $file;
        		$result = [];
        		$files = array_diff(scandir($directory), ['.','..']);
        		foreach ($files as $entry) if (!$this->is_entry_ignored($entry, $allow_show_folders, $hidden_patterns)) {
        			$i = $directory . '/' . $entry;
        			$stat = stat($i);
        			$result[] = [
        				'mtime' => $stat['mtime'],
        				'size' => $stat['size'],
        				'name' => basename($i),
        				'path' => preg_replace('@^\./@', '', $i),
        				'is_dir' => is_dir($i),
        				'is_deleteable' => $allow_delete && ((!is_dir($i) && is_writable($directory)) ||
        														(is_dir($i) && is_writable($directory) && $this->is_recursively_deleteable($i))),
        				'is_readable' => is_readable($i),
        				'is_writable' => is_writable($i),
        				'is_executable' => is_executable($i),
        			];
        		}
        		usort($result,function($f1,$f2){
        			$f1_key = ($f1['is_dir']?:2) . $f1['name'];
        			$f2_key = ($f2['is_dir']?:2) . $f2['name'];
        			return $f1_key > $f2_key;
        		});
        	} else {
        		$this->err(412,"Not a Directory");
        	}
        	echo json_encode(['success' => true, 'is_writable' => is_writable($file), 'results' =>$result]);
        	exit;
        } elseif ($data['do'] == 'delete') {
        	if ($allow_delete) {
        		$this->rmrf($file);
        	}
        	exit;
        } elseif ($data['do'] == 'mkdir' && $allow_create_folder) {
        	// don't allow actions outside root. we also filter out slashes to catch args like './../outside'
        	$dir = $data['name'];
        	$dir = str_replace('/', '', $dir);
        	if(substr($dir, 0, 2) === '..')
        	    exit;
        	chdir($file);
        	@mkdir($data['name']);
        	exit;
        } elseif ($data['do'] == 'upload' && $allow_upload) {
        	foreach($disallowed_patterns as $pattern)
        		if(fnmatch($pattern, $_FILES['file_data']['name']))
        			$this->err(403,"Files of this type are not allowed.");

        	$res = move_uploaded_file($_FILES['file_data']['tmp_name'], $file.'/'.$_FILES['file_data']['name']);
        	exit;
        } elseif ($_GET['do'] == 'download') {
        	foreach($disallowed_patterns as $pattern)
        		if(fnmatch($pattern, $file))
        			$this->err(403,"Files of this type are not allowed.");

        	$filename = basename($file);
        	$finfo = finfo_open(FILEINFO_MIME_TYPE);
        	header('Content-Type: ' . finfo_file($finfo, $file));
        	header('Content-Length: '. filesize($file));
        	header(sprintf('Content-Disposition: attachment; filename=%s',
        		strpos('MSIE',$_SERVER['HTTP_REFERER']) ? rawurlencode($filename) : "\"$filename\"" ));
        	ob_flush();
        	readfile($file);
        	exit;
        }

        $zSmarty->assign("MAX_UPLOAD_SIZE", min($this->asBytes(ini_get('post_max_size')), $this->asBytes(ini_get('upload_max_filesize'))));
    }

    private function is_entry_ignored($entry, $allow_show_folders, $hidden_patterns) {
        if ($entry === basename(__FILE__)) {
            return true;
        }

        if (is_dir($entry) && !$allow_show_folders) {
            return true;
        }
        foreach($hidden_patterns as $pattern) {
            if(fnmatch($pattern,$entry)) {
                return true;
            }
        }
        return false;
    }

    private function rmrf($dir) {
        if(is_dir($dir)) {
            $files = array_diff(scandir($dir), ['.','..']);
            foreach ($files as $file)
                $this->rmrf("$dir/$file");
            rmdir($dir);
        } else {
            unlink($dir);
        }
    }

    private function is_recursively_deleteable($d) {
        $stack = [$d];
        while($dir = array_pop($stack)) {
            if(!is_readable($dir) || !is_writable($dir))
                return false;
            $files = array_diff(scandir($dir), ['.','..']);
            foreach($files as $file) if(is_dir($file)) {
                $stack[] = "$dir/$file";
            }
        }
        return true;
    }

    // from: http://php.net/manual/en/function.realpath.php#84012
    private function get_absolute_path($path) {
            $path = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);
            $parts = explode(DIRECTORY_SEPARATOR, $path);
            $absolutes = [];
            foreach ($parts as $part) {
                if ('.' == $part) continue;
                if ('..' == $part) {
                    array_pop($absolutes);
                } else {
                    $absolutes[] = $part;
                }
            }
            return implode(DIRECTORY_SEPARATOR, $absolutes);
    }

    private function err($code,$msg) {
        http_response_code($code);
        header("Content-Type: application/json");
        echo json_encode(['error' => ['code'=>intval($code), 'msg' => $msg]]);
        exit;
    }

    private function asBytes($ini_v) {
        $ini_v = trim($ini_v);
        $s = ['g'=> 1<<30, 'm' => 1<<20, 'k' => 1<<10];
        return intval($ini_v) * ($s[strtolower(substr($ini_v,-1))] ?: 1);
    }
}
