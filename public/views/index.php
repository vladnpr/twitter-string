<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="/public/assets/css/normalize.css">
    <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="/public/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="/public/assets/scss/style.css">
    <link href="/public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <div class="content mt-3 col-lg-12">
        <? if (!empty($twits)): ?>
            <? foreach ($twits as $twit): ?>
                <div class="col-xl-3 col-lg-1">
                    <section class="card">
                        <div class="twt-feed blue-bg">
                            <div class="corner-ribon black-ribon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="fa fa-twitter wtt-mark"></div>
                            <div class="media">
                                <a href="https://twitter.com/<?=$twit['screen_name']?>">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;"
                                         alt="" src="<?=$twit['profile_image_url']?>">
                                </a>
                                <div class="media-body">
                                    <h2 class="text-white display-6"><?=$twit['name']?></h2>
<!--                                    <p class="text-light">Project Manager</p>-->
                                </div>
                            </div>
                        </div>
                        <div class="twt-write col-sm-12">
                            <p><?=$twit['text']?></p>
                        </div>
                        <footer class="twt-footer">
                            <?=$twit['created_at']?>
                        </footer>
                    </section>

                </div>
            <? endforeach; ?>
        <? endif; ?>
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="/public/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="/public/assets/js/plugins.js"></script>
<script src="/public/assets/js/main.js"></script>


<script src="/public/assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="/public/assets/js/dashboard.js"></script>
<script src="/public/assets/js/widgets.js"></script>
<script src="/public/assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="/public/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="/public/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="/public/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script src="/public/js/custom.js">
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>
</html>
