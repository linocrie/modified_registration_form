<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="main-bg">
    <div class="login-container text-c animated flipInX">
        <div>
            <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
        </div>
        <h3 class="text-whitesmoke">Log In page</h3>
        <p class="text-whitesmoke">Log In</p>
        <div class="container-content">
            <form class="margin-t" action="user_login.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="*****" required="">
                </div>
                <button type="submit" class="form-button button-l margin-b">Log In</button>
                <p class="text-whitesmoke text-center"><small>Do not have an account?</small></p>
                <a class="text-darkyellow" href="reg_form.php"><small>Registration</small></a>
            </form>
            <p class="margin-t text-whitesmoke"><small> Jerm &copy; 2021</small> </p>
        </div>
    </div>
</body>

</html>