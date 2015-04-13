@extends('masterAdmin')
@section('menu')
<div class="list-group">
	<a href="{{ URL::to('profileA') }}" class="list-group-item">Profile</a>
	<a href="{{ URL::to('addUser') }}" class="list-group-item">Add User</a>
	<a href="{{ URL::to('updateStatus') }}" class="list-group-item">Update User</a>
	<a href="{{ URL::to('addStudent') }}" class="list-group-item">Add Student to Course</a>
	<a href="{{ URL::to('addCourse') }}" class="list-group-item">Add Course</a>
	<a href="{{ URL::to('addSection') }}" class="list-group-item">Add Section</a>
	<a href="{{ URL::to('updateSection') }}" class="list-group-item">Update Section</a>
</div>
@stop
@section('content')
<form method="post" action="/addUser">
	<input name="_token" hidden value="{!! csrf_token() !!}" />
<div class="panel-heading">
	<h3 class="panel-title">Add User</h3>
</div>
<div class="panel-body">	
	<br>
	<!--div class="btn-group">
			<button type="button" class="btn btn-default">Add ...
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<select 
					<li><a href="#">Student</a></li>
					<li><a href="#">Teacher</a></li>
					<li><a href="#">Alumnus</a></li>
				</ul>
			</button>
		</div-->
	<select class="btn btn-default" name="user_type">
		<option value="1">Student</option>
		<option value="2">Teacher</option>
		<option value="3">Alumnus</option>
		<option value="4">Admin</option>
	</select>
	<br>
	<br>
	<div class ="login-feild">
		Id : <input type="text" class="form-control" placeholder="Id" aria-describedby="basic-addon2" name="user_id">
	</div>
	<br>
	<div class ="login-feild">
		Name :
		<input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon2" name="fname">
	</div>
	<br>
	<div class ="login-feild">
		Lastname :
		<input type="text" class="form-control" placeholder="Lastname" aria-describedby="basic-addon2" name="lname">
	</div>
	<br>
	<div class ="login-feild">
		Password :
		<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" name="password">
	</div>
	<br>
	<div class ="login-feild">
		Address :
		<input type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon2" name="address">
	</div>
	<br>
	<div class ="login-feild">
		Major ID :
		<input type="text" class="form-control" placeholder="Major ID" aria-describedby="basic-addon2" name="major">
	</div>
	<br>
	<div class ="addUser-submit">
		<input type="submit" class="btn btn-submit" value="submit" />
	</div>
</div>
</form>

@stop