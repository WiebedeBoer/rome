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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Libraries &amp; Academies</text></g>
	@foreach($towns as $town) 
		@if($town->library_count >=1 && $town->academy_count >=1)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (bibliotheca and academy)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(255,255,0)" stroke="rgb(192,0,0)" stroke-width="5" /></a>
			</g>
		@elseif($town->library_count >=1 && $town->academy_count ==0)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (bibliotheca)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(255,255,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@elseif($town->library_count ==0 && $town->academy_count >=1)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (academy)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,0,0)" stroke="black" stroke-width="4" /></a>
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