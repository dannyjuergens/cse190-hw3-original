<!doctype html><html id="html"><head><base href="/app/"/><link rel="shortcut icon" href="/app/images/favicon.ico" type=""/><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><title>UCR Profiles - Search & Browse</title><meta name="viewport" content="width=device-width,initial-scale=1"/><meta name="description" content="Search & Browse UCR Faculty & Staff"/><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- inline spinner styles to be able to display spinner right away --><style type="text/css">body, html {
            height: 100%;
        }
        .app-loading {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            background-color: #234674;
        }
        .app-loading .spinner {
            height: 200px;
            width: 200px;
            animation: rotate 2s linear infinite;
            transform-origin: center center;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
        .app-loading .spinner .path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke: #ddd;
        }
        @keyframes rotate {
            100% {
                transform: rotate(360deg);
            }
        }
        @keyframes dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -35px;
            }
            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        .app-loading > .logo {
            width: 100px;
            height: 100px;
            background: url(/app/images/ucr-logo.svg) center center no-repeat;
        }

        .ui-sortable-placeholder.member-placeholder {
            height: 2.2em !important;
            line-height: 2.2em;
            background: #f3f3f3;
            visibility: visible !important;
        }</style><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-77518304-1', {'siteSpeedSampleRate': 10});</script><link href="styles.63cc2315bd31e295b882.bundle.css" rel="stylesheet"/></head><body><app-ucr-app><!-- loading layout replaced by app after startup --><div class="app-loading"><div class="logo"></div><svg class="spinner" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/></svg></div></app-ucr-app><script src="//cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script><!--<script src="//cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.ui.min.js"></script>--><script src="//cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script><script type="text/javascript" src="inline.06abce590bb8bb0d79e6.bundle.js"></script><script type="text/javascript" src="scripts.9e6d350bcfa2436bad48.bundle.js"></script><script type="text/javascript" src="main.953a43a0e5ddc02cdad3.bundle.js"></script></body></html>