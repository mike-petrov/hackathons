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