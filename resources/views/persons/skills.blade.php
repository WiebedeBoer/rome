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