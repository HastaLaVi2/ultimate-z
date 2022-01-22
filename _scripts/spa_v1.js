// jQuery effects, before/after function names
var before = {slide: "slideDown", fade: "fadeIn", dunk: "show"}
var after = {slide: "slideUp", fade: "fadeOut", dunk: "hide"}

// detect which effect should be used for the loader.
function detectEffect(one, two, order, callback) {
    // get the zEffect attribute from the tag.
    var effectType = $(one).attr("zEffect");
    // which one is it? before loading, or after loading effect.
    effectType = order == "after" ? after[effectType] : before[effectType];

    // if we found an existing effect.
    if (effectType) {
        // now, finally, the magic.
        $(one)[effectType](500, function() {
            $(two)[effectType](300, function() {
                if (callback && typeof(callback) == "function") {
                    callback();
                }
            });
        });
    } else {
        if (callback && typeof(callback) == "function") {
            callback();
        }
    }
}


// this function is used to get the html code from another page and,
// update the current page partially with the code.
function stringHTMLParse(doc, id, response) {
    // get the element's html code from the page to be loaded.
    var element = $(doc.getElementById(id)).html();

    // if the element exists on the current page, let's change its content
    // with newly obtained content.
    if ($("#"+id).length) {
        $("#"+id).html(element);
        if (id == "zPages") {
            $("#"+id).find("a").click(magicLinks);
        }
    }

    // if we are updating zTop tag, this means that the page title also should
    // be updated.
    if (id == "zTop") {
        document.title = $(doc.getElementsByTagName("title")[0]).first().text();
        var langcode = $(doc.getElementsByTagName("html")[0]).attr("lang");
        $("html").attr("lang", langcode);
        $(doc).find("link[rel='alternate']").each(function(i) {
            $($("link[rel='alternate']")[i]).attr("href", $(this).attr("href"));
        });
    }

    // if we are updating zContent tag, we should run some functions after updating,
    // because when new elements arrive, ultimate Z CSS/JS framework should rerun
    // itself for new classes to be created.
    if (id == "zContent" || id == "zHidden") {
        // zMobVSzWeb function searches for zMob-728="" or zMob-1224="" like custom
        // attributes that are speacial to ultimate Z. this should also need a rerun,
        // because when new elements arrive, they could also have these attributes on them.
        if (window.zAdmin) {
            zTable();
        }
        zAnimate();
        newSystemPre();
        zMobVSzWeb();

        // zDetect function detects "pad-10" or "left-50" like classes and creates them
        // in the head tag, so when we load a new page, we need this function at a rerun.
        // so that the new classes should be created.
        zDetect();
        zTog();
        zRemove();
        zShadow();

        preMagic();
        magic();

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

        // if we have new links on our new page, lets assign them the magicLinks!
        // so that the proccess repeats itself, and no links should be load on itself.
        if (doc.getElementById("zContent").getElementsByTagName("A").length > 0) {
            $("#zContent").find("a").click(magicLinks);
        }
    }
}

