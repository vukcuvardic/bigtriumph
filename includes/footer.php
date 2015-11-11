</div><!--/ End .columns from /includes/header.php -->

</div><!--/ End .row from /includes/header.php -->

<footer class="footer">

    <section id="contact" class="footer_contact">

        <div class="row">

            <div class="columns">
                <div class="footer_header">
                    <h1 class="footer_title">Contact Us</h1>
                </div>
            </div>

            <section class="contact_form">

                <form action="?" id="contact-form" data-abide method="POST">

                    <div class="name-field">
                        <label>Your name <small>required</small></label>
                        <input type="text" id="name" required pattern="[a-zA-Z]+">
                        <small class="error">Name is required. Please use only latin letters.</small>
                    </div>

                    <div class="email-field">
                        <label>Email <small>required</small></label>
                        <input id="email" type="email" required>
                        <small class="error">An email address is required.</small>
                    </div>

                    <div class="category-radio">
                        <label>Choose Your Category<br></label>
                        <input type="radio" name="category" value="Couple" id="categoryCouple"><label for="categoryCouple">Couple</label>
                        <input type="radio" name="category" value="Family up to 5" id="categoryFamily"><label for="categoryFamily">Family up to 5</label>
                        <input type="radio" name="category" value="Family 5+" id="categoryFamilyLarge"><label for="categoryFamilyLarge">Family 5+</label>
                    </div>

                    <div class="phone-field">
                        <label>Phone</label>
                        <input id="phone" type="text">
                    </div>

                    <div class="area-field">
                        <label>Area you live</label>
                        <input id="area" type="text">
                    </div>

                    <div class="time-field">
                        <label>Time of Apppointment</label>
                        <input type="text" id="dpt">
                    </div>

                    <div class="kids row">
                        <div class="half">
                            <label>How Many Kids</label>
                            <input id="kids-number" type="text">
                        </div>
                        <div class="half">
                            <label>Kids Age</label>
                            <input id="kids-age" type="text">
                        </div>
                    </div>

                    <div class="customer-source">
                        <label>How did you hear about Big Triumph?
                            <select id="customer-source">
                                <option value="" disabled selected>Select your option</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Instagram">Instagram</option>
                                <option value="Website">Website</option>
                                <option value="Friend">Friend</option>
                                <option value="LinkedIn">Linkedln</option>
                                <option value="Other">Other</option>
                            </select>
                        </label>
                    </div>

                    <div class="message-field">
                        <label>Your Message</label>
                        <textarea id="message"></textarea>
                    </div>

                    <span>Remember, we would like to meet all family members</span><br>
                    <div class="g-recaptcha" data-sitekey="6Le0RxATAAAAAFqG1k6PzTyjaF4rA-W7h0e-TgUJ"></div>
                    <input id="submit-button" type="submit" value="Submit">
                </form>

                <div class="form_description">
                    <h3>We Will:</h3>
                    <ul>
                        <li>Call you back</li>
                        <li>Send you price quotation</li>
                        <li>Set an appointment</li>
                    </ul>
                    <span>Open your door as we are on our way to you…</span>
                </div>

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