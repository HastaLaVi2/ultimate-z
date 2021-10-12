//

function stringHTMLParse(doc, id, response) {
    var element = $(doc.getElementById(id)).html();
    if ($("#"+id).length) {
        $("#"+id).html(element);
    }
    if (id == "zHead") {
        document.title = $(doc.getElementsByTagName("title")[0]).first().text();
    }
    if (id == "zContent") {
        zDetect();
        zMobVSzWeb();
        if (response.includes("zPageJS()") || response.includes("zPageJS ()")) {
            if (zPageJS !== undefined || zPageJS !== null) {
                //setTimeout(function(){
                    zPageJS();
                //}, 500);
            }
        }
        if (doc.getElementById("zContent").getElementsByTagName("A").length > 0) {
            $("#zContent").find("a").click(magicLinks);
        }
    }
}

function magicLinks(event) {
    var page_url = $(this).prop("href");
    var page_target = $(this).prop("target");

    var sideBar = $("#zSidebar");
    var oldPage = sideBar.find("a.color-white");
    var newPage = sideBar.find("a[href='"+page_url+"']");

    var checking = page_url &&
    page_url !== "" &&
    !$(this).hasClass("forceLink") &&
    !$(this).attr("href").startsWith("#") &&
    page_target !== "_blank";

    if (checking) {
        event.preventDefault();

        if ($(window).width() < 1200) {
            $(".toggle-sidebar").css("margin-left", "-320px");
        }

        $("#zLoad1").slideDown(500, function() {
            $("#zLoad2").slideDown(300, function() {
                window.history.pushState({}, "", page_url);
                $("#zHead").load(page_url + " #zHead > *", function(response) {
                    var doc = new DOMParser().parseFromString(response, "text/html");

                    stringHTMLParse(doc, "zHead");
                    stringHTMLParse(doc, "zBottom");
                    stringHTMLParse(doc, "zPageTitle");
                    stringHTMLParse(doc, "zContent", response);

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

                    $("#zLoad2").slideUp(500, function() {
                        $("#zLoad1").slideUp(300);
                    });
                });
            });
        });
    }
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
    $("a").click(magicLinks);
    formButton();
});

$(window).on("load", function () {
    $("#zLoad0_2").slideUp(500, function() {
        $("#zLoad0_1").slideUp(300);
    });
});

$(window).scroll(function(){
    formButton();
});

$(window).resize(function(){
    formButton();
});
