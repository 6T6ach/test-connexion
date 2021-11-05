<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php
include('./inc/head.php');
?>

<body>
    <?php
    include('./inc/header.php')
    ?>


    <main class="main-connexion">
        <!-- Carousel backgroud -->
        <div id="bg-carousel" class="carousel slide carousel-fade d-none d-sm-block" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="./images/allocine-1.png" class="d-block w-100" alt="image1">
                </div>

                <div class="carousel-item">
                    <img src="./images/allocine-2.png" class="d-block w-100" alt="image2">
                </div>

                <div class="carousel-item">
                    <img src="./images/allocine-3.png" class="d-block w-100" alt="image3">
                </div>

                <div class="carousel-item">
                    <img src="./images/allocine-4.png" class="d-block w-100" alt="image4">
                </div>

                <div class="carousel-item">
                    <img src="./images/allocine-5.png" class="d-block w-100" alt="image5">
                </div>

                <div class="carousel-item">
                    <img src="./images/allocine-6.png" class="d-block w-100" alt="image6">
                </div>

            </div>
        </div>

        <!-- Partie connexion -->

        <aside class="connexion-cont">

            <div class="container-fluid ">
                <div class="row">
                    <div id="connexion-border" class="col-lg-4 offset-md-7 bg-white p-2 gap-2">

                        <!-- login_wrapper -->
                        <div class="connexion-content">
                            <div class="">
                                <h3 class="text-center text-dark">CONNECTEZ-VOUS</h3>

                                <div class="p-2">
                                    <a class="btn btn-primary facebook w-100 p-2" href="#">
                                        <i class="fab fa-facebook-f"></i>&emsp;Se
                                        connecter avec Facebook</a>
                                </div>

                                <div class="p-2">
                                    <a class="btn btn-danger google-plus w-100 p-2" href="#"><i class="fab fa-google"></i>&emsp;Se connecter avec Google </a>
                                </div>
                            </div>


                            <form action="control.php" method="POST">
                                <fieldset>
                                    <!--  Border OU -->
                                    <div class="parent-border d-flex gap-3">
                                        <div class="barre-ou w-50 border-warning"></div>
                                        <h3 class="text-dark text-center">OU</h3>
                                        <div class="barre-ou w-50 border-warning"></div>
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="form-email" placeholder="EMAIL" aria-describedby="emailHelp" name="email">

                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="form-pwd" placeholder="PASSWORD" name="password">
                                        <a class="text-dark p-2 text-decoration-none" href="#">Mot de passe oublié ?</a>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-warning w-100"><b>Se Connecter</b></button>

                                    </div>
                                </fieldset>
                            </form>

                            <!--  alert :Message pour l'utilisateur -->
                            <?php
                            if (isset($_SESSION['message'])) :
                            ?>
                                <div class="row justify-content-end">
                                    <div class="message my-2 alert alert-danger">
                                        <?= $_SESSION['message'] ?>
                                    </div>
                                </div>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>