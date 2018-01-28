<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ReferalController extends Controller
{
	
	public function checkReferalCode(Request $request){
		$error=[];
		$referalCode=$request->rcode;

		if(Auth::user()->referal_code==$referalCode){
			array_push($error,"Invalid Coupon");
		}else{
			$user=User::where('referal_code','=',$referalCode)->get();
			if($user->count()>0){
				if($user[0]->referal_code==$referalCode){
				array_push($error,"Valid Coupon");	
				}
			}
			else{
				array_push($error,"Invalid Coupon");	
			}

		}
		$request->session()->flash('refer-status',$error[0]);
		return redirect()->route('index');
	}

}
