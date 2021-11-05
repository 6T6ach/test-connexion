<header>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] === 1) :
    ?>
        <!-- connecte -->
        <nav class="navbar navbar-light navbar-brand fixed-top nav-connexion">
            <div class="container-fluid offset-md-4 cont-nav">
                <a class="navbar-brand" href="index.php"><img id="nav-logo" src="./images/logo.JPG" alt="Logo-allocine"></a>

                <div class="d-flex align-items-center gap-3">
                    <div class="search-1 text-dark"><input type="text" placeholder="Rechercher"></div>
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>


                <div class="dropdown dropdown-connecte">

                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= $image_profil ?>"></img>
                        <?= !empty($_SESSION['pseudo']) ? $_SESSION['pseudo'] : 'Anonyme'; ?>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item disabled" href="#"><i class="fas fa-film"></i> MES FILMS</a></li>
                        <li><a class="dropdown-item disabled" href="#"><i class="fas fa-tv"></i> MES SERIES</a></li>
                        <li><a class="dropdown-item disabled" href="#"><i class="fas fa-layer-group"></i> MES COLLECTIONS</a></li>
                        <li><a class="dropdown-item disabled" href="#"><i class="fas fa-pencil-alt"></i> MES CRITIQUES</a></li>
                        <li><a class="dropdown-item disabled" href="#"><i class="fas fa-user-friends"></i> MES AMIS</a></li>
                        <li><a class="dropdown-item disabled" href="#"><i class="fas fa-film"></i> MES CINÉMA</a></li>
                        <li><a class="dropdown-item disabled" href="#"><i class="fas fa-cog"></i> MES PRÉFÉRENCES</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item disabled" href="#"><i class="fas fa-user"></i> VOTRE PROFILS PUBLIC</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item disabled" href="#"><i class="far fa-star"></i> NOTEZ DES FILMS</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="deconnexion.php"><i class="fas fa-power-off"></i> DECONNEXION</a></li>
                    </ul>
                    </ul>
                    <div class="row"></div>

                </div>



            </div>
        </nav>

        <!-- FIN -->


    <?php
    else :
    ?>
        <!-- deconnecté -->
        <nav class="navbar navbar-light navbar-brand fixed-top d-block">
            <div class="container-fluid offset-md-3 w-50">

                <a class="navbar-brand" href="index.php"><img id="nav-logo" src="./images/logo.JPG" alt="Logo-allocine"></a>

                <div class="d-flex align-items-center gap-3">
                    <div class="search-1 text-dark"><input class="w-100" type="text" placeholder="Rechercher">&ensp;<i class="fas fa-search"></i></div>
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </div>

            </div>


            <!-- 2eme nav pour index -->
            <div class="nav-accueil d-flex justify-content-center">

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-dark navbar-brand" aria-current="page" href="#">CINÉMA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark navbar-brand" href="#">SÉRIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark navbar-brand" href="#">STREAMING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark navbar-brand">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark navbar-brand">TRAILERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark navbar-brand">DVD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark navbar-brand">VOD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark navbar-brand">DISNEY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-dark text-light navbar-brand"><b>EIFFEL</b></a>
                    </li>
                    <!-- DEBUT  -->
                    <li class="dropdown">

                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user"></i>
                            &ensp;MON COMPTE
                        </button>
                        <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="page-connexion.php">INDENTIFIEZ-VOUS</a></li>

                            <li><a class="dropdown-item bg-primary text-light" href="inscription.php">CREEZ VOTRE COMPTE</a></li>
                        </ul>

                    </li>
                </ul>
            </div>
        </nav>
    <?php
    endif;
    ?>
    </div>





</header>