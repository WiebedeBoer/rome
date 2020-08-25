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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Fabrics &amp; Silk Caravans</text></g>
	@foreach($towns as $town) 
		@if($town->fiber =="flax" && $town->fabric =="silk caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (flax and silk)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(183,169,155)" stroke="rgb(137,146,239)" stroke-width="5" /></a>
			</g>
		@elseif($town->fiber =="cotton" && $town->fabric =="silk caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (cotton and silk)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(183,169,155)" stroke="rgb(116,54,22)" stroke-width="5" /></a>
			</g>
		@elseif($town->fiber =="flax" && $town->fabric =="none")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (flax)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(238,220,130)" stroke="black" stroke-width="4" /></a>
			</g>
		@elseif($town->fiber =="cotton" && $town->fabric =="none")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (cotton)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(116,54,22)" stroke="black" stroke-width="4" /></a>
			</g>
		@elseif($town->fiber =="none" && $town->fabric =="silk caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (silk)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(183,169,155)" stroke="black" stroke-width="4" /></a>
			</g>
		@else
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="9" fill="rgb(0,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@endif
	@endforeach
	</svg>
    </div>
</div>
@endsection