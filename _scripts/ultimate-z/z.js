/*

Welcome to the ultimate Z!

Last update: 8 April 2021

*/

var cssColors = ["aliceblue","antiquewhite","aqua","aquamarine","azure","beige","bisque","black","blanchedalmond","blue","blueviolet","brown","burlywood","cadetblue","chartreuse","chocolate","coral","cornflowerblue","cornsilk","crimson","cyan","darkblue","darkcyan","darkgoldenrod","darkgray","darkgrey","darkgreen","darkkhaki","darkmagenta","darkolivegreen","darkorange","darkorchid","darkred","darksalmon","darkseagreen","darkslateblue","darkslategray","darkslategrey","darkturquoise","darkviolet","deeppink","deepskyblue","dimgray","dimgrey","dodgerblue","firebrick","floralwhite","forestgreen","fuchsia","gainsboro","ghostwhite","gold","goldenrod","gray","grey","green","greenyellow","honeydew","hotpink","indianred","indigo","ivory","khaki","lavender","lavenderblush","lawngreen","lemonchiffon","lightblue","lightcoral","lightcyan","lightgoldenrodyellow","lightgray","lightgrey","lightgreen","lightpink","lightsalmon","lightseagreen","lightskyblue","lightslategray","lightslategrey","lightsteelblue","lightyellow","lime","limegreen","linen","magenta","maroon","mediumaquamarine","mediumblue","mediumorchid","mediumpurple","mediumseagreen","mediumslateblue","mediumspringgreen","mediumturquoise","mediumvioletred","midnightblue","mintcream","mistyrose","moccasin","navajowhite","navy","oldlace","olive","olivedrab","orange","orangered","orchid","palegoldenrod","palegreen","paleturquoise","palevioletred","papayawhip","peachpuff","peru","pink","plum","powderblue","purple","rebeccapurple","red","rosybrown","royalblue","saddlebrown","salmon","sandybrown","seagreen","seashell","sienna","silver","skyblue","slateblue","slategray","slategrey","snow","springgreen","steelblue","tan","teal","thistle","tomato","turquoise","violet","wheat","white","whitesmoke","yellow","yellowgreen"];

/***********************************/
/***** helper basic functions *****/
/*********************************/

/*

this function creates a style tag with a certain,
class and its properties. but it also checks if a style
tag already exists, if so, it appends the css
inside the existing style.

*/

function newStyle(zSelector, inside, pseudo) {
    var css = zSelector + (pseudo ? ":" + pseudo : "" ) + " {" + inside  + "}";
    var newStyle = document.createElement("style");
    var head = document.getElementsByTagName("head")[0];
    var style = head.querySelectorAll("style");

    if (style && style[0]) {
        if (!style[0].innerHTML.includes(css)) {style[0].append(css);}
    } else {
        newStyle.appendChild(document.createTextNode(css));
        head.appendChild(newStyle);
    }
}

function createForVendor(vendor, rest) {
    let final = "";
    if (vendor) {
        if (typeof(vendor) == "object") {
            vendor.forEach(function(ven) {
                final += "-" + ven + "-" + rest;
            })
        } else {
            final += "-" + vendor + "-" + rest;
        }
    }
    return final;
}

function createStyleTag(zClass, property, value, pseudo, vendor) {
    var inside = "";

    if (typeof(property) == "object") {
        property.forEach(function(v, i) {
            inside += createForVendor(vendor, v + ":" + value + " !important" + ";");
            inside += v + ":" + value + " !important" + ";";
        });
    } else {
        inside += createForVendor(vendor, property + ":" + value + " !important" + ";");
        inside += property + ":" + value + " !important";
    }

    if (value) {
        newStyle("." + zClass, inside, pseudo);
    }
}

function style(element, property) {
    return parseFloat(getComputedStyle(element, null)[property].replace("px", ""));
}

/*

get height of a DOM element.

*/

