

$(document).ready(function () {

    //  alert('hii');
    $('#getSearchResultsA').on('click', function () {
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
                success: function (data) {
                    document.querySelector('#search-data-A').innerHTML = data
                },
                error: function (e) {
                    alert("Some error occured. Please try again later.");
                }
            });

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
                success: function (response) {
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
                    ], function (Map, GraphicsLayer, Graphic, Point,
                        SimpleMarkerSymbol, InfoTemplate) {
                        map = new Map("newMapA", {
                            basemap: "topo-vector",
                            center: [data[0].longitude, data[0].latitude],
                            zoom: 7
                        });
                        var graphicsLayer = new GraphicsLayer();


                        for (var i = 0; i < data.length; i++) {
                            var point = new Point(data[i].longitude, data[i]
                                .latitude);
                            var pointSymbol = new SimpleMarkerSymbol({
                                "type": "esriSMS",
                                "style": "esriSMSTriangle",
                                "color": [0, 255, 0],
                                "size": 10,
                                "angle": 0,
                                "xoffset": 0,
                                "yoffset": 0,
                                "outline": {
                                    "color": [255, 255, 255],
                                    "width": 1
                                }
                            });
                            var infoTemplate = new InfoTemplate("Vaccination Center",
                                "State: ${state_name}<br/>District: ${district_name}<br/>Address: ${address}"
                            );

                            var pointGraphic = new Graphic(
                                point,
                                pointSymbol,
                                {
                                    "address": data[i].address,
                                    "state_name": data[i].state_name,
                                    "district_name": data[i].district_name
                                },
                                infoTemplate
                            );
                            graphicsLayer.add(pointGraphic);
                        }
                        map.addLayer(graphicsLayer);
                    });
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    console.log("Response:", xhr.responseText);
                }
            });
        } else {
            alert('State is required. Please select your state.')
        }
    });
    /*second ajax create map end */

    $('#getSearchResultsH').on('click', function () {
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
                success: function (data) {
                    document.querySelector('#search-data-H').innerHTML = data
                },
                error: function (e) {
                    alert("Some error occured. Please try again later.");
                }
            });

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
                success: function (response) {
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
                    ], function (Map, GraphicsLayer, Graphic, Point,
                        SimpleMarkerSymbol, InfoTemplate) {
                        map = new Map("newMapH", {
                            basemap: "topo-vector",
                            center: [data[0].longitude, data[0].latitude],
                            zoom: 7
                        });

                        var graphicsLayer = new GraphicsLayer();


                        for (var i = 0; i < data.length; i++) {
                            var point = new Point(data[i].longitude, data[i]
                                .latitude);
                            var pointSymbol = new SimpleMarkerSymbol({
                                "type": "esriSMS",
                                "style": "esriSMSTriangle",
                                "color": [0, 0, 255],
                                "size": 10,
                                "angle": 0,
                                "xoffset": 0,
                                "yoffset": 0,
                                "outline": {
                                    "color": [255, 255, 255],
                                    "width": 1
                                }
                            });


                            var infoTemplate = new InfoTemplate("Vaccination Center",
                                "State: ${state_name}<br/>District: ${district_name}<br/>Address: ${address}"
                            );

                            var pointGraphic = new Graphic(
                                point,
                                pointSymbol,
                                {
                                    "address": data[i].address,
                                    "state_name": data[i].state_name,
                                    "district_name": data[i].district_name
                                },
                                infoTemplate
                            );
                            graphicsLayer.add(pointGraphic);

                        }
                        map.addLayer(graphicsLayer);
                    });
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    console.log("Response:", xhr.responseText);
                }
            });
        } else {
            alert('State is required. Please select your state.')
        }
    });
    /*second ajax create map end */


    $('#getSearchResults').on('click', function () {
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
                success: function (data) {
                    document.querySelector('#search-data').innerHTML = data
                },
                error: function (e) {
                    alert("Some error occured. Please try again later.");
                }
            });

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
                success: function (response) {
                    var map;
                    var data = response.data;
                    //console.log(data);

                    require([
                        "esri/map",
                        "esri/layers/GraphicsLayer",
                        "esri/graphic",
                        "esri/geometry/Point",
                        "esri/symbols/SimpleMarkerSymbol",
                        "esri/InfoTemplate",
                        "dojo/domReady!"
                    ], function (Map, GraphicsLayer, Graphic, Point,
                        SimpleMarkerSymbol, InfoTemplate) {
                        map = new Map("newMapC", {
                            basemap: "topo-vector",
                            center: [data[0].longitude, data[0].latitude],
                            zoom: 7
                        });

                        var graphicsLayer = new GraphicsLayer();



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
                            var infoTemplate = new InfoTemplate("Vaccination Center",
                                "State: ${state_name}<br/>District: ${district_name}<br/>Address: ${address}"
                            );

                            var pointGraphic = new Graphic(
                                point,
                                pointSymbol,
                                {
                                    "address": data[i].address,
                                    "state_name": data[i].state_name,
                                    "district_name": data[i].district_name
                                },
                                infoTemplate
                            );
                            graphicsLayer.add(pointGraphic);

                        }
                        map.addLayer(graphicsLayer);
                    });
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    console.log("Response:", xhr.responseText);
                }
            });
        } else {
            alert('State is required. Please select your state.')
        }
    });
    /*second ajax create map end */
});




$(document).ready(function () {

    //animal center
    $.ajax({
        url: baseUrl + '/onload-animal-center',
        type: 'get',
        success: function (response) {
            //console.log(response);
            var map;
            var data = response.data;

            //  console.log(data)

            require([
                "esri/map",
                "esri/layers/GraphicsLayer",
                "esri/graphic",
                "esri/geometry/Point",
                "esri/symbols/SimpleMarkerSymbol",
                "esri/InfoTemplate", // Added InfoTemplate module
                "dojo/domReady!"
            ], function (Map, GraphicsLayer, Graphic, Point,
                SimpleMarkerSymbol, InfoTemplate) {
                map = new Map("newMapA", {
                    basemap: "topo-vector",
                    center: [data[0].longitude, data[0].latitude],
                    zoom: 4
                });
                var graphicsLayer = new GraphicsLayer();

                for (var i = 0; i < data.length; i++) {
                    var point = new Point(data[i].longitude, data[i]
                        .latitude);
                    var pointSymbol = new SimpleMarkerSymbol({
                        "type": "esriSMS",
                        "style": "esriSMSTriangle",
                        "color": [0, 255, 0],
                        "size": 10,
                        "angle": 0,
                        "xoffset": 0,
                        "yoffset": 0,
                        "outline": {
                            "color": [255, 255, 255],
                            "width": 1
                        }
                    });

                    var infoTemplate = new InfoTemplate("Vaccination Center",
                        "State: ${state_name}<br/>District: ${district_name}<br/>Address: ${address}"
                    );

                    var pointGraphic = new Graphic(
                        point,
                        pointSymbol,
                        {
                            "address": data[i].address,
                            "state_name": data[i].state_name,
                            "district_name": data[i].district_name
                        },
                        infoTemplate
                    );

                    graphicsLayer.add(pointGraphic);
                }
                map.addLayer(graphicsLayer);


            });
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);
            console.log("Response:", xhr.responseText);
        }
    });




    //human center
    $.ajax({
        url: baseUrl + '/onload-human-center',
        type: 'get',
        success: function (response) {
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
            ], function (Map, GraphicsLayer, Graphic, Point,
                SimpleMarkerSymbol, InfoTemplate) {
                map = new Map("newMapH", {
                    basemap: "topo-vector",
                    center: [data[0].longitude, data[0].latitude],
                    zoom: 4
                });

                var graphicsLayer = new GraphicsLayer();


                for (var i = 0; i < data.length; i++) {
                    var point = new Point(data[i].longitude, data[i]
                        .latitude);
                    var pointSymbol = new SimpleMarkerSymbol({
                        "type": "esriSMS",
                        "style": "esriSMSTriangle",
                        "color": [0, 0, 255],
                        "size": 10,
                        "angle": 0,
                        "xoffset": 0,
                        "yoffset": 0,
                        "outline": {
                            "color": [255, 255, 255],
                            "width": 1
                        }
                    });

                    var infoTemplate = new InfoTemplate("Vaccination Center",
                        "State: ${state_name}<br/>District: ${district_name}<br/>Address: ${address}"
                    );

                    var pointGraphic = new Graphic(
                        point,
                        pointSymbol,
                        {
                            "address": data[i].address,
                            "state_name": data[i].state_name,
                            "district_name": data[i].district_name
                        },
                        infoTemplate
                    );
                    graphicsLayer.add(pointGraphic);
                }
                map.addLayer(graphicsLayer);
            });
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);
            console.log("Response:", xhr.responseText);
        }
    });

    //client center
    $.ajax({
        url: baseUrl + '/onload-client-center',
        type: 'get',

        success: function (response) {
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
            ], function (Map, GraphicsLayer, Graphic, Point,
                SimpleMarkerSymbol, InfoTemplate) {
                map = new Map("newMapC", {
                    basemap: "topo-vector",
                    center: [data[0].longitude, data[0].latitude],
                    zoom: 4
                });

                var graphicsLayer = new GraphicsLayer();

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
                    var infoTemplate = new InfoTemplate("Vaccination Center",
                        "State: ${state_name}<br/>District: ${district_name}<br/>Address: ${address}"
                    );

                    var pointGraphic = new Graphic(
                        point,
                        pointSymbol,
                        {
                            "address": data[i].address,
                            "state_name": data[i].state_name,
                            "district_name": data[i].district_name
                        },
                        infoTemplate
                    );
                    graphicsLayer.add(pointGraphic);

                }
                map.addLayer(graphicsLayer);
            });
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);
            console.log("Response:", xhr.responseText);
        }
    });

});  
