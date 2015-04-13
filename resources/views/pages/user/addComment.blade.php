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
	<h3 class="panel-title">Comment</h3>
</div>
<div class="panel-body">
	<div>
		<div class="row">
			<div class="col-md-6">วิชา : XXXXXXXXXXXX</div>
			<div class="col-md-6">Section : XXXXXXXXXXXX</div>			
		</div>
		<br>
		<br>
		<div class="row">
			<div class = "comment-in">
				<div class="col-md-5">
					<input type="text" class="form-control" placeholder="Add your comment" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="col-md-7">
				<button type="button" class="btn btn-default">Submit</button>
			</div>			
		</div>
		
	</div>				
</div>

@stop