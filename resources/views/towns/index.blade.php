@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
@include('towns.mapmenu')
<div class="worldmap">
    <div style="width:1604px;margin-left:auto;margin-right:auto;">
	<?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
	<svg width="1600" height="1600" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" zoomAndPan="magnify" viewBox="0 0 4000 4000">
	<g z-index="1">
	<image xlink:href="img/rome.png" x="0" y="0" width="4000" height="4000">
	</g>
	<g z-index="2"><text x="640" y="300" font-size="30" fill="blue" stroke="black" stroke-width="2">Mare Germanicum</text></g>
	<g z-index="2"><text x="200" y="1080" font-size="30" fill="blue" stroke="black" stroke-width="2">Mare Cantabricum</text></g>
	<g z-index="2"><text x="2100" y="1220" font-size="30" fill="blue" stroke="black" stroke-width="2">Pontus Euxinus</text></g>
	<g z-index="2"><text x="2040" y="1900" font-size="30" fill="blue" stroke="black" stroke-width="2">Mare Levantinum</text></g>
	<g z-index="2"><text x="1200" y="1820" font-size="30" fill="blue" stroke="black" stroke-width="2">Mare Libycum</text></g>
	<g z-index="2"><text x="1740" y="1720" font-size="30" fill="blue" stroke="black" stroke-width="2">Mare Aegaeum</text></g>
	<g z-index="2"><text x="1060" y="1470" font-size="30" fill="blue" stroke="black" stroke-width="2">Mare Tyrrhenum</text></g>
	<g z-index="2"><text x="1400" y="1580" font-size="30" fill="blue" stroke="black" stroke-width="2">Mare Ionium</text></g>

	<g z-index="2"><text x="2920" y="2540" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Arabia</text></g>
	<g z-index="2"><text x="3400" y="1950" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Persia</text></g>
	<g z-index="2"><text x="270" y="1920" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Mauretania</text></g>
	<g z-index="2"><text x="610" y="1030" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Gallia</text></g>
	<g z-index="2"><text x="1020" y="560" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Germania</text></g>
	<g z-index="2"><text x="460" y="590" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Britannia</text></g>
	<g z-index="2"><text x="130" y="540" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Hibernia</text></g>
	<g z-index="2"><text x="1790" y="1010" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Dacia</text></g>
	<g z-index="2"><text x="2050" y="900" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Sarmatia</text></g>
	<g z-index="2"><text x="2580" y="800" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Scythia</text></g>
	<g z-index="2"><text x="1940" y="2090" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Aegyptus</text></g>
	<g z-index="2"><text x="430" y="1400" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Hispania</text></g>
	<g z-index="2"><text x="2420" y="1880" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Syria</text></g>
	<g z-index="2"><text x="1340" y="1150" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Illyricum</text></g>
	<g z-index="2"><text x="1920" y="1510" font-size="30" fill="rgb(0,64,0)" stroke="black" stroke-width="2">Asia</text></g>
	@foreach($towns as $town)	
			<g z-index="3">
			<a xlink:href="/towns/{{$town->town_id}}"><title>{{$town->town_name}}</title><circle cx="{{$town->xcoord}}" cy="{{$town->ycoord}}" r="10" fill="rgb(192,0,0)" stroke="black" stroke-width="4" /></a>
			</g>
	@endforeach
	</svg>
    </div>
</div>

@endsection