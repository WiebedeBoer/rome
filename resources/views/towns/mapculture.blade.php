@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
@include('towns.mapmenu')


    <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
	<svg width="800" height="800" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" zoomAndPan="magnify" viewBox="0 0 4000 4000">
	<g z-index="1">
	<image xlink:href="img/rome.png" x="0" y="0" width="4000" height="4000">
	</g>
    @foreach($towns as $town) 
		@if($town->culture ==1)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(255,0,0)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==2)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==3)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,255,0)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==4)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,192,0)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==5)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(32,128,32)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==6)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,192,192)" stroke="black" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==7)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,128,128)" stroke="black" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==8)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(64,64,64)" stroke="black" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==9)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,0,255)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==10)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,32,192)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==11)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(64,0,64)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==12)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(255,255,0)" stroke="rgb(0,0,32)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==13)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,128,0)" stroke="rgb(0,0,32)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==14)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,255,255)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==15)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(64,0,0)" stroke="rgb(0,0,32)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==16)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,64,0)" stroke="rgb(0,0,32)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==17)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,0,64)" stroke="rgb(0,0,32)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==18)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(92,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==19)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(128,32,0)" stroke="black" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==20)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,192,0)" stroke="rgb(0,0,32)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==21)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(64,32,192)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
        @elseif($town->culture ==22)
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->faction}})</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(32,0,128)" stroke="rgb(64,32,0)" stroke-width="4" /></a>
			</g>
		@else
		    <g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(0,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
		@endif
	@endforeach
	</svg>	

@endsection