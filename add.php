<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['modifier_client'])) {
    $id = $_POST['id'];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $addresse = $_POST["addresse"];
    $date_naissance = $_POST["date_naissance"];

    $query = "UPDATE `client` SET nom='$nom', prenom='$prenom', email='$email', telephone='$telephone', adresse='$addresse', date_naissance='$date_naissance' WHERE id_client='$id'";
    $result = $connexion->query($query);
    if($result){
        $_SESSION['edited'] = '
        <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Modification</strong>
          <span class="block sm:inline">Le client a été modifié avec succés.</span>
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
        $_SESSION['edited'] = '
        <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Modification</strong>
          <span class="block sm:inline">La modification du client a échoué.</span>
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


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ajouter_client'])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $addresse = $_POST["addresse"];
    $date_naissance = $_POST["date_naissance"];
    
    $sql = "INSERT INTO `client`(`nom`, `prenom`, `email`, `telephone`, `adresse`, `date_naissance`) 
            VALUES('$nom', '$prenom', '$email', '$telephone', '$addresse', '$date_naissance')";
    
    $result = $connexion->query($sql);
    
    if ($result) {
        $_SESSION['added'] = '
        <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Ajout</strong>
          <span class="block sm:inline">Le client a été ajouté avec succés.</span>
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
