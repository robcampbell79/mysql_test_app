@extends('layout')

@section('content')
<h1>Elephants, and Dolphins, oh my.</h1>

<br><br>

<h2>Some Random Numbers</h2>

<table class="table table-striped">
  <tr><th>Number</th></tr>
  @foreach($data as $result)
    <tr><td>{{$result->number}}</td></tr>
  @endforeach
</table>
