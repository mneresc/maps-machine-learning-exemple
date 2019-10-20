@extends('layouts.default')
@section('title')
   Map
@stop
@section('content')
<div class="col-12" id="map">

</div>

@stop

@section('js')
    <script src="{{ asset('js/map.js') }}" defer></script>
@stop

@section('code')
@php
highlight_string("
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
        });")
@endphp
@stop
