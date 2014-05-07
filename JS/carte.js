function initialisation(){
    var centreCarte = new google.maps.LatLng(48.6931585, 2.2933154);
    var optionsCarte = {
        zoom: 10,
        center: centreCarte,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var maCarte = new google.maps.Map(document.getElementById("carte"), optionsCarte);

//création du marqueur
    var marqueur = new google.maps.Marker({
        position: new google.maps.LatLng(48.6931585, 2.2933154),
        map: maCarte
    });
}