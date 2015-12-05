<?php

class AdminController extends BaseController{
	public function getAdminLogin(){
		return View::make('login');
	}

	public function postAdminLogin(){
		$username = Input::get('username');
		$password = Input::get('password');

		$user = DB::table('users')->where('username', $username)->first();
		if($user){
			if($user->password == $password){
				Session::put('username', $username);
			}
		}
		return Redirect::route('getAdminDashboard');
	}

	public function getAdminDashboard(){
		return View::make('dashboard');
	}

	public function getAdminLogout(){
		Session::forget('username');
		return Redirect::route('getAdminLogin');
	}

	public function getAdminSettings(){
		return View::make('settings');
	}

	public function postAdminSettings(){
		$title = Input::get('title');
		$about = Input::get('about');
		$address = Input::get('address');
		$phone = Input::get('phone');
		$email = Input::get('email');
		$location = Input::get('location');
		$file = Input::file('file');
		$destinationPath = 'uploads';
		$filename = DB::table('settings')->first()->logo;
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		if($file){
			$filename = time() . $file->getClientOriginalName();
			$extension =$file->getClientOriginalExtension(); 
			$upload_success = Input::file('file')->move($destinationPath, $filename);
		}
		
		

		DB::beginTransaction();

		try{
			DB::table('settings')->where('id', 1)->update(array(
					'title'	=>	$title,
					'logo'	=>	$filename,
					'about'	=>	$about,
					'address'	=>	$address,
					'phone'	=>	$phone,
					'email'	=>	$email,
					'location'	=>	$location,
				));
			DB::commit();
			return Redirect::route('getAdminSettings')->with(array('status'	=>	'success'));
		}catch(\Exception $e){
			DB::rollback();
			return Redirect::route('getAdminSettings')->with(array('status'	=>	'error'));
		}
	}

	public function getAdminNewProject(){
		return View::make('newProject');
	}

	public function postAdminNewProject(){
		$p1 = Input::get('p1');
		$p2 = Input::file('p2');
		$p3 = Input::get('p3');
		$p4 = Input::get('p4');
		$p5 = Input::get('p5');
		$p6 = Input::get('p6');
		$p7 = Input::get('p7');
		$p8 = Input::get('p8');
		$p9 = Input::get('p9');
		$p10 = Input::get('p10');
		$p11 = Input::get('p11');
		$p12 = Input::file('p12');
		$p13 = Input::get('p13');
		$p14 = Input::file('p14');
		$p15 = Input::get('p15');
		$p16 = Input::file('p16');
		$p17 = Input::get('p17');
		$p18 = Input::get('p18');
		$p19 = Input::file('p19');
		$p20 = Input::file('p20');
		$p21 = Input::file('p21');
		$p22 = Input::get('p22');
		$p23 = Input::get('p23');
		$p24 = Input::get('p24');
		$p25 = Input::file('p25');

		$file = Input::file('p2');
		$destinationPath = 'uploads';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		$filename2 = time() . $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		Input::file('p2')->move($destinationPath, $filename2);

		$file = Input::file('p12');
		$destinationPath = 'uploads';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		$filename12 = time() . $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		Input::file('p12')->move($destinationPath, $filename12);

		$file = Input::file('p14');
		$destinationPath = 'uploads';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		$filename14 = time() . $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		Input::file('p14')->move($destinationPath, $filename14);

		$file = Input::file('p16');
		$destinationPath = 'uploads';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		$filename16 = time() . $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		Input::file('p16')->move($destinationPath, $filename16);

		$file = Input::file('p19');
		$destinationPath = 'uploads';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		$filename19 = time() . $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		Input::file('p19')->move($destinationPath, $filename19);

		$file = Input::file('p20');
		$destinationPath = 'uploads';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		$filename20 = time() . $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		Input::file('p20')->move($destinationPath, $filename20);

		$file = Input::file('p21');
		$destinationPath = 'uploads';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		$filename21 = time() . $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		Input::file('p21')->move($destinationPath, $filename21);

		$file = Input::file('p25');
		$destinationPath = 'uploads';
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		$filename25 = time() . $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		Input::file('p25')->move($destinationPath, $filename25);

		DB::table('projects')->insert(array( 'p1'	=>	$p1, 'p2'	=>	$filename2, 'p3'	=>	$p3, 'p4'	=>	$p4, 'p5'	=>	$p5, 'p6'	=>	$p6, 'p7'	=>	$p7, 'p8'	=>	$p8, 'p9'	=>	$p9, 'p10'	=>	$p10, 'p11'	=> $p11, 'p12'	=>	$filename12, 'p13'	=>	$p13, 'p14'	=>	$filename14, 'p15'	=>	$p15, 'p16'	=>	$filename16, 'p17'	=>	$p17, 'p18'	=>	$p18, 'p19'	=>	$filename19, 'p20'	=>	$filename20, 'p21'	=>	$filename21, 'p22'	=>	$p22, 'p23'	=>	$p23, 'p24'	=>	$p24, 'p25'	=>	$filename25 ));
		return Redirect::route('getAdminNewProject')->with(array('status'	=>	'success'));

	}
}