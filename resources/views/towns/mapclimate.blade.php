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

			<!--desert-->
		@if($town->climate =="hot desert oasis")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(206,170,127)" stroke="black" stroke-width="5" /></a>
			</g>
        @elseif($town->climate =="hot desert wetland")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(206,170,127)" stroke="cyan" stroke-width="5" /></a>
			</g>
		@elseif($town->climate =="cold desert oasis")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(206,170,127)" stroke="black" stroke-width="5" /></a>
			</g>
        @elseif($town->climate =="cold desert wetland")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(206,170,127)" stroke="cyan" stroke-width="5" /></a>
			</g>
			<!--steppe-->
		@elseif($town->climate =="cold steppe")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(125,124,78)" stroke="black" stroke-width="5" /></a>
			</g>
        @elseif($town->climate =="hot steppe")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(206,160,00)" stroke="black" stroke-width="5" /></a>
			</g>

			<!--mediterranean-->
		@elseif($town->climate =="mediterranean")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(182,188,75)" stroke="black" stroke-width="5" /></a>
			</g>
		@elseif($town->climate =="mediterranean wetland")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(182,188,75)" stroke="cyan" stroke-width="5" /></a>
			</g>

			<!--humid subtropical-->
        @elseif($town->climate =="pontic")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(69,108,34)" stroke="black" stroke-width="5" /></a>
			</g>
		@elseif($town->climate =="pontic wetland")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(69,108,34)" stroke="cyan" stroke-width="5" /></a>
			</g>

			<!--oceanic-->
        @elseif($town->climate =="maritime")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(61,79,25)" stroke="black" stroke-width="5" /></a>
			</g>
		@elseif($town->climate =="maritime wetland")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(61,79,25)" stroke="cyan" stroke-width="5" /></a>
			</g>
		@elseif($town->climate =="maritime rainforest")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(159,168,124)" stroke="black" stroke-width="5" /></a>
			</g>

			<!--continental-->
        @elseif($town->climate =="warm continental")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,169,109)" stroke="black" stroke-width="5" /></a>
			</g>
		@elseif($town->climate =="warm continental wetland")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,169,109)" stroke="cyan" stroke-width="5" /></a>
			</g>			
		@elseif($town->climate =="hot continental")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(86,125,70)" stroke="black" stroke-width="5" /></a>
			</g>

			<!--alphine-->
        @elseif($town->climate =="alpine")
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->climate}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(66,163,0)" stroke="black" stroke-width="5" /></a>
			</g>

			<!--unknown-->
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