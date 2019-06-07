<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mechanic;
use App\SparePart;
use App\Agance;
use App\favorite;
use Illuminate\Support\Facades\Auth;
class favorite extends Controller
{
	public function createSparepart($id)
	{		
		$idu = Auth::id();
		$favorite = new favorite;
		$favorite->user_id = $idu;
		$favorite->sparepart_id = $idu;
		$favorite->save();

	}

	public function createAgence($id)
	{		
		$idu = Auth::id();
		$favorite = new favorite;
		$favorite->user_id = $idu;
		$favorite->car_id = $idu;
		$favorite->save();

	}
	public function show()
	{
		$id = Auth::id();
		$favorite = User::where('user_id',$id);
	}

}	
