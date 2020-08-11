@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($sametowns_count >=1 || $connections_count >=1)
        <h2>Land Movement</h2>
        <select name="moving">
        @if($sametowns_count >=1)
            
                <optgroup label="{{$sameregion->region_name}}">
                    @foreach($sametowns as $sametown) 
                        <option value="{{ $sametown->town_id }}">{{ $sametown->town_name }}</option>
                    @endforeach
            
        @endif
        @if($connections_count >=1)
                @foreach($connections as $connection) 
                    <optgroup label="{{$connection->otherregion}}">
                    @foreach($connection->othertowns as $othertown) 
                        <option value="{{ $othertown->town_id }}">{{ $othertown->town_name }}</option>
                    @endforeach
                @endforeach
        @endif
        </select>
    @endif


    <h2>Road Movement</h2>


    @if($sameseatowns_count >=1 || $seaconnections_count >=1)
        <h2>Sea Movement</h2>
        <select name="moving">
        @if($sameseatowns_count >=1)
            
                <optgroup label="{{$samesea->sea_name}}">
                    @foreach($sameseatowns as $sameseatown) 
                        <option value="{{ $sameseatown->town_id }}">{{ $sameseatown->town_name }}</option>
                    @endforeach
            
        @endif
        @if($seaconnections_count >=1)
                @foreach($seaconnections as $seaconnection) 
                    <optgroup label="{{$seaconnection->othersea}}">
                    @foreach($seaconnection->otherseatowns as $otherseatown) 
                        <option value="{{ $otherseatown->town_id }}">{{ $otherseatown->town_name }}</option>
                    @endforeach
                @endforeach
        @endif
        </select>
    @endif

@endsection