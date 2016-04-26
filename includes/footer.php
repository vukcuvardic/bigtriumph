</div><!--/ End .columns from /includes/header.php -->

</div><!--/ End .row from /includes/header.php -->

<footer class="footer">
    <?php
    //include 'test.php'; 
    //echo $test;
    ?>

    <section id="contact" class="footer_contact">

        <div class="row">

            <div class="columns">
                <div class="footer_header">
                    <h1 class="footer_title">Contact Us</h1>
                </div>
            </div>

            <section class="contact_form">
                <div class="message-placeholder"></div>
                <div class="form_description">
                    <h3>We Will:</h3>
                    <ul>
                        <li>Call you back</li>
                        <li>Send you price quotation</li>
                        <li>Set an appointment</li>
                    </ul>
                    <span>Open your door as we are on our way to you…</span>
                </div>

                <form action="?" id="contact-form" data-abide method="POST">

                    <div class="name-field">
                        <label>Your name
                            <input type="text" id="name" required pattern="[a-zA-Z]+">
                            <small class="error">Please enter your name</small>
                        </label>
                    </div>

                    <div class="row">
                        <div class="email-field">
                            <label>Email
                                <input id="email" type="email" required>
                                <small class="error">Please enter your email</small>
                            </label>
                        </div>

                        <div class="phone-field">
                            <label>Phone
                                <input id="phone" type="text" required>
                                <small class="error">Please enter phone number</small>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="area-field">
                            <label>Area You Live in
                                <input id="area" type="text" required>
                                <small class="error">Please enter the are you live in</small>
                            </label>
                        </div>

                        <div class="time-field">
                            <label>Preferred Time of Appointment
                                <input type="text" id="dpt" required>
                                <small class="error">Please enter preferred time of appointment</small>
                            </label>
                        </div>
                    </div>

                    <div class="category-radio">
                        <label>Choose Your Category<br>
                            <input type="radio" name="category" value="Couple" id="categoryCouple" required><label for="categoryCouple">Couple</label>
                            <input type="radio" name="category" value="Family up to 5" id="categoryFamily" required><label for="categoryFamily">Family up to 5</label>
                            <input type="radio" name="category" value="Big family" id="categoryFamilyLarge" required><label for="categoryFamilyLarge">Family 5+</label>
                            <small class="error">Please select your category</small>
                        </label>
                    </div>

                    <div class="kids">
                        <label>How Many Kids</label>
                        <select id="kids-number">
                            <option value="dfdsfas" disabled selected>Select number of kids</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option class="kids-number-large" value="4">4</option>
                            <option class="kids-number-large" value="5">5</option>
                            <option class="kids-number-large" value="6">6</option>
                            <option class="kids-number-large" value="7">7</option>
                            <option class="kids-number-large" value="8">8</option>
                            <option class="kids-number-large" value="9">9</option>
                        </select>
                        <div class="kids-age-placeholder row"></div>
                    </div>


                    <div class="message-field">
                        <label>Your Message
                            <textarea id="message" required></textarea>
                            <small class="error">Please enter details</small>
                        </label>
                    </div>

                    <div class="customer-source">
                        <label>How did You Hear About Big Triumph?
                            <select id="customer-source" required>
                                <option value="" disabled selected>Select your option</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Instagram">Instagram</option>
                                <option value="Website">Website</option>
                                <option value="Friend">Friend</option>
                                <option value="LinkedIn">Linkedln</option>
                                <option value="Other">Other</option>
                            </select>
                            <small class="error">Please tell us how did you hear of us</small>
                        </label>
                    </div>

                    <span>Remember, we would like to meet all family members</span><br>
                    <div class="g-recaptcha" data-sitekey="6Le0RxATAAAAAFqG1k6PzTyjaF4rA-W7h0e-TgUJ"></div>
                    <button id="submit-button" type="submit">Submit</button>
                </form>
            </section>

            <section class="contact_details">

                <ul class="vcard">
                    <li class="fn">
                        <h2>Big Triumph</h2>
                    </li>
                    <li class="email">
                        <strong>Email Us:</strong> 
                        <script language="JavaScript">
                            <!--
                            var name = "info";
                            var domain = "bigtriumph.com";
                            document.write('<a href=\"mailto:' + name + '@' + domain + '\">');
                            document.write(name + '@' + domain + '</a>');
                            // --></script>
                    </li>
                    <li>
                        <strong>Follow Us:</strong>
                        <div class="clearfix"></div>
                        <ul class="follow">
                            <?php include('follow-us.php'); ?>
                        </ul>
                    </li>
                </ul>
                <p class="copyright">Copyright © Big Triumph <?php echo date("Y"); ?></p>

            </section>

        </div>

    </section>

</footer>

<script src="<?php echo $ROOT; ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo $ROOT; ?>/bower_components/foundation/js/foundation.min.js"></script>
<script src="<?php echo $ROOT; ?>/bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="<?php echo $ROOT; ?>/bower_components/foundation-datepicker/js/foundation-datepicker.min.js"></script>
<script src="<?php echo $ROOT; ?>/bower_components/wow/dist/wow.min.js"></script>
<script src="<?php echo $ROOT; ?>/dist/js/app.min.js"></script>

</body>
</html>