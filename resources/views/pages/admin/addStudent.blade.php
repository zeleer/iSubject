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
<form method="post" action="/addStudentToCourse">
	<input name="_token" hidden value="{!! csrf_token() !!}" />
<div class="panel-heading">
	<h3 class="panel-title">Add student to course</h3>
</div>
<div class="panel-body">


	<div class="row">
		<div class="col-md-6">
			<br>
			<div class ="addCourseId-feild">
				Course Id : <input type="text" class="form-control" placeholder="Course id" aria-describedby="basic-addon2" name ="course_id">
			</div>
		</div>
		<div class="col-md-6">
			<br>
			<div class ="addSectionNo-feild">
				Section : <input type="text" class="form-control" placeholder="section" aria-describedby="basic-addon2" name = "section">
			</div>
		</div>			
	</div>
	<br>
	<div class ="addStudentId-feild">
		Id : <input type="text" class="form-control" placeholder="Student id" aria-describedby="basic-addon2" name ="std_id">
	</div>
	<br>
	<br>
	<div class ="addStudentToCourse-submit">
	<input type="submit" class="btn btn-submit" value="submit" />
	</div>

	
</div>
</form>

@stop