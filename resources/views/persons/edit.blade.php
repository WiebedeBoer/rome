@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<form method="POST" action="/persons/edit/" class="pb-3">
<h3>Biography</h3>
<textarea id="bio" name="bio" rows="4" cols="50">
{{$person->bio}}
</textarea>
<input type="submit" name="submit" value="Register">
</form>
@endsection