@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	@section('content')
		@if(Auth::check())				
				
				<div class="container">           
				  <table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Name</th>
				        <th>Email</th>
				        <th>Role</th>
				        <th></th>
				        <th></th>
				      </tr>
				    </thead>
			@foreach($data as $data)
				    <tbody>
				      <tr>
				        <td>{{$data->name}}</td>
				        <td>{{$data->email}}</td>
				        <td>{{$data->userrole}}</td>
				        <td><a href="adminpanel/{{$data->id}}/editadminpaneluser">Edit</a></td>
				        <td>
				        	<form action="adminpanel/{{$data->id}}/delete" method="POST">
					        	@csrf
					        	<button type="submit">Delete</button>
					        </form>
				        </td>
				      </tr>
				    </tbody>
			@endforeach
				  </table>
				</div>

		@endif
		
	@endsection

</body>
</html>

