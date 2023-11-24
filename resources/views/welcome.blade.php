<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>バラバラEnglish</title>
        <link rel="apple-touch-icon" sizes="57x57" href="/!mj3/favicon_io/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/!mj3/favicon_io/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/!mj3/favicon_io/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/!mj3/favicon_io/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/!mj3/favicon_io/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/!mj3/favicon_io/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/!mj3/favicon_io/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/!mj3/favicon_io/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/!mj3/favicon_io/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/!mj3/favicon_io/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/!mj3/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/!mj3/favicon_io/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/!mj3/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="/!mj3/favicon_io/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/!mj3/favicon_io/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        <script src="https://unpkg.com/twemoji@latest/dist/twemoji.min.js" crossorigin="anonymous"></script>
        <script> window.onload = function() {    
                // Parses the document body and    
                // inserts <img> tags in place of Unicode Emojis    
                twemoji.parse(document.body, 
                        {folder: 'svg', ext: '.svg'} // This is to specify to Twemoji to use SVGs and not PNGs
                );} </script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script> window.jQuery || document.write('<script src="/checkit/jquery.min.js"><\/script>');</script>
        <script src="/cafemisto/pixi.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-sanitize.js"></script>
        <script>document.write('<script src="hyo.js?v=\' + Date.now() + \'"><\/script>');</script>
      
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script> if (! $.fn.modal) {document.write('<link rel="stylesheet" href="/kutsuhimo/css/bootstrap.min.css">');} </script>
        <script>document.write('<link href="\/ciss\/barabara.css?v=\' + Date.now() + \'" rel="stylesheet" type="text\/css">');</script>
        <script>document.write('<link href="\/ciss\/furigana.css?v=\' + Date.now() + \'" rel="stylesheet" type="text\/css">');</script>
        <script>document.write('<link href="daimeishi.css?v=\' + Date.now() + \'" rel="stylesheet" type="text\/css">');</script>
        <script>document.write('<link href="bedo.css?v=\' + Date.now() + \'" rel="stylesheet" type="text\/css">');</script>
   
    </head>
    <body class="antialiased">
        <div class="container-fluid">
            <div id="head" class="row"></div>
            <div id="belly" class="row">
                <div  class="col"></div>
                <div  class="col">
                    // item to be translated for jp/en page
                    {{ _('Content') }}
                </div>
                <div class="col">
                </div>
            </div>
            <div id="foot" class="row">
                <nav id="fixednav" class="navbar fixed-bottom">
                    <div class="container-fluid">
                        <a id="home" class="navbar-brand" onclick="">
                            <img src="/!mj3/bbEnglish_solid.png" class="d-inline-block align-text-top" style="width:auto" alt="" height="50">
                        </a>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#hidden_nav" aria-controls="offcanvas" aria-expanded="false" aria-label="hidden-nav">
                            <span style="font-size:2.5em">🧠</span>
                        </button>
                    </div>
                </nav>

                <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="hidden_nav" aria-labelledby="site nav">
                <div class="offcanvas-header">
                    <a>
                    <img src="/!mj3/landingbanner3.png" class="img-fluid float-start d-block" alt="">
                    </a>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                <h5 class="mr-1">Games</h5>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <button id="blitz" class="nav-link mr-2" data-bs-toggle="pill" data-bs-target="#blitzInfo" type="button" role="tab" aria-controls="blitzInfo">代名詞Blitz</button>
                        <button id="blast" class="nav-link mr-2" data-bs-toggle="pill" type="button" data-bs-target="#blastInfo" role="tab" aria-controls="blastInfo">Be動Blast</button>
                        <button id="more" class="nav-link mr-2" data-bs-toggle="pill" type="button" data-bs-target="#moreInfo" role="tab" aria-controls="moreInfo">More Games</button>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="blitzInfo" role="tabpanel" aria-labelledby="blitz"></div>
                        <div class="tab-pane fade" id="blastInfo" role="tabpanel" aria-labelledby="blast"></div>
                        <div class="tab-pane fade" id="moreInfo" role="tabpanel" aria-labelledby="more"></div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script> if (! $.fn.modal) {document.write('<script src="/kutsuhimo/js/bootstrap.min.js"><\/script>');}</script>
    <script type="text/javascript"> document.write('<script src="/cafemisto/index.js?v=\' + Date.now() + \'"><\/script>');</script>
    <script>document.write('<script src="/BeDo_blast/score.js?v=\' + Date.now() + \'"><\/script>');</script>
    <script>document.write('<script src="/BeDo_blast/BeDo_blast.js?v=\' + Date.now() + \'"><\/script>');</script>
    <script>function reloadpage(){window.location.href="/daimeishi_blitz/index.php";}</script>
    <script>document.write('<script src="/daimeishi_blitz/blitz.js?v=\' + Date.now() + \'"><\/script>');</script>
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    </script>
    <script>document.write('<script src="/GhostWriter/GhostWriter.js?v=\' + Date.now() + \'"><\/script>');</script>
    </body>
</html>