<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">

		<div class="error-404 d-flex align-items-center justify-content-center">
			<div class="container">
				<div class="bg-transparent shadow-none card radius-15">
					<div class="row no-gutters">
						<div class="col-lg-6">
							<div class="card-body">
								<h1 class="display-1"><span class="text-primary">4</span><span class="text-danger">0</span><span class="text-success">3</span></h1>

								<h2 class="text-capitalize">User does not have the right permissions</h2>
								<div class="mt-5">	<a href="/dashboard" class="btn btn-lg btn-primary px-md-5 radius-30">Go Home</a>
									<a href="{{  url()->previous()  }}" class="ml-3 btn btn-lg btn-outline-dark px-md-5 radius-30">Back</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<lottie-player src="{{asset('assets/animation/403.json')}}" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>

</html>
