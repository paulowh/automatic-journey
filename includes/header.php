<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Journey</title>

    <link rel="shortcut icon" href="./assets/icon.png" type="image/x-icon">

    <link rel="stylesheet" href="./assets/libs/bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/libs/bootstrap/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./assets/libs/semantic/semantic.min.css">

    <script src="./assets/js/jquery.min.js"></script>
    <!-- <script src="./assets/libs/bootstrap/bootstrap.min.js"></script> -->
    <script src="./assets/libs/semantic/semantic.min.js"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="container">

    <nav class="sidebar hide">
        <div class="logo-details">
            <a href="#" class="logo">
                <img src="./assets/logo.png" class="logo_img" alt="Paulo Logo">
            </a>
        </div>
        <ul class="nav-links">

            <li>
                <div class="icon-link">
                    <a>
                        <i class="bi bi-people"></i>
                        <span class="link_name">Usuários</span>
                    </a>
                    <i class='bi bi-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name">Usuários</a></li>
                    <li><a href="#">Criar Usuário</a></li>
                    <li><a href="#">Ver Todos</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a>
                        <i class="bi bi-bookmark"></i>
                        <span class="link_name">UC</span>
                    </a>
                    <i class='bi bi-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name">UC</a></li>
                    <li><a href="#">Cadastrar UC</a></li>
                    <li><a href="#">Ver Todos</a></li>
                </ul>
            </li>

            <li>
                <div class="profile-details">
                    <div class="name-job">
                        <div class="profile_name">Paulo Wh</div>
                        <div class="job"> <?= date('Y') ?></div>
                    </div>
                    <a class="site-logout" href="#"><i class="bi bi-box-arrow-in-left"></i></a>
                    <a class="site-logout-span" href="#"><i class="bi bi-box-arrow-in-left"></i></a>
                </div>
            </li>

        </ul>
    </nav>
    <div class="open_menu">
        <i class="bi bi-list"></i>
    </div>

    <script>
        $(".arrow").on("click", function() {
            var arrowParent = $(this).parent().parent();
            arrowParent.toggleClass("showMenu");
        });

        $(".open_menu").on("click", function() {
            $(".sidebar").toggleClass("hide");
            $(".sidebar").css("display", "block");
        });
    </script>