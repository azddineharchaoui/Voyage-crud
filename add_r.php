<?php 
    session_start();
    include ('connect.php');

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['ajouter_reservation'])){
        echo "step 1";
        if(isset($_POST['client']) && isset($_POST['activite'])){
            echo "step 2";
            if(!empty($_POST['client']) && !empty($_POST['activite'])){
                echo "success";
                $statut ="En attente";
                $id_client = $_POST['client'];
                $id_activite = $_POST['activite'];
                $sql = "INSERT INTO `reservation` (`id_client`, `id_activite`, `date_reservation`, `statut`)
                VALUES ('$id_client', '$id_activite',NOW(),'$statut')";
                $result = $connexion->query($sql);
                if($result){
                    $_SESSION['added_r'] = '
        <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Ajout</strong>
          <span class="block sm:inline">La réservation a été ajouté avec succés.</span>
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
                }else {
                    echo "error : " . $connexion->error;
                }

            }else {
                header("Location: index.php");
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_reservation'])) {
        $id = $_POST['delete_reservation'];
        $sql2 = "DELETE FROM `reservation` WHERE id_reservation='$id'";
        $result2 = $connexion->query($sql2);
        if($result2){
          $_SESSION['deleted_r'] = '
              <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Suppression</strong>
                <span class="block sm:inline">La réservation a été supprimé avec succés.</span>
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
          $_SESSION['deleted_r'] = '
              <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Suppression</strong>
                <span class="block sm:inline">La réservation n\'a pas été supprimé !</span>
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
?>