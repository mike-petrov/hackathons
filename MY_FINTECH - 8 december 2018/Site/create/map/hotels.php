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