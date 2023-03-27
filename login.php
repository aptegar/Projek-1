<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-088AwQnZB+VDvE9tvIXQPIFFSUTR+nIdqm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Login Tegar AP</title>
</head>
<body>
    <!-- loader -->
    <div class="bg-loader">
        <div class="loader">

        </div>
    </div>

    <div class="login-form">
       <img src="asset/img/DolFile1.png" alt="">
        <h1>Login Form</h1>
        <form action="#" method="post">
            <p>Username</p>
            <input type="text" name="user" placeholder="Masukan Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukan Password">
            <button type="submit">Login</button>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("bg-loader").hide();
        })
    </script>
</body>
</html>

