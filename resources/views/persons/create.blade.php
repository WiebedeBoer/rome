@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<form method="POST" action="/persons/edit/" class="pb-3">
<h3>Name</h3>
<p>Please choose an appropraite name for you character.
<input type="text" name="app_name" value="{{ old('person_name') }}">
<h3>Gender</h3>
<p>Choose a gender for your character.</p>
<input type="radio" id="male" name="gender" value="male">
<input type="radio" id="female" name="gender" value="female">

<h3>Statistics</h3>
<p>You may allocate 34 points to the statistics of your character.</p>
<select name="judgement">
<optgroup label="judgement">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="engineer">
<optgroup label="engineer">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="commerce">
<optgroup label="commerce">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="agriculture">
<optgroup label="agriculture">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="tactics">
<optgroup label="tactics">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="leadership">
<optgroup label="leadership">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="charisma">
<optgroup label="charisma">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="brawn">
<optgroup label="brawn">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="strength">
<optgroup label="strength">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="agility">
<optgroup label="agility">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="polearms">
<optgroup label="polearms">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="swordsmanship">
<optgroup label="swordsmanship">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="archery">
<optgroup label="archery">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="riding">
<optgroup label="riding">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="sailing">
<optgroup label="sailing">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="raiding">
<optgroup label="raiding">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<select name="tracking">
<optgroup label="tracking">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<h3>Skills</h3>
<p>You may choose 2 skills for your character.</p>

<p>Administration</p>
<input type="radio" id="no" name="adm" value="0">
<input type="radio" id="yes" name="adm" value="1">
<p>Archery</p>
<input type="radio" id="no" name="arc" value="0">
<input type="radio" id="yes" name="arc" value="1">
<p>Architect</p>
<input type="radio" id="no" name="art" value="0">
<input type="radio" id="yes" name="art" value="1">
<p>Ballistics</p>
<input type="radio" id="no" name="bal" value="0">
<input type="radio" id="yes" name="bal" value="1">
<p>Cartography</p>
<input type="radio" id="no" name="car" value="0">
<input type="radio" id="yes" name="car" value="1">
<p>Engineer</p>
<input type="radio" id="no" name="eng" value="0">
<input type="radio" id="yes" name="eng" value="1">
<p>Farmer</p>
<input type="radio" id="no" name="far" value="0">
<input type="radio" id="yes" name="far" value="1">
<p>Heroic</p>
<input type="radio" id="no" name="her" value="0">
<input type="radio" id="yes" name="her" value="1">
<p>Literature</p>
<input type="radio" id="no" name="lit" value="0">
<input type="radio" id="yes" name="lit" value="1">
<p>Machinery</p>
<input type="radio" id="no" name="mac" value="0">
<input type="radio" id="yes" name="mac" value="1">
<p>Masonry</p>
<input type="radio" id="no" name="mas" value="0">
<input type="radio" id="yes" name="mas" value="1">
<p>Medicine</p>
<input type="radio" id="no" name="med" value="0">
<input type="radio" id="yes" name="med" value="1">
<p>Navy</p>
<input type="radio" id="no" name="nav" value="0">
<input type="radio" id="yes" name="nav" value="1">
<p>Philosophy</p>
<input type="radio" id="no" name="phi" value="0">
<input type="radio" id="yes" name="phi" value="1">
<p>Poetry</p>
<input type="radio" id="no" name="poe" value="0">
<input type="radio" id="yes" name="poe" value="1">

<h3>Villa Location</h3>
<select name="town">
<optgroup label="town">
@foreach($towns as $town) 
    <option value="{{ $town->town_id }}">{{ $town->town_name }}</option>
@endforeach
</select>
<input type="submit" name="submit" value="Register">
</form>
@endsection