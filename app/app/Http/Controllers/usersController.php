<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function index(){
//		dd(DB::table('carts')->select([
//			'user_id',
//			'u.name as u_name',
//			'p.name as p_name',
//			'price',
//			'description',
//			'amount',
//			'p.created_at as P_created_at',
//			'p.updated_at as p_updated_at'
//		])->where('user_id',$user_id)->join('products as p','carts.product_id','=','p.id')->join
//		('users as u','carts.user_id','=','u.id')->get()
//		);
//		$users = DB::table('users')->get();
//		return view('users.index', ['users' => $users]);
		return view('users.index', [
			'users' => DB::table('users')->get()
		]);
	}
	public function show(int $id){
//		$user = DB::table('users')->find($id);
//		if (!$user) abort(404);
//		return view('users.show',[
//			'user' => $user,
//		]);
		return view('users.show',[
			'user' => ($user = DB::table('users')->find($id))?$user: abort(404)
		]);
	}

}
