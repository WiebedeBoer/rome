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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Imports</text></g>
	@foreach($towns as $town)

		@if($town->spice =="spice caravan" && $town->fabric !="silk caravan" && $town->scent !="incense caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (spices caravan)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,0,0)" stroke="black" stroke-width="3" /></a>
			</g>
		@elseif($town->spice !="spice caravan" && $town->fabric =="silk caravan" && $town->scent !="incense caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (silk caravan)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(224,0,224)" stroke="black" stroke-width="3" /></a>
			</g>
		@elseif($town->spice !="spice caravan" && $town->fabric !="silk caravan" && $town->scent =="incense caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (incense caravan)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(224,224,0)" stroke="black" stroke-width="3" /></a>
			</g>

		@elseif($town->spice =="spice caravan" && $town->fabric =="silk caravan" && $town->scent !="incense caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (spice and silk caravans)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(192,0,0)" stroke="rgb(224,0,224)" stroke-width="4" /></a>
			</g>
		@elseif($town->spice =="spice caravan" && $town->fabric !="silk caravan" && $town->scent =="incense caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (spice and incense caravans)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(224,224,0)" stroke="rgb(192,0,0)" stroke-width="4" /></a>
			</g>

		@elseif($town->spice !="spice caravan" && $town->fabric =="silk caravan" && $town->scent =="incense caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (silk and incense caravans)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(224,224,0)" stroke="rgb(224,0,224)" stroke-width="4" /></a>
			</g>

		@elseif($town->spice =="spice caravan" && $town->fabric =="silk caravan" && $town->scent =="incense caravan")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (spice and silk and incense caravans)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(0,192,192)" stroke="rgb(0,128,128)" stroke-width="5" /></a>
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