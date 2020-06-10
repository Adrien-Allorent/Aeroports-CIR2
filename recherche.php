<!DOCTYPE html>
<html>
<head>
    <title>Recherche</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        idjs = 0;
        <?php
        session_start();
        $_SESSION['nbrePassagers']=0;
        ?>
        function add() {
            <?php
                $_SESSION['nbrePassagers'] += 1;
            ?>
            idjs++;
            var input = addInput.innerHTML
            addInput.innerHTML = input + "<div class='row'><div class = 'col-md-3'><input type=\'text\' class=\'form-control\' id='nom'"+idjs+" placeholder='Entrez votre nom'></div><div class = 'col-md-3'><input type=\'text\' class=\'form-control\' id='prenom'"+idjs+" placeholder='Entrez votre prénom'></div><div class = 'col-md-3'><input type=\'date\' class=\'form-control\' id='dateNaissance'"+idjs+" placeholder='Date de naissance'></div><div class = 'col-md-3'> <input type=\'mail\' class=\'form-control\' id='mail'"+idjs+"  placeholder='Entrez votre adresse email'><br/></div></div>";
        }
    </script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <h2 class="display-3" id="title">AIR ISEN</h2>
</nav>
<br>
<div class="container-fluid">
    <h1>Réserver un vol !</h1>
    <br>
    <form method="post" action = "controller.php?func=validSearch">
        <div class="form-group">
            <br>
            <div class="row">
                <div class='col-md-3'>
                    <div class="material-icons">flight_takeoff</div>
                    <label for='originAirport'>Aéroport d'origine </label>
                    <input type='text' class='form-control' id='originAirport' name ='originAirport' placeholder="Code de l'aéroport">
                </div>
                <div class="col-md-3">
                    <div class="material-icons">flight_land</div>
                    <label for='destinationAirport'>Aéroport de destination</label>
                    <input type='text' class='form-control' id='destinationAirport' name ='destinationAirport' placeholder="Code de l'aéroport">
                </div>
            </div>
            <br>
            <div class="row">
                <div class = 'col-md-3'>
                    <label for="dateDepart">Date de départ</label>
                    <input type="date" class="form-control" id="dateDepart" name="dateDepart">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <div class="material-icons">person_add</div>
                    <label for="">Nombre de passagers</label>
                </div>
                <div class="col-md-3">
                    <input type="button" class="btn btn-outline-dark btn-lg" value="+" onClick="add();" />
                </div>
            </div>
                <div id="addInput">
                    <br>

                </div>
        </div>
        <button type="submit" class="btn btn-outline-dark btn-lg" id="recherche" name="recherche">Rechercher des vols</button>


</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
?>
