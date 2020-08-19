@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<!--user audio-->
@if($user_audio ==1)
	 <audio autoplay><source src="music/m1_china.mp3" type="audio/mpeg">Your browser does not support the audio element.</audio> 
@endif

<table class="stattabel">
<thead>
<tr><th colspan="2" class="stat">Development Statistics</th><th colspan="2" class="stat">Management Statistics</th><th colspan="2" class="stat">Logistical Proficiencies</th></tr>
</thead>
<tbody>
<tr>
<td class="des">judgement</td><td class="stat">{{$stat->jud}}</td>
<td class="des">tactics</td><td class="stat">{{$stat->tac}}</td>
<td class="des">riding</td><td class="stat">{{$stat->rid}}</td>
</tr>
<tr>
<td class="des">engineer</td><td class="stat">{{$stat->eng}}</td>
<td class="des">leadership</td><td class="stat">{{$stat->lea}}</td>
<td class="des">sailing</td><td class="stat">{{$stat->sai}}</td>
</tr>
<tr>
<td class="des">commerce</td><td class="stat">{{$stat->com}}</td>
<td class="des">charisma</td><td class="stat">{{$stat->cha}}</td>
<td class="des">raiding</td><td class="stat">{{$stat->rai}}</td>
</tr>
<tr>
<td class="des">agriculture</td><td class="stat">{{$stat->agr}}</td>
<td colspan="2" class="cle">&nbsp;</td>
<td class="des">tracking</td><td class="stat">{{$stat->tra}}</td>
</tr>
</tbody>
<thead>
<tr><th colspan="2" class="stat">Combat Proficiencies</th><th colspan="2" class="stat">Weapon Proficiencies</th><th colspan="2" class="cle">&nbsp;</th></tr>
</thead>
<tbody>
<tr>
<td class="des">brawn</td><td class="stat">{{$stat->bra}}</td>
<td class="des">polearms</td><td class="stat">{{$stat->pol}}</td>
<td colspan="2" class="cle">&nbsp;</td>
</tr>
<tr>
<td class="des">strength</td><td class="stat">{{$stat->str}}</td>
<td class="des">swordmanship</td><td class="stat">{{$stat->swo}}</td>
<td colspan="2" class="cle">&nbsp;</td>
</tr>
<tr>
<td class="des">agility</td><td class="stat">{{$stat->agi}}</td>
<td class="des">archery</td><td class="stat">{{$stat->arc}}</td>
<td colspan="2" class="cle">&nbsp;</td>
</tr>
</tbody>
</table>
<h2 class="bio">Skills</h2>

<table class="stattabel">
<thead>
<th colspan="2" class="stat">Administration</th>
<th colspan="2" class="stat">Archery</th>
<th colspan="2" class="stat">Architect</th>
<th colspan="2" class="stat">Ballistics</th>
<th colspan="2" class="stat">Cartography</th>
</thead>
<tbody>
<tr>
@if($skill->adm ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->arc ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->art ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->bal ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->car ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
</tr>
</tbody>
<thead>
<th colspan="2" class="stat">Engineer</th>
<th colspan="2" class="stat">Farmer</th>
<th colspan="2" class="stat">Heroic</th>
<th colspan="2" class="stat">Literature</th>
<th colspan="2" class="stat">Machinery</th>
</thead>
<tbody>
<tr>
@if($skill->eng ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->far ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->her ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->lit ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->mac ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
</tr>
</tbody>
<thead>
<th colspan="2" class="stat">Masonry</th>
<th colspan="2" class="stat">Medicine</th>
<th colspan="2" class="stat">Navy</th>
<th colspan="2" class="stat">Philosophy</th>
<th colspan="2" class="stat">Poetry</th>
</thead>
<tbody>
<tr>
@if($skill->mas ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->med ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->nav ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->phi ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
@if($skill->poe ==1)
	<td class="sk_y">yes</td>
@else
	<td class="sk_n">no</td>
@endif
</tr>
</tbody>
</table>
@endsection