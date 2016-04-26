if ($(document).foundation(), $(".slider").slick({
        dots: !0,
        infinite: !0,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: !0,
        autoplaySpeed: 3e3
    }), !Modernizr.svg) {
    var i = document.getElementsByTagName("img"),
        j, y;
    for (j = i.length; j--;) y = i[j].src, y.match(/svg$/) && (i[j].src = y.slice(
        0, -3) + "png")
}
$("#dpt").fdatepicker({
        format: "mm-dd-yyyy hh:ii",
        disableDblClickSelection: !0,
        language: "vi",
        pickTime: !0
    }), $("#contact-form").on("valid.fndtn.abide", function() {
        event.preventDefault();
        var name = $("input#name").val(),
            gRecaptchaResponse = $('#g-recaptcha-response').val(),
            email = $("input#email").val(),
            message = $("textarea#message").val(),
            phone = $("input#phone").val(),
            area = $("input#area").val(),
            time = $("input#dpt").val(),
            kidsNumber = $("select#kids-number").val(),
            kid1Age = $("input#kid-1-age").val(),
            kid2Age = $("input#kid-2-age").val(),
            kid3Age = $("input#kid-3-age").val(),
            kid4Age = $("input#kid-4-age").val(),
            kid5Age = $("input#kid-5-age").val(),
            kid6Age = $("input#kid-6-age").val(),
            kid7Age = $("input#kid-7-age").val(),
            kid8Age = $("input#kid-8-age").val(),
            kid9Age = $("input#kid-9-age").val(),
            category = $("input[name='category']:checked").val(),
            customerSource = $("select#customer-source").val(),
            customerSourceOther = $("input#customer-source-other").val(),
            dataString = "name=" + name + "&email=" + email + "&phone=" +
            phone + "&area=" + area + "&time=" + time + "&kidsNumber=" +
            kidsNumber + "&kid1Age=" + kid1Age + "&kid2Age=" + kid2Age +
            "&kid3Age=" + kid3Age + "&kid4Age=" + kid4Age + "&kid5Age=" +
            kid5Age + "&kid6Age=" + kid6Age + "&kid7Age=" + kid7Age +
            "&kid8Age=" + kid8Age + "&kid9Age=" + kid9Age + "&customerSource=" +
            customerSource + "&category=" + category + "&message=" + 
            message + "&gRecaptchaResponse=" + gRecaptchaResponse +
            "&customerSourceOther=" + customerSourceOther;
        return $.ajax({
            type: "POST",
            url: "../includes/contact-form.php",
            data: dataString
        }).done(function(result) {
                console.log(result);
                if (result === "true") {
                    $(".message-placeholder").html("<h3 class='thanks'>Thank You for contacting us!</h3>");
                    $("#contact-form").html("");
                }
                else
                   alert("Captcha failed! Please check I'm not a robot box");
            });
    }), (new WOW).init(), $(".page-title").addClass("fadeIn slideInDown wow"),
    $(".slider_title").addClass("slideInDown = wow"), $(".footer_header").addClass(
        "fadeIn wow"), $(".footer_title").addClass("slideInDown wow"), $(
        ".page-content").addClass("fadeIn wow"), $(".slick-arrows").addClass(
        "fadeIn");

// Vertical align problem on packages page
var packageHeaderHeight = 0;
var packagesCoupleHeaderHeight = $('.packages_package--couple').find('.package_header').height();
var packagesFamilyHeaderHeight = $('.packages_package--family').find('.package_header').height();
var packagesFamilyBigHeaderHeight = $('.packages_package--family-big').find('.package_header').height();

if ((packagesFamilyBigHeaderHeight >= packagesCoupleHeaderHeight) && (packagesFamilyBigHeaderHeight >= packagesFamilyHeaderHeight)) {
    packageHeaderHeight = packagesFamilyBigHeaderHeight;
}

if ((packagesFamilyHeaderHeight >= packagesCoupleHeaderHeight) && (packagesFamilyHeaderHeight >= packagesFamilyBigHeaderHeight)) {
    packageHeaderHeight = packagesFamilyHeaderHeight;
}

if ((packagesCoupleHeaderHeight >= packagesFamilyBigHeaderHeight) && (packagesFamilyHeaderHeight >= packagesFamilyBigHeaderHeight)) {
    packageHeaderHeight = packagesCoupleHeaderHeight;
}

var mq = window.matchMedia("(min-width: 641px)");
if (mq.matches) {
    $('.package_header').height(packageHeaderHeight);
}

// Add Input field when user selects - How did You Hear About Big Triumph? - Other
$('#customer-source').change(function () {
    if ($(this).val() == 'Other') {
        $('.customer-source').append("\
<label>Please Specify</label>\n\
<input id='customer-source-other' type='text'></input>");
    }
    else {
        // Hide when other options are selected
        $('#customer-source-other').hide();
    }
});

// Remove kids if couple is selected
// Hide by default
$(document).ready(function () {
    $('.kids').hide();
});

