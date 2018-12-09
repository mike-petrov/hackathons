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