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
                <th>Account ID</th>
                <th>Game ID</th>
                <th>Status</th>
                <th>Description</th>
                <th>Started Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accountgames as $accountgame)
            <tr>
                <td>{{ $accountgame->account->id }}</td>
                <td>{{ $accountgame->game->id }}</td>
                <td>{{ $accountgame->status }}</td>
                <td>{{ $accountgame->description }}</td>
                <td>{{ $accountgame->start_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    
@endsection

@php
    $exclude_h1_h2 = true;
@endphp