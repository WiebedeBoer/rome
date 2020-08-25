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

	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Religion</text></g>

	@foreach($towns as $town)
        @if($town->religion[0]->religion_name =="Arabic Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(128,64,0)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Celtic Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(0,192,0)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Greek Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(192,0,192)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Iberian Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(0,128,0)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Libyan Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(160,160,0)" stroke="rgb(192,64,128)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Norse Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(0,0,128)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Roman Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(192,0,0)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Scythian Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(128,0,192)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Thraco-Illyrian Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(128,0,128)" stroke="rgb(128,64,192)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Zoroastrianism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(192,192,0)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Canaanite Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(160,160,0)" stroke="rgb(128,64,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Hellenic Judaism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(192,192,0)" stroke="rgb(192,0,192)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Armenian Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(128,128,0)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->religion[0]->religion_name =="Georgian Polytheism")
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="11" fill="rgb(64,32,0)" stroke="rgb(0,0,0)" stroke-width="4" /></a>
			</g>
        @else
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}">
			<title>{{$town->town_name}} ({{$town->religion[0]->religion_name}})</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="9" fill="rgb(0,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
        @endif
	@endforeach
	</svg>
	
    </div>
</div>
@endsection