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
	<h3 class="panel-title">รายละเอียดวิชา</h3>
</div>
<div class="panel-body">
	<div>
		<div class ="courseDesAtt">รหัสวิชา</div>
		<div class ="courseDesAtt">ชื่อวิชา</div>
		<div class ="courseDesAtt">Description</div>
		<div class ="courseDesAtt">Comment <a href="{{ URL::to('viewComment') }}">[all comments]</a><a href="{{ URL::to('viewAlumnusComment') }}">[all alumnus comments]</a></div>
		<div class ="courseDesAtt">
		<a href="{{ URL::to('addComment') }}"><button type="button" class="btn btn-default">Add comment</button></a>
		<div class ="courseDesAtt">Occupation</div>
		<div class="courseDesAtt">
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					Section
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">1</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">2</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">3</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">4</a></li>
				</ul>
			</div>
		</div>

	</div>				
</div>

@stop