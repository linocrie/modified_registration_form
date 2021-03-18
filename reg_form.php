<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
    <form class="form-horizontal" role="form" action="process.php" method="post">
        <h2 class="text-center text-primary">Registration Form</h2>
        <div class="form-group" style="margin-left: 24%;margin-top:3%">
            <label for="username" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-3">
                <input type="text" id="username" name="username" placeholder="username" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group" style="margin-left: 24%">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-3">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group" style="margin-left: 24%">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-3">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group text-center" style="margin-left: 24%">
            <div class=" col-sm-6">
                <input type="submit" style="width:25%;margin-left:55%" value="Register" class="btn btn-primary">
            </div>
        </div>
    </form>
    <!-- /
</body>

</html>