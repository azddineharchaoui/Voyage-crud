<?php 
session_start();
include ("connect.php");

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center ">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96 ">
            <h2 class="text-xl font-bold mb-4">Ajouter reservation</h2>
            <form action="add_r.php" method="POST">
                <label class="block mb-2" for="client">Choisi un client</label>
                <select name="client" id="client">
                <?php 
                        $sql = "SELECT id_client, nom, prenom FROM `client`";
                        $result = $connexion->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo '<option value="' . $row['id_client']. '">' . $row['nom'] . ' ' . $row['prenom'] . '</option>';
                            }
                        }
                    ?>

                </select>
                
                <label class="block mb-2" for="activite">Choisi une activite</label>
                
                <select name="activite" id="activite">
                    <?php 
                        $sql = "SELECT id_activite, titre FROM `activite`";
                        $result = $connexion->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo '<option value="' . $row['id_activite']. '">' . $row['titre'] . '</option>';
                            }
                        }
                    ?>
                </select>
                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 mt-2" name="ajouter_reservation">ajouter</button>
                    <a class="bg-gray-500 text-white rounded px-4 py-2 mt-2" href="index.php">retourner</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>