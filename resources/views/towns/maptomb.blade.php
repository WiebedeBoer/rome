@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
@include('towns.mapmenu')
<div class="worldmap">
    <div class="worldmapimg">
	<?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
	<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" zoomAndPan="magnify" viewBox="0 0 4000 4000">
	<g z-index="1">
	<image xlink:href="img/rome.png" x="0" y="0" width="4000" height="4000">
	</g>
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Tombs &amp; Graves</text></g>
	@foreach($towns as $town)

			@if($town->burial_mound_count >=1 && $town->grave_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (burial mound and graves)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(192,128,192)" stroke="rgb(0,192,224)" stroke-width="5" /></a></g>
			@elseif($town->tomb_count >=1 && $town->grave_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (tomb and graves)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(192,0,192)" stroke="rgb(0,192,224)" stroke-width="5" /></a></g>
			@elseif($town->pyramid_count >=1 && $town->grave_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (pyramid and graves)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(192,192,0)" stroke="rgb(0,192,224)" stroke-width="5" /></a></g>

			@elseif($town->burial_mound_count >=1 && $town->grave_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (burial mound)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,128,192)" stroke="black" stroke-width="4" /></a></g>
			@elseif($town->tomb_count >=1 && $town->grave_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (tomb)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,0,192)" stroke="black" stroke-width="4" /></a></g>
			@elseif($town->pyramid_count >=1 && $town->grave_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (pyramid)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,192,0)" stroke="black" stroke-width="4" /></a></g>

			@elseif($town->pyramid_count ==0 && $town->tomb_count ==0 && $town->pyramid_count ==0 && $town->grave_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (graves)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,192,224)" stroke="black" stroke-width="4" /></a></g>

			@else
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="9" fill="rgb(0,0,0)" stroke="black" stroke-width="2" /></a></g>
			@endif
	@endforeach
	</svg>
    </div>
</div>
@endsection