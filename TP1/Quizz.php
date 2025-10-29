<?php

$nomEtudiant = $_POST['nom'];
$matricule =  $_POST['matricule'];
$session =$_POST['numSession'];


?>



<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="QuizCss.css">


</head>

<body>

    <header>
        <p>Université Hogwarts</p>
        <img id="logo" src="Images/png-transparent-harry-potter-castle-hogwarts.png">

    </header>

    <div  class="container" id=" afficheNomEtudiant">   

          <p> Nom:<?= $nomEtudiant?>  </p>
          <p> Matricule:<?= $matricule?>  </p>
          <p> Session#:<?= $session?>  </p>

    </div>

    <div class="container">

          <form id="Quizz" method="POST" action="RepnseQuizz.php?nom=<?=$nomEtudiant ?>&matricule=<?=$matricule?>&numSession=<?= $session?>" class="form-control" style="width: 600px;" >
           
            <h1> Quiz</h1>

               <label  class="mt-3">Quelle est la syntaxe correcte pour déclarer une fonction en PHP ? </label>
                    <div class="form-check mt-2">
                        <input class="form-check-input " type="checkbox" value="function maFonction {}" name="reponseQuestion1[]">
                        <label class="form-check-label">function maFonction {} </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="def maFonction() {}" name="reponseQuestion1[]">
                        <label class="form-check-label">def maFonction() {} </label>
                    </div>
                   
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Reponse3" name="reponseQuestion1[]">
                        <label class="form-check-label">function maFonction() </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="function maFonction() " name="reponseQuestion1[]">
                        <label class="form-check-label">maFonction() {}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="declare function maFonction() {}" name="reponseQuestion1[]">
                        <label class="form-check-label">declare function maFonction() {}</label>
                    </div>

                    <div class="alert alert-danger d-none col-md-12" id="erreurQuestion1">
                           <p></p>
                    </div>

                    



                    <label  class="mt-3">Quelle fonction PHP est utilisée pour vérifier si une variable est un nombre ?</label>
                    
                    <div class="form-check mt-2 " >
                        <input class="form-check-input" type="checkbox" value="is_number()" name="reponseQuestion2[]">
                        <label class="form-check-label">is_number() </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="is_numeric()" name="reponseQuestion2[]">
                        <label class="form-check-label">is_numeric()</label>
                    </div>
                   
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="is_numeral()" name="reponseQuestion2[]">
                        <label class="form-check-label">is_numeral() </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="verify_number()" name="reponseQuestion2[]">
                        <label class="form-check-label">verify_number()</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="verify_digit()" name="reponseQuestion2[]">
                        <label class="form-check-label">verify_digit() </label>
                    </div>

                    <div class="alert alert-danger d-none col-md-12" id="erreurQuestion2">
                           <p></p>
                       </div>




                    
                    <label class="mt-3">Quelles fonctions PHP peuvent être utilisées pour inclure un fichier et arrêter l'exécution du script si le fichier n'est
                    pas trouvé ?</label>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="include" name="reponseQuestion3[]">
                        <label class="form-check-label">include</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="require" name="reponseQuestion3[]">
                        <label class="form-check-label">require</label>
                    </div>
                   
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="include_once" name="reponseQuestion3[]">
                        <label class="form-check-label">include_once </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="require_once" name="reponseQuestion3[]">
                        <label class="form-check-label">require_once </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="import" name="reponseQuestion3[]">
                        <label class="form-check-label">import</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="load" name="reponseQuestion3[]">
                        <label class="form-check-label">load  </label>
                    </div>

                    <div class="alert alert-danger d-none col-md-12" id="erreurQuestion3">
                           <p></p>
                       </div>

                    
                      <div class="col">
                        <hr/>
                        <button type="submit" class="btn btn-lg btn-primary">Soumettre</button> 
                        <button id="debug"  class="btn btn-lg btn-danger">Debug</button> 

                      </div>
            
          </form>

    

   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script defer src="QuizzJs.js"></script>

</body>
</html>