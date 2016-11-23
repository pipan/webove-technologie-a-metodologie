<?php
$title = "Rezervacie";
$userName = "Admin";
?>

<html>
    <head>
        <title><?php echo $title;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="../../assets/vendor/jquery-3.1.1.min.js"></script>
        <script src="../../assets/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../../assets/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/system.css">
    </head>
    <body>
        <main>
            <nav>
                <div class="nav-profile flexbox flex-column">
                    <div class="flexbox flex-row padding-v8">
                        <div class="avatar">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <div class="flex"></div>
                        <div class="logout">
                            <span class="glyphicon glyphicon-off"></span>
                        </div>
                    </div>
                    <div class="name padding-v8"><?php echo $userName;?></div>
                </div>
                <div class="nav-delimeter"></div>
                <ul>
                    <li><a>Hlavná stránka</a></li>
                    <li><a class="active flexbox flex-row"><span class="flex">Rezervácie</span><span><span class="badge">2</span></span></a></li>
                    <li><a>Profil</a></li>
                </ul>
            </nav>
            <div class="main">
                <header>
                    <h1><?php echo $title;?></h1>
                </header>
                <div>

                </div>
                <footer>

                </footer>
            </div>
        </main>
    </body>
</html>
