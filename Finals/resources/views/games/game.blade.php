@extends('home')

@section('content')
<style>
    body{
        background-size:contain;
    }
    .data{
        border:1px solid white;
        width:80%;
        margin-left:150px;
        margin-top:50px;
        background-color:white;
    }
    
    table th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        width: 5%;
    }

    td{
        font-weight:bold;
    }
    th {
        background-color:#E94646;
        font-family: 'VALORANT', sans-serif;
        color: white;
    }

    tr:hover {
        background-color: #272A32;
        color: white;
    }
</style>

<div class='data'>
    <table>
        <thead>
            <tr>
                <th>Game ID:</th>
                <th>Game Name</th>
                <th>Type</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr>
                <td>{{ $game->id}}</td>
                <td>{{ $game->game_name }}</td>
                <td>{{ $game->type }}</td>
                <td>{{ $game->category }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    
@endsection

@php
    $exclude_h1_h2 = true;
@endphp