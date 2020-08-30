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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Carpentry &amp; Timber</text></g>
	@foreach($towns as $town) 

		@if($town->cooper_count >=1 && $town->chest_count >=1 && $town->timber !="cedar")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}} and cooper and cabinetmaker)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(157,107,69)" stroke="rgb(107,125,135)" stroke-width="6" /></a>
			</g>

		@elseif($town->cooper_count >=1 && $town->chest_count ==0 && $town->timber !="cedar")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}} and cooper)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(157,107,69)" stroke="rgb(107,125,135)" stroke-width="5" /></a>
			</g>

		@elseif($town->cooper_count ==0 && $town->chest_count >=1 && $town->timber !="cedar")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}} and cabinetmaker)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(138,77,53)" stroke="rgb(68,43,13)" stroke-width="5" /></a>
			</g>

		@elseif($town->cooper_count >=1 && $town->chest_count >=1 && $town->timber =="cedar")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}} and cooper and cabinetmaker)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(157,107,69)" stroke="rgb(64,0,64)" stroke-width="6" /></a>
			</g>
		@elseif($town->cooper_count ==0 && $town->chest_count >=1 && $town->timber =="cedar")
			<g z-index="2">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}} and cabinetmaker)</title>
			<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(138,77,53)" stroke="rgb(64,0,64)" stroke-width="5" /></a>
			</g>


		@elseif($town->cooper_count ==0 && $town->chest_count ==0 && $town->timber =="oak")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}})</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(54,91,63)" stroke="black" stroke-width="4" /></a>
				</g>
		@elseif($town->cooper_count ==0 && $town->chest_count ==0 && $town->timber =="cypress")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}})</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(123,182,97)" stroke="black" stroke-width="4" /></a>
				</g>
		@elseif($town->cooper_count ==0 && $town->chest_count ==0 && $town->timber =="yew")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}})</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(127,155,92)" stroke="cyan" stroke-width="4" /></a>
				</g>
		@elseif($town->cooper_count ==0 && $town->chest_count ==0 && $town->timber =="beech")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}})</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(245,222,179)" stroke="rgb(175,96,25)" stroke-width="4" /></a>
				</g>
		@elseif($town->cooper_count ==0 && $town->chest_count ==0 && $town->timber =="juniper")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}})</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(60,119,89)" stroke="brown" stroke-width="4" /></a>
				</g>
		@elseif($town->cooper_count ==0 && $town->chest_count ==0 && $town->timber =="cedar")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}})</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(111,99,97)" stroke="yellow" stroke-width="4" /></a>
				</g>
		@elseif($town->cooper_count ==0 && $town->chest_count ==0 && $town->timber =="pine")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}})</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(64,32,0)" stroke="black" stroke-width="4" /></a>
				</g>
        @elseif($town->cooper_count ==0 && $town->chest_count ==0 && $town->timber =="palm")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} ({{$town->timber}})</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(64,32,0)" stroke="cyan" stroke-width="4" /></a>
				</g>
		@else
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="9" fill="black" stroke="black" stroke-width="4" /></a>
				</g>
		@endif

	@endforeach
	</svg>
    </div>
</div>
@endsection