@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
@include('persons.stats')
@include('persons.skills')
<form method="POST" action="/persons/edit/" class="pb-3">
<h2>Biography</h2>
<textarea id="bio" name="bio" rows="4" cols="50">
{{$person->bio}}
</textarea>
<input type="submit" name="submit" value="Alter Biography">
</form>
@endsection