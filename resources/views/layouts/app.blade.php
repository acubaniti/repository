<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>tling 0.1</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <audio id="myAudio">
         <source src="https://freesound.org/data/previews/321/321807_2567799-lq.mp3" type="audio/mpeg">
    </audio>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script> 
    <script src="{{ asset('js/socket.io.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/app.js') }}"></script> 

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .logo {    padding: 0;
            padding-top: 2px;
    padding-left: 15px;
    }
    .collapse .navbar-collapse {
        background: #0f0f0f;
    }
    .logo {    padding: 0;
    padding-left: 15px;
    }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand logo" href="{{ url('/') }}">
                     <div style="width:14.3vh;">
                    <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"   
     viewBox="0 0 182.7 129.8" style="enable-background:new 0 0 182.7 129.8;" xml:space="preserve">
<style type="text/css">
    .st0{fill:url(#SVGID_1_);}
    .st1{fill:url(#SVGID_2_);}
    .st2{fill:url(#SVGID_3_);}
    .st3{fill:url(#SVGID_4_);}
    .st4{fill:url(#SVGID_5_);}
    .st5{fill:url(#SVGID_6_);}
    .st6{fill:url(#SVGID_7_);}
    .st7{fill:url(#SVGID_8_);}
</style>
<g>
    <g>
        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="8.1901" y1="20.7525" x2="110.7351" y2="20.7525">
            <stop  offset="0" style="stop-color:#4D0D6E"/>
            <stop  offset="5.604242e-02" style="stop-color:#590777"/>
            <stop  offset="0.1403" style="stop-color:#63027F"/>
            <stop  offset="0.2426" style="stop-color:#660081"/>
            <stop  offset="0.4024" style="stop-color:#690181"/>
            <stop  offset="0.5073" style="stop-color:#710380"/>
            <stop  offset="0.5964" style="stop-color:#80067F"/>
            <stop  offset="0.6767" style="stop-color:#960B7E"/>
            <stop  offset="0.751" style="stop-color:#B1117D"/>
            <stop  offset="0.82" style="stop-color:#D2187B"/>
            <stop  offset="0.8663" style="stop-color:#ED1E79"/>
            <stop  offset="0.8902" style="stop-color:#F25474"/>
            <stop  offset="0.9184" style="stop-color:#F68D6E"/>
            <stop  offset="0.9445" style="stop-color:#FABB6A"/>
            <stop  offset="0.9676" style="stop-color:#FDDB67"/>
            <stop  offset="0.9869" style="stop-color:#FEEF65"/>
            <stop  offset="1" style="stop-color:#FFF664"/>
        </linearGradient>
        <path class="st0" d="M110.7,25.1c0,0.7-0.3,1.9-2.5,2.5c-0.5,0.1-1.1,0.2-1.6,0.2c-4.2,0.2-7.8,0.5-10.8,0.8
            c-8.6,0.9-17.4,0.8-26,1.1c-11.3,0.4-22.6,1.5-33.9,1.5C26.9,31.2,9.2,32,8.2,19c-0.2-2.6,0.5-5.6,2.3-7.6
            c1.4-1.5,3.8-1.4,5.5-0.6c3.5,1.7,6.6,3.5,10.3,4.6c4.2,1.2,8.5,2.2,13,2.9c4.5,0.7,9,1.3,13.4,1.7c3.3,0.3,41.9,1.5,44.8,1.7
            c1,0.1,2.1,0.1,3.1,0.2c1.5,0.1,3.1,0.2,4.6,0.3l0.6,0.1c0.9,0.1,2,0.2,3,0.5C110.6,23.5,110.7,24.7,110.7,25.1z"/>
    </g>
    <g>
        <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="47.4924" y1="68.4063" x2="13.768" y2="21.9887">
            <stop  offset="0.2426" style="stop-color:#660081"/>
            <stop  offset="0.8663" style="stop-color:#ED1E79"/>
            <stop  offset="0.8902" style="stop-color:#F25474"/>
            <stop  offset="0.9184" style="stop-color:#F68D6E"/>
            <stop  offset="0.9445" style="stop-color:#FABB6A"/>
            <stop  offset="0.9676" style="stop-color:#FDDB67"/>
            <stop  offset="0.9869" style="stop-color:#FEEF65"/>
            <stop  offset="1" style="stop-color:#FFF664"/>
        </linearGradient>
        <path class="st1" d="M60.9,10.8c0,0.9-0.3,2.6-2.6,3.5c-0.9,0.4-1.9,0.9-3.2,1.6c-1.3,0.7-2.6,1.5-4,2.4l-4.2,2.8
            c-1.4,0.9-2.5,1.7-3.4,2.3c-4.1,3.4-8.5,8-13.1,13.8c-4.6,5.8-8.9,13.5-12.8,22.9c-0.6,1.8-1.3,3.7-1.9,5.6
            c-0.6,1.8-1,3.4-1.2,4.8c-0.1,1.2,0,1.8,0.1,2l0.1,0.1c0.5,0.2,1.3,0.2,2.2,0c1.2-0.3,2.4-0.8,3.6-1.4c1.3-0.7,2.5-1.5,3.7-2.3
            c1.2-0.8,2.2-1.6,3-2.2l0.2-0.2l0.2-0.1c0.5-0.2,0.7-0.4,0.7-0.4l0.4-0.4c1.5-1.3,2.9-2.9,4.4-4.6c1.5-1.8,2.7-3.3,3.6-4.4
            l0.2-0.2c0.3-0.3,0.8-0.7,1.5-1.3c0.7-0.6,2-1.2,3.8-0.9l0.4,0.1c0.7,0.2,1.3,0.6,1.8,1.1l0.2,0.2c1.4,1.9-0.1,4.4-0.7,5.4
            l-0.1,0.1L41,65.4c-1,1.6-2.2,3.2-3.4,4.9c-0.3,0.5-0.8,1.4-2.5,3.6c-1.3,1.9-3.2,4.1-5.4,6.5c-2.3,2.5-4.9,4.7-7.7,6.4
            c-1.3,0.8-2.9,1.6-4.8,2.2c-1.7,0.5-3.4,0.8-5,0.8c-1.1,0-2.1-0.1-3.1-0.4c-1.5-0.2-3-0.9-4.3-2c-2.9-2.3-3.9-6.7-4.2-8.5
            C-0.1,76-0.1,73,0.2,70.1c0.3-2.9,0.8-5.5,1.5-7.7c0.3-1,0.8-2.7,1-3.6c0-0.4,0.1-0.7,0.3-1c0.9-3.3,2.2-6.1,3.8-9.6
            c0.3-0.7,0.6-1.4,1-2.2c2.1-4.6,4.6-9.4,7.4-14.2c2.8-4.8,5.9-9.4,9.1-13.6c3.3-4.3,6.6-8,10-10.9c3.5-3,6.9-5.1,10.4-6.3
            c3.8-1.3,7.3-0.9,10.5,1c0.8,0.5,1.5,1,2.2,1.7c1.2,1.2,2.3,2.8,3.2,4.8C60.8,9,60.9,9.7,60.9,10.8z"/>
    </g>
    <g>
        <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="79.9583" y1="68.7385" x2="45.4014" y2="21.1751">
            <stop  offset="0.2426" style="stop-color:#660081"/>
            <stop  offset="0.8663" style="stop-color:#ED1E79"/>
            <stop  offset="0.8902" style="stop-color:#F25474"/>
            <stop  offset="0.9184" style="stop-color:#F68D6E"/>
            <stop  offset="0.9445" style="stop-color:#FABB6A"/>
            <stop  offset="0.9676" style="stop-color:#FDDB67"/>
            <stop  offset="0.9869" style="stop-color:#FEEF65"/>
            <stop  offset="1" style="stop-color:#FFF664"/>
        </linearGradient>
        <path class="st2" d="M92.4,10.8c0,0.9-0.4,2.6-2.8,3.5c-1.4,0.7-3.7,1.8-6.7,3.5c-1.4,0.8-2.9,1.8-4.5,3c-1.8,1.3-3.6,2.9-5.6,4.7
            c-1.3,1.2-2.5,2.5-3.8,3.9c-2.6,2.8-5.2,6.1-7.9,9.8c-4,5.6-7.7,12.6-11,21c-0.6,1.7-1.3,3.6-1.8,5.6c-0.6,1.8-0.9,3.4-1,4.7
            l0,0.2c-0.3,1.5,0,1.9,0,2c1.7,0.6,3.4,0.3,5.3-0.8c2.3-1.3,4.2-2.6,5.5-3.8c1.8-1.6,3.4-2.3,5-2.2c1.5,0.1,2.7,0.6,3.7,1.6
            c0.9,0.9,1.4,1.9,1.7,3c0.3,1.4,0.2,2.5-0.4,3.4c-1.4,2-3.3,4.2-5.5,6.7c-2.3,2.5-4.9,4.6-7.7,6.3c-1.5,1-3.2,1.8-4.9,2.2
            c-1.6,0.5-3.2,0.8-4.8,0.8c-1.1,0-2.1-0.1-3.2-0.4c-1.6-0.3-3-1-4.1-2.1c-2.2-1.8-3.6-4.3-4.2-7.5c-0.5-2.9-0.6-5.8-0.4-8.8
            c0.2-2.9,0.6-5.5,1.3-7.8c0.3-1,0.8-2.7,1-3.6c0-0.6,0.3-1,0.6-1.4c1.2-5.2,2.8-10.1,4.7-14.6c1.9-4.5,3.7-8.4,5.3-11.6l0.1-0.3
            l0.2-0.2c0.2-0.4,0.5-0.8,0.7-1.3c1.8-3,3.9-6.4,6.3-10c0.1-0.2,0.3-0.4,0.4-0.5c2.8-4.1,5.9-7.8,9.2-11c3.5-3.5,7.2-6.1,11-7.7
            c4.2-1.8,8.3-1.5,12.2,0.8c0.8,0.5,1.5,1,2.2,1.7l0.1,0.1c1,1.2,2.1,2.7,3.2,4.5L92,8.4C92.3,9,92.4,9.7,92.4,10.8z"/>
    </g>
    <g>
        <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="85.2301" y1="77.4679" x2="61.1999" y2="44.3932">
            <stop  offset="0.2426" style="stop-color:#660081"/>
            <stop  offset="0.8663" style="stop-color:#ED1E79"/>
            <stop  offset="0.8902" style="stop-color:#F25474"/>
            <stop  offset="0.9184" style="stop-color:#F68D6E"/>
            <stop  offset="0.9445" style="stop-color:#FABB6A"/>
            <stop  offset="0.9676" style="stop-color:#FDDB67"/>
            <stop  offset="0.9869" style="stop-color:#FEEF65"/>
            <stop  offset="1" style="stop-color:#FFF664"/>
        </linearGradient>
        <path class="st3" d="M96.9,58.1c-0.1,0.8-0.6,1.7-1.4,2.7c-0.5,0.9-1.3,2.1-2.5,3.8c-1.2,1.7-2.7,3.6-4.4,5.8
            c-1.7,2.2-3.6,4.4-5.6,6.7c-2,2.3-4.1,4.4-6.3,6.3c-0.3,0.3-0.6,0.6-1,0.8c-1.5,1.4-3.3,2.6-5.3,3.3c-1.6,0.6-3.2,0.9-4.6,0.9
            c-0.6,0-1.1,0-1.6-0.1l-0.2,0c-1.3-0.3-2.4-0.8-3.3-1.4c-1-0.6-1.7-1.4-2.3-2.3c-1.3-1.8-1.9-3.9-1.9-6.2c0-2,0.1-3.5,0.4-4.7
            v-1.1c0-0.6,0.1-1.3,0.3-1.9c0.1-0.5,0.3-1,0.4-1.3c0.6-1.9,1.4-4.1,2.5-6.3c3.7-8.9,8.5-17.8,14.3-26.4c0.3-0.6,0.7-1.2,1.2-1.8
            c0.3-0.3,0.5-0.7,0.7-1.1l0.2-0.3l0.2-0.2c0.3-0.3,0.7-0.7,1.2-1.1c1-0.9,2.4-1.1,3.7-0.5c1.5,0.7,2.7,1.5,3.8,2.5
            c1.1,1.1,1.8,2.5,2.2,4.1c0.2,0.6,0.2,1.4,0.1,2.6c-0.2,1.1-0.7,2.5-1.7,4l-4.4,7.9c-1.4,2.6-2.7,5.2-3.9,7.8
            c-0.2,0.7-0.5,1.4-0.6,2c-0.2,0.6-0.4,1.3-0.6,1.9c-0.1,0.5-0.2,0.8-0.4,1.1C76,66.1,76,66.3,76,66.4c0,0.7-0.1,1.3-0.3,1.9v0
            c0.4-0.1,0.8-0.3,1.3-0.6c1.5-0.9,3-2,4.5-3.3c1.5-1.4,2.9-2.9,4.2-4.4c1.3-1.6,2.3-2.7,2.8-3.4c0.5-0.7,1.3-1.3,2.1-1.9
            c1.1-0.6,2.3-0.9,3.7-0.7l0.4,0.1c1.1,0.4,1.7,1.1,1.9,1.6C96.9,56.5,97,57.2,96.9,58.1z"/>
    </g>
    <g>
        <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="96.9967" y1="29.1885" x2="86.2836" y2="14.4432">
            <stop  offset="0.2426" style="stop-color:#660081"/>
            <stop  offset="0.5149" style="stop-color:#ED1E79"/>
            <stop  offset="0.8432" style="stop-color:#F9B36A"/>
            <stop  offset="1" style="stop-color:#FFF664"/>
        </linearGradient>
        <path class="st4" d="M103.3,21.6c-0.8,1.8-2.1,3.5-3.9,5.3c-1.7,1.7-3.5,3.2-5.4,4.4c-2,1.3-4,2.1-5.9,2.3c-0.3,0-0.5,0.1-0.8,0.1
            c-2.2,0-3.9-1.3-4.4-3.7c-0.5-2-0.6-3.8-0.5-5.7c0.1-1.6,0.4-3.2,0.9-4.9c0.5-2,1.7-3.8,3.4-5.2c1.7-1.5,3.7-2.3,5.9-2.4
            c2.1-0.1,4,0.2,5.7,1c1.8,0.7,3.3,1.8,4.3,3.3C103.9,17.7,104.1,19.7,103.3,21.6z"/>
    </g>
    <g>
        <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="128.9483" y1="84.321" x2="94.5701" y2="37.0034">
            <stop  offset="0.2426" style="stop-color:#660081"/>
            <stop  offset="0.8663" style="stop-color:#ED1E79"/>
            <stop  offset="0.8902" style="stop-color:#F25474"/>
            <stop  offset="0.9184" style="stop-color:#F68D6E"/>
            <stop  offset="0.9445" style="stop-color:#FABB6A"/>
            <stop  offset="0.9676" style="stop-color:#FDDB67"/>
            <stop  offset="0.9869" style="stop-color:#FEEF65"/>
            <stop  offset="1" style="stop-color:#FFF664"/>
        </linearGradient>
        <path class="st5" d="M146.7,61.1c-1.6,2.6-3.8,5.8-6.4,9.6c-2.6,3.9-5.4,7.4-8.3,10.5l-1.3,1.3c-0.3,0.3-0.7,0.7-1.2,1.1
            c-0.4,0.4-0.8,0.7-1,0.9l-0.3,0.2c-1.4,1-3.1,1.9-5,2.7c-2.1,0.9-4.5,1-6.9,0.4c-2.5-0.7-4.4-2.1-5.6-4.1l-0.1-0.3
            c-0.3-0.8-0.6-1.9-0.9-3.4l0-0.4c0-0.1,0-0.4-0.2-1.9c-0.2-1.3-0.1-3,0.2-5c0.3-2,0.8-4.3,1.7-7.1c0.7-2.4,1.8-5.1,3.2-8.1
            c-1,1-2.1,2.3-3.3,3.7c-2,2.5-4.2,5.6-6.5,9.3c-2.3,3.7-4.5,7.9-6.8,12.6c-1,3-2.9,4.3-4.4,4.9c-0.7,0.4-1.7,0.6-3,0.6l-0.2,0
            c-1.8-0.1-4.4-1.1-6-5c-1.1-2.8-1.4-6.3-0.6-11c0.2-2.5,0.8-5.5,1.9-8.8c0.3-0.8,0.6-1.7,0.9-2.6c0.3-0.8,0.6-1.7,0.8-2.5l0.1-0.2
            c1.5-3.8,3.1-7.5,4.9-11.1c1.7-3.6,3.6-7.2,5.5-10.7l1.8-3c0.3-0.5,0.7-1,1.4-1.5c0.9-0.8,2.1-1,3.3-0.7h0.3l0.4,0.2
            c1.4,0.6,2.8,1.5,4.1,2.7c1.5,1.3,2.4,2.8,3,4.4c0.2,0.6,0.3,1.4,0.2,2.5c-0.1,1.2-0.5,2.5-1.3,4c-0.2,0.3-0.3,0.6-0.5,0.9
            c1.2-1.4,2.3-2.7,3.5-4c3-3.2,6-5.8,8.9-7.8c3.3-2.2,6.5-3.1,9.6-2.8c1.8,0.2,3.1,1.1,3.9,2.6l0,0.1c0.6,1.1,0.8,2.7,0.7,4.7
            c-0.1,1.9-0.8,4.5-2.3,7.8c-2.3,5.2-4.2,10.9-6.2,18.5l-0.1,0.4c-0.1,0.4-0.4,1.3-0.3,1.8c0.2-0.1,0.5-0.2,0.8-0.3
            c1.1-0.6,2.3-1.6,3.6-2.8c1.3-1.3,2.6-2.6,3.7-4c1.2-1.5,2.2-2.7,3-3.7l0.2-0.2c0.3-0.3,0.8-0.7,1.5-1.3c0.7-0.6,2-1.2,3.8-0.9
            l0.4,0.1c0.7,0.2,1.3,0.6,1.8,1.1l0.2,0.2C148.8,57.6,147.3,60.1,146.7,61.1z"/>
    </g>
    <g>
        <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="156.7501" y1="77.0866" x2="156.6579" y2="76.9598">
            <stop  offset="0.2426" style="stop-color:#660081"/>
            <stop  offset="0.8663" style="stop-color:#ED1E79"/>
            <stop  offset="0.8902" style="stop-color:#F25474"/>
            <stop  offset="0.9184" style="stop-color:#F68D6E"/>
            <stop  offset="0.9445" style="stop-color:#FABB6A"/>
            <stop  offset="0.9676" style="stop-color:#FDDB67"/>
            <stop  offset="0.9869" style="stop-color:#FEEF65"/>
            <stop  offset="1" style="stop-color:#FFF664"/>
        </linearGradient>
        <path class="st6" d="M156.6,77.1L156.6,77.1c0.1,0,0.1-0.1,0.2-0.2C156.7,76.9,156.6,77,156.6,77.1z"/>
        <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="160.7275" y1="108.533" x2="124.7388" y2="58.9987">
            <stop  offset="0.2426" style="stop-color:#660081"/>
            <stop  offset="0.8663" style="stop-color:#ED1E79"/>
            <stop  offset="0.8902" style="stop-color:#F25474"/>
            <stop  offset="0.9184" style="stop-color:#F68D6E"/>
            <stop  offset="0.9445" style="stop-color:#FABB6A"/>
            <stop  offset="0.9676" style="stop-color:#FDDB67"/>
            <stop  offset="0.9869" style="stop-color:#FEEF65"/>
            <stop  offset="1" style="stop-color:#FFF664"/>
        </linearGradient>
        <path class="st7" d="M182.7,35.8c0.1-2-0.2-4.2-1.4-5.5c-1.7-1.8-4.2-2.4-6.6-2.5c-5.3-0.2-10.3,2.6-14.4,5.5
            c-5.3,3.7-10.1,8-14.3,12.8c-2.7,3.1-5,6.3-7.3,9.8c0,0-0.3,0.4-0.3,0.4c-4,4.7-6.7,12.9-7.1,19c-0.2,3.5,0.5,7.2,2.6,10
            c3.6,4.7,10,4.7,14.7,1.7c0.8-0.5,1.8-1.3,2.7-2.1c-2.7,5.2-6,9.9-10,14.3c-6,6.6-12.1,11.2-18.2,13.6c-6,2.3-11.5,2.7-16.5,1
            c-4.9-1.7-8.3-5.3-10.4-11.2c-0.5-1.3-1-2.3-1.5-2.9c-0.2-0.3-1-1-2.2-0.9c-0.8-0.3-1.5-0.2-2-0.1c-0.1,0-0.2,0-0.3,0.1
            c-1,0.2-2.7,0.5-3.6,2.8c-0.6,1.7-0.9,3.1-0.9,4.3c0,2.8,0.9,5.9,2.5,9.2c1.7,3.3,4.2,6.2,7.6,8.6c3.3,2.4,7.5,4.2,12.5,5.4
            c2.4,0.6,5.1,0.9,8,0.9c3,0,6.2-0.3,9.5-1c11.7-2,21.4-9.4,28.7-18.6c5.2-6.6,9.2-14.2,12.7-21.9c7-15.4,13.7-32.8,15.4-49.8
            C182.6,37.8,182.7,36.8,182.7,35.8z M174.7,38c1,0-0.6,3.1-1.4,4.7c-4.4,8.3-9.4,16.3-14.8,24.1c-1.4,2.1-3.2,4.2-5.7,4.9
            c-2.4,0.6-3.9-1.1-4-3.3c-0.3-3.9,1.6-8,3.6-11.2c2.9-4.6,6.7-8.6,10.9-12.1c2.1-1.8,4.3-3.5,6.6-5C170.3,39.6,173.3,38,174.7,38z
            "/>
    </g>
</g>
</svg>

                </div>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
 

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} 

</body>
</html>
