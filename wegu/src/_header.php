<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEGU</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <div id="inner-nav" class="container">
                    <div id="logo" class="nav-item">
                        <a href="/">
                            <img src="assets/images/wegu.png" alt="" width="200">
                        </a>
                    </div>
                    <div id="links" class="nav-item">
                        <ul>
                            <?php if(!isset($_SESSION['id'])) { ?>
                                <li>
                                    <a href="signin.php" class="btn btn-sm">LOGIN</a> <!-- signin or signin.php -->
                                </li>
                            <?php } else { ?>
                            <li>
                                <div class="dropdown">
                                    <button class="dropdown-btn"><?= $_SESSION['name'] ?></button>
                                    <div id="drop-down-list" class="dropdown-content">
                                        <a href="logout.php?logout=true">Logout</a>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </body>




        