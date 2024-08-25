@extends('layouts.master')

@section('content')
@if (!empty($name))
    <h1>Search Results for {{ $name }}:</h1>
@elseif (!empty($year))
    <h1>Search Results for {{ $year }}:</h1>
@elseif (!empty($state))
    <h1>Search Results for {{ $state }}:</h1>
@else
    <h1>Search Results:</h1>
@endif
<table class="bordered">
<thead>
<tr>
    <th>No.</th>
    <th>Name</th>
    <th>From</th>
    <th>To</th>
    <th>Duration</th>
    <th>Party</th>
    <th>State</th>
</tr>
</thead>
<tbody>
    @forelse ($results as $pm) 
    <tr>
        <td>{{$pm['index']}}</td>
        <td>{{$pm['name']}}</td>
        <td>{{$pm['from']}}</td>
        <td>{{$pm['to']}}</td>
        <td>{{$pm['duration']}}</td>
        <td>{{$pm['party']}}</td>
        <td>{{$pm['state']}}</td>
    </tr>
    @empty
    <tr>
        <td colspan=7>No results found</td>
    </tr>
    @endforelse
</tbody>
</table>
@endsection
