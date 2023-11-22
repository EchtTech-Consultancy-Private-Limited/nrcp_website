

$(document).ready(function() {

    $('#getSearchResultsA').on('click', function() {
        $('#newMapA').html('');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        /*first ajax create table start */
        var statename = $('#stateA').val();
        var districtname = $('#citiesA').val();
        if (statename != 0 && statename !== "") {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: baseUrl + '/get-vaccination-center-A',
                type: "POST",
                data: {
                    'state_name': statename,
                    'city_name': districtname // in header request I'm getting value [productName: plastic product] *
                },
                success: function(data) {
                    document.querySelector('#search-data-A').innerHTML = data
                },
                error: function(e) {
                    alert("Some error occured. Please try again later.");
                }
            });
        } else {
            alert('State is required. Please select your state.')
        }
        /*first ajax create table end */

        /*second ajax create map start */
        var state = $('#stateA').val();
        var citiess = $('#citiesA').val();
        $.ajax({
            url: baseUrl + '/map-animal-center',
            type: 'get',
            data: {
                stateValue: state,
                cityValue: citiess
            },
            success: function(response) {
                var map;
                var data = response.data;

                require([
                    "esri/map",
                    "esri/layers/GraphicsLayer",
                    "esri/graphic",
                    "esri/geometry/Point",
                    "esri/symbols/SimpleMarkerSymbol",
                    "esri/InfoTemplate", // Added InfoTemplate module
                    "dojo/domReady!"
                ], function(Map, GraphicsLayer, Graphic, Point,
                    SimpleMarkerSymbol, InfoTemplate) {
                    map = new Map("newMapA", {
                        basemap: "topo-vector",
                        center: [data[0].longitude, data[0].latitude],
                        zoom: 5
                    });
                    var graphicsLayer = new GraphicsLayer();

                    // if (citiess != '') {
                    //     // Single marker with hover effect
                    //     var point = new Point(data[0].longitude, data[0]
                    //         .latitude);
                    //     var pointSymbol = new SimpleMarkerSymbol({
                    //         "type": "esriSMS",
                    //         "style": "esriSMSTriangle",
                    //         "color": [255, 0, 0],
                    //         "size": 10,
                    //         "angle": 0,
                    //         "xoffset": 0,
                    //         "yoffset": 0,
                    //         "outline": {
                    //             "color": [255, 255, 255],
                    //             "width": 1
                    //         }
                    //     });

                    //     // Add InfoTemplate for hover effect
                    //     var infoTemplate = new InfoTemplate(
                    //         "Vaccination Center", "${address}");
                    //     var pointGraphic = new Graphic(point, pointSymbol, {"address": data[0].address},
                    //         infoTemplate);
                    //     graphicsLayer.add(pointGraphic);
                    // } else {
                        for (var i = 0; i < data.length; i++) {
                            var point = new Point(data[i].longitude, data[i]
                                .latitude);
                            var pointSymbol = new SimpleMarkerSymbol({
                                "type": "esriSMS",
                                "style": "esriSMSTriangle",
                                "color": [255, 0, 0],
                                "size": 10,
                                "angle": 0,
                                "xoffset": 0,
                                "yoffset": 0,
                                "outline": {
                                    "color": [255, 255, 255],
                                    "width": 1
                                }
                            });
                            // Add InfoTemplate for hover effect
                            var infoTemplate = new InfoTemplate("Vaccination Center", "${address}");
                            var pointGraphic = new Graphic(point, pointSymbol, {"address": data[i].address}, infoTemplate);
                            graphicsLayer.add(pointGraphic);
                        // }
                    }
                    map.addLayer(graphicsLayer);
                });
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
                console.log("Response:", xhr.responseText);
            }
        });
    });
    /*second ajax create map end */

    $('#getSearchResultsH').on('click', function() {
        $('#newMapH').html('');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        /*first ajax create tabel start */
        var statename = $('#stateH').val();
        var districtname = $('#citiesH').val();
        if (statename != 0 && statename !== "") {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: baseUrl + '/get-vaccination-center-H',
                type: "POST",
                data: {
                    'state_name': statename,
                    'city_name': districtname // in header request I'm getting value [productName: plastic product] *
                },
                success: function(data) {
                    document.querySelector('#search-data-H').innerHTML = data
                },
                error: function(e) {
                    alert("Some error occured. Please try again later.");
                }
            });
        } else {
            alert('State is required. Please select your state.')
        }
        /*first ajax create tabel end */

        /*second ajax create map start */
        var state = $('#stateH').val();
        var citiesss = $('#citiesH').val();
        $.ajax({
            url: baseUrl + '/map-human-center',
            type: 'get',
            data: {
                stateValue: state,
                cityValue: citiesss
            },
            success: function(response) {
                var map;
                var data = response.data;

                require([
                    "esri/map",
                    "esri/layers/GraphicsLayer",
                    "esri/graphic",
                    "esri/geometry/Point",
                    "esri/symbols/SimpleMarkerSymbol",
                    "esri/InfoTemplate",
                    "dojo/domReady!"
                ],function(Map, GraphicsLayer, Graphic, Point,
                    SimpleMarkerSymbol,InfoTemplate) {
                    map = new Map("newMapH", {
                        basemap: "topo-vector",
                        center: [data[0].longitude, data[0].latitude],
                        zoom: 5
                    });

                    var graphicsLayer = new GraphicsLayer();

                    // if (citiesss != '') {

                    //     // alert('one')
                    //     var point = new Point(data[0].longitude, data[0]
                    //         .latitude);
                    //     var pointSymbol = new SimpleMarkerSymbol({
                    //         "type": "esriSMS",
                    //         "style": "esriSMSTriangle",
                    //         "color": [255, 0, 0],
                    //         "size": 10,
                    //         "angle": 0,
                    //         "xoffset": 0,
                    //         "yoffset": 0,
                    //         "outline": {
                    //             "color": [255, 255, 255],
                    //             "width": 1
                    //         }
                    //     });

                    //         var infoTemplate = new InfoTemplate("Vaccination Center", "${address}");
                    //         var pointGraphic = new Graphic(point, pointSymbol, {"address": data[0].address}, infoTemplate);
                    //         graphicsLayer.add(pointGraphic);

                    // } else {

                        for (var i = 0; i < data.length; i++) {
                            var point = new Point(data[i].longitude, data[i]
                                .latitude);
                            var pointSymbol = new SimpleMarkerSymbol({
                                "type": "esriSMS",
                                "style": "esriSMSTriangle",
                                "color": [255, 0, 0],
                                "size": 10,
                                "angle": 0,
                                "xoffset": 0,
                                "yoffset": 0,
                                "outline": {
                                    "color": [255, 255, 255],
                                    "width": 1
                                }
                            });
                            // var pointGraphic = new Graphic(point, pointSymbol);
                            // graphicsLayer.add(pointGraphic);

                            var infoTemplate = new InfoTemplate("Vaccination Center", "${address}");
                            var pointGraphic = new Graphic(point, pointSymbol, {"address": data[i].address}, infoTemplate);
                            graphicsLayer.add(pointGraphic);
                        // }
                    }
                    map.addLayer(graphicsLayer);
                });
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
                console.log("Response:", xhr.responseText);
            }
        });
    });
    /*second ajax create map end */


    $('#getSearchResults').on('click', function() {
        $('#newMapC').html('');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        /*first ajax create tabel start */
        var statename = $('#stateC').val();
        var districtname = $('#citiesC').val();
        if (statename != 0 && statename !== "") {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: baseUrl + '/get-vaccination-center',
                type: "POST",
                data: {
                    'state_name': statename,
                    'city_name': districtname // in header request I'm getting value [productName: plastic product] *
                },
                success: function(data) {
                    document.querySelector('#search-data').innerHTML = data
                },
                error: function(e) {
                    alert("Some error occured. Please try again later.");
                }
            });
        } else {
            alert('State is required. Please select your state.')
        }
        /*first ajax create tabel end */
        /*second ajax create map start */
        var state = $('#stateC').val();
        var citiesssss = $('#citiesC').val();
        $.ajax({
            url: baseUrl + '/map-client-center',
            type: 'get',
            data: {
                stateValue: state,
                cityValue: citiesssss
            },
            success: function(response) {
                var map;
                var data = response.data;

                require([
                    "esri/map",
                    "esri/layers/GraphicsLayer",
                    "esri/graphic",
                    "esri/geometry/Point",
                    "esri/symbols/SimpleMarkerSymbol",
                    "esri/InfoTemplate",
                    "dojo/domReady!"
                ], function(Map, GraphicsLayer, Graphic, Point,
                    SimpleMarkerSymbol,InfoTemplate) {
                    map = new Map("newMapC", {
                        basemap: "topo-vector",
                        center: [data[0].longitude, data[0].latitude],
                        zoom: 5
                    });

                    var graphicsLayer = new GraphicsLayer();

                    // if (citiesssss != '') {
                    //     //alert("one")
                    //     var point = new Point(data[0].longitude, data[0]
                    //         .latitude);
                    //     var pointSymbol = new SimpleMarkerSymbol({
                    //         "type": "esriSMS",
                    //         "style": "esriSMSTriangle",
                    //         "color": [255, 0, 0],
                    //         "size": 10,
                    //         "angle": 0,
                    //         "xoffset": 0,
                    //         "yoffset": 0,
                    //         "outline": {
                    //             "color": [255, 255, 255],
                    //             "width": 1
                    //         }
                    //     });
                    //     var infoTemplate = new InfoTemplate("Vaccination Center", "${address}");
                    //         var pointGraphic = new Graphic(point, pointSymbol, {"address": data[0].address}, infoTemplate);
                    //         graphicsLayer.add(pointGraphic);
                    // } else {

                        for (var i = 0; i < data.length; i++) {
                            var point = new Point(data[i].longitude, data[i]
                                .latitude);
                            var pointSymbol = new SimpleMarkerSymbol({
                                "type": "esriSMS",
                                "style": "esriSMSTriangle",
                                "color": [255, 0, 0],
                                "size": 10,
                                "angle": 0,
                                "xoffset": 0,
                                "yoffset": 0,
                                "outline": {
                                    "color": [255, 255, 255],
                                    "width": 1
                                }
                            });
                            var infoTemplate = new InfoTemplate("Vaccination Center", "${address}");
                            var pointGraphic = new Graphic(point, pointSymbol, {"address": data[i].address}, infoTemplate);
                            graphicsLayer.add(pointGraphic);
                        // }
                    }
                    map.addLayer(graphicsLayer);
                });
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
                console.log("Response:", xhr.responseText);
            }
        });
    });
    /*second ajax create map end */
});
