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