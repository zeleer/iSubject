<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Request;
use DB;
use Auth;

class CourseController extends Controller {

	public function showSection(){

		$s_id = 2;
		$query = "SELECT * FROM SECTION WHERE course_id_sec = '$s_id' ";
		$result = DB::select(DB::raw($query));
		return $result;	
	}

	public function showCourseDetail(){

		$c_id = 2;
		$query = "SELECT * FROM COURSE WHERE course_id = '$c_id' ";
		$result = DB::select(DB::raw($query));
		return $result;	
	}

	public function addCourse(){
		$id = Request::input('course_id');
		$name = Request::input('course_name');
		$major = Request::input('course_major');
		$des = Request::input('course_des');

		$query = "INSERT INTO COURSE (course_id, course_name, course_des, course_major)
		VALUES ('$id','$name','$des','$major')";

		DB::statement($query);
	}

	public function addSection(){
		$id = Request::input('course_id');
		$sec_num = 1;//Request::input('section');
		$aca_year = 2014;
		$sem = 2;
		$classroom = 301;
		$t_id = Request::input('teacher_id');

		$query = "INSERT INTO SECTION (course_id_sec, sec_num, aca_year, semeter, classroom)
		VALUES ('$id','$sec_num','$aca_year','$sem','$classroom')";

		DB::statement($query);
	}

}
