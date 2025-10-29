TP1 - Application web PHP : Formulaire d’inscription, quiz et résultats
======================================================================

Cours : Programmation web côté serveur  
Cegep de Sainte-Foy – Hiver 2025  
---------------------------------------------------------

Objectif du projet
------------------
Ce projet consiste à concevoir une application web complète en PHP et HTML permettant à un étudiant de :
- Remplir un formulaire d’inscription,
- Répondre à un quiz interactif,
- Consulter ses résultats.

L’objectif principal est de mettre en pratique la validation des données, la gestion d’erreurs, et la sécurité des échanges entre les pages à l’aide des méthodes POST et GET.  
Le tout doit être réalisé avec Bootstrap afin d’obtenir une interface claire, responsive et conviviale.

---------------------------------------------------------

Structure générale du projet
----------------------------
L’application comprend trois pages principales :

1. Page d’inscription (inscription.php)  
2. Page du quiz (quiz.php)  
3. Page des résultats (resultats.php)

Chaque page possède des validations côté client (HTML et JavaScript) et côté serveur (PHP).

---------------------------------------------------------

1. Page d’inscription
---------------------

### Fonction
Cette page permet à l’étudiant de s’inscrire en saisissant les informations suivantes :
- Nom de l’étudiant (maximum 70 caractères)
- Numéro de session (entre 1 et 6)
- Matricule (exactement 7 chiffres)

Les données sont envoyées à la page du quiz par la méthode POST.

### Validations HTML
- Le nom doit être une chaîne non vide, maximum 70 caractères.  
- Le numéro de session doit être un entier entre 1 et 6.  
- Le matricule doit être une chaîne composée uniquement de 7 chiffres.  

En cas d’erreur, le formulaire ne se soumet pas et affiche un message d’erreur à l’utilisateur.

### Validations PHP
Avant d’afficher le quiz, la page vérifie que les données envoyées sont valides :
- Tous les champs doivent être présents.  
- Les valeurs doivent respecter les mêmes règles que la validation HTML.  
- Les données sont sécurisées avec la fonction htmlspecialchars pour éviter les injections de code.

Si une donnée est invalide :
- Le quiz ne s’affiche pas.  
- Un message d’erreur s’affiche dans une boîte d’alerte rouge Bootstrap avec le texte :  
  Un problème est survenu. Veuillez réessayer.  
- Un bouton permet de retourner à la page d’inscription.

---------------------------------------------------------

2. Page de quiz
---------------

### Fonction
Cette page affiche :
- Les informations de l’étudiant (nom, matricule, session).  
- Trois questions à choix de réponses avec points attribués.

### Questions
- Question 1 (2 points) : choix unique parmi 5 options.  
- Question 2 (3 points) : choix unique parmi 5 options.  
- Question 3 (5 points) : choix multiples parmi 6 options.  

Les réponses sont envoyées par POST à la page de résultats.  
Les informations de l’étudiant sont transmises en GET (nom, matricule, session).

### Validations JavaScript
- Vérifie qu’une réponse est sélectionnée pour chaque question.  
- Pour la question à choix multiples, au moins une case doit être cochée.  
- En cas d’erreur, le formulaire ne s’envoie pas et affiche des messages clairs sous les questions concernées.

### Envoi du formulaire
Le formulaire est soumis à l’aide d’un bouton Soumettre le quiz.  
Les données de l’étudiant sont incluses dans le lien d’action pour le transfert en GET.

---------------------------------------------------------

3. Page de résultats
--------------------

### Fonction
Cette page reçoit :
- Les informations de l’étudiant par GET.  
- Les réponses au quiz par POST.

Elle valide, calcule et affiche les résultats de façon claire et sécurisée.

### Validations PHP
- Vérifie la présence de tous les paramètres GET et POST.  
- Applique htmlspecialchars sur chaque valeur reçue.  
- Si un paramètre manque ou est invalide, les résultats ne s’affichent pas.  
  Une boîte d’alerte rouge Bootstrap indique :  
  Un problème est survenu. Veuillez réessayer.  
  Un bouton permet de revenir à la page d’inscription.

### Affichage des résultats
- Affiche les informations de l’étudiant (nom, matricule, session).  
- Affiche pour chaque question :
  - Le résultat individuel (points obtenus).  
  - Un fond vert pour les bonnes réponses, un fond rouge pour les mauvaises.  
  - La bonne réponse est affichée sous la question si elle est erronée.  
- Calcule le score total sur 10 points.  

Si le score total est inférieur à 6 :
- Affiche un message d’avertissement jaune Bootstrap indiquant :  
  L’étudiant est en échec.  

---------------------------------------------------------

4. Mise en page et technologies
-------------------------------
Le projet doit utiliser Bootstrap pour :
- Structurer les formulaires et le contenu avec des grilles et colonnes.  
- Mettre en forme les alertes et boutons.  
- Garantir un affichage responsive sur ordinateurs et téléphones.

Langages et outils :
- HTML5  
- CSS3 (Bootstrap 5)  
- JavaScript (validation client)  
- PHP 8 (validation serveur et logique d’application)

---------------------------------------------------------

5. Sécurité et bonnes pratiques
-------------------------------
- Aucune donnée ne doit être transmise sans validation.  
- Les entrées utilisateur doivent toujours être filtrées avec htmlspecialchars.  
- Les erreurs doivent être gérées avec des messages clairs sans interrompre le programme.  
- Aucun mot de passe ou donnée sensible ne doit être stocké.  
- Le projet doit être fonctionnel localement via un serveur PHP (XAMPP ou WAMP).

Auteur
------
Cherif Ouattara - Étudiant AEC Programmation, bases de données et serveurs  
Cegep de Sainte-Foy  
GitHub : https://github.com/BoOm00001  
LinkedIn : https://www.linkedin.com/in/cherif-ouattara/
