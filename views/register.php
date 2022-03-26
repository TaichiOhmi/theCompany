<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/edab1adf4f.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body class="bg-light">
    <!-- vh・・・viewport height。ビューポートの高さに対する割合。 -->
    <div class="" style="height:100vh;">
        <div class="row h-100 m-0">
            <div class="card w-50 mx-auto my-auto p-0">
                <div class="card-header bg-white border-0">
                    <h1 class="text-center">Register</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register.php" method="POST">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control mb-2" required autofocus>

                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control mb-2" required>

                        <label for="username" class="fw-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="15" required>

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control mb-2" min-length="8" required>

                        <button type="submit" name="btn_register" class="btn btn-success btn-block w-100 my-3">Register</button>

                        <p class="small text-center">Registered already? <a href="../views">Log in</a></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>