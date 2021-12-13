<!DOCTYPE html>
<html>
<head>
	<title>Water</title>

	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css'); }}">

</head>
<body>

	<div class="container">
		<div class="container-fluid">
			<div class="container p-3 my-3 border">
				<div class="align-self-center ">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<div class="container-fluid">
							<a class="navbar-brand mb-0 h1" href="#">Water Refilling</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<div class="col-9">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="/product">Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/order">Order</a>
                                        </li>	
                                    </ul>
                                </div>                        

								<div class="d-flex col-2">
									<li class="nav-item dropdown" style="list-style:none">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											{{ Auth::User()->User_Fname }} {{ Auth::User()->User_Lname }}
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
											<li><a class="dropdown-item" href="/customer/{{Auth::User()->id}}">Profile</a></li>
											{{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
											<li><hr class="dropdown-divider"></li>
											<li><a href="{{ route('logout') }}" class="dropdown-item">Sign-out</a></li>
										</ul>
									</li>
								</div>				
							</div>
						</div>
					</nav>
				</div>
				<div class="container">
					@yield('content')
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{URL::asset('/js/bootstrap.js'); }}"></script>

</body>
</html>