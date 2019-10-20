$(function () {
    var marker = [];
    var image = new ol.style.Circle({
        radius: 15,
        fill: null,
        stroke: new ol.style.Stroke({ color: 'red', width: 1 })
    });

    var styles = {
        'Point': new ol.style.Style({
            image: image
        }),
        'MultiPoint': new ol.style.Style({
            image: image
        }),
        'MultiPolygon': new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'yellow',
                width: 1
            }),
            fill: new ol.style.Fill({
                color: 'rgba(255, 255, 0, 0.1)'
            })
        }),
        'Polygon': new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'blue',
                lineDash: [4],
                width: 3
            }),
            fill: new ol.style.Fill({
                color: 'rgba(0, 0, 255, 0.1)'
            })
        }),
        'GeometryCollection': new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'magenta',
                width: 2
            }),
            fill: new ol.style.Fill({
                color: 'magenta'
            }),
            image: new ol.style.Style({
                radius: 10,
                fill: null,
                stroke: new ol.style.Stroke({
                    color: 'magenta'
                })
            })
        }),
        'Circle': new ol.style.Style({
            stroke: new ol.style.Stroke({
                color: 'red',
                width: 2
            }),
            fill: new ol.style.Fill({
                color: 'rgba(255,0,0,0.2)'
            })
        })
    };
    var styleFunction = function (feature) {
        return styles[feature.getGeometry().getType()];
    };


    $.get('http://localhost:8000/access', function (pontos) {
        pontos = JSON.parse(pontos);
        $.each(pontos, function (index, ponto) {
            // vectorSource.addFeature(new ol.Feature(new ol.geom.Point(parseFloat(ponto.latFrom), parseFloat(ponto.lonFrom))));
            marker.push(new ol.Feature({
                geometry: new ol.geom.Point(
                    ol.proj.fromLonLat([ponto.latTo,ponto.lonTo])
                ),
            }));

        });

        var vectorSource = new ol.source.Vector({
            features: marker
        });
        var vectorLayer = new ol.layer.Vector({
            source: vectorSource,
            style: styleFunction
        });

        var map = new ol.Map({
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM() //EPSG:3857
                }),
                vectorLayer
            ],
            controls: [new ol.control.ScaleLine],
            target: 'map',
            view: new ol.View({
                center: [0, 0],
                zoom: 2
            })
        });

        map.addControl(new ol.control.FullScreen);
    })
});
