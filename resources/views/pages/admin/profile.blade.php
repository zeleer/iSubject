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
	<h3 class="panel-title">รายละเอียดวิชา</h3>
</div>
<div class="panel-body">
	<div>
		<div class ="courseDesAtt">รหัสบุคลากร</div>
		<div class ="courseDesAtt">ชื่อ นามสกุล</div>
		<div class ="courseDesAtt">คณะ</div>
		<div class ="courseDesAtt">ความถนัด</div>
		<div class ="courseDesAtt">
		<div class ="courseDesAtt">Occupation</div>
		<a href="{{ URL::to('changePassword') }}"><button type="button" class="btn btn-default">Change password</button></a>

	</div>				
</div>

@stop