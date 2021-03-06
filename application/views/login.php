<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <script src="/bs/jquery/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/bs/css/bootstrap.min.css">
    <script src="/bs/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="/bs/aa_style/login.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row" id="limit">
        <img src="/bs/img/login.jpg" class="img-responsive" alt="SAA Logo">
    </div>
        <form action="/login/test?url= <?php echo $url; ?>" class="form-signin" method="post" accept-charset="utf-8">
        <div class="box">
        <label for="inputID" class="sr-only">User ID</label>
        <input type="text" name="username" class="form-control" placeholder="User ID" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>
        </form>

</div> <!-- /container -->

</body>
</html>
