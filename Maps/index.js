import 'ol/ol.css';
import Feature from 'ol/Feature';
import Map from 'ol/Map';
import Overlay from 'ol/Overlay';
import View from 'ol/View';
import Point from 'ol/geom/Point';
import {Tile as TileLayer, Vector as VectorLayer} from 'ol/layer';
import TileJSON from 'ol/source/TileJSON';
import VectorSource from 'ol/source/Vector';
import {Icon, Style} from 'ol/style';

var lat = 40.4456419;
var lng = -79.969139;

var iconFeature = new Feature({
  geometry: new ol.geom.Point(ol.proj.transform([lng, lat], 'EPSG:4326', 'EPSG:3857')),
  name: 'Bicycle',
  population: 4000,
  rainfall: 500
});

var iconStyle = new Style({
  image: new Icon({
    anchor: [0.5, 46],
    anchorXUnits: 'fraction',
    anchorYUnits: 'pixels',
    src: '/data/cycling.png'
  })
});

iconFeature.setStyle(iconStyle);

var vectorSource = new VectorSource({
  features: [iconFeature]
});

var vectorLayer = new VectorLayer({
  source: vectorSource
});

var rasterLayer = new ol.layer.Tile({
    source: new ol.source.OSM()
});

var map = new ol.Map({
    layers: [rasterLayer, vectorLayer],
    target: document.getElementById('map'),
    controls: ol.control.defaults({
      attributionOptions: {
        collapsible: false
      }
    }),
    view: new ol.View({
      center: ol.proj.fromLonLat([lng, lat]),
      zoom: 13
    })
  });

var element = document.getElementById('popup');

var popup = new Overlay({
  element: element,
  positioning: 'bottom-center',
  stopEvent: false,
  offset: [0, -50]
});
map.addOverlay(popup);

// display popup on click
map.on('click', function(evt) {
  var feature = map.forEachFeatureAtPixel(evt.pixel,
    function(feature) {
      return feature;
    });
  if (feature) {
    var coordinates = feature.getGeometry().getCoordinates();
    popup.setPosition(coordinates);
    $(element).popover({
      placement: 'top',
      html: true,
      content: feature.get('name')
    });
    $(element).popover('show');
  } else {
    $(element).popover('destroy');
  }
});

// change mouse cursor when over marker
map.on('pointermove', function(e) {
  if (e.dragging) {
    $(element).popover('destroy');
    return;
  }
  var pixel = map.getEventPixel(e.originalEvent);
  var hit = map.hasFeatureAtPixel(pixel);
  map.getTarget().style.cursor = hit ? 'pointer' : '';
});
