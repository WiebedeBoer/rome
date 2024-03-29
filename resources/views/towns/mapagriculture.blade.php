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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Agriculture</text></g>
	@foreach($towns as $town)
		@if($town->agriculture >=100 && $town->agriculture <=399)	
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} (unproductive)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(192,92,0)" stroke="black" stroke-width="4" /></a>
            </g>
        @elseif($town->agriculture >=400 && $town->agriculture <=599)	
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} (productive)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,192,0)" stroke="black" stroke-width="4" /></a>
            </g>
        @elseif($town->agriculture >=600 && $town->agriculture <=799)	
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} (fruitful)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,192,0)" stroke="black" stroke-width="4" /></a>
            </g>
        @elseif($town->agriculture >=800)	
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} (flourishing)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(64,192,64)" stroke="black" stroke-width="4" /></a>
			</g>
		@else
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} (waste)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="10" fill="rgb(192,32,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@endif
	@endforeach
	</svg>	
    </div>
</div>
@endsection