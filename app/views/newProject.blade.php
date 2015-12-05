@extends('main')

@section('content')

	@include('navbar')

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form class="form-horizontal" action="{{ URL::route('postAdminNewProject') }}" method="post" enctype="multipart/form-data">
				  <fieldset>
				    <legend>Add New Project</legend>
				    <?php
				    	if(Session::has('status')){
				    		if(Session::get('status') == 'success'){ ?>
								<div class="alert alert-dismissible alert-success">
								 	Project has been added
								</div>
				    		<?php }
				    	}

				    ?>
				    <div class="form-group">
				      <label for="p1" class="col-md-2 control-label">প্রকল্পের নাম</label>
				      <div class="col-md-10">
				        <input name="p1" type="text" class="form-control" id="p1">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p2" class="col-md-2 control-label">প্রকল্পের ছবি</label>
				      <div class="col-md-10">
				        <input name="p2" type="file" class="form-control" id="p2">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p3" class="col-md-2 control-label">জেলার নাম</label>
				      <div class="col-md-10">
				        <input name="p3" type="text" class="form-control" id="p3">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p4" class="col-md-2 control-label">উপজেলার নাম</label>
				      <div class="col-md-10">
				        <input name="p4" type="text" class="form-control" id="p4">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p5" class="col-md-2 control-label">ধরণ</label>
				      <div class="col-md-10">
				        <input name="p5" type="text" class="form-control" id="p5">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p6" class="col-md-2 control-label">প্রকল্পের স্থান</label>
				      <div class="col-md-10">
				        <input name="p6" type="text" class="form-control" id="p6">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p7" class="col-md-2 control-label">প্রকল্পের প্রাক্কলিত মূল্য</label>
				      <div class="col-md-10">
				        <input name="p7" type="text" class="form-control" id="p7">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p8" class="col-md-2 control-label">অর্থের উৎস</label>
				      <div class="col-md-10">
				        <input name="p8" type="text" class="form-control" id="p8">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p9" class="col-md-2 control-label">কাজ শুরুর তারিখ</label>
				      <div class="col-md-10">
				        <input name="p9" type="text" class="form-control" id="p9">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p10" class="col-md-2 control-label">সমাপ্তির তারিখ</label>
				      <div class="col-md-10">
				        <input name="p10" type="text" class="form-control" id="p10">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p11" class="col-md-2 control-label">প্রকল্প বাস্তবায়নকারী সংস্থা/অফিস</label>
				      <div class="col-md-10">
				        <input name="p11" type="text" class="form-control" id="p11">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p12" class="col-md-2 control-label">ছবি</label>
				      <div class="col-md-10">
				        <input name="p12" type="file" class="form-control" id="p12">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p13" class="col-md-2 control-label">প্রকল্পের সভাপতির নাম ও ঠিকানা</label>
				      <div class="col-md-10">
				        <input name="p13" type="text" class="form-control" id="p13">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p14" class="col-md-2 control-label">ছবি</label>
				      <div class="col-md-10">
				        <input name="p14" type="file" class="form-control" id="p14">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p15" class="col-md-2 control-label">প্রকল্প সম্পাদকের নাম ও ঠিকানা</label>
				      <div class="col-md-10">
				        <input name="p15" type="text" class="form-control" id="p15">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p16" class="col-md-2 control-label">ছবি</label>
				      <div class="col-md-10">
				        <input name="p16" type="file" class="form-control" id="p16">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p17" class="col-md-2 control-label">কন্টাক্টরের নাম ও ঠিকানা</label>
				      <div class="col-md-10">
				        <input name="p17" type="text" class="form-control" id="p17">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p18" class="col-md-2 control-label">প্রকল্পের বিস্তারিত বর্ণনা</label>
				      <div class="col-md-10">
				        <input name="p18" type="text" class="form-control" id="p18">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p19" class="col-md-2 control-label">প্রকল্প বাস্তবায়নের পূর্বে ছবি</label>
				      <div class="col-md-10">
				        <input name="p19" type="file" class="form-control" id="p19">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p20" class="col-md-2 control-label">প্রকল্প চলাকালীন ছবি</label>
				      <div class="col-md-10">
				        <input name="p20" type="file" class="form-control" id="p20">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p21" class="col-md-2 control-label">প্রকল্প বাস্তবায়নের পরের ছবি</label>
				      <div class="col-md-10">
				        <input name="p21" type="file" class="form-control" id="p21">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p22" class="col-md-2 control-label">পরিদর্শনকারীর নাম ও পদবী</label>
				      <div class="col-md-10">
				        <input name="p22" type="text" class="form-control" id="p22">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p23" class="col-md-2 control-label">তারিখ</label>
				      <div class="col-md-10">
				        <input name="p23" type="text" class="form-control" id="p23">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p24" class="col-md-2 control-label">মন্তব্য</label>
				      <div class="col-md-10">
				        <input name="p24" type="text" class="form-control" id="p24">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="p25" class="col-md-2 control-label">কাজের ছবি</label>
				      <div class="col-md-10">
				        <input name="p25" type="file" class="form-control" id="p25">
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