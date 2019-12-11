@extends('layouts.app')
    
    @section('content')

        <div class="container">
            <div class="row">
                <form action="update" method="POST">
                    @csrf
                    <label style="padding: 1px"><b>Re-enter Name</b></label><br>
                    <input type="text" name="name" value="{{$data->name}}"><br><br>
                    <label style="padding: 1px"><b>Re-enter Email</b></label><br>
                    <input type="text" name="email" value="{{$data->email}}"><br><br>
                    <button type="submit" style="color: green">Update</button>
                </form>
            </div>
        </div>

    @endsection