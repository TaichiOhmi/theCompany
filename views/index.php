<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/edab1adf4f.js" crossorigin="anonymous"></script>
    <title>Log in</title>
</head>
<body class="bg-light">
    <!-- vh・・・viewport height。ビューポートの高さに対する割合。 -->
    <div class="" style="height:100vh;">
        <div class="row h-100 m-0">
            <div class="card w-50 mx-auto my-auto">
                <div class="card-header bg-white border-0">
                    <h1 class="text-center">Log in</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="POST">
                        <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" autofocus required>
                        <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5" required>
                        <button type="submit" name="btn_log_in" class="btn btn-primary btn-block w-100">Log in</button>
                    </form>

                    <p class="small text-center mt-3"><a href="register.php">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>