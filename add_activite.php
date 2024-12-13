<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une activité</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center ">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96 ">
            <h2 class="text-xl font-bold mb-4">Ajouter activité</h2>
            <form action="add_a.php" method="POST">
                <label class="block mb-2" for="titre">Titre</label>
                <input id="tire" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="ُEntrez le titre" name="titre" />

                <label class="block mb-2" for="desciption">Description</label>
                <input id="description" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="ُEntrez la description" name="description" />

                    
                    <label class="block mb-2" for="destination">Destination</label>
                <input id="destination" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="Entrez la destination" name="destination" />
                    
                <label class="block mb-2" for="prix">Prix</label>
                <input id="prix" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="Entrez le prix" name="prix" />

                <label class="block mb-2" for="date_debut">Date de début</label>
                <input id="date_debut" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="date"
                    placeholder="Entrez la date de début" name="date_debut" />

                    <label class="block mb-2" for="date_fin">Date de fin</label>
                <input id="date_fin" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="date"
                    placeholder="Entrez la date de fin" name="date_fin" />

                    <label class="block mb-2" for="places">Places disponibles</label>
                <input id="places" class="block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4" type="text"
                    placeholder="ُEntrez les places disponibles" name="place_disponibles" />

                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 mt-2" name="ajouter_activite">ajouter activite</button>
                    <a class="bg-gray-500 text-white rounded px-4 py-2 mt-2" href="index.php">retourner</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>