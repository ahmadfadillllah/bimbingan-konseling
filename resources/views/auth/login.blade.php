<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ config('app.name') }}" />
	<meta property="og:title" content="{{ config('app.name') }}" />
	<meta property="og:description" content="{{ config('app.name') }}" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>{{ config('app.name') }}</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('admin/dompet.dexignlab.com/xhtml') }}/images/favicon.png" />
    <link href="{{ asset('admin/dompet.dexignlab.com/xhtml') }}/css/style.css" rel="stylesheet">

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									{{-- <div class="text-center mb-3">
										<a href="javascript:void(0);"><img src="{{ asset('admin/dompet.dexignlab.com/xhtml') }}/images/logo-full.png" alt=""></a>
									</div> --}}
                                    <h4 class="text-center mb-4">Masuk ke akunmu</h4>
                                    @include('notif.index')
                                    <form action="{{ route('login_post') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Ingat saya!</label>
												</div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin/dompet.dexignlab.com/xhtml') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('admin/dompet.dexignlab.com/xhtml') }}/js/custom.min.js"></script>
    <script src="{{ asset('admin/dompet.dexignlab.com/xhtml') }}/js/dlabnav-init.js"></script>
	<script src="{{ asset('admin/dompet.dexignlab.com/xhtml') }}/js/styleSwitcher.js"></script>
</body>
</html>
