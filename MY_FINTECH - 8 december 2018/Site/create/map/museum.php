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