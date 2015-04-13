<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CourseController extends Controller {

	public function showSection(){

		$s_id = 3;
		$query = "SELECT * FROM SECTION WHERE course_id_sec = '$s_id' ";
		$result = DB::select(DB::raw($query));
		return $result;	
	}

	public function showCourseDetail(){

		$c_id = 7;
		$query = "SELECT * FROM COURSE WHERE course_id = '$c_id' ";
		$result = DB::select(DB::raw($query));
		return $result;	
	}

}
