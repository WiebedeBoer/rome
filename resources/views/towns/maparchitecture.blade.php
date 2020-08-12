@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
@include('towns.mapmenu')

<div class="worldmap">
    <div class="worldmapimg">
    <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
	<svg width="1200" height="1200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" zoomAndPan="magnify" viewBox="0 0 4000 4000">
	<g z-index="1">
	<image xlink:href="img/rome.png" x="0" y="0" width="4000" height="4000">
	</g>
    @foreach($towns as $town) 
		@if($town->architecture_name =="Italo Roman")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(255,0,0)" stroke="rgb(92,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Gallo Roman")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,255,0)" stroke="rgb(92,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Germanic Roman")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,0,255)" stroke="rgb(92,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Ibero Roman")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,192,0)" stroke="rgb(92,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Greco Roman")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,32,192)" stroke="rgb(92,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Punic Roman")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,192,0)" stroke="rgb(92,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Thraco Roman")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,128,128)" stroke="rgb(92,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Greco Arabic")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,32,192)" stroke="rgb(192,192,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Greco Persian")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,32,192)" stroke="rgb(192,192,192)" stroke-width="4" /></a>
			</g>
        @elseif($town->architecture_name =="Greco Scythian")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->architecture_name}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,32,192)" stroke="rgb(64,64,64)" stroke-width="4" /></a>
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