function height(element) {
    if (element) {
        var first = style(element, "height");
        var paddingTop = style(element, "paddingTop");
        var paddingBottom = style(element, "paddingBottom");
        return first - paddingTop - paddingBottom;
    }
}

/*

get width of a DOM element.

*/

function width(element) {
    if (element) {
        var first = style(element, "width");
        var paddingLeft = style(element, "paddingLeft");
        var paddingRight = style(element, "paddingRight");
        return first - paddingLeft - paddingRight;
    }
}

/*

get top and left positions of a DOM element.

*/

function offset(element) {
    if (element) {
        var rect = element.getBoundingClientRect();

        return {
          top: rect.top + document.body.scrollTop,
          left: rect.left + document.body.scrollLeft
        }
    }
}

function hasClass(element, className) {
    return (' ' + element.className + ' ').indexOf(' ' + className+ ' ') > -1;
}

var slug = function(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
    var to   = "aaaaaeeeeeiiiiooooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
    .replace(/\s+/g, '-') // collapse whitespace and replace by -
    .replace(/-+/g, '-'); // collapse dashes

    return str;
}

function detectAfterDash(className, detectClass) {
    let classes = className.split(" ");

    function checkToggle(tog) {
        return tog.startsWith(detectClass + "-");
    }
    let zClass = classes.find(checkToggle);
    let zProperty = zClass.replace(detectClass + "-", "");

    return zProperty;
}

/********************/
/***** zDetect *****/
/******************/

/*

normally, you can specify a certain criteria for classes in the :root,
but other than that you may choose whatever you wish to use for any element.

*/

function detecting(zClass, property, pseudo, vendor) {
    // select all classes starts with "tag".
    var all = document.querySelectorAll("[class*='"+zClass+"-']");
    // start number variable
    var value = null;
    var catchedClass = "";
    var catchedProperty = "";

    // if name is not set, use tag instead,
    // because sometimes they are the same.
    if (!property) {
        property = zClass;
    }

    // start to do the same thing for all classes.
    if (all && all.length > 0) {
        all.forEach(function(v) {
            var sth = v.className.split(" ");
            var repeat = [];

            sth.forEach(function(s) {
                if (s.startsWith(zClass) || s.startsWith("zHov-"+zClass)) {
                    repeat.push(s);
                }
            });

            for (let d = 0; d < repeat.length; d++) {
                var i = repeat[d];

                // defaults
                var minus = false;
                var pseudo = null;
                var dotExists = false;
                var notPx = true;

                if (typeof(i) == "string") {
                    i = i.replace("zHov-", "");

                    /* look for a number value first */

                    // detect if a negative number is being used.
                    if (i.match(zClass+"--")) {i = i.replace(zClass+"--", zClass+"-"); minus = true;}

                    // try to define if another unit besides "px" is being used.
                    // these units could be: em, ex, ch, px, cm, mm, in, pt, pc, vh, vw, rem, vmax and vmin.
                    var value = i.match("(?:^| )"+zClass+"-[0-9]+(?:|_)(?:|[0-9]+)(?:|em|:|ex|:|ch|:|px|:|cm|:|mm|:|in|:|pt|:|pc|:|vh|:|vw|:|rem|:|vmax|:|vmin|:|%)(?:$| )");

                    // check if we have a dot on our number or have a unit other than px
                    if (value && value[0].trim().includes("_")) {dotExists = true}
                    if (value && value[0].trim().match(/[0-9]$/)) {notPx = false}

                    /* look for a color value */

                    // looking for a number so for, but maybe it is a color?
                    if (!value) {value = i.match("(?:^| )"+zClass+"-[a-z]+(?:$| )");}

                    // catched any value yet? remove the spaces.
                    if (value) {value = value[0].replace(/ /g,''); value = value.replace(zClass+"-", "");}

                    /* properties that do not use px */

                    // if catched a color or a z-index value, then notPx is true, because
                    // there should not be a px at the end of a color or a z-index value
                    if (value && (
                        cssColors.includes(value) ||
                        property == "z-index" ||
                        property == "background" ||
                        zClass.startsWith("mortal") ||
                        (typeof(property) == "string" && property.startsWith("transform-")) ||
                        property == "font-weight"))
                        {notPx = true}

                    // remove the prefix, so that we have our value only.
                    if (value) {value = (minus ? "-" : "") + value + (notPx ? "" : "px");}

                    // if zClass has "px" at the end, this is wrong
                    if (value) {catchedClass = zClass + "-" + value.replace(/px$/, "");}

                    // replace all "_" with "."
                    if (value && dotExists) {value = value.replace("_", ".");}

                    // mortals (transparent backgrounds and colors)
                    if (value && zClass.startsWith("mortal") && zClass.endsWith("W")) {value = "rgba(255, 255, 255, 0."+value+")"}
                    if (value && zClass.startsWith("mortal") && zClass.endsWith("B")) {value = "rgba(0, 0, 0, 0."+value+")"}

                    // text & box shadows
                    if (value && zClass == "Tshaw") {value = "0 0 "+value+" rgba(0,0,0,0.35)"}
                    if (value && (zClass == "superow")) {value = "0 0 "+value+" rgba(0,0,0,1)"}
                    if (value && (zClass == "shadow")) {value = "0 0 "+value+" rgba(0,0,0,1)"}

                    // detect if zHov is used.
                    if (repeat[d].includes("zHov-" + catchedClass)) {pseudo = "hover"; catchedClass = "zHov-" + catchedClass;}

                    // filters
                    if (value && typeof(property) == "string" && property.startsWith("filter-")) {
                        value = property.replace("filter-", "") + "(" + value + ")";catchedProperty = "filter"
                    }
                    // transforms
                    if (value && typeof(property) == "string" && property.startsWith("transform-")) {
                        value = property.replace("transform-", "") + "(" + value + "deg)";catchedProperty = "transform"
                    }

                    if (catchedProperty == "") {catchedProperty = property}

                    // finally, set the style
                    createStyleTag(catchedClass, catchedProperty, value, pseudo, vendor);
                }
            }
        });
    }
}

