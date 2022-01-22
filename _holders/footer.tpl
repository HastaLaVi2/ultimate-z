{**
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
 *}

{if !$zAdmin}

{/if}

{if $zAdmin}
    <!-- toastify -->
    <script src="{$zContent->srcFull["scripts"]}/toastify/toastify.js"></script>

    <!-- simple-datatables -->
    <script>
    var entriesPerPage = "{zThis z="entries per page"}";
    var searchOn = "{zThis z="Search..."}";
    var showingOf = "{zThis z="Showing [start] to [end] of [rows] entries"}";
    showingOf = showingOf.replaceAll("[", "{literal}{{/literal}").replaceAll("]", "{literal}}{/literal}");
    var noRowFound = "{zThis z="No entries found"}";

    $("input[type=checkbox]").change(function() {
        var clas = $(this).attr("class").split(" ")[1];
        var checked = $(this).prop("checked");
        $("."+clas).prop("checked", checked);
    });
    </script>
    <script src="{$zContent->srcFull["scripts"]}/simple-datatables/simple-datatables.js"></script>
    <script>
    function zTable() {
        // create simple datatables
        window.zTables = [];
        var tables = document.querySelectorAll(".zTable");
        tables.forEach((item, i) => {
            var jItem = $(item);
            var columns = jItem.attr("no_sort") ? { select: jItem.attr("no_sort").split("-"), sortable: false} : {};
            var dataTable = new simpleDatatables.DataTable(item, {
                columns: [columns]
            });
            dataTable.on("datatable.page", function(page) {
                jItem.find("a").click(magicLinks);
            });
            dataTable.on("datatable.sort", function(column, direction) {
                jItem.find("a").click(magicLinks);
            });
            window.zTables.push(dataTable);
        });
    }
    </script>
    <script>
    $(window).on("load", function () {
        zTable();
        zDetect();
        // do we have extra javascript function to be run on the new page?
        // let's run it if we do, but we need to check if we have a function on the page at all.
        var zPageJSS = [];

        for (var x in window) {
            if (typeof window[x] === "function" && x.indexOf("zPageJS") === 0) {
                zPageJSS.push(x);
            }
        }
        zPageJSS.forEach(function(item) {
            window[item]();
        });
    });
    </script>
{/if}
