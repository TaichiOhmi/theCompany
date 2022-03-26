<?php
    session_start();

    if (!isset($_SESSION['username'])){
        header("location: ../views");
        exit;
    }

    include_once '../classes/user.php';

    $user = new User;
    $user_list = $user -> getUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dash Board</title>
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
    <main class="container-fluid w-50 py-5" style="padding-top: 80px">
        <div class="table-responsive">
            <h2 class="text-muted">User List</h2>
            <table class="table table-hover">
                <thead>
                    <tr class="table-light">
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th style="width: 90px"></th> <!-- for action buttons -->
                    </tr>
                </thead>
                <tbody>
                    <?php while($user_details = $user_list -> fetch_assoc()){ ?>
                    <tr>
                        <td><?= $user_details['id'] ?></td>
                        <td><?= $user_details['first_name'] ?></td>
                        <td><?= $user_details['last_name'] ?></td>
                        <td><?= $user_details['username'] ?></td>
                        <td>
                            <a href="editUser.php?user_id=<?= $user_details['id'] ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <a href="../actions/removeUser.php?user_id=<?= $user_details['id'] ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>