function zBetween() {
    var between = document.querySelectorAll("[class*=between-]");

    between.forEach(function(value) {
        let zProperty = detectAfterDash(value.className, "between");
        let children = Array.from(value.children);

        if (children[0]) {
            children[0].style.marginTop = 0;
        }

        children.shift();

        children.forEach(function(value) {
            value.style.marginTop = zProperty + "px";
        });
    });

    var betwixt = document.querySelectorAll("[class*=betwixt-]");

    betwixt.forEach(function(value) {
        let zProperty = detectAfterDash(value.className, "betwixt");
        let children = Array.from(value.children);
        let widthAll = width(value);
        let childAll = [];

        children.forEach(function(value) {
            value.style.paddingLeft = zProperty + "px";
            value.style.paddingRight = zProperty + "px";
            childAll.push(width(value));
        });

        function betRepeat(w, a, c, i) {
            while (w < a) {
                w += c[i];
                i++;
            }
            if (children[i-1] && i-1 !== 0) {
                children[i-1].style.paddingLeft = 0;
            }
            if (children[i-2] && i-2 !== 0) {
                children[i-2].style.paddingRight = 0;
            }
            if (c[i]) {
                betRepeat(0, a, c, i-1);
            }
        }

        betRepeat(0, widthAll, childAll, 0);

        if (children[0]) {
            children[0].style.paddingLeft = 0;

            if (width(children[0]) == (widthAll - zProperty)) {
                children[0].style.paddingRight = 0;
            }
        }

        if (children[children.length - 1]) {
            if (width(children[children.length - 1]) == (widthAll - zProperty)) {
                children[children.length - 1].style.paddingRight = 0;
            } else {
                children[children.length - 1].style.paddingRight = zProperty + "px";
            }
        }
    });
}

