<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <title>Login</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        body {
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .account-wall {
            margin-top: 80px;
            padding: 40px 0px 20px 0px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16);
        }

        .login-title {
            color: #555;
            font-size: 22px;
            font-weight: 400;
            display: block;
        }

        .profile-img {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .select-img {
            border-radius: 50%;
            display: block;
            height: 75px;
            margin: 0 30px 10px;
            width: 75px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .select-name {
            display: block;
            margin: 30px 10px 10px;
        }

        .logo-img {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="account-wall">
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="login">
                            <center>
                                <h3>Login Panel</h3>
                            </center>
                            <img class="profile-img" src="https://www.kindpng.com/picc/m/459-4595992_business-user-account-png-image-blue-link-icon.png" alt="">
                            <form class="form-signin" action="<?php echo base_url(); ?>login/proses" method="post">
                                <input type="text" name="user_adm" class="form-control" placeholder="Username" required autofocus>
                                <input type="password" name="pass_adm" class="form-control" placeholder="Password" required> <br>
                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In" />
                            </form>
                            <div id="tabs" data-tabs="tabs">
                                <br />
                                <br />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>