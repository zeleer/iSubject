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
	<a href="{{ URL::to('addEvent') }}" class="list-group-item">Add Event</a>
</div>
@stop
@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Add event</h3>
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
			
			Section : <br><div class ="addSectionNo-feild">
			<div class="row" >
				
				<div class="col-md-1"><input name="radioChoose" type="radio" value="" /></div>
				<div class="col-md-3">All section</div>
				<div class="col-md-1"><input name="radioChoose" type="radio" value="" /></div>
				<div class="col-md-7"><input type="text" name="chooseSec" class="chooseSec" /></div>
			</div>
		</div>
	</div>			
</div>
<br>
<div class ="addEventName-feild">
	Event name : <br><input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name ="std_id">
</div>
<br>
<div class ="addEventDescription-feild">
	Description : <br><input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name ="std_id">
</div>
<br>
Start :<br>
<input type="date" name="startDate"><input type="time" name="startTime">
<br>
End :
<br><input type="date" name="endDate"><input type="time" name="endTime">
<div class ="addStudentToCourse-submit">
	<button type="button" class="btn btn-success">Submit</button>
</div>


</div>


@stop