function zDetect() {
    var allCol = document.querySelectorAll("[class*=col-]");
    allCol.forEach(function(value) {
        value.parentElement.classList.add("font0");
    });
    var zallCol = document.querySelectorAll("[class*=zCol-]");
    zallCol.forEach(function(value) {
        value.parentElement.classList.add("font0");
    });
    var inLine = document.querySelectorAll(".inLine");
    inLine.forEach(function(value) {
        value.parentElement.classList.add("font0");
    });
    detecting("font", "font-size");
    detecting("color");
    detecting("mortalTextW", "color");
    detecting("mortalTextB", "color");
    detecting("mortalW", "background-color");
    detecting("mortalB", "background-color");
    detecting("back", "background");
    detecting("pad", "padding");
    detecting("padT", "padding-top");
    detecting("padB", "padding-bottom");
    detecting("padL", "padding-left");
    detecting("padR", "padding-right");
    detecting("padTB", ["padding-top", "padding-bottom"]);
    detecting("padLR", ["padding-left", "padding-right"]);
    detecting("top", "margin-top");
    detecting("bottom", "margin-bottom");
    detecting("left", "margin-left");
    detecting("right", "margin-right");
    detecting("height");
    detecting("minH", "min-height");
    detecting("width");
    detecting("minW", "min-width");
    detecting("square", ["height", "width"]);
    detecting("boldMin", "border-width");
    detecting("rad", "border-radius");
    detecting("rad", "border-radius", "before");
    detecting("rad-l", ["border-top-left-radius", "border-bottom-left-radius"]);
    detecting("rad-l", ["border-top-left-radius", "border-bottom-left-radius"], "before");
    detecting("rad-r", ["border-top-right-radius", "border-bottom-right-radius"]);
    detecting("rad-r", ["border-top-right-radius", "border-bottom-right-radius"], "before");
    detecting("rad-t", ["border-top-right-radius", "border-top-left-radius"]);
    detecting("rad-t", ["border-top-right-radius", "border-top-left-radius"], "before");
    detecting("rad-b", ["border-bottom-right-radius", "border-bottom-left-radius"]);
    detecting("rad-b", ["border-bottom-right-radius", "border-bottom-left-radius"], "before");
    detecting("rad-c1", "border-top-left-radius");
    detecting("rad-c1", "border-top-left-radius", "before");
    detecting("rad-c2", "border-top-right-radius");
    detecting("rad-c2", "border-top-right-radius", "before");
    detecting("rad-c3", "border-bottom-left-radius");
    detecting("rad-c3", "border-bottom-left-radius", "before");
    detecting("rad-c4", "border-bottom-right-radius");
    detecting("rad-c4", "border-bottom-right-radius", "before");
    detecting("index", "z-index");
    detecting("weight", "font-weight");
    detecting("Tshaw", "text-shadow");
    detecting("superow", "box-shadow");
    detecting("shadow", "box-shadow");
    detecting("blur", "filter-blur", null, "o");
    detecting("rotate", "transform-rotate");
    zBetween();

    var allSqu = document.querySelectorAll(".specSquare");
    allSqu.forEach(function(value) {
        var ourWidth = width(value);
        value.style.cssText = value.style.cssText + "height: " + ourWidth + "px;";
    });
    var widthRest = document.querySelectorAll(".widthRest");
    widthRest.forEach(function(value) {
        var prev = width(value.previousElementSibling);
        var parent = width(value.parentNode);
        value.style.cssText = value.style.cssText + "width:" + (parent-prev) + "px";
    });
}

/*****************/
/***** zMob *****/
/***************/

/*

zMob extension will let you use any class inside the ultimate z
on the mobile version of your webpage.

note: the default mobile version width normally is 1024px.

*/

