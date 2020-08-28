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
	<g z-index="6"><text x="1800" y="120" font-size="120" fill="black" stroke="rgb(128,128,128)" stroke-width="2">Leatherworks</text></g>
	@foreach($towns as $town)
			@if($town->cattle =="cattle" || $town->wool =="goat" || $town->wool =="sheep" || $town->pig =="pig" || $town->game =="deer" || $town->pack =="donkey" || $town->pack =="oxen" || $town->paper =="parchment")
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}} (leatherworks</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="12" fill="rgb(64,32,0)" stroke="rgb(192,0,0)" stroke-width="4" /></a></g>
			@else
				<g z-index="2">
				<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title>
				<circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="9" fill="rgb(0,0,0)" stroke="black" stroke-width="2" /></a></g>
			@endif
	@endforeach
	</svg>
    </div>
</div>

@foreach($towns as $town)
		@if($town->cattle =="cattle" || $town->cattle =="buffalo" || $town->wool =="goat" || $town->wool =="sheep" || $town->pig =="pig" || $town->game =="deer" || $town->pack =="donkey" || $town->pack =="oxen" || $town->paper =="parchment")
				<br>DB::table('buildings')->insert([
				<br>'buildingtype' => '64',
				<br>'location' => '{{$town->town_id}}',
				<br>'category' => 'industrial'
				<br>]); 
		@endif
@endforeach	
@endsection