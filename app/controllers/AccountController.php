<?php 

	class AccountController extends BaseController
	{
		
		public function getAllAccount(){
			$acc = DB::table('accounts')->get();
			return json_encode($acc);
		}
		public function addAccount(){
			$name 				=	Input::get('name');
			$parent 			=	Input::get('parent');
			$description 		=	Input::get('description');
			$opening_balance	= 	Input::get('opening_balance');
			$location			= 	Input::get("location");

			DB::table('accounts')->insert(array(
				'name' 			=> $name,
				'parent' 		=> $parent,
				'description' 	=> $description
				)
			);
			$account_id = DB::table('accounts')->select('id')->where('name', '=', $name)->first();
			DB::table('general_accounts')->insert(array(
				'date' 					=> 	time(),
				'account_id'			=>	$account_id->id,
				'narration' 			=> 	"Opening balance of ".$name,
				'voucher_id' 			=> 	0,
				'against_account_id' 	=> 	0,
				'location'				=> 	$location,
				'dr'					=>	0,
				'cr'					=>	0,
				'balance'				=>	$opening_balance
				)
			);
		}
	}
 ?>