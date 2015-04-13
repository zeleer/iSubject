@extends('master')
@section('menu')
<div class="list-group">
	<a href="{{ URL::to('profileU') }}" class="list-group-item">Profile</a>
	<a href="{{ URL::to('search') }}" class="list-group-item">Search</a>
	<a href="{{ URL::to('/') }}" class="list-group-item">Calendar</a>
	<a href="{{ URL::to('courseList') }}" class="list-group-item">Courselist</a>
	
</div>
@stop
@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Change Password</h3>
</div>
<div class="panel-body">


	<div class="row">
		<div class="col-md-4">
			<br>
			<div class ="oldPassword-feild">
				old password : <input type="text" class="form-control" placeholder="Course id" aria-describedby="basic-addon2">
			</div>
		</div>
		<div class="col-md-4">
			<br>
			<div class ="newPassword-feild">
				new password : <input type="text" class="form-control" placeholder="section" aria-describedby="basic-addon2">
			</div>
		</div>			
		<div class="col-md-4">
			<br>
			<div class ="reNewPassword-feild">
				re-new password : <input type="text" class="form-control" placeholder="section" aria-describedby="basic-addon2">
			</div>
		</div>
	</div>
	
	<div class ="addStudentToCourse-submit">
		<button type="button" class="btn btn-success">Submit</button>
	</div>

	
</div>


@stop