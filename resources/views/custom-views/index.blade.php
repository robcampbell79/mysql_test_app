@extends('layout')

@section('content')
<h1>Elephants, and Dolphins, oh my.</h1>

<br><br>

<h2>Some Random Numbers</h2>
<?php
  $begin = microtime(true);

  echo $data;
  echo "<br><br>";
  echo "The time elapsed for db function is: " . $time_elapsed;
  echo "<br><br>";

  $end = microtime(true) - $begin;

  echo "Page loads up in: " . $end;
 ?>
