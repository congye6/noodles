<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keyword" content="">

    <title>登录</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/style-responsive.css" rel="stylesheet">
    <link href="/css/alert.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">

        <div class="form-login">
            <h2 class="form-login-heading">sign in now</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="User ID" id="userName" required autofocus>
                <br>
                <input type="password" class="form-control" placeholder="Password" id="password" required>
                <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

		                </span>
                </label>
                <button class="btn btn-theme btn-block" onclick="login()"><i class="fa fa-lock"></i> SIGN IN</button>
                <hr>

                <div class="login-social-link centered">
                    <p>or you can sign in via your social network</p>
                    <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                    <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                </div>
                <div class="registration">
                    Don't have an account yet?<br/>
                    <a class=""  data-toggle="modal" href="#registerModal">
                        Create an account
                    </a>
                </div>

            </div>



        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-theme" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->


        <!-- Register-->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="registerModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your name here</p>
                        <input type="text" name='_method' id="registerName" placeholder="UserName" autocomplete="off" class="form-control placeholder-no-fix">
                        <p>Enter your password here</p>
                        <input type="text" name='_method' id="registerPassword" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-theme" type="button" onclick="register()">Register</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Register -->

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>

<script src="/js/alert.js"></script>
<script src="/js/cookie.js"></script>
<script>
    $.backstretch("assets/img/login-bg.jpg", {speed: 500});

    function login(){
        var userName=$("input#userName").val();
        $.ajax({
            type: "get",
            url:'/login/'+userName+'/'+$("input#password").val(),
            data:'',
            success: function (data) {
                if(data=='true') {
                    //保存cookie
                    setCookie('userName',userName,30);

                    window.location.href = "/";
                }
                else
                    zeroModal.error(data);
            }
        });
    }

    function register(){
        var userName=$("input#registerName").val();
        $.ajax({
            type: "get",
            url:'/register/'+userName+'/'+$("input#registerPassword").val(),
            data:'',
            success: function (data) {
                if(data=='true') {
                    zeroModal.success('注册成功');
                }
                else
                    zeroModal.error(data);
            }
        });
    }
</script>


</body>
</html>