function versus(tag1, tag2, condition) {
    var all = document.querySelectorAll("[class*='"+tag1+"-']");

    all.forEach(function(vLev1, kLev1) {
        if (condition) {
            // get the class names
            var getAllClass = vLev1.className.split(" ");

            // time to check if they are for mobile and add them
            getAllClass.forEach(function(vLev2, kLev2) {
                if (vLev2.includes(tag1+"-")) {
                    var prevClass = getAllClass[kLev2-1];
                    var className = vLev2.replace(tag1+"-", "");
                    var nextClass = tag2+"-"+prevClass

                    // remove the old classes and add the new ones
                    vLev1.classList.remove(prevClass);
                    vLev1.classList.remove(vLev2);
                    vLev1.classList.add(className);
                    vLev1.classList.add(nextClass);
                }
            });
        }
    });
}

// this is to find an attribute name starts with "..."
const attrStartsWith = (sel, str) => [...document.querySelectorAll(sel)]
    .filter(ele => [...ele.attributes]
        .filter(({name}) => name.startsWith(str))
        .length > 0
    )

// we have a new zMob system now!
function newSystemPre() {
    // this is here, because we do not want to type "zMob" word as it is
    var zMob = "zMob-".toLowerCase();
    // get all elements that have any zMob attribute on them to start the proccess
    var newSystem = attrStartsWith("*", zMob);
    newSystem.forEach(function(value) {
        // get the current classes:
        var allClasses = value.getAttribute("class") ? value.getAttribute("class") : [];

        // assign them to a new attribute named "zWeb",
        // which we will be using later
        value.setAttribute("zWeb", allClasses);
    });
}

// sort an array of arrays by the children arrays' first element
function sortByFirst(a, b) {
    if (a[0] === b[0]) {
        return 0;
    }
    else {
        return (a[0] < b[0]) ? -1 : 1;
    }
}

// serach the array for a string, and if found, return its index
function findIn(t, z) {
    if (t) {
        return t.findIndex((wClass) => {return typeof(wClass) == "string" ? wClass.startsWith(z) : null}, z);
    } else {
        return null
    }
}

// real zMob function to work with
function zMobVSzWeb() {
    // let's get the window witdh
    var winW = window.innerWidth;
    // this is here, because we do not want to type "zMob" word as it is
    var zMob = "zMob-".toLowerCase();

    // get all elements that have any zMob attribute on them to start the proccess
    var newSystem = attrStartsWith("*", zMob);
    newSystem.forEach(function(value, key) {
        // create levels array
        var zLevels = [];

        // we should store the web classes to compare
        if (value.getAttribute("zWeb")) {
            var zWeb = value.getAttribute("zWeb").trim().split(" ");
        }

        // extort the attribute names
        var allAttr = value.getAttributeNames();

        allAttr.forEach(function(vAttr, kAttr) {
            // if we have "zMob" in the attribute name, continue
            if (vAttr.includes(zMob)) {
                // create an array of classes with the zMob-[number] attribute
                var newMob = value.getAttribute(vAttr).trim().split(" ");
                // insert the number at the beginning of the array
                newMob.unshift(parseInt(vAttr.replace(zMob, "")));
                // insert our array to the zLevels
                zLevels.push(newMob);
            }
        });

        // check which classes we currently have on the element
        var alreadyClasses = value.getAttribute("class") ? value.getAttribute("class").trim().split(" ") : [];
        // sort zLevels by their window sizes, because the first element
        // in the arrays are the window sizes
        zLevels.sort(sortByFirst);

        // start the loop
        for (const [i, v] of zLevels.entries()){
            // get a copy of zMob classes
            var classes = [...v];
            // remove the first item, because it is the window size
            classes.shift();
            for (const [iCla, vCla] of classes.entries()) {
                // get the class name and "-" after, because all zClasses have "-" before their value
                var zClass = vCla.substr(0, vCla.indexOf("-")) + "-";
                // check if the same type of class exists on our element already
                // for example, if we have pad-10 in our element and our zMob class is pad-20
                // we should remove pad-10 and add pad-20 instead
                var result = findIn(alreadyClasses, zClass);
                var esult = findIn(zLevels[i-1], zClass);
                // these are the catches of the system,
                // when we have multiple zMob attributes, we should always check
                // the upper or below stage classes to see if they have the same
                // type of zClasses on them
                if (zLevels[i-1] && winW <= zLevels[i-1][0] && zLevels[i-1][esult]) {}
                // here we can set and remove classes
                else {
                    if (winW <= v[0]) {
                        // if our window width smaller than our zMob's window width
                        if (alreadyClasses[result]) {
                            value.classList.remove(alreadyClasses[result]);
                        }
                        value.classList.add(vCla);
                    } else if (winW > zLevels[zLevels.length - 1][0]) {
                        // if we are not under any obligation of a zMob,
                        // go back to the things they were
                        if (zWeb) {
                            value.setAttribute("class", zWeb.join(" "));
                        }
                    } else {
                        value.classList.remove(vCla);
                    }
                }
            }
        }
    });

    // these are for the old times
    versus("zMob768", "zWeb768", winW <= 768);
    versus("zWeb768", "zMob768", winW > 768);
    versus("zMob990", "zWeb990", winW <= 990);
    versus("zWeb990", "zMob990", winW > 990);
    versus("zMob", "zWeb", winW <= 1024);
    versus("zWeb", "zMob", winW > 1024);
    versus("zMob1200", "zWeb1200", winW <= 1200);
    versus("zWeb1200", "zMob1200", winW > 1200);
}

