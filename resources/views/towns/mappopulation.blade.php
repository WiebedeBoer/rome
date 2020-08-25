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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Population</text></g>
	@foreach($towns as $town)	
		@if($town->population >=100000)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->population}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="17" fill="rgb(0,255,255)" stroke="black" stroke-width="4" /></a>
			</g>
		@elseif($town->population >=50000 && $town->population <=99999)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->population}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="16" fill="rgb(128,92,128)" stroke="black" stroke-width="4" /></a>
			</g>
		@elseif($town->population >=20000 && $town->population <=49999)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->population}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="15" fill="rgb(255,255,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@elseif($town->population >=10000 && $town->population <=19999)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->population}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(255,128,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@elseif($town->population >=5000 && $town->population <=9999)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->population}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(255,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@elseif($town->population <=4999)
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->population}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(92,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@else
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="9" fill="rgb(0,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@endif
	@endforeach
	</svg>
    </div>
</div>
@endsection