<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Résultats</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="QuizCss.css">
    
    
</head>

<?php
$reponseEtudiant1 =[];
$reponseEtudiant2 =[];
$reponseEtudiant3 =[];

$reponseQuestion1 = ["function maFonction {}", "def maFonction() {}", "function maFonction() {}","maFonction() {}","declare function maFonction() {}"];

$reponseQuestion2 =  ["is_number()", "is_numeric()", "is_numeral()","verify_number()","verify_digit()"];

$reponseQuestion3 = ["include", "require", "include_once","require_once","import","load"];
$vraiReponseQuestion = ["require", "require_once" ,"is_numeric" , "function maFonction() {}"];

$score = 0;




$varMessageErreur1 = "alerteReponse1Question";
$varMessageErreur2 = "alerteReponse2Question";
$varMessageErreur3 = "alerteReponse3Question";



if(isset($_GET['nom'] , $_GET['matricule'],$_GET['numSession'] )){

    $nomEtudiant = htmlspecialchars($_GET['nom']);
    $matricule = htmlspecialchars($_GET['matricule']);
    $session = htmlspecialchars($_GET['numSession']);
}

if(isset( $_POST['reponseQuestion1'],  $_POST['reponseQuestion2'], $_POST['reponseQuestion3'] )){

    
$reponseEtudiant1 = $_POST['reponseQuestion1'];
$reponseEtudiant2 = $_POST['reponseQuestion2'];
$reponseEtudiant3 = $_POST['reponseQuestion3'];  //Array
}
$indexResultatQuestion1 = 0;




ComputeAnswer($reponseQuestion1, $varMessageErreur1, $reponseEtudiant1);
ComputeAnswer($reponseQuestion2, $varMessageErreur2, $reponseEtudiant2);
ComputeAnswer($reponseQuestion3, $varMessageErreur3, $reponseEtudiant3);



function ComputeAnswer(array $QuestionReponse,  $message, array $reponseEtudiant) {

    global $vraiReponseQuestion , $score ;
    $indexResultatEtudiant = 0;


for($i = 0; $i < count($QuestionReponse); $i++) {
    // Loop through the student's responses
    foreach ( $reponseEtudiant as $response) {
        if ($response === $QuestionReponse[$i]) {
            // Compare the student's response with the correct answer
            for ($j = 0; $j < count($vraiReponseQuestion); $j++) {
                if ($response == $vraiReponseQuestion[$j]) {
                    ${$message . $i} = "alert alert-success ";
                    $score += 20;
                } else if ($response == $QuestionReponse[$i]) {
                    ${$message . $i} = "alert alert-danger ";
                }
            }
        }
    }

    }
}
?>

<body>
    <header>

    </header>

    <main>
<div class="container"> 

    <div  id=" afficheNomEtudiant">   

          <p> Nom:<?= $nomEtudiant?>  </p>
          <p> Matricule:<?= $matricule?>  </p>
          <p> Session#:<?= $session?>  </p>

    </div>


    <div class="row"> 
       <p>Note en %</p>
  
       <div class="resultat ">
        
       <p> Question #1 : Quelle est la syntaxe correcte pour déclarer une fonction en PHP ?</p>

         <ul id="question1">

            <li class=" <?= $alerteReponse1Question0 ?? '' ?> col-md-12 ">function maFonction {}</li>
            <li class=" <?= $alerteReponse2Question1 ?? '' ?> col-md-12">def maFonction() {}</li>
            <li class=" <?= $alerteReponse3Question2 ?? ''?> col-md-12">function maFonction() {}</li>
            <li class=" <?= $alerteReponse4Question3 ?? ''?> col-md-12">maFonction() {}</li>
            <li class=" <?= $alerteReponse5Question4 ?? '' ?> col-md-12"> declare function maFonction() {}</li>

         </ul>

         <p> Question #2 :Quelle fonction PHP est utilisée pour vérifier si une variable est un nombre ?</p>

              <ul id="question2">
              
                 <li class="alert alert-danger  col-md-12"> is_number()</li>
                 <li class="alert alert-danger  col-md-12">is_numeric()</li>
                 <li class="alert alert-danger  col-md-12">is_numeral() </li>
                 <li class="alert alert-danger  col-md-12">verify_number()</li>
                 <li class="alert alert-danger  col-md-12">verify_digit()
                 </li>
              
              </ul>
              </ul>

<p> Question #3 : Quelles fonctions PHP peuvent être utilisées pour inclure un fichier et arrêter l'exécution du script si le fichier n'est
pas trouvé ?</p>

     <ul id="question3">
                     
        <li class="alert alert-danger  col-md-12"> include</li>
        <li class="alert alert-danger  col-md-12">require</li>
        <li class="alert alert-danger  col-md-12">include_once</li>
        <li class="alert alert-danger  col-md-12">require_once</li>
        <li class="alert alert-danger  col-md-12">import</li>
        <li class="alert alert-danger  col-md-12">load</li>

     
     </ul>

       </div>


    </div>



</div>

    </main>

    <footer>


    </footer>
    
</body>
</html>