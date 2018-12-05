<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/adminlte/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminlte/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminlte/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div>
        @if (session()->has('info'))
            <div class="alert alert-info">
              {{ session('info') }}
            </div>
        @endif
    </div>  
    <div class="login-logo">
        <a href="/"><b>{{ config('app.name') }}</a>
    </div>
        <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingresa tus datos para iniciar sesión</p>

        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input 
                    type="email" 
                    class="form-control" 
                    placeholder="Email" 
                    name="email" 
                    value="{{ old('email') }}" 
                        required autofocus>                
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif   
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>             
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input 
                    type="password" 
                    class="form-control" 
                    placeholder="Password" 
                    name="password" 
                    required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif                    
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="social-auth-links text-center">
            <p>- O -</p>
            <a href="{{ route('login.social', 'facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Ingresar usando
                Facebook</a>
            <a href="{{ route('login.social', 'twitter') }}" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> Ingresar usando
                Twitter</a>
                    
            <a href="{{ route('login.social', 'google') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Ingresar usando
                Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a 
            class="btn btn-link" 
            href="{{ route('password.request') }}">
            Restablecer Password?
        </a>
        <a href="{{ route('register') }}">Registrate</a>
    </div>

      <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="/adminlte/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
