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
        text-align:center;
    }

    tr:hover {
        background-color: #272A32;
        color: white;
    }
    .button{
        text-decoration: none;
        margin: 15px;
        color: #fff;
        font-family: 'VALORANT', sans-serif;
        background:#226CB1;
        margin-right:950px;
        padding:10px;
        border-radius:5px;
    }
    .edit{
        text-decoration: none;
        color: #fff;
        background:#2B7A1E;
        padding:5px;
        margin:5px;
        border-radius:5px;
    }
    .delete{
        text-decoration: none;
        color: #fff;
        background:#E94646;
        padding:5px;
        margin:5px;
        border-radius:5px;
    }
    .modal-body{
        color: black;
    }
    .modal-title{
        margin-left:130px;
    }
    .btn{
        width: 35%;
        margin-right:35px;
        text-align:center;
    }
</style>
    <div class='d-grid gap-2 d-md-flex justify-content-md-end mb-3'>
        <a href="{{url('users/create')}}" type='button' class='button'>
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4"/>
        </svg>
        Create User
        </a>
    </div>
   
    @if(session('message'))
        <div class="alert alert-success text-center">{{session('message')}}</div>
    @endif
<div class='data'>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Location</th>
                <th>Edit User</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->fname }}</td>
                <td>{{ $user->lname }}</td>
                <td>{{ $user->location }}</td>     
                <td>  
                    <a href="{{url('/users/'.$user->id)}}" type='button' class='edit'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </a>
                    <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal{{$user->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                        </svg>
                    </button>
                    <div class="modal fade" id="deleteUserModal{{$user->id}}" tabindex="-1" aria-labelledby="deleteUserModalLabel{{$user->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteUserModalLabel">Delete User - {{$user->fname}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{url('users/delete/'.$user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-body">
                                        Are you sure you want to delete this user?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete User</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach    
         
        </tbody> 
    </table>   
        
</div>

    
@endsection

@php
    $exclude_h1_h2 = true;
@endphp