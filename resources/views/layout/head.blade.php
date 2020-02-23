

<?php
foreach($site_info as $sitesetting)
?>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="{{$sitesetting->keywords}}">
		<meta name="description" content="{{$sitesetting->description}}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$sitesetting->name_site_ar}}</title>
    <!-- Mobile Metas -->
    <!-- Favicon -->
    <link rel="icon" href="{{url('/')}}/backend/uploads/site_setting/{{$sitesetting->favicon}}" sizes="32x32" />
    <!-- <link rel="icon" href="img/favicon_192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/favicon_180x180.png" />
    <meta name="msapplication-TileImage" content="img/favicon_270x270.png" /> -->
    <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #FFF;
            text-align: center;
        }
        
        .preloader_animation {
            width: 100px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        
        .preloader_animation svg {
            animation: heartbeat 1s infinite;
            fill: var(--theme_color);
        }
        
        @keyframes heartbeat {
            0% {
                transform: scale( .75);
            }
            20% {
                transform: scale( 1);
            }
            40% {
                transform: scale( .75);
            }
            60% {
                transform: scale( 1);
            }
            80% {
                transform: scale( .75);
            }
            100% {
                transform: scale( .75);
            }
        }
    </style>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,600%7CSource+Sans+Pro:300,400,600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet';this.display='swap'">
    <script>
        ! function(n) {
            "use strict";
            n.loadCSS || (n.loadCSS = function() {});
            var o = loadCSS.relpreload = {};
            if (o.support = function() {
                    var e;
                    try {
                        e = n.document.createElement("link").relList.supports("preload")
                    } catch (t) {
                        e = !1
                    }
                    return function() {
                        return e
                    }
                }(), o.bindMediaToggle = function(t) {
                    var e = t.media || "all";

                    function a() {
                        t.addEventListener ? t.removeEventListener("load", a) : t.attachEvent && t.detachEvent("onload", a), t.setAttribute("onload", null), t.media = e
                    }
                    t.addEventListener ? t.addEventListener("load", a) : t.attachEvent && t.attachEvent("onload", a), setTimeout(function() {
                        t.rel = "stylesheet", t.media = "only x"
                    }), setTimeout(a, 3e3)
                }, o.poly = function() {
                    if (!o.support())
                        for (var t = n.document.getElementsByTagName("link"), e = 0; e < t.length; e++) {
                            var a = t[e];
                            "preload" !== a.rel || "style" !== a.getAttribute("as") || a.getAttribute("data-loadcss") || (a.setAttribute("data-loadcss", !0), o.bindMediaToggle(a))
                        }
                }, !o.support()) {
                o.poly();
                var t = n.setInterval(o.poly, 500);
                n.addEventListener ? n.addEventListener("load", function() {
                    o.poly(), n.clearInterval(t)
                }) : n.attachEvent && n.attachEvent("onload", function() {
                    o.poly(), n.clearInterval(t)
                })
            }
            "undefined" != typeof exports ? exports.loadCSS = loadCSS : n.loadCSS = loadCSS
        }("undefined" != typeof global ? global : this);
    </script>
    <!-- Include style -->
    <link rel="stylesheet" href="{{url('/')}}/resources/them/css/style.css">
    <!-- Include owl carousel style -->
    <link rel="stylesheet" href="{{url('/')}}/resources/them/css/owl.carousel.css">
    <!-- Include jquery ui -->
    <link rel="stylesheet" href="{{url('/')}}/resources/them/css/jquery-ui.css">
    <!-- Include font-awesome -->
    <link rel="stylesheet" href="{{url('/')}}/resources/them/css/font-awesome.css">
    <!-- Responsive style -->
    <link rel="stylesheet" href="{{url('/')}}/resources/them/css/responsive.css"> 