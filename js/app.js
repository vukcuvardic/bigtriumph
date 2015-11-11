// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();


// Slider Configuration
$('.slider').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000
})


// Check if browser can handle SVG
if (!Modernizr.svg) {
    // Get all img tag of the document and create variables
    var i = document.getElementsByTagName("img"), j, y;

    // For each img tag
    for (j = i.length; j--; ) {
        y = i[j].src
        // If filenames ends with SVG
        if (y.match(/svg$/)) {
            // Replace "svg" by "png"
            i[j].src = y.slice(0, -3) + 'png'
        }
    }
}


// Date Picker
$('#dpt').fdatepicker({
    format: 'mm-dd-yyyy hh:ii',
    disableDblClickSelection: true,
    language: 'vi',
    pickTime: true
});


// Contact-form
$('#contact-form')
        .on('valid.fndtn.abide', function () {
            event.preventDefault();
            var name = $("input#name").val();
            var email = $("input#email").val();
            var message = $("textarea#message").val();
            var phone = $("input#phone").val();
            var area = $("input#area").val();
            var time = $("input#dpt").val();
            var kidsNumber = $("input#kids-number").val();
            var kidsAge = $("input#kids-age").val();
            var category = $("input[name='category']:checked").val();
            var customerSource = $("select#customer-source").val();
            
            

            // Data for response
            var dataString = 'name=' + name +
                    '&email=' + email +
                    '&phone=' + phone +
                    '&area=' + area +
                    '&time=' + time +
                    '&kidsNumber=' + kidsNumber +
                    '&kidsAge=' + kidsAge +
                    '&customerSource=' + customerSource +
                    '&category=' + category +
                    '&message=' + message
                    ;

            // Begin Ajax call
            $.ajax({
                type: "POST",
                url: "../includes/contact-form.php",
                data: dataString,
                success: function () {
                    $('#contact-form').html("<h3>Thank You for contacting us</h3>");
                }
            }); // Ajax call
            return false;
        });


// Init Wow
new WOW().init();


// Add animation classes to elements
$('.page-title').addClass('fadeIn slideInDown wow');
$('.slider_title').addClass('slideInDown = wow');
$('.footer_header').addClass('fadeIn wow');
$('.footer_title').addClass('slideInDown wow');
$('.page-content').addClass('fadeIn wow');
$('.slick-arrows').addClass('fadeIn');