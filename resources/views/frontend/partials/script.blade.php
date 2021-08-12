<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script>
    var verifyCallback = function(response) {
        alert('Verify re-captcha');
    };
};
</script>
<script>
    $('.links a').on('click', function(e) {

        // Define variable of the clicked »a« element (»this«) and get its href value.
        var href = $(this).attr('href');

        // Run a scroll animation to the position of the element which has the same id like the href value.
        $('html, body').animate({
            scrollTop: $(href).offset().top - 160
        }, 1000);

        // Prevent the browser from showing the attribute name of the clicked link in the address bar
        e.preventDefault();

    });
</script>