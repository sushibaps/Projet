<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>Jean Forteroche | Identification</title>
</head>
<body class="log-body">
<div class="col-md-4 offset-md-4 vh-100 d-flex align-items-center justify-content-center">
    <form class=" log-form bg-dark h-75 w-75 rounded-lg p-5" action="index.php?action=verifyLogin" method="post">
        <h2 class="h2"></h2>
        <div class="col_md_4 justify-content-center d-flex mb-5 mt-0">
            <i class="ion-ios-locked-outline"></i>
        </div>
        <div class="form-group border-bottom mb-3">
            <input class="form-control bg-transparent" type="name" name="user" placeholder="Username">
        </div>
        <div class="form-group border-bottom mb-3">
            <input class="form-control bg-transparent" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group justify-content-center d-flex mt-3">
            <button class="btn w-100 mt-3" type="submit">Log In</button>
        </div>
        <a class="log-a justify-content-center d-flex" href="#">Forgot your email or password ?</a>
    </form>

</div>
</body>
</html>