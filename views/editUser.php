<?php
    session_start();

    if (!isset($_SESSION['username'])){
        header("location: ../views");
        exit;
    }

    include_once '../classes/user.php';

    $user = new User;
    $user_details = $user -> getUser($_GET['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit User</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark px-3">
        <a href="dashboard.php" class="navbar-brand">
            <h1 class="h3">Dash Board</h1>
        </a>
        <div class="ms-auto">
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link"><?= $_SESSION['username'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="../actions/logout.php" class="nav-link text-danger">Log out</a>
                    </li>
                <?php else: ?>
                    <li class='nav-item'>
                        <a href='index.php' class='nav-link'>Log in</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <main class="container-fluid py-5">
        <div class="card w-50 mx-auto border-0">
            <div class="card-header bg-white border-0">
                <h1 class="text-center">EDIT USER</h1>
            </div>
            <div class="card-body">
                <form action="../actions/editUser.php" method="POST">
                    <input type="hidden" name="user_id" value="<?= $user_details['id'] ?>">

                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control mb-2" value="<?= $user_details['first_name'] ?>" required autofocus>

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control mb-2" value="<?= $user_details['last_name'] ?>" required>

                    <label for="username" class="fw-bold">Username</label>
                    <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="15" value="<?= $user_details['username'] ?>" required>

                   <div class="text-end">
                       <button class="btn btn-warning btn-sm px-5">Save</button>
                       <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                   </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>