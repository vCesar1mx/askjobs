<?php
session_start();
date_default_timezone_set('America/Mexico_City');
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['time'] = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ''.$_GET['u'];?> | AskJobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/middle.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php require '../temp/nav-withoutFeed.php'; ?>
    <div class="d-flex align-items-center p-3 my-1 text-white bg-success rounded shadow-sm">
        <div class="lh-1">
            <h1 class="h6 mb-0 text-white lh-1"><i class="far fa-copyright"></i> Dashmail</h1>
            <small>Creando historia desde 2022</small>
        </div>
    </div>

    <main class="container">
        <div class="my-1 p-1 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Noticias recientes</h6>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>

                <p class="pb-1 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">@CryptosNews</strong>
                    BTC are down in January a 10%
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text>
                </svg>

                <p class="pb-1 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">@DashMail <span class="badge bg-success">Verified <i class="text-warning fas fa-certificate"></i></span></strong>
                    News updates of new-year, 1000 suggest are selected for implement in this year
                </p>
            </div>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text>
                </svg>

                <p class="pb-1 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">Advertise</strong>
                    You can play in mc.haliacraft.com, this server are open to all in Java/Bedrock plataform!!.
                </p>
            </div>
            <small class="d-block text-end mt-3">
                <a href="#" style="text-decoration:none;">Ver mas noticias</a>
            </small>
        </div>

        

    </main>
    <script>

        (function() {
            'use strict'

            document.querySelector('#navbarSideCollapse').addEventListener('click', function() {
                document.querySelector('.offcanvas-collapse').classList.toggle('open')
            })
        })()
    </script>
</body>

</html>