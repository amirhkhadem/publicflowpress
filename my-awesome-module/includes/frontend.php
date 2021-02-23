<div class="fl-example-text">
    <h2><?php echo $settings->my_field_0; ?></h2>
    <div class="res-title"><strong><?php echo $settings->my_field_2; ?></strong></div>
    <div class="city"><?php echo $settings->my_field_1; ?></div>
    <div class="res-description"><?php echo $settings->my_field_3; ?></div>
    <small>
        <span><?php echo $settings->my_field_4; ?>, </span>
        <span><?php echo $settings->my_field_5; ?></span>
    </small>

    <div> <strong>Google Map API Key:</strong> <?php echo $settings->my_field_7; ?></div>

    <hr>



</div>

<div>

    <? 
    $restaurant = $settings->my_form_field;
    foreach ($restaurant as $item){
        echo '<strong>' . $item->RName . '</strong>' . ' | ' . $item->RDesc . ' | ' . $item->RLat . ',' . $item->RLng . '<br>';
    }

    ?>



</div>

<script>
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
function initMap() {


    const res1 = {
        lat: <?php echo $restaurant[0]->RLat; ?>,
        lng: <?php echo $restaurant[0]->RLng ?>
    };


    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 6,
        center: res1,
        styles: [{
                elementType: "geometry",
                stylers: [{
                    color: "#242f3e"
                }]
            },
            {
                elementType: "labels.text.stroke",
                stylers: [{
                    color: "#242f3e"
                }],
            },
            {
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#746855"
                }],
            },
            {
                featureType: "administrative.locality",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#d59563"
                }],
            },
            {
                featureType: "poi",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#d59563"
                }],
            },
            {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [{
                    color: "#263c3f"
                }],
            },
            {
                featureType: "poi.park",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#6b9a76"
                }],
            },
            {
                featureType: "road",
                elementType: "geometry",
                stylers: [{
                    color: "#38414e"
                }],
            },
            {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [{
                    color: "#212a37"
                }],
            },
            {
                featureType: "road",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#9ca5b3"
                }],
            },
            {
                featureType: "road.highway",
                elementType: "geometry",
                stylers: [{
                    color: "#746855"
                }],
            },
            {
                featureType: "road.highway",
                elementType: "geometry.stroke",
                stylers: [{
                    color: "#1f2835"
                }],
            },
            {
                featureType: "road.highway",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#f3d19c"
                }],
            },
            {
                featureType: "transit",
                elementType: "geometry",
                stylers: [{
                    color: "#2f3948"
                }],
            },
            {
                featureType: "transit.station",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#d59563"
                }],
            },
            {
                featureType: "water",
                elementType: "geometry",
                stylers: [{
                    color: "#17263c"
                }],
            },
            {
                featureType: "water",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#515c6d"
                }],
            },
            {
                featureType: "water",
                elementType: "labels.text.stroke",
                stylers: [{
                    color: "#17263c"
                }],
            },
        ],
    });

    setMarkers(map);




    function setMarkers(map) {

        <?php
        foreach($restaurant as $item) {
            echo 'var marker = new google.maps.Marker({
                position:' . '{ lat:'. $item->RLat . ',' . 'lng:' . $item->RLng . '}' .',
                map,
               
    
            });' .
            
           ' 
           var infowindow = new google.maps.InfoWindow({
            content: ' . '"' . "<h3>" . $item->RName . "</h3>" . "<br>" . "<p class='description'>" .$item->RDesc . "</p>" . '"' . ",
        });


        google.maps.event.addListener( marker, 'click', function(e){
            infowindow.setContent(" . '"'. "<h3>" . $item->RName . "</h3>" . "<br>" . "<p class='description'>" .$item->RDesc . "</p>"  . '"' . ");
            infowindow.open( map, this );
        }.bind( marker ) );
            ";
        } 
        
        
        ?>


    }

    const contentString =
        '<div>' +
        '<h4>' + "<?php echo $restaurant[0]->RName; ?></h4>" +
        '<div id="bodyContent">' +
        "<?php echo $restaurant[0]->RName; ?>" +
        "</div>";





}
</script>




<hr>





<div id="map"></div>










<div class="mt-4" style="color:darkslategray"><?php echo $module->example_method(); ?></div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $settings->my_field_7; ?>&callback=initMap&libraries=&v=weekly"
    async>
</script>

<!-- AIzaSyBZteyXPArYOmiuND16g71NhOC0xdp1WgU -->