/***********************/
/***** LITTLE BOX *****/
/*********************/

// this function creates a new magical scrollbar,
// which we will use on every page
function preMagic() {
    var insideScroll = "";
    var magicObj = document.getElementById("littleBox");

    if (magicObj) {
        if(document.getElementById("benFirst")) {} else {insideScroll = insideScroll + "<div id='benFirst'></div>";}
        if(document.getElementById("ben")) {} else {insideScroll = insideScroll + "<div id='ben'></div>";}
        if(document.getElementById("benSecond")) {} else {insideScroll = insideScroll + "<div id='benSecond'></div>";}

        var littleToggle = document.getElementById("littleToggle");
        var prevHtml = magicObj.innerHTML;
        magicObj.innerHTML = prevHtml + insideScroll;
    }
}

function magic() {
    // current top position of the page
    var pTop = window.pageYOffset;
    // let's find out height of the scrollbar for the current screen
    var magicObj = document.getElementById("littleBox");
    var litBoxHeight = height(magicObj);
    // this is to calculate the whole height of the document
    // minus the "litBoxHeight" is because, when we use the height()
    // function, it gives us the number all the way from top
    // of the page to the bottom, but we are making a calculation
    // based on the top position, so we need to minus one window height
    var pHeight = height(document.documentElement) - window.innerHeight;
    // this number can change, it is the thumb
    var straw = 70;
    // this is the line before the straw
    var firstLine = (pTop * (litBoxHeight - straw)) / pHeight;
    // this is the line after the straw
    var secondLine = (litBoxHeight - straw) - firstLine;

    if (firstLine <= 0) {firstLine = 0}
    if (secondLine <= 0) {secondLine = 0}

    if (magicObj) {
        // now, time to change all the css codes
        document.getElementById("benFirst").style.height = firstLine+"px";
        document.getElementById("ben").style.height = straw-20+"px";
        document.getElementById("benSecond").style.height = secondLine+"px";
        var littleToggle = document.getElementById("littleToggle")
        if (littleToggle) {
            var padding = style(magicObj, "paddingTop");
            var he = height(document.getElementById("ben"))/2;
            littleToggle.style.right = window.innerWidth - offset(magicObj).left + 10 + "px";
            littleToggle.style.top = firstLine+padding+he+"px";
        }
    }
}

