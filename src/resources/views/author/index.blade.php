@extends('layouts.default')
<style>
th {
  background-color: #289ADC;
  color: white;
  padding: 5px 40px;
}

tr:nth-child(odd) td {
  background-color: #FFFFFF;
}

td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}
</style>

@section('title', 'author.index.blade.php')

@section('content')
<table>
    <tr>
        <th>Author</th>
        <th>Book</th>
    </tr>
    @foreach ($item as $item)
</table>