// Show or hide when radio button is selected
$('input[name="category"]').change(function () {
    if ($(this).val() == 'Couple') {
        $('.kids').hide();
        $('.kids-age-append').remove();
        $("select#kids-number").val('');
    }
    else if ($(this).val() == 'Family up to 5') {
        $('.kids').show();
        $('.kids-age-append').remove();
        $("select#kids-number").val('');
        $('#kids-number').children('.kids-number-large').hide();
    }
    else if ($(this).val() == 'Big family') {
        $('.kids').show();
        $('.kids-age-append').remove();
        $("select#kids-number").val('');
        $('#kids-number').children('.kids-number-large').show();
    }
});

// Add kids age inputs for selected number of kids
$('#kids-number').change(function () {
    if ($(this).val() == '1') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
            <div class='kids-age-append'>\n\
                <label>1. Kid Age</label>\n\
                <input id='kid-1-age' type='text'>\n\
            </div>\n\
        ");
    }
    else if ($(this).val() == '2') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
        <div class='kids-age-append'>\n\
            <label>1. Kid Age</label>\n\
            <input id='kid-1-age' type='text'>\n\
        </div>\n\
        <div class='kids-age-append'>\n\
            <label>2. Kid Age</label>\n\
            <input id='kid-2-age' type='text'>\n\
        </div>\n\
");
    }
    else if ($(this).val() == '3') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
            <div class='kids-age-append'>\n\
                <label>1. Kid Age</label>\n\
                <input id='kid-1-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>2. Kid Age</label>\n\
                <input id='kid-2-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>3. Kid Age</label>\n\
                <input id='kid-3-age' type='text'>\n\
            </div>\n\
        ");
    }
    else if ($(this).val() == '4') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
            <div class='kids-age-append'>\n\
                <label>1. Kid Age</label>\n\
                <input id='kid-1-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>2. Kid Age</label>\n\
                <input id='kid-2-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>3. Kid Age</label>\n\
                <input id='kid-3-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>4. Kid Age</label>\n\
                <input id='kid-4-age' type='text'>\n\
            </div>\n\
        ");
    }
    else if ($(this).val() == '5') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
            <div class='kids-age-append'>\n\
                <label>1. Kid Age</label>\n\
                <input id='kid-1-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>2. Kid Age</label>\n\
                <input id='kid-2-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>3. Kid Age</label>\n\
                <input id='kid-3-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>4. Kid Age</label>\n\
                <input id='kid-4-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>5. Kid Age</label>\n\
                <input id='kid-5-age' type='text'>\n\
            </div>\n\
        ");
    }
    else if ($(this).val() == '6') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
            <div class='kids-age-append'>\n\
                <label>1. Kid Age</label>\n\
                <input id='kid-1-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>2. Kid Age</label>\n\
                <input id='kid-2-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>3. Kid Age</label>\n\
                <input id='kid-3-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>4. Kid Age</label>\n\
                <input id='kid-4-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>5. Kid Age</label>\n\
                <input id='kid-5-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>6. Kid Age</label>\n\
                <input id='kid-6-age' type='text'>\n\
            </div>\n\
        ");
    }
    else if ($(this).val() == '7') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
            <div class='kids-age-append'>\n\
                <label>1. Kid Age</label>\n\
                <input id='kid-1-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>2. Kid Age</label>\n\
                <input id='kid-2-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>3. Kid Age</label>\n\
                <input id='kid-3-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>4. Kid Age</label>\n\
                <input id='kid-4-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>5. Kid Age</label>\n\
                <input id='kid-5-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>6. Kid Age</label>\n\
                <input id='kid-6-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>7. Kid Age</label>\n\
                <input id='kid-7-age' type='text'>\n\
            </div>\n\
        ");
    }
    else if ($(this).val() == '8') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
            <div class='kids-age-append'>\n\
                <label>1. Kid Age</label>\n\
                <input id='kid-1-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>2. Kid Age</label>\n\
                <input id='kid-2-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>3. Kid Age</label>\n\
                <input id='kid-3-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>4. Kid Age</label>\n\
                <input id='kid-4-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>5. Kid Age</label>\n\
                <input id='kid-5-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>6. Kid Age</label>\n\
                <input id='kid-6-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>7. Kid Age</label>\n\
                <input id='kid-7-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>8. Kid Age</label>\n\
                <input id='kid-8-age' type='text'>\n\
            </div>\n\
        ");
    }
    else if ($(this).val() == '9') {
        $('.kids-age-append').remove();
        $('.kids-age-placeholder').append("\
            <div class='kids-age-append'>\n\
                <label>1. Kid Age</label>\n\
                <input id='kid-1-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>2. Kid Age</label>\n\
                <input id='kid-2-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>3. Kid Age</label>\n\
                <input id='kid-3-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>4. Kid Age</label>\n\
                <input id='kid-4-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>5. Kid Age</label>\n\
                <input id='kid-5-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>6. Kid Age</label>\n\
                <input id='kid-6-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>7. Kid Age</label>\n\
                <input id='kid-7-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>8. Kid Age</label>\n\
                <input id='kid-8-age' type='text'>\n\
            </div>\n\
            <div class='kids-age-append'>\n\
                <label>9. Kid Age</label>\n\
                <input id='kid-9-age' type='text'>\n\
            </div>\n\
        ");
    }
});