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

<div class="panel-heading">
	<h3 class="panel-title">Add course</h3>
</div>
<div class="panel-body">	
	<br>
	<div class="row">
		<div class="col-md-6">
			<br>
			<div class ="addCourseId-feild">
				Course Id : <input type="text" class="form-control" placeholder="Course id" aria-describedby="basic-addon2">
			</div>
		</div>		
	</div>
	<br>
	<div class ="addCourseId-feild">
		Course Name : <input type="text" class="form-control" placeholder="Course name" aria-describedby="basic-addon2">
	</div>
	<br>
	<div class ="addCourseId-feild">
		Course Major : <input type="text" class="form-control" placeholder="Course major" aria-describedby="basic-addon2">
	</div>
	<br>
	<div class ="courseDescription-feild">
		Description : <input type="text" class="form-control" placeholder="Description" aria-describedby="basic-addon2">
	</div>
	<br>
	<br>
	<div class ="addCourse-submit">
		<button type="button" class="btn btn-success">Submit</button>
	</div>
	
	
	
</div>


@stop