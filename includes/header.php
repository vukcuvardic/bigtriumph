<!doctype html>
<?php
$ROOT = "/bigtriumph";

function navClass($item) {
    global $menu_item;
    if (isset($menu_item) && $menu_item == $item) {
        echo "active";
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo isset($title) ? $title : "Big Triumph"; ?></title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $ROOT; ?>/dist/stylesheets/app.css" />
        <script src="<?php echo $ROOT; ?>/bower_components/modernizr/modernizr.js"></script>
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $ROOT; ?>/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $ROOT; ?>/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $ROOT; ?>/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $ROOT; ?>/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $ROOT; ?>/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $ROOT; ?>/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $ROOT; ?>/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $ROOT; ?>/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT; ?>/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo $ROOT; ?>/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo $ROOT; ?>/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo $ROOT; ?>/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo $ROOT; ?>/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo $ROOT; ?>/manifest.json">
        <link rel="mask-icon" href="<?php echo $ROOT; ?>/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="<?php echo $ROOT; ?>/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
        <?php include_once('analyticstracking.php'); ?>
        <header>
            <div class="top-bar_container">
                <div class="row">
                    <nav class="top-bar" data-topbar role="navigation">
                        <ul class="title-area">
                            <li class="name">
                                <a class="visible-for-small-down" href="<?php echo $ROOT; ?>">
                                    <img class="top-bar_logo" 
                                         src="<?php echo $ROOT; ?>/dist/images/logo/big-triumph_logo--top-bar.svg"
                                         height="36" width="140" alt="Big Triumph Logo" /> 
                                </a>
                            </li>
                            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon">
                                <a href="#"><span>Menu</span></a>
                            </li>
                        </ul>

                        <section class="top-bar-section">
                            <!-- Right Nav Section -->
                            <ul class="follow right hidden-for-small-down">
                                <?php include('follow-us.php'); ?>
                            </ul>

                            <a href="#contact" class="button header_contact hidden-for-small-down"><strong>Contact Us</strong></a>

                            <!-- Collapsed Nav Section -->
                            <div class="hidden-for-medium-up">
                                <?php include('main-nav.php'); ?>
                            </div>
                        </section>
                    </nav>
                </div>
            </div>
        </header>


        <header class="header">

            <div class="row">

                <div class="header_logo">
                    <a href="<?php echo $ROOT; ?>">
                        <img src="<?php echo $ROOT; ?>/dist/images/logo/big-triumph_logo.svg" alt="Big Triumph Logo" /> 
                    </a>
                </div>

                <nav class="main-nav main-nav_large hidden-for-small-down">
                    <?php include('main-nav.php'); ?>
                </nav>

                <div class="clearfix"></div>

            </div>

        </header>

        <div class="clearfix"></div>

        <div class="row">
            <div class="columns">