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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Oracles &amp; Sacred Groves</text></g>
	@foreach($towns as $town)
			@if($town->grove_count ==0 && $town->garden_count ==0 && $town->oracle_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (oracle)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,0,192)" stroke="rgb(0,0,0)" stroke-width="4" /></a></g>
			@elseif($town->grove_count >=1 && $town->garden_count ==0 && $town->oracle_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (sacred grove and oracle)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(160,192,128)" stroke="rgb(192,0,192)" stroke-width="4" /></a></g>
			@elseif($town->grove_count >=1 && $town->garden_count ==0 && $town->oracle_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (sacred grove)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(160,192,128)" stroke="rgb(0,0,0)" stroke-width="4" /></a></g>
			@elseif($town->grove_count ==0 && $town->garden_count >=1 && $town->oracle_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (hanging garden and oracle)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,160,64)" stroke="rgb(192,0,192)" stroke-width="4" /></a></g>
			@elseif($town->grove_count ==0 && $town->garden_count >=1 && $town->oracle_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (hanging garden)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,160,64)" stroke="rgb(0,0,0)" stroke-width="4" /></a></g>
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