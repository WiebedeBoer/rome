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
	@foreach($towns as $town)
		@if($town->defenses >=100 && $town->defenses <=299)	
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} (dirt wall)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(64,128,192)" stroke="black" stroke-width="4" /></a>
            </g>
        @elseif($town->defenses >=300 && $town->defenses <=599)	
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} (pallisade)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(192,92,0)" stroke="black" stroke-width="5" /></a>
            </g>
        @elseif($town->defenses >=600)	
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} (stone wall)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(192,192,192)" stroke="black" stroke-width="6" /></a>
			</g>
		@else
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}}</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="10" fill="rgb(0,0,0)" stroke="black" stroke-width="2" /></a>
			</g>
		@endif
	@endforeach
	</svg>	
    </div>
</div>
@endsection