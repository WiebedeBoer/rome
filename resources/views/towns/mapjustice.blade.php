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
        @if($town->rebel_status =="loyal")

		    @if($town->justice >=100 && $town->justice <=699)	
			    <g z-index="3">
			    <a xlink:href="/towns/{{$town->town_id}}">
			    <title>{{$town->town_name}} (unlawful but loyal)</title>
			    <circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,128,0)" stroke="rgb(64,0,92)" stroke-width="4" /></a>
                </g>
            @elseif($town->justice >=700 && $town->justice <=899)	
			    <g z-index="3">
			    <a xlink:href="/towns/{{$town->town_id}}">
			    <title>{{$town->town_name}} (fair and loyal)</title>
			    <circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(192,192,0)" stroke="rgb(64,0,92)" stroke-width="4" /></a>
                </g>
            @elseif($town->justice >=900)	
			    <g z-index="3">
			    <a xlink:href="/towns/{{$town->town_id}}">
			    <title>{{$town->town_name}} (virtuous and loyal)</title>
			    <circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(0,192,192)" stroke="rgb(64,0,92)" stroke-width="4" /></a>
			    </g>
		    @else
			    <g z-index="3">
			    <a xlink:href="/towns/{{$town->town_id}}">
			    <title>{{$town->town_name}} (wicked and loyal)</title>
			    <circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="10" fill="rgb(192,0,0)" stroke="rgb(64,0,92)" stroke-width="4" /></a>
			    </g>
		    @endif

        @else
            @if($town->justice >=100 && $town->justice <=799)	
			    <g z-index="3">
			    <a xlink:href="/towns/{{$town->town_id}}">
			    <title>{{$town->town_name}} (unlawful and rebellious)</title>
			    <circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(192,128,0)" stroke="rgb(92,32,0)" stroke-width="4" /></a>
                </g>
            @elseif($town->justice >=800 && $town->justice <=899)	
			    <g z-index="3">
			    <a xlink:href="/towns/{{$town->town_id}}">
			    <title>{{$town->town_name}} (fair but rebellious)</title>
			    <circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="13" fill="rgb(192,192,0)" stroke="rgb(92,32,0)" stroke-width="4" /></a>
                </g>
            @elseif($town->justice >=900)	
			    <g z-index="3">
			    <a xlink:href="/towns/{{$town->town_id}}">
			    <title>{{$town->town_name}} (virtuous but rebellious)</title>
			    <circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="14" fill="rgb(0,192,192)" stroke="rgb(92,32,0)" stroke-width="4" /></a>
			    </g>
		    @else
			    <g z-index="3">
			    <a xlink:href="/towns/{{$town->town_id}}">
			    <title>{{$town->town_name}} (wicked and rebellious)</title>
			    <circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="10" fill="rgb(192,0,0)" stroke="rgb(92,32,0)" stroke-width="4" /></a>
			    </g>
		    @endif
        @endif
	@endforeach
	</svg>	
    </div>
</div>
@endsection