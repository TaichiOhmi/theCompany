<?php
    session_start();

    if (!isset($_SESSION['username'])){
        header("location: ../views");
        exit;
    }

    include_once '../classes/user.php';

    $user = new User;
    $user_details = $user -> getUser($_SESSION['user_id']);
    // $user_details = array('id' => 1, 'first_name' => 'Mary', 'last_name' => 'Watson', 'username' => 'mary', 'password' => '$2y$10$BoTXDQUYBrQQFokWE8TA8emEy671RblzZlbhvxNyJI0Pqj37DEpDe', 'photo' => NULL)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark px-3">
        <a href="dashboard.php" class="navbar-brand">
            <h1 class="h3">The Company</h1>
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
    <main class="card w-50 mx-auto my-5">
        <img src="../images/<?= $user_details['photo'] ?>" alt="Profile Picture" class='card-img-top'>
        <div class="card-body">
            <form action="../actions/uploadPhoto.php" method="POST" enctype="multipart/form-data">
                <div class="input-group mb-2 col">
                    <input type="file" name="photo" class="form-control" required>
                </div>

                <button class="btn btn-outline-secondary btn-sm btn-block w-100" type="submit" name="btn_update_photo">Update Photo</button>
            </form>
        </div>
        <div class="card-footer border-0 bg-white">
            <p class="lead fw-bold mb-0">
                <?= $user_details['first_name'] . ' ' . $user_details['last_name'] ?>
            </p>
            <p class="lead">
                <?= $user_details['username'] ?>
            </p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>