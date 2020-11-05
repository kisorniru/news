<!DOCTYPE html>

<html lang="en">

	<head>

	  	<title>Bootstrap Example</title>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

	  	<style type="text/css">
	  		.container {
			  max-width: 960px;
			}

			/*
			 * Custom translucent site header
			 */

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
	        <a class="py-2" href="#">
	          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
	        </a>
	        <a class="py-2" href="{{ url('/create') }}">ADD</a>
	        <a class="py-2" href="{{ url('/show') }}">LIST</a>
	      </div>
	    </nav>

		<div class="container">
			
			<div class="py-3 text-center">

				<img class="d-block mx-auto mb-4" src="{{ asset('ekattor_tv_logo.png') }}" alt="" width="72" height="72">

			</div>

			<div class="row">

				<div class="col-md-12 offset-md-0">
					
					<h4 class="mb-3">Recent News</h4>

					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Description</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($NewsAstrons as $NewsAstron)
								<tr>
									<th scope="row">{{ $loop->iteration }}</th>
									<td>
										<code>Headline:</code><br>{{ $NewsAstron->headline }} <br>
										<code>paragraph:</code><br>{{ $NewsAstron->paragraph_1 }} <br>
										{{ $NewsAstron->paragraph_2 }} <br>
										{{ $NewsAstron->paragraph_3 }} <br>
									</td>
									<td>
										{{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'newsastrons.destroy', $NewsAstron->id ] ]) }}
						                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
						                {{ Form::close() }}
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>

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
