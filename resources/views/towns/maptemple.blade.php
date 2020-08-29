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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Temples &amp; Treasuries</text></g>
	@foreach($towns as $town)

			@if($town->temple_count >=1 && $town->idol_count >=1 && $town->sacred_count >=1 && $town->treasury_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (temple and statue and sacred objects and treasury)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(0,192,192)" stroke="rgb(64,0,64)" stroke-width="6" /></a></g>
			@elseif($town->temple_count >=1 && $town->idol_count >=1 && $town->sacred_count ==0 && $town->treasury_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (temple and statue and treasury)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(0,192,192)" stroke="rgb(192,192,0)" stroke-width="5" /></a></g>
			@elseif($town->temple_count >=1 && $town->idol_count ==0 && $town->sacred_count >=1 && $town->treasury_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (temple and sacred objects and treasury)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(0,192,192)" stroke="rgb(192,0,0)" stroke-width="5" /></a></g>
			@elseif($town->temple_count >=1 && $town->idol_count ==0 && $town->sacred_count ==0 && $town->treasury_count >=1)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (temple and treasury)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,192,192)" stroke="rgb(192,0,192)" stroke-width="4" /></a></g>

			@elseif($town->temple_count >=1 && $town->idol_count >=1 && $town->sacred_count >=1 && $town->treasury_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (temple and statue and sacred objects)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(192,192,0)" stroke="rgb(192,0,0)" stroke-width="5" /></a></g>
			@elseif($town->temple_count >=1 && $town->idol_count >=1 && $town->sacred_count ==0 && $town->treasury_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (temple and statue)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,192,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a></g>
			@elseif($town->temple_count >=1 && $town->idol_count ==0 && $town->sacred_count >=1 && $town->treasury_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (temple and sacred objects)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,0,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a></g>
			@elseif($town->temple_count >=1 && $town->idol_count ==0 && $town->sacred_count ==0 && $town->treasury_count ==0)
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (temple)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(192,0,192)" stroke="black" stroke-width="3" /></a></g>

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