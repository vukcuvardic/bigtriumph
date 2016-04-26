<?php
$menu_item = "packages";
$title = "Packages ~ Big Triumph";
include('../includes/header.php');
?>

<section class="packages packages--page">
    <header>
        <h1 class="page-title">Packages</h1>
    </header>
    <div class="page-content">
        <div class="row" data-equalizer data-equalizer-mq="medium-up">

            <section class="packages_package packages_package--couple" data-equalizer-watch>
                <div class="panel">
                    <div class="package_desc">
                        <div class="package_header">
                            <h2>Couple</h2>
                        </div>
                        <div class="package_icon">
                            <img class="top-bar_logo" 
                                 src="<?php echo $ROOT; ?>/dist/images/packages/packages_package--couple.svg"
                                 height="260" width="260" alt="Package - Couple" /> 
                        </div>
                        <em>Get fit together! Program created for two individuals.</em>
                    </div>
                </div>
            </section> 

            <section class="packages_package packages_package--family" data-equalizer-watch>
                <div class="panel">
                    <div class="package_desc">
                        <div class="package_header">
                            <h2>Family up to 5</h2>
                            <em>Families with up to 2 adults and 3 children</em>
                        </div>
                        <div class="package_icon">
                            <img class="top-bar_logo" 
                                 src="<?php echo $ROOT; ?>/dist/images/packages/packages_package--family.svg"
                                 height="260" width="260" alt="Package - Family" /> 
                        </div>
                        <em>Program created for family training.</em>
                    </div>
                </div>
            </section> 

            <section class="packages_package packages_package--family-big" data-equalizer-watch>
                <div class="panel">
                    <div class="package_desc">
                        <div class="package_header">
                            <h2>Family 5+</h2>
                            <em>Family with 2 adults and 4 or more children</em>
                        </div>
                        <div class="package_icon">
                            <img class="top-bar_logo" 
                                 src="<?php echo $ROOT; ?>/dist/images/packages/packages_package--family-big.svg"
                                 height="260" width="260" alt="Package - Big Family" /> 
                        </div>
                        <em>Program created for family training.</em>
                    </div>
                </div>
            </section>

        </div>

        <div class="packages_footer">
            <p><em>All our packages are all inclusive and fully customized!</em></p>
            <a href="../what-we-do/">See What We Do</a>
        </div>
    </div><!-- /.page-content -->
</section>

<?php include('../includes/footer.php'); ?>