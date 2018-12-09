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