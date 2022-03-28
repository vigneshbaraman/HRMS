
<!-- @extends('layouts.app') -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9,maximum-scale = 0.9, shrink-to-fit=no">
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    


</head>

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-lg-5" id="form-section">
        <div id="auth-logo">
            <img src="../img/hemas-logo.png" style="max-height: 50px" alt="Logo"/>
        </div>

        <div id="auth-form">
            <form id="loginForm" method="post" action="javascript:void(0)">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" name="employee_id" id="employee_id" class="form-control form-control-xl" placeholder="Employee ID">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="login_password" id="login_password"  class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
               
                <button class="btn btn-danger btn-block btn-lg shadow-lg" id="btnLogin">Log in</button>
            </form>
        </div>
    </div>

    <div class="col-lg-7 visible-lg" id="background-section">

    </div>
  </div>
</div>
<script src="../pro_js/jquery/jquery.min.js"></script>
<script src="../pro_js/login.js"></script>
<script type="text/javascript">

    $( document ).ready(function() {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
        });
   
    var login_check_process_link = "{{url('login_check_process')}}";
</script>
@endsection
