@extends('home')

@section('content')
<style>
    button{
        margin: 15px;
        color: #fff;
        background:#226CB1;
        padding:10px;
        padding-right:70px;
        border-radius:5px;
        margin-right:120px;
    }
    .row{
        margin-left:500px;
    }
    label{
        color:#E94646;
        font-weight:bold;
    }
    h1{
        margin-top:80px;
    }
    .container{
        background-color:#2A2A30;
        width: 550px;
    }
</style>
    <h1>
        Create New User
    </h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('users/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname" id="fname" placeholder="Enter first name..." class="form-control">
                    @error('fname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname" id="lname" placeholder="Enter last name..." class="form-control">
                    @error('lname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location" placeholder="Enter location..." class="form-control">
                    @error('location')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button type='submit'>
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@php
    $exclude_h1_h2 = true;
@endphp