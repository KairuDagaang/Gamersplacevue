@extends('home')

@section('content')
<style>
    button{
        margin: 15px;
        color: #fff;
        background:#E94646;
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
        margin-top:60px;
    }
    .container{
        background-color:#2A2A30;
        width: 550px;
    }
</style>
    <h1>
        Make an Account
    </h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('users.create') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="user_id">Select a User:</label>
                    <select name='user_id' class='form-control' required>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->id ? 'user:' : ''}}
                            {{$user->fname}}
                        </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="account_name">IGN:</label>
                    <input type="text" name="account_name" id="account_name" placeholder="Enter IGN..." class="form-control">
                    @error('account_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="ign">Username:</label>
                    <input type="text" name="ign" id="ign" placeholder="Enter username..." class="form-control">
                    @error('ign')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Enter email..." class="form-control">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter password..." class="form-control">
                    @error('password')
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