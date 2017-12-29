@extends('layouts.app')

@section('content')
	{!! Form::open(['url' => 'contact/submit']) !!}
	<div class="container container mt-4 mb-5">
			<h3 class="display-4 text-center">  </h3>
			<hr class="bg-dark mb-4 w-25">
			<div class="row">
				@include ('inc.messages')
				<!-- first col-->
				<div class="col-md-3">
					<div class="panel">
						<div class="panel-heading">
							<h1 >Contact</h1>
						</div>
						The campina, Garcia street <br>

						Caracas, Capital District 1050 <br>

						Venezuela<br>

						smartmaxdev@gmail.com
					</div>
				</div>

				<!-- second col-->
	      <div class="col-md-5">
	        <div class="panel">
						<div class="panel-heading">
	            <h1 ></h1>
	          </div>
				    <div class="form-group">
				    	{{  Form::label('name', 'Name') }}
				    	{{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
				    </div>

				    <div class="form-group">
				    	{{  Form::label('email', 'E-Mail Address') }}
				    	{{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email']) }}
				    </div>

				    <div class="form-group">
				    	{{  Form::label('message', 'Message') }}
				    	{{ Form::textarea('message','',  ['class' => 'form-control', 'placeholder' => 'Enter message']) }}
				    </div>

				    <div class="form-group">
				    	{{  Form::submit('Submit', ['class' => 'btn btn-primary']) }}

				    </div>
					</div>
				</div>

				<!-- third col-->
				<div class="col-md-3">
					<div class="panel">
						<div class="panel-heading">
	            <h1 ></h1>
	          </div>
						<p></p>
						<div id="map"></div>

							<script src="/js/script.js"></script>
							<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhTEnK_Y9x-nPbPise9h2APKk-NFj3NCE&callback=initMap"></script>
						</div>
				</div>

			</div>
		</div>
	{!! Form::close() !!}
@endsection
