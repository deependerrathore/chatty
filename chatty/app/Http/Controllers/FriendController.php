<?php 

namespace Chatty\Http\Controllers;

use Auth;
use Chatty\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller{
	
	public function getIndex(){
		$friends = Auth::user()->friends();
		$requests = Auth::user()->friendRequests();
		return view('friends.index')
		->with('friends',$friends)
		->with('requests',$requests);
	}
	
}