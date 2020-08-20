@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<h2>{{$towns->town_name}}</h2>

    
    @if($sametowns_count >=1 || $connections_count >=1)
        <h2>Land Routes</h2>

        @if($sametowns_count >=1)         
            <h3>{{$sameregion->region_name}}</h3><p>
                @foreach($sametowns as $sametown) 
                    <a href="/towns/{{ $sametown->town_id }}">{{ $sametown->town_name }}</a>,
                @endforeach
            </p>
        @endif
        @if($connections_count >=1)
                @foreach($connections as $connection) 
                    <h3>{{$connection->otherregion}}</h3><p>
                    @foreach($connection->othertowns as $othertown) 
                        <a href="/towns/{{ $othertown->town_id }}">{{ $othertown->town_name }}</a>,
                    @endforeach
                    </p>
                @endforeach
        @endif
    @endif


    <h2>Roads</h2>


    @if($sameseatowns_count >=1 || $seaconnections_count >=1)
        <h2>Naval Routes</h2>
        @if($sameseatowns_count >=1)         
            <h3>{{$samesea->sea_name}}</h3><p>
                @foreach($sameseatowns as $sameseatown) 
                    <a href="/towns/{{ $sameseatown->town_id }}">{{ $sameseatown->town_name }}</a>,
                @endforeach
            </p>
        @endif
        @if($seaconnections_count >=1)
                @foreach($seaconnections as $seaconnection) 
                    <h3>{{$seaconnection->othersea}}</h3><p>
                    @foreach($seaconnection->otherseatowns as $otherseatown) 
                        <a href="/towns/{{ $otherseatown->town_id }}">{{ $otherseatown->town_name }}</a>,
                    @endforeach
                    </p>
                @endforeach
        @endif
    @endif



@endsection