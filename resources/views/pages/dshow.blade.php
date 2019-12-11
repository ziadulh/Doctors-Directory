@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@section('content')			
				
				<div class="container">           
				  <table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Name</th>
				        <td>{{$data->name}}</td>
				      </tr>
				      <tr>
				        <th>Email</th>
				        <td>{{$data->email}}</td>
				      </tr>
				      <tr>
				        <th>Phone</th>
				        <td>{{$data->phone}}</td>
				      </tr>
				      <tr>
				        <th>Specialization</th>
				        <td>{{$data->specialization}}</td>
				      </tr>
				      <tr>
				        <th>Available Time</th>
				        <td>{{$data->servicetime}}</td>
				      </tr>
				      <tr>
				        <th>Region</th>
				        <td>{{$data->region}}</td>
				      </tr>
				    </thead>
				      <tr>
				        <td><a href="/doctors/list/{{$data->id}}/edit">Edit</a></td>
				        <td>
				        	<form action="/doctors/list/{{$data->id}}/delete" method="POST">
					        	@csrf
					        	<button type="submit">Delete</button>
					        </form>
				        </td>
				      </tr>
				  </table>
				</div>
		
	@endsection

</body>
</html>