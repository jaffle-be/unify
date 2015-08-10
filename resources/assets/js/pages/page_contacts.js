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
        }

    };
}();