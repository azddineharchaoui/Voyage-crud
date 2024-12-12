<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_activite'])) {
  $id = $_POST['delete_activite'];
  $sql2 = "DELETE FROM `activite` WHERE id_activite='$id'";
  $result2 = $connexion->query($sql2);
  if($result2){
    $_SESSION['deleted_a'] = '
        <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Suppression</strong>
          <span class="block sm:inline">L\'activité a été supprimé avec succés.</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg onclick="document.getElementById(\'alert\').style.display = \'none\';" 
                 class="fill-current h-6 w-6 text-red-500" role="button" 
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>Close</title>
              <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
          </span>
        </div>';
        header("Location: index.php");
  }else{
    $_SESSION['deleted_a'] = '
        <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Suppression</strong>
          <span class="block sm:inline">L\'activité n\'a pas été supprimé !</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg onclick="document.getElementById(\'alert\').style.display = \'none\';" 
                 class="fill-current h-6 w-6 text-red-500" role="button" 
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>Close</title>
              <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
          </span>
        </div>';
        header("Location: index.php");
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['modifier_activite'])) {
  $id = $_POST['id'];
  $titre = $_POST["titre"];
    $description = $_POST["description"];
    $destination = $_POST["destination"];
    $prix = $_POST["prix"];
    $date_debut = $_POST["date_debut"];
    $date_fin = $_POST["date_fin"];
    $place_disponibles = $_POST["place_disponibles"];

  $query = "UPDATE `activite` SET titre='$titre', description='$description', destination='$destination', prix='$prix', date_debut='$date_debut', date_fin='$date_fin', place_disponibles='$place_disponibles' WHERE id_activite='$id'";
  $result = $connexion->query($query);
  if($result){
      $_SESSION['edited_a'] = '
      <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Modification</strong>
        <span class="block sm:inline">L\'activité a été modifié avec succés.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg onclick="document.getElementById(\'alert\').style.display = \'none\';" 
               class="fill-current h-6 w-6 text-red-500" role="button" 
               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
          </svg>
        </span>
      </div>';
      header("Location: index.php");
  } else {
      $_SESSION['edited_a'] = '
      <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Modification</strong>
        <span class="block sm:inline">La modification de l\'activité a échoué.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg onclick="document.getElementById(\'alert\').style.display = \'none\';" 
               class="fill-current h-6 w-6 text-red-500" role="button" 
               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
          </svg>
        </span>
      </div>';
      header("Location: index.php");
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ajouter_activite'])) {
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $destination = $_POST["destination"];
    $prix = $_POST["prix"];
    $date_debut = $_POST["date_debut"];
    $date_fin = $_POST["date_fin"];
    $place_disponibles = $_POST["place_disponibles"];

    $sql = "INSERT INTO `activite`(`titre`, `description`, `destination`, `prix`, `date_debut`, `date_fin`, `place_disponibles`) 
            VALUES('$titre', '$description', '$destination', '$prix', '$date_debut', '$date_fin', '$place_disponibles')";
    
    $result = $connexion->query($sql);
    
    if ($result) {
        $_SESSION['added_a'] = '
        <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Ajout</strong>
          <span class="block sm:inline">L\'activite a été ajouté avec succés.</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg onclick="document.getElementById(\'alert\').style.display = \'none\';" 
                 class="fill-current h-6 w-6 text-red-500" role="button" 
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>Close</title>
              <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
          </span>
        </div>';
        header("Location: index.php");
    } else {
        echo "Error: " . $connexion->error;
    }
}
?>
