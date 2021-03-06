<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> تسجيل الدخول </title>

        <!-- Favicon -->
        <link rel="icon" href="{{ URL::asset('assets/logo/logo_haed.svg')}}" type="image/x-icon"/>

        <!-- Icons css -->
        <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet">
	
		<!--  Custom Scroll bar-->
        <link href="{{ URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>

        <!--  Sidebar css -->
        <link href="{{ URL::asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
        
        <!--- Internal Morris css-->
        <link href="{{ URL::asset('assets/plugins/morris.js/morris.css') }}" rel="stylesheet">

        <!--- Style css --->
        <link href="{{ URL::asset('assets/css-rtl/style.css') }}" rel="stylesheet">

        <!--- Dark-mode css --->
        <link href="{{ URL::asset('assets/css-rtl/style-dark.css') }}" rel="stylesheet">

        <!---Skinmodes css-->
        <link href="{{ URL::asset('assets/css-rtl/skin-modes.css') }}" rel="stylesheet" />
        
        <!--  Right-sidemenu css -->
		<link href="{{ URL::asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!--  Left-Sidebar css -->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/sidemenu.css') }}">

		<!--- Animations css-->
		<link href="{{ URL::asset('assets/css/animate.css') }}" rel="stylesheet">

	</head>

	<body class="main-body dark-theme">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		
		<!-- Page -->
		<div class="page">
		
			<div class="container-fluid">
				<div class="row no-gutter">
					<!-- The image half -->
					<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
						<div class="row wd-100p mx-auto text-center">
							<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
								<img src="{{ URL::asset('assets/logo/logo_final_w.svg')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
							</div>
						</div>
					</div>
					<!-- The content half -->
					<div class="col-md-6 col-lg-6 col-xl-5">
						<div class="login d-flex align-items-center py-2">
							<!-- Demo content-->
							<div class="container p-0">
								<div class="row">
									<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="card-sigin">
											<div class="mb-5 d-flex"> <a href="index.html"><img src="{{ URL::asset('assets/logo/logo_haed_w.svg')}}" class="sign-favicon ht-40" alt="logo"></a></div>
											@if ($errors->any())
													<div class="alert alert-danger">
														<ul>
															@foreach ($errors->all() as $error)
																<li>{{ $error }}</li>
															@endforeach
														</ul>
													</div>
											@endif
											
											<div class="card-sigin">
												<div class="main-signup-header">
													<form action="{{ route('store') }}" method="Post" autocomplete="off">
														@csrf
														<div class="form-group">
															<label>البريد الالكتروني</label> <input class="form-control" placeholder="Enter your email" type="text" name="email">
														</div>
														<div class="form-group">
															<label>كلمة السر</label> <input name="password" class="form-control" placeholder="Enter your password" type="password">
														</div><button class="btn btn-main-primary btn-block">تسجيل الدخول</button>
													</form>
												<div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End -->
						</div>
					</div><!-- End -->
				</div>
			</div>
			
		</div>
		<!-- End Page -->


        <!-- JQuery min js -->
        <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap Bundle js -->
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Ionicons js -->
        <script src="{{ URL::asset('assets/plugins/ionicons/ionicons.js') }}"></script>

        <!-- Moment js -->
        <script src="{{ URL::asset('assets/plugins/moment/moment.js') }}"></script>

        <!-- Eva-icons js -->
        <script src={{ URL::asset('assets/js/eva-icons.min.js') }}"></script>

        <!-- Rating js-->
        <script src="{{ URL::asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/rating/jquery.barrating.js') }}"></script>

        <!-- custom js -->
        <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
		
	</body>
</html>