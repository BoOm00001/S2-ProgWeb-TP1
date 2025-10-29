const NOM_ETUDIANT = document.getElementById("nom");
const MESSAGE_ERREUR_NOM = document.getElementById("erreurNom");

const NUMERO_SESSION = document.getElementById("numSession");
const MESSAGE_ERREUR_NUM_SESSION = document.getElementById("erreurNumSession");

const NUMER_MATRICULE = document.getElementById("matricule");
const MESSAGE_ERREUR_NUM_MATRICULE = document.getElementById("erreurMatricule");

const FormulaireInscription = document.querySelector("#inscription"); 



const optionQuestion1 = document.getElementsByName("reponseQuestion1[]"); 
const MESSAGE_ERREUR_Question1 = document.getElementById('erreurQuestion1');

const optionQuestion2 = document.getElementsByName("reponseQuestion2[]"); 
const MESSAGE_ERREUR_Question2 = document.getElementById('erreurQuestion2');


const optionQuestion3 = document.getElementsByName("reponseQuestion3[]"); 
const MESSAGE_ERREUR_Question3 = document.getElementById('erreurQuestion3');

const FormulaireQuizz = document.querySelector("#Quizz"); 
const InfoEtudiant = document.querySelector("#infoEtudiant"); 




function ChampsReponseQuestion1(){

    let uneReponseChoisit= false;
let nbOptionsChecker = 0;

for(let i = 0 ; i < optionQuestion1.length; i++){

    if(optionQuestion1[i].checked){
        nbOptionsChecker++;
    }
}

if(nbOptionsChecker === 1){
    uneReponseChoisit = true;
}
console.log(uneReponseChoisit)
return uneReponseChoisit;
}


function ChampsReponseQuestion2(){

    let uneReponseChoisit= false;
let nbOptionsChecker = 0;

for(let i = 0 ; i < optionQuestion2.length; i++){

    if(optionQuestion2[i].checked){
        nbOptionsChecker++;
    }
}

if(nbOptionsChecker === 1){
    uneReponseChoisit = true;
}
console.log(uneReponseChoisit)

return uneReponseChoisit;
}

function ChampsReponseQuestion3(){

    let deuxReponseChoisit= false;
let nbOptionsChecker = 0;

for(let i = 0 ; i < optionQuestion3.length; i++){

    if(optionQuestion3[i].checked){
        nbOptionsChecker++;
    }
}

if(nbOptionsChecker === 2){
    deuxReponseChoisit = true;
}
return deuxReponseChoisit;
}




function NomValide() {
    let isNameValid = true;
    let nbInName = /\d/.test(NOM_ETUDIANT.value);

    if (NOM_ETUDIANT.value.length > 70 || nbInName || NOM_ETUDIANT.value.length <= 0) {
        isNameValid = false;
    }
    console.log(isNameValid);
    return isNameValid;
}

function SessionNbValide() {
    let numSession = parseInt(NUMERO_SESSION.value, 10);
    return numSession >= 1 && numSession <= 6;
}

function NumMatriculeValidation() {
    return /^\d{7}$/.test(NUMER_MATRICULE.value);
}


function VerificationChampsInscription(event) {
    event.preventDefault();

    let toutLesChampsValide = true;

    if (!NomValide()) {
        toutLesChampsValide = false;
        MESSAGE_ERREUR_NOM.classList.remove("d-none");
        MESSAGE_ERREUR_NOM.textContent = "Veuillez entrer un nom valide";
    } else {
        MESSAGE_ERREUR_NOM.classList.add("d-none");
        MESSAGE_ERREUR_NOM.textContent = "";
    }

    if (!SessionNbValide()) {
        toutLesChampsValide = false;
        MESSAGE_ERREUR_NUM_SESSION.classList.remove("d-none");
        MESSAGE_ERREUR_NUM_SESSION.textContent = "Veuillez entrer un chiffre entre 1 et 6";
    } else {
        MESSAGE_ERREUR_NUM_SESSION.classList.add("d-none");
        MESSAGE_ERREUR_NUM_SESSION.textContent = ""; 
    }

    if (!NumMatriculeValidation()) {
        toutLesChampsValide = false;
        MESSAGE_ERREUR_NUM_MATRICULE.classList.remove("d-none");
        MESSAGE_ERREUR_NUM_MATRICULE.textContent = "Veuillez entrer un numéro de matricule valide (7 chiffres)";
    } else {
        MESSAGE_ERREUR_NUM_MATRICULE.classList.add("d-none");
        MESSAGE_ERREUR_NUM_MATRICULE.textContent = "";
    }

    if (toutLesChampsValide === true) {
        FormulaireInscription.submit();
        return true;
    }
}

function VerificationChampsQuizz(event) {

    event.preventDefault();
   let toutLesChampsValide = true;

    if( ChampsReponseQuestion1() === false){

        toutLesChampsValide = false;
        MESSAGE_ERREUR_Question1.classList.remove("d-none") ;
        MESSAGE_ERREUR_Question1.textContent = "Veillez choisir une reponse";
     }else{
        MESSAGE_ERREUR_Question1.classList.add("d-none") ;
        MESSAGE_ERREUR_Question1.textContent = "";
     }

     if( ChampsReponseQuestion2() === false){

        toutLesChampsValide = false;
        MESSAGE_ERREUR_Question2.classList.remove("d-none") ;
        MESSAGE_ERREUR_Question2.textContent = "Veillez choisir une reponse";
     }else{
        MESSAGE_ERREUR_Question2.classList.add("d-none") ;
        MESSAGE_ERREUR_Question2.textContent = "";
     }

     if( ChampsReponseQuestion3() === false){

        toutLesChampsValide = false;
        MESSAGE_ERREUR_Question3.classList.remove("d-none") ;
        MESSAGE_ERREUR_Question3.textContent = "Veillez choisir deux reponse";
     }else{
        MESSAGE_ERREUR_Question3.classList.add("d-none") ;
        MESSAGE_ERREUR_Question3.textContent = "";
     }

     if (toutLesChampsValide === true) {
        FormulaireQuizz.submit();
        infoEtudiant.submit();
        return true;
    }

}

if (FormulaireInscription) {
    FormulaireInscription.addEventListener("submit", VerificationChampsInscription);
}

if (FormulaireQuizz) {
    FormulaireQuizz.addEventListener("submit", VerificationChampsQuizz);
}

