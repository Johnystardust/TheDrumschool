<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Url:         http://media-critics.nl
 */

/* Template Name: Home */

get_template_part('header');
?>

<div id="header" class="container-fluid" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/images/thedrumschool2.jpg'; ?>)">
    <div class="header-content text-center">
        <div class="middle-wrap">
            <div class="middle">
                <img class="header-logo" src="<?php echo get_stylesheet_directory_uri().'/assets/images/LogoDrumschoolOriginalWhite.png'; ?>" alt=""/>
                <h1>Drumlessen voor de beginner en gevorderde</h1>
            </div>

        </div>
    </div>
</div>

<div id="call-to-action" class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="call-to-action-title">
                <h3>Meld je aan voor een gratis proefles</h3>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="call-to-action-form">
                <input class="input-field" type="text" placeholder="e-mail adres"/>
                <input class="submit" type="submit" value="aanmelden"/>
            </div>
        </div>
    </div>
</div>

<div id="content" class="container">
    <div class="col-md-6">
        <h1>The Drumschool</h1>
        <span class="divider"></span>
        <h3>Spelenderwijs leren drummen</h3>
        <br/><br/>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
            sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
        </p>
        <a class="main-button" href="#">Lees meer</a>
    </div>

    <div class="col-md-6">
        <img class="content-image" src="<?php echo get_stylesheet_directory_uri().'/assets/images/stickcymbal.png'; ?>" alt=""/>
    </div>
</div>

<div id="page-links" class="container-fluid">
    <div class="col-md-4">
        <a class="page-link" href="#">
            <h4>Lessen</h4>
            <h5>Lesplan, methode</h5>
        </a>
    </div>
    <div class="col-md-4">
        <a class="page-link" href="#">
            <h4>Tarieven</h4>
            <h5>Bekijk de tarieven</h5>
        </a>
    </div>
    <div class="col-md-4">
        <a class="page-link" href="">
            <h4>Vakanties</h4>
            <h5>Vakantiedata</h5>
        </a>
    </div>
</div>

<div id="contact" class="container-fluid">
    <div class="row">
        <div id="form" class="col-md-4">
            <div class="form-wrap">
                <h3>Vragen of opmerkingen</h3>
                <form action="">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Naam *"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="e-mail *"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="7" placeholder="Bericht *"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="main-button" type="submit" value="versturen"/>
                    </div>
                </form>
            </div>
        </div>

        <div id="maps" class="col-md-8">
            <script>
                function initMap() {

                    // Create an array of styles.
                    var styles = [
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e9e9e9"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dedede"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#333333"
                                },
                                {
                                    "lightness": 40
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f2f2f2"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        }
                    ]

                    // Create a new StyledMapType object, passing it the array of styles,
                    // as well as the name to be displayed on the map type control.
                    var styledMap = new google.maps.StyledMapType(styles,
                        {name: "Styled Map"});

                    // Create a map object, and include the MapTypeId to add
                    // to the map type control.
                    var mapOptions = {
                        zoom: 11,
                        center: new google.maps.LatLng(52.3311, 5.5405),
                        mapTypeControlOptions: {
                            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                        }
                    };
                    var map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);

                    //Associate the styled map with the MapTypeId and set it to display.
                    map.mapTypes.set('map_style', styledMap);
                    map.setMapTypeId('map_style');
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTt9O5A-JKM5ashi6K_3rCsHCdSkkVUuU&callback=initMap"></script>
            <div id="map-canvas"></div>
        </div>
    </div>
</div>

<?php
get_template_part('footer');