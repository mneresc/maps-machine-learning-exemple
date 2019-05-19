$(function() {
    var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        title:'Map Exemple By <a href="https://github.com/mneresc">@mneresc</a>',
        tipLabel:'Map Exemple By <a href="https://github.com/mneresc">@mneresc</a>',
        view: new ol.View({
          center: ol.proj.fromLonLat([37.41, 8.82]),
          zoom: 4
        })
      });
});
