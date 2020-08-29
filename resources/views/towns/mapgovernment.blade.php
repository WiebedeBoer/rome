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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Government Forms</text></g>
	@foreach($towns as $town) 
		@if($town->treasury_count >=1)
			@if($town->government =="Republic")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (republic, Roman style)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(224,0,0)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="Oligarchic Republic")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (republic, Carthaginian style)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(160,0,0)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="City State")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (city state)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(128,0,0)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="Theocratic Confederation")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (league, Etruscan style)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(224,224,0)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="Tribal Confederation")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (tribal federation)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(192,192,0)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="League")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (league, Greek style)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(160,160,0)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="Pirate Confederation")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (pirate kingdom)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(128,128,0)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="Diarchy")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (kingdom diarchy)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(0,192,192)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="Monarchy")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (kingdom)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(0,160,160)" stroke="rgb(128,0,128)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="Tribe")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (tribe)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(0,128,128)" stroke="rgb(192,0,192)" stroke-width="5" /></a>
				</g>
			@elseif($town->government =="Tyranny")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (tyranny)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(0,64,64)" stroke="rgb(128,0,128)" stroke-width="5" /></a>
				</g>
			@else
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="9" fill="rgb(0,0,0)" stroke="black" stroke-width="5" /></a>
				</g>
			@endif
		@else
			@if($town->government =="Republic")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (republic, Roman style)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(224,0,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="Oligarchic Republic")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (republic, Carthaginian style)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(160,0,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="City State")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (city state)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(128,0,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="Theocratic Confederation")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (league, Etruscan style)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(224,224,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="Tribal Confederation")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (tribal federation)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(192,192,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="League")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (league, Greek style)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(160,160,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="Pirate Confederation")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (pirate kingdom)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(128,128,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="Diarchy")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (kingdom diarchy)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(0,192,192)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="Monarchy")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (kingdom)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(0,160,160)" stroke="rgb(128,0,128)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="Tribe")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (tribe)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(0,128,128)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
				</g>
			@elseif($town->government =="Tyranny")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (tyranny)</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(0,64,64)" stroke="rgb(128,0,128)" stroke-width="4" /></a>
				</g>
			@else
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="9" fill="rgb(0,0,0)" stroke="black" stroke-width="4" /></a>
				</g>
			@endif
		@endif
	@endforeach
	</svg>
    </div>
</div>
@endsection