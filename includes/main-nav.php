<ul>
    <li class="<?php navClass('home'); ?>">
        <a href="<?php echo $ROOT; ?>">Home</a>
    </li>
    <li class="<?php navClass('what-we-do'); ?>">
        <a href="<?php echo $ROOT; ?>/what-we-do">What We Do</a>
    </li>
    <li class="<?php navClass('about-us'); ?>">
        <a href="<?php echo $ROOT; ?>/about-us">About Us</a>
    </li>
    <li class="<?php navClass('packages'); ?>">
        <a href="<?php echo $ROOT; ?>/packages">Packages</a>
    </li>
    <li class="<?php navClass('gallery'); ?>">
        <a href="<?php echo $ROOT; ?>/gallery">Gallery</a>
    </li>
    <li class="<?php navClass('testimonials'); ?>">
        <a href="<?php echo $ROOT; ?>/testimonials">Testimonials</a>
    </li>
    <li class="<?php navClass('contact'); ?>">
        <a href="#contact">Contact</a>
    </li>
    <ul class="top-bar_follow">
        <?php include('follow-us.php'); ?>
    </ul>
</ul>