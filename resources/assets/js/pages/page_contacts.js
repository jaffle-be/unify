var ContactPage = function () {

    return {

        //Basic Map
        initMap: function () {
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    div: '#map',
                    scrollwheel: false,
                    lat: $("#latitude").val(),
                    lng: $("#longitude").val()
                });

                var marker = map.addMarker({
                    lat: $("#latitude").val(),
                    lng: $("#longitude").val(),
                });
            });
        },

        //Panorama Map
        initPanorama: function () {
            var panorama;
            $(document).ready(function () {
                panorama = GMaps.createPanorama({
                    el: '#panorama',
                    lat: $("#latitude").val(),
                    lng: $("#longitude").val()
                });
            });
        },

        initPageContactForm: function () {
            // Validation
            $("#sky-form3").validate({
                // Rules for form validation
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 10
                    },
                    captcha: {
                        required: true,
                        remote: 'assets/plugins/sky-forms-pro/skyforms/captcha/process.php'
                    }
                },

                // Messages for form validation
                messages: {
                    name: {
                        required: 'Please enter your name',
                    },
                    email: {
                        required: 'Please enter your email address',
                        email: 'Please enter a VALID email address'
                    },
                    message: {
                        required: 'Please enter your message'
                    },
                    captcha: {
                        required: 'Please enter characters',
                        remote: 'Correct captcha is required'
                    }
                },

                // Ajax form submition
                submitHandler: function (form) {
                    $(form).ajaxSubmit(
                        {
                            beforeSend: function () {
                                $('#sky-form3 button[type="submit"]').attr('disabled', true);
                            },
                            success: function () {
                                $("#sky-form3").addClass('submited');
                            }
                        });
                },

                // Do not change code below
                errorPlacement: function (error, element) {
                    error.insertAfter(element.parent());
                }
            });
        }

    };
}();