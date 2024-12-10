<?php 
session_start();
if(isset($_SESSION['edited'])){
    echo $_SESSION['edited'];
    unset($_SESSION['edited']);
}
include ("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier client</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center ">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96 ">
            <h2 class="text-xl font-bold mb-4">Modifier client</h2>
            
            <?php 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `client` WHERE id_client='$id'";
                    $result = $connexion->query($sql);
                    if($result->num_rows > 0){
                        $client = $result->fetch_assoc();
                        ?>

            <form action="add.php" method="POST">
                <input type="hidden" name="id" value="<?= $client['id_client']; ?>">
                <label class="block mb-2" for="nom">nom</label>
                <input id="nom" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="ُEntrez votre nom" name="nom" value="<?=$client['nom'];?>"/>

                <label class="block mb-2" for="prenom">prenom</label>
                <input id="prenom" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="ُEntrez votre prenom" name="prenom" value="<?=$client['prenom'];?>"/>

                <label class="block mb-2" for="email">Email</label>
                <input id="email" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="Entrez votre email" name="email" value="<?=$client['email'];?>"/>

                <label class="block mb-2" for="telephone">Phone number</label>
                <input id="telephone" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="ُEntrez votre telephone" name="telephone" value="<?=$client['telephone'];?>"/>

                <label class="block mb-2" >addresse</label>
                <input  class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4"
                    type="text" placeholder="Entrez votre addresse" name="addresse" value="<?=$client['adresse'];?>"/>

                <label class="block mb-2" for="birthday">Date de naissance</label>
                <input id="birthday" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="date"
                    placeholder="Entrez votre date de naissance" name="date_naissance" value="<?=$client['date_naissance'];?>"/>

                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 mt-2" name="modifier_client">modifier client</button>
                    <a class="bg-gray-500 text-white rounded px-4 py-2 mt-2" href="index.php">retourner</a>
                </div>
            </form>

                        <?php
                     }else {
                        echo "Identificateur non existant ! ";
                    }
                }
            ?>

        </div>
    </div>
</body>

</html>