function initMap() {
    // Latitude and Longitude for Meknes, Morocco
    var myLatLng = { lat: 33.9007, lng: -5.55485 };

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Meknes, Morocco' // Title Location
    });
}
