@extends('main')

@section('content')

	@include('navbar')

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form class="form-horizontal" action="{{ URL::route('postAdminSettings') }}" method="post" enctype="multipart/form-data">
				  <fieldset>
				    <legend>Settings</legend>

					<?php
						if(Session::has('status')){
							if(Session::get('status') == 'success'){ ?>
								<div class="alert alert-dismissible alert-success">
								  Settings are updated 
								</div>
							<?php }
							if(Session::get('status') == 'error'){ ?>
								<div class="alert alert-dismissible alert-danger">
								  Something is error
								</div>
							<?php }
						}
						

					?>

					<?php
						$settings = DB::table('settings')->first();
					?>
				    <div class="form-group">
				      <label for="site_title" class="col-md-2 control-label">Site Title</label>
				      <div class="col-md-10">
				        <input name="title" type="text" class="form-control" id="site_title" placeholder="Site Title" value="{{ $settings->title }}">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="logo" class="col-md-2 control-label">Upload Logo</label>
				      <div class="col-md-10">
				        <input name="file" type="file" class="form-control" id="logo">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="about" class="col-md-2 control-label">About</label>
				      <div class="col-md-10">
				        <textarea name="about" id="about" cols="82" rows="5">{{ $settings->about }}</textarea>
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="address" class="col-md-2 control-label">Address</label>
				      <div class="col-md-10">
				        <input name="address" type="text" class="form-control" id="address" placeholder="Address" value="{{ $settings->address }}">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="phone" class="col-md-2 control-label">Phone</label>
				      <div class="col-md-10">
				        <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" value="{{ $settings->phone }}">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="email" class="col-md-2 control-label">Email</label>
				      <div class="col-md-10">
				        <input name="email" type="text" class="form-control" id="email" placeholder="Email" value="{{ $settings->email }}">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="location" class="col-md-2 control-label">Location</label>
				      <div class="col-md-10">
				        <input name="location" type="text" class="form-control" id="location" placeholder="Enter location for google map" value="{{ $settings->location }}">
				      </div>
				    </div>

				    <div class="form-group">
				      <div class="col-md-10 col-md-offset-2">
				        <button type="submit" class="btn btn-primary">Submit</button>
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>

@stop