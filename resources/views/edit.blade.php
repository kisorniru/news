<!DOCTYPE html>

<html lang="en">

	<head>

	  	<title>Ekattor Media Limited</title>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	  	<style type="text/css">

	  		.container {

			  	max-width: 960px;

			}

			.site-header {

			  	background-color: rgba(0, 0, 0, .85);
			  	-webkit-backdrop-filter: saturate(180%) blur(20px);
			  	backdrop-filter: saturate(180%) blur(20px);

			}

			.site-header a {

			  	color: #999;
			  	transition: ease-in-out color .15s;

			}

			.site-header a:hover {

			  	color: #fff;
			  	text-decoration: none;

			}

	  	</style>
	  	
	</head>
	
	<body>

		<nav class="site-header sticky-top py-1">
	      <div class="container d-flex flex-column flex-md-row justify-content-between">
	        <a class="py-2" href="{{ url('/') }}">
	          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
	        </a>
	        <a class="py-2" href="{{ route('newsastrons.create') }}">Add</a>
	        <a class="py-2" href="{{ url('/numbersOnly') }}">Number Only</a>
	        <a class="py-2" href="{{ route('newsastrons.index') }}">List</a>
	        <a class="py-2" href="{{ url('/huaweiCloud') }}">Huawei Cloud</a>
	      </div>
	    </nav>

		<div class="container">
			
			<div class="py-3 text-center">

				<img class="d-block mx-auto mb-4" src="{{ asset('ekattor_tv_logo.png') }}" alt="" width="auto" height="108">

			</div>

			<div class="row">

				<div class="col-md-12 offset-md-0">
					
					<h4 class="mb-3">Edit News</h4>
					@if (session('status'))
					    <div class="alert alert-success alert-dismissible fade show" role="alert">
					        {{ session('status') }}
						    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
					@endif

					
					{{  Form::open( array('url' => route('newsastrons.update',$editNews->id), 'files'=>true,'method'=>'put') )  }}
					
					


						<div class="mb-3">

							<label for="headline">Headline</label>
							<input type="text" class="form-control" name="headline" value="{{$editNews->headline}}" placeholder="Headline goes here ..." required="required" maxlength="70" autofocus>

						</div>

						<div class="mb-3">

							<label for="newsline1">News String 1</label>
							<input type="text" class="form-control" name="paragraph_1" value="{{$editNews->paragraph_1}}" placeholder="News String goes here ..." maxlength="70" required="required">

						</div>

						<div class="mb-3">

							<label for="newsline2">News String 2</label>
							<input type="text" class="form-control" name="paragraph_2" value="{{$editNews->paragraph_2}}" placeholder="News String goes here ..." maxlength="70" required="required">

						</div>

						<button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
					<!-- </form> -->

					{{ Form::close() }}

				</div>

			</div>

			<footer class="my-5 pt-5 text-muted text-center text-small">

				<p class="mb-1">&copy; 2017- Company Name</p>
				
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#">Privacy</a></li>
					<li class="list-inline-item"><a href="#">Terms</a></li>
					<li class="list-inline-item"><a href="#">Support</a></li>
				</ul>

			</footer>

		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	</body>

</html>
