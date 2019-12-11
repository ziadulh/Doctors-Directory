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
				        <th>Specializatio</th>
				      </tr>
				    </thead>
			@foreach($data as $data)
				    <tbody>
				      <tr>
				        <td><a href="list/{{$data->id}}">{{$data->name}}</a></td>
				        <td>{{$data->specialization}}</td>
				        <td><a href="/doctors/list/{{$data->id}}/edit">Edit</a></td>
				        <td>
				        	<form action="list/{{$data->id}}/delete" method="POST">
					        	@csrf
					        	<button type="submit">Delete</button>
					        </form>
				        </td>
				      </tr>
				    </tbody>
			@endforeach
				  </table>
				</div>
		
	@endsection

</body>
</html>

