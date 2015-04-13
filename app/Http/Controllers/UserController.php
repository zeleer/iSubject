<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;
use DB;
use Request;
use Hash;
use View;

class UserController extends Controller {

	public function showProfile(){
		$user_id = Auth::user()->id;

		$query = "SELECT * FROM USER WHERE id = '$user_id' ";
		$result = DB::select(DB::raw($query));

		//retrieve major name
		$major_id = Auth::user()->user_major;
		$query2 = "SELECT * FROM MAJOR WHERE major_id = '$major_id'";
		$major_result = DB::select(DB::raw($query2));

		//fetch student/teacher/alumnus info
		if(Auth::user()->type == 1){ //student
			$query3 = "SELECT * FROM STUDENT WHERE stu_id = '$user_id'";
			$indiv_result = DB::select(DB::raw($query3));
		}
		else if(Auth::user()->type == 2){ //teacher
			$query3 = "SELECT * FROM TEACHER WHERE teacher_id = '$user_id'";
			$indiv_result = DB::select(DB::raw($query3));
		}
		else if(Auth::user()->type == 3){ //alumnus
			$query3 = "SELECT DISTINCT OCCUPATION.occ_name FROM OCCUPATION INNER JOIN ALUMNUS_OCC ON OCCUPATION.occ_id = ALUMNUS_OCC.alum_occ_id INNER JOIN USER ON ALUMNUS_OCC.alum_id = '$user_id'";
			$indiv_result = DB::select(DB::raw($query3));
		}

		return View::make('pages.user.profile')->with('result', $result)->with('major', $major_result)->with('indiv', $indiv_result);
	}

	public function addUser(){
		$id = Request::input('user_id');
		$fname = Request::input('fname');
		$lname = Request::input('lname');
		$address = Request::input('address');
		$major = Request::input('major');
		$type = Request::input('user_type');
		$password = Request::input('password');
		$hashPassword = Hash::make($password);

		$query = "INSERT INTO USER (id, first_name, last_name, address, user_major, type, password) 
		VALUES ('$id', '$fname', '$lname', '$address', '$major','$type', '$hashPassword') ";
		DB::statement($query);
	}

	public function editProfile(){
		$user = Auth::input('user_id');
		$user_id = $user['id'];

		$query = "SELECT * FROM USER WHERE id = '$user_id'";
		$result = DB::select(DB::raw($query));
	}


}
