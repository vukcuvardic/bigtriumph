<?php
$menu_item = "home";
include('includes/header.php');
?>

<div class="page-content">

    <div class="slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
        <div>
            <a href="what-we-do/#eat-to-win">
                <h1 class="slider_title slider_title--1">Eat to Win</h1>
                <img data-interchange="
                     [dist/images/slider/eat-to-win-600.jpg, (small)], 
                     [dist/images/slider/eat-to-win-970.jpg, (medium)], 
                     [dist/images/slider/eat-to-win-970.jpg, (large)]"
                     alt="slider image 1">
            </a>
        </div>

        <div>
            <a href="what-we-do/#time-to-go-shopping">
                <h1 class="slider_title slider_title--2">Time to Go Shopping</h1>
                <img data-interchange="
                     [dist/images/slider/time-to-go-shopping-600.jpg, (small)], 
                     [dist/images/slider/time-to-go-shopping-970.jpg, (medium)], 
                     [dist/images/slider/time-to-go-shopping-970.jpg, (large)]" 
                     alt="slider image 2" />
            </a>
        </div>

        <div>
            <a href="what-we-do/#become-a-master-chef">
                <h1 class="slider_title slider_title--3">Become a Master Chef</h1>
                <img data-interchange="
                     [dist/images/slider/become-a-master-chef-600.jpg, (small)], 
                     [dist/images/slider/become-a-master-chef-970.jpg, (medium)], 
                     [dist/images/slider/become-a-master-chef-970.jpg, (large)]" 
                     alt="slider image 3" />
            </a>
        </div>

        <div>
            <a href="what-we-do/#meal-plan-and-recipes-cookbook">
                <h1 class="slider_title slider_title--4">Meal Plan and Recipes Cookbook</h1>
                <img data-interchange=" 
                     [dist/images/slider/meal-plan-and-recipes-cookbook-600.jpg, (small)], 
                     [dist/images/slider/meal-plan-and-recipes-cookbook-970.jpg, (medium)], 
                     [dist/images/slider/meal-plan-and-recipes-cookbook-970.jpg, (large)]" 
                     alt="slider image 4" />
            </a>
        </div>

        <div>
            <a href="what-we-do/#physical-and-fitness-assesment">
                <h1 class="slider_title slider_title--5">Physical and Fitness Assessment</h1>
                <img data-interchange="
                     [dist/images/slider/physical-and-fitness-assesment-600.jpg, (small)], 
                     [dist/images/slider/physical-and-fitness-assesment-970.jpg, (medium)], 
                     [dist/images/slider/physical-and-fitness-assesment-970.jpg, (large)]"
                     alt="slider image 5" />
            </a>
        </div>

        <div>
            <a href="what-we-do/#our-own-family-fitness-coaching">
                <h1 class="slider_title slider_title--6">Our Own Family Fitness Coaching</h1>
                <img data-interchange=" 
                     [dist/images/slider/our-own-family-fitness-coaching-600.jpg, (small)], 
                     [dist/images/slider/our-own-family-fitness-coaching-970.jpg, (medium)], 
                     [dist/images/slider/our-own-family-fitness-coaching-970.jpg, (large)]" 
                     alt="slider image 6" />
            </a>
        </div>

        <div>
            <a href="what-we-do/#our-big-support">
                <h1 class="slider_title slider_title--7">Our Big Support</h1>
                <img data-interchange="
                     [dist/images/slider/our-big-support-600.jpg, (small)], 
                     [dist/images/slider/our-big-support-970.jpg, (medium)], 
                     [dist/images/slider/our-big-support-970.jpg, (large)]"
                     alt="slider image 7" />
            </a>
        </div>
    </div>

    <section class="slogan slogan--single">
        <h3>Team of experts in healthy lifestyle, nutrition and exercise,<br>
            visiting families at the comfort of their home!</h3>
    </section>

    <section class="links">
        <section class="link">
            <a href="what-we-do/">
                <img data-interchange="
                     [dist/images/links/what-we-do-600.jpg, (small)], 
                     [dist/images/links/what-we-do-305.jpg, (medium)], 
                     [dist/images/links/what-we-do-305.jpg, (large)]"
                     alt="What We Do" />
                <h3>What We Do</h3>
                <em>Food – Exercise – Lifestyle alteration</em>
            </a>
        </section>
        <section class="link">
            <a href="packages/">
                <img data-interchange="
                     [dist/images/links/packages-600.jpg, (small)], 
                     [dist/images/links/packages-305.jpg, (medium)], 
                     [dist/images/links/packages-305.jpg, (large)]"
                     alt="Packages" />
                <h3>Packages</h3>
                <em>All our packages are all inclusive and fully customized!</em>
            </a>
        </section>
        <section class="link">
            <a href="about-us/">
                <img data-interchange="
                     [dist/images/links/about-us-600.jpg, (small)], 
                     [dist/images/links/about-us-305.jpg, (medium)], 
                     [dist/images/links/about-us-305.jpg, (large)]" 
                     alt="About Us" />
                <h3>About Us</h3>
                <em>We are a team on a mission! Experience lifestyle you deserve.</em>
            </a>
        </section>
    </section>

    <section class="slogan slogan--multi" data-equalizer>
        <div data-equalizer-watch>
            <h3>We are Trendy!</h3>
        </div>
        <div data-equalizer-watch>
            <h3>We are Determine!</h3>
        </div>
        <div data-equalizer-watch>
            <h3>We are Experienced!</h3>
        </div>
        <div data-equalizer-watch>
            <h3>We are Helpful!</h3>
        </div>
    </section>

</div><!-- /.page-content -->

<?php include('includes/footer.php'); ?>