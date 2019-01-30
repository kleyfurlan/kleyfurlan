<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Admin</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
		  WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		  });
		</script>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="{{ asset('admin/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
	</head>
	<!-- end::Head -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
    	<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

       		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url( {{asset('admin')}}/images/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-logo__cimsfarm">
							<h1 style="text-align:center"><a href="{{ env('APP_URL') }}" style="color: #49c6e1; text-decoration: none;" target="_blank">Kley</a></h1>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Entrar no Painel</h3>
							</div>
							<form class="m-login__form m-form" action="{{ url('admin/login')}}" method="POST">
								
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" id="email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" id="password" placeholder="Password" name="password">
								</div>
								{{-- <div class="row m-login__form-sub form-group m-form__group">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
										<input type="checkbox" id="ga_auth" name="ga_auth" value="1"> Possui autenticação em "2 passos"?
										<span></span>
										</label>
										<span class="m-form__help">Selecione a opção acima caso tenha o google autenticator ativado</span>
									</div>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" id="auth_code" type="text" placeholder="Token Google" name="token_ga">
								</div> --}}
								<div class="row m-login__form-sub">
									<div class="col m--align-right m-login__form-right">
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Entrar
									</button>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    		<!--begin::Base Scripts -->
		<script src="{{ asset('admin/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('admin/scripts.bundle.js') }}" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js" type="text/javascript"></script>
		<script src="{{ asset('admin/custom-js/login.js') }}" type="text/javascript"></script>
		<!--end::Base Scripts -->   

	</body>
	<!-- end::Body -->
</html>
