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
    <title>AskJobs</title>
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

        .hoverLike {
            color: gray;
        }

        .hoverLike:hover {
            color: rgb(rgb(17, 136, 190), green, blue) !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/middle.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php require './temp/nav.php'; ?>
    <div class="d-flex align-items-center p-3 my-1 text-white bg-dark rounded shadow-sm">
        <div class="lh-1">
            <h1 class="h6 mb-0 text-white lh-1"><i class="far fa-copyright"></i> AskJobs</h1>
            <small>Creando historia desde 2022</small>
        </div>
        <a class="nav-link active" aria-current="page" href="#" style="position: fixed;right: 0;width: fit-content;height: 50px;">
            <select class="form-select form-select-sm btn-outline-light" style="background-color: #6c757d;font-weight: 500;">
                <option value="sugerencias">Sugerencias</option>
                <option value="seguidos">Seguidos</option>
            </select>
        </a>
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

        <div class="sugerencias box">
            <div class="my-2 p-1 bg-body rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">Sugeridos</h6>
                <div class="d-flex text-muted pt-3">
                    <i class="far fa-user-circle flex-shrink-0 me-2 rounded" style="font-size:xx-large;"></i>
                    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                            <strong class="text-gray-dark">Stephen King <span class="badge bg-success">Verified <i class="text-warning fas fa-certificate"></i></span></strong><a href="#" class="text-muted" style="float:right; text-decoration:none;"> <i class="bi bi-person-plus-fill"></i> Seguir</a>
                        </div>
                        <span class="d-block"><a href="user/account.php?u=stephenking.1" style="text-decoration:none;">@stephenking.1</a></span>
                        <div class="justify-content-between p-2 my-1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultricies pretium maximus. Sed aliquam erat a elit porttitor pulvinar. Praesent a maximus justo. Morbi euismod in nisl ac mollis. Phasellus lobortis lectus quis placerat interdum. Phasellus fringilla turpis ligula, vitae tincidunt est mollis sed. Mauris nec nisl eget libero commodo dignissim. Donec gravida condimentum leo, a euismod nunc euismod in. Nulla congue nisl enim, ac ultrices arcu ultricies at. Cras mattis luctus ultrices. Nulla ac dapibus risus. Praesent eleifend hendrerit dapibus. Nam vel elit rutrum, elementum sem at, consequat diam. Aenean cursus tortor id nulla luctus, eget porttitor ligula consectetur. Nam finibus et nisi et maximus. Suspendisse potenti.
                        </div>
                        <div style="padding-top: 7.2px;">
                            <a class="hoverLike"><i class="fas fa-thumbs-up" style="font-size:xx-large;padding-top:3px;"></i></a>
                            <a class="hoverLike"><i class="fas fa-heart-broken" style="font-size:xx-large;padding-top:3px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="seguidos box">
            <div class="my-2 p-1 bg-body rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">Seguidos</h6>
                <div class="d-flex text-muted pt-3">
                    <i class="far fa-user-circle flex-shrink-0 me-2 rounded" style="font-size:xx-large;"></i>
                    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                            <strong class="text-gray-dark">Stephen King</strong><a href="#" class="text-muted" style="float:right; text-decoration:none;">Seguido</a>
                        </div>
                        <span class="d-block"><a href="user/account.php?u=stephenking.1" style="text-decoration:none;">@stephenking.1</a></span>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <script>
        $(document).ready(function() {
            $("select").change(function() {
                $(this).find("option:selected").each(function() {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });

        (function() {
            'use strict'

            document.querySelector('#navbarSideCollapse').addEventListener('click', function() {
                document.querySelector('.offcanvas-collapse').classList.toggle('open')
            })
        })()
    </script>
</body>

</html>