<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicG9kbzFza2lpIiwiYSI6ImNqcGJsOWVybTI1bGgzcG40NHB0aHplYWMifQ.8kU5QIltsf_U1WCwhthmXA';

    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken
    });

    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v9',
        center: [30.300640, 59.935851],
        zoom: 12
    });

    map.on("load", function() {
        map.loadImage("https://playground24.ru/img/bar.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_bar", image);
            map.addLayer({
                id: "bar_1",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.336099, 59.922471]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_bar",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/bar.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_bar", image);
            map.addLayer({
                id: "bar_2",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.284934, 59.947456]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_bar",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/bar.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_bar", image);
            map.addLayer({
                id: "bar_3",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [59.933510, 30.328543]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_bar",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/bus.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_bus", image);
            map.addLayer({
                id: "bus_1",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.361967, 59.929929]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_bus",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/bus.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_bus", image);
            map.addLayer({
                id: "bus_2",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.298970, 59.906699]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_bus",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/food.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_food", image);
            map.addLayer({
                id: "food_1",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.317511, 59.935790]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_food",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/food.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_food", image);
            map.addLayer({
                id: "food_2",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.358984, 59.931566]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_food",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/food.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_food", image);
            map.addLayer({
                id: "food_3",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.377895, 59.939786]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_food",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/food.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_food", image);
            map.addLayer({
                id: "food_4",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.308811, 59.968914]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_food",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/food.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_food", image);
            map.addLayer({
                id: "food_5",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.267481, 59.852296]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_food",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_hotel", image);
            map.addLayer({
                id: "hotel_1",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.366474, 59.930364]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_hotel",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_hotel", image);
            map.addLayer({
                id: "hotel_2",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.215601, 59.938763]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_hotel",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_hotel", image);
            map.addLayer({
                id: "hotel_3",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.315220, 59.868926]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_hotel",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_hotel", image);
            map.addLayer({
                id: "hotel_4",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.340506, 59.909055]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_hotel",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/hotel.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_hotel", image);
            map.addLayer({
                id: "hotel_5",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.386570, 59.924679]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_hotel",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/bar.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_bar", image);
            map.addLayer({
                id: "bar_4",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [59.928584, 30.360797]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_bar",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/monument.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_monument", image);
            map.addLayer({
                id: "bus_1",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.315946, 59.938841]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_monument",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/monument.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_monument", image);
            map.addLayer({
                id: "bus_2",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.362491, 59.930926]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_monument",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/museum.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_museum", image);
            map.addLayer({
                id: "bar_1",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.313138, 59.940803]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_museum",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/museum.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_museum", image);
            map.addLayer({
                id: "bar_2",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.300646, 59.926571]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_museum",
                }
            });
        });
        map.loadImage("https://playground24.ru/img/museum.png", function(error, image) {
            if (error) throw error;
            map.addImage("marker_museum", image);
            map.addLayer({
                id: "bar_3",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [30.261086, 59.938907]
                            },
                        }]
                    }
                },
                layout: {
                    "icon-image": "marker_museum",
                }
            });
        });
    });

</script>