// this function determines which tags should be loaded on a new page load.
function updatePage(page_url) {
    if (window.zAdmin) {
        var sideBar = $("#zSidebar");
        var oldPage = sideBar.find("a.color-white");
        var newPage = sideBar.find("a[href='"+page_url+"']");
    }

    $("#zTop").load(page_url + " #zTop > *", function(response) {
        var doc = new DOMParser().parseFromString(response, "text/html");

        // as it turns out, we have zTop, which holds each page's assets,
        // zBottom, which holds if we need some assets at the end,
        // and zContent, which actually holds the page's contents.
        stringHTMLParse(doc, "zTop");
        stringHTMLParse(doc, "zBottom");
        stringHTMLParse(doc, "zPages");
        stringHTMLParse(doc, "zContent", response);

        // update current URL
        window.currentURL = document.location.href.replace(document.location.hash, "").replace("#", "");

        if (window.zAdmin) {
            stringHTMLParse(doc, "zPageTitle");

            var breadcrumb = $("#zContent").find("ol").find("a");

            if (breadcrumb.length) {
                newPage = sideBar.find("a[href='"+breadcrumb.prop("href")+"']");
            }

            if (newPage.next().prop("tagName") !== "UL") {
                oldPage.removeClass("back5 color-white").addClass("zHov-grayBack1 animSlow text4");
                oldPage.find("i").removeClass("whiteText").addClass("text6");
            }

            if (oldPage.next().prop("tagName") == "UL") {
                oldPage.next().find("a.text5").removeClass("text5").addClass("animSlow text4 zHov-text5 zHov-padL-5");
            }

            if (newPage.next().prop("tagName") !== "UL" && newPage.hasClass("blockThis")) {
                newPage.removeClass("zHov-grayBack1 animSlow text4").addClass("back5 color-white");
                newPage.find("i").removeClass("text6").addClass("whiteText");
            } else if (newPage.hasClass("weight-700")) {
                newPage.removeClass("animSlow text4 zHov-text5 zHov-padL-5").addClass("text5");
                var finding = newPage.parent().parent().prev();
                finding.removeClass("zHov-grayBack1 animSlow text4").addClass("back5 color-white");
                finding.find("i").removeClass("text6").addClass("whiteText");
            }

            formButton();
        }

        // when we are done, we can finish the loading and lift it up.
        detectEffect("#zLoad2", "#zLoad1", "after", function() {
            if (typeof window.zLoadAfter == "function") {
                window.zLoadAfter(page_url);
            }
        });
    });
}

// ok, this is where the magic happens.
// when we click on a link, we are redirected to this function.
function magicLinks(event) {
    var before_url = window.location.href;
    // let's get the page url first.
    var page_url = $(this).prop("href");
    // do we have a target?
    var page_target = $(this).prop("target");

    // let's check if this link is an inside-link.
    // which means that the link does not go to an outside website, or
    // it does not open with a new tab normally.
    var checking = page_url &&
    page_url !== "" &&
    !$(this).hasClass("forceLink") &&
    !$(this).attr("href").startsWith("#") &&
    page_target !== "_blank";

    // we did the checking.
    if (checking) {
        // prevent link's normal action.
        event.preventDefault();

        // change the url text on the url bar.
        window.history.pushState({}, "", page_url);

        if (window.zAdmin && $(window).width() < 1200) {
            $(".toggle-sidebar").css("margin-left", "-320px");
        }

        if (typeof window.zLoadPre == "function") {
            window.zLoadPre();
        }

        // now, load the loading page while we are doing all the bad stuff on the background.
        detectEffect("#zLoad1", "#zLoad2", "before", function() {
            (function(next) {
                $("html, body").scrollTop(0);
                if (typeof window.zLoadBefore == "function") {
                    window.zLoadBefore(page_url, event.target, next, before_url);
                } else {
                    next();
                }
            }(function() {
                // that bad stuff starts here.
                updatePage(page_url);
            }));
        });
    }

    // done!
}

function formButton() {
    var scroll = $(window).scrollTop();
    var ButtonPos1 = $(".ButtonPos1");
    var ButtonPos2 = $(".ButtonPos2");

    if (ButtonPos2 && ButtonPos1) {
        if (ButtonPos2.offset() && ButtonPos2.offset().top < (scroll + $(window).height() - ButtonPos2.height())) {
            ButtonPos1.hide();
        } else {
            ButtonPos1.show();
        }
    }
}

$(document).ready(function() {
    // assign each link on the page the magic!
    $("a").click(magicLinks);
    formButton();
    window.currentURL = document.location.href.replace(document.location.hash, "").replace("#", "");
});

$(window).on("load", function () {
    // on page load, we should always lift our loading screen.
    detectEffect("#zLoad0_2", "#zLoad0_1", "after");
});

$(window).on("popstate", function (e) {
    var new_url = document.location.href.replace(document.location.hash, "").replace("#", "");
    if (new_url !== window.currentURL) {
        updatePage(new_url);
    }
});

$(window).scroll(function(){
    formButton();
});

$(window).resize(function(){
    formButton();
});
