<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include('./inc/head.php'); ?>

<body>
    <?php include('./inc/header.php'); ?>

    <main class="main-inscription">
        <form class="form-inscription row g-3 w-50 m-auto">

            <div class="col-md-4">

                <label for="validationDefault01" class="form-label">PRENOM :</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="Mark" required>
            </div>

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">NOM</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Otto" required>
            </div>

            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">PSEUDO :</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>

            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Email :</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">PORTABLE</label>
                <input type="tel" class="form-control" id="validationDefault02" placeholder="0600000000" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
            </div>

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">MOT DE PASSE :</label>
                <input type="password" class="form-control" id="validationDefault02" placeholder="MOT DE PASSE" required>
            </div>

            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">CONFIRMATION MOT DE PASSE :</label>
                <input type="password" class="form-control" id="validationDefault02" placeholder="CONFIRMATION MOT DE PASSE" required>
            </div>


            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">PAYS</label>
                <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-md-4">
                <p><b>Choisir vos categories favoris </b> :</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">SCIENCE-FICTION</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">HORREUR</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">AVENTUR</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">COMEDIE</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">THRILLER</label>
                </div>
            </div>

            <div class="col-md-3">
                <label for="validationDefault03" class="form-label">VILLE</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Accepte les termes et condiions
                    </label>
                </div>

            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">VALIDER</button>
            </div>

        </form>
        </form>
    </main>


</body>

</html>