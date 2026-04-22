<!DOCTYPE html>
<!--
 * ============================================================
 *  FICHIER : app/views/medicament.php
 *  RÔLE    : Vue pour afficher la liste des médicaments (couche V du MVC)
 * ============================================================
 *
 *  Ce fichier est la "Vue" dans l'architecture MVC.
 *  Son seul rôle est l'AFFICHAGE.
 *  Elle ne fait aucun calcul ni requête à la base de données.
 *  Elle se contente d'afficher les données qu'on lui a transmises.
 *
 *  Ce fichier mélange du HTML et du PHP :
 *    - Le HTML s'occupe de la structure de la page (titres, boutons, tableaux...)
 *    - Le PHP s'occupe d'insérer les données dynamiques (les vrais médicaments)
 *
 *  Ce fichier reçoit la variable $data depuis le contrôleur
 *  (via la méthode view() de Controller.php).
 *  $data contient la liste de tous les médicaments récupérés
 *  depuis la base de données.
 * ============================================================
-->

<!--
    "<!DOCTYPE html>" dit au navigateur :
    "Ce fichier est une page web HTML version 5."
    Tous les fichiers HTML doivent commencer par cette ligne.
-->
<html lang="en">
<!--
    La balise <html> est la balise racine.
    Tout le contenu de la page se trouve à l'intérieur.
    "lang="en"" indique que la langue de la page est l'anglais.
-->

<head>
    <!--
        La balise <head> contient des informations sur la page
        qui ne sont PAS affichées directement dans le navigateur,
        mais qui sont importantes pour son bon fonctionnement :
        encodage des caractères, titre, styles CSS, etc.
    -->

    <meta charset="UTF-8">
    <!--
        "charset=UTF-8" définit l'encodage des caractères de la page.
        UTF-8 est un standard international qui permet d'afficher
        correctement les caractères spéciaux : é, è, à, ç, ü, etc.
        Sans cela, ces caractères pourraient s'afficher comme des
        symboles bizarres.
    -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
        Cette balise rend la page "responsive" (adaptable).
        Elle dit au navigateur :
        "La largeur de la page doit s'adapter à la largeur de l'écran de l'appareil."
        C'est essentiel pour que la page s'affiche correctement
        sur les téléphones et tablettes.
    -->

    <title>Document</title>
    <!--
        Le contenu entre <title> et </title> est le titre de l'onglet
        qu'on voit dans le navigateur.
        Ici il est générique ("Document"), on pourrait le changer
        en "Liste des Médicaments" par exemple.
    -->

</head>
<body>
    <!--
        La balise <body> contient tout ce qui sera VISIBLE
        sur la page web dans le navigateur.
    -->

    <h1>Liste de medicaments</h1>
    <!--
        <h1> est la balise de titre principal de la page.
        "h1" signifie "heading 1" (titre de niveau 1).
        C'est le titre le plus grand et le plus important de la page.
        Il ne doit y avoir qu'un seul <h1> par page en bonne pratique.
    -->

    <?php
    /*
     *  Ici on sort du HTML pour écrire du PHP.
     *  "<?php" ouvre un bloc PHP.
     *  "?>" le ferme (voir la ligne suivante).
     *
     *  var_dump($data) est une fonction PHP de débogage.
     *  Elle affiche dans le navigateur le CONTENU COMPLET de $data
     *  avec le type de chaque valeur (string, int, array, etc.).
     *
     *  C'est très utile quand on est en train de développer
     *  pour voir si les données ont bien été transmises depuis
     *  le contrôleur.
     *
     *  $data ici contient la liste des médicaments reçue depuis
     *  MedicamentController via Controller::view().
     *  On peut ainsi vérifier que le tableau est bien rempli.
     *
     *  En production (sur un vrai site), on remplacerait ce var_dump()
     *  par une vraie boucle PHP pour afficher les médicaments proprement
     *  (par exemple dans un tableau HTML).
     */
    var_dump($data);
    ?>
    <!--
        "?>" ferme le bloc PHP. On repasse en HTML.
    -->

</body>
<!--
    </body> ferme la section du contenu visible.
-->

</html>
<!--
    </html> ferme la page HTML. C'est la dernière ligne du fichier.
-->