/********************/
/***** zToggle *****/
/******************/

function slideToggle(t, e, o) {
    0 === t.clientHeight ? j(t, e, o, !0) : j(t, e, o)
}

function slideUp(t, e, o) {
    j(t, e, o)
}

function slideDown(t, e, o) {
    j(t, e, o, !0)
}

function j(t, e, o, i) {
    void 0 === e && (e = 400), void 0 === i && (i = !1), t.style.overflow = "hidden", i && (t.style.display = "block");
    var p, l = window.getComputedStyle(t),
        n = parseFloat(l.getPropertyValue("height")),
        a = parseFloat(l.getPropertyValue("padding-top")),
        s = parseFloat(l.getPropertyValue("padding-bottom")),
        r = parseFloat(l.getPropertyValue("margin-top")),
        d = parseFloat(l.getPropertyValue("margin-bottom")),
        g = n / e,
        y = a / e,
        m = s / e,
        u = r / e,
        h = d / e;
    window.requestAnimationFrame(function l(x) {
        void 0 === p && (p = x);
        var f = x - p;
        i ? (t.style.height = g * f + "px", t.style.paddingTop = y * f + "px", t.style.paddingBottom = m * f + "px", t.style.marginTop = u * f + "px", t.style.marginBottom = h * f + "px") : (t.style.height = n - g * f + "px", t.style.paddingTop = a - y * f + "px", t.style.paddingBottom = s - m * f + "px", t.style.marginTop = r - u * f + "px", t.style.marginBottom = d - h * f + "px"), f >= e ? (t.style.height = "", t.style.paddingTop = "", t.style.paddingBottom = "", t.style.marginTop = "", t.style.marginBottom = "", t.style.overflow = "", i || (t.style.display = "none"), "function" == typeof o && o()) : window.requestAnimationFrame(l)
    })
}

function zTogglePath(path) {
    let sidebarItems = document.querySelectorAll("[class*=zTog"+(path ? path : "")+"-]");
    for (var i = 0; i < sidebarItems.length; i++) {
        let sidebarItem = sidebarItems[i];
        let zProperty = detectAfterDash(sidebarItem.className, "zTog"+(path ? path : ""));

    	sidebarItem.addEventListener("click", function(e) {
            e.preventDefault();

            let submenu = document.querySelectorAll(".zShow-" + zProperty);
            submenu.forEach(function(menu) {
                if (path && path == "Down") {
                    slideToggle(menu, 300);
                } else {
                    menu.classList.toggle("displayNone");
                }

            });
        })
    }
}

function zTog() {
    zTogglePath();
    zTogglePath("Down");
}

/********************/
/***** zRemove *****/
/******************/

function zRemove() {
    let removeItems = document.querySelectorAll("[class*=zRemove-]");
    for (var i = 0; i < removeItems.length; i++) {
        let removeItem = removeItems[i];
        let zProperty = detectAfterDash(removeItem.className, "zRemove");

    	removeItem.addEventListener("click", function(e) {
            e.preventDefault();

            let removingItem = document.querySelectorAll(".zDestroy-" + zProperty);
            removingItem.forEach(function(item) {
                item.remove();
            });
        })
    }
}

/***********************************/
/***** run the magical things *****/
/*********************************/

document.addEventListener('touchmove', function(event) {
        event.preventDefault();
    },
    false
);

document.addEventListener('DOMContentLoaded', function(event) {
    newSystemPre();
    zMobVSzWeb();
    zDetect();
    zTog();
    zRemove();
    preMagic();
    magic();
});

document.addEventListener("scroll", function(event) {
    var scroll = window.pageYOffset;

    if (scroll > window.lastScrollTop){
        window.calc = 1;
    } else {
        window.calc = -1;
    }
    window.lastScrollTop = scroll;

    magic();
});

window.addEventListener("resize", function(event) {
    zMobVSzWeb();
    zDetect();
    magic();
});
