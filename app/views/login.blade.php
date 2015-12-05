@extends('main')
@section('content')
@include('navbar')
	<div class="container">
		
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" action="{{ URL::route('postAdminLogin') }}" method="post">
				  <fieldset>
				    <legend>Login</legend>
				    <div class="form-group">
				      <label for="username" class="col-md-2 control-label">Username</label>
				      <div class="col-md-10">
				        <input name="username" type="text" class="form-control" id="username" placeholder="Username">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="password" class="col-md-2 control-label">Password</label>
				      <div class="col-md-10">
				        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
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