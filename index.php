<?php 
session_start();
if(isset($_SESSION['added'])){
    echo $_SESSION['added'];
    unset($_SESSION['added']);
}
if(isset($_SESSION['edited'])){
    echo $_SESSION['edited'];
    unset($_SESSION['edited']);
}
if(isset($_SESSION['deleted'])){
    echo $_SESSION['deleted'];
    unset($_SESSION['deleted']);
}
if(isset($_SESSION['added_a'])){
    echo $_SESSION['added_a'];
    unset($_SESSION['added_a']);
}
if(isset($_SESSION['edited_a'])){
    echo $_SESSION['edited_a'];
    unset($_SESSION['edited_a']);
}
if(isset($_SESSION['deleted_a'])){
    echo $_SESSION['deleted_a'];
    unset($_SESSION['deleted_a']);
}

if(isset($_SESSION['added_r'])){
    echo $_SESSION['added_r'];
    unset($_SESSION['added_r']);
}
if(isset($_SESSION['deleted_r'])){
    echo $_SESSION['deleted_r'];
    unset($_SESSION['deleted_r']);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Voyage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<header class="bg-green-600 text-white py-5">
    <div class="container mx-auto flex items-center justify-center space-x-4">
        <img src="./img/logo.png" alt="Logo Voyage Explore" class="w-16 h-16 rounded-full">
        <div class="text-center">
            <h1 class="text-4xl font-bold">Voyage Explore</h1>
            <p class="mt-2">Découvrez de nouvelles destinations incroyables avec nous !</p>
        </div>
    </div>
</header>

    <main class="container mx-auto mt-10 px-4">
        <section class="text-center mb-10">
            <h2 class="text-2xl font-bold mb-4">Bienvenue sur notre site de voyage</h2>
            <p class="text-gray-700">Explorez nos destinations populaires et préparez votre prochain voyage dès
                aujourd'hui.</p>
            <br>
            <div class="flex justify-evenly">
                <a class="px-2 py-1 bg-blue-500 text-white cursor-pointer rounded-lg" href="add_client.php">Ajouter client</a>
                <a class="px-2 py-1 bg-green-500 text-white cursor-pointer rounded-lg" href="add_activite.php">Ajouter activite</a>
                <a class="px-2 py-1 bg-yellow-500 text-white cursor-pointer rounded-lg" href="add_reservation.php">Ajouter reservation</a>

            </div>
        </section>

        <section>
            <h3 class="text-xl font-semibold mb-4">Liste des Clients</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded border border-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="text-left py-3 px-4">ID</th>
                            <th class="text-left py-3 px-4">Nom</th>
                            <th class="text-left py-3 px-4">Prenom</th>
                            <th class="text-left py-3 px-4">Email</th>
                            <th class="text-left py-3 px-4">Téléphone</th>
                            <th class="text-left py-3 px-4">Adresse</th>
                            <th class="text-left py-3 px-4">Date de naissance</th>
                            <th >actions</th>
                        </tr>
                    </thead>
                    <tbody id="client-data">
                        <?php include 'data_client.php'; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h3 class="text-xl font-semibold mb-4">Liste des activites</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded border border-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="text-left py-3 px-4">ID</th>
                            <th class="text-left py-3 px-4">Titre</th>
                            <th class="text-left py-3 px-4">Description</th>
                            <th class="text-left py-3 px-4">Destination</th>
                            <th class="text-left py-3 px-4">Prix</th>
                            <th class="text-left py-3 px-4">Date de debut</th>
                            <th class="text-left py-3 px-4">Date de fin</th>
                            <th class="text-left py-3 px-4">Places disponibles</th>
                            <th >actions</th>
                        </tr>
                    </thead>
                    <tbody id="activite-data">
                        <?php include 'data_activite.php'; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h3 class="text-xl font-semibold mb-4">Liste des réservations</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded border border-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="text-left py-3 px-4">ID</th>
                            <th class="text-left py-3 px-4">Le client</th>
                            <th class="text-left py-3 px-4">L'activité</th>
                            <th class="text-left py-3 px-4">Date de reservation</th>
                            <th class="text-left py-3 px-4">Status</th>
                            <th >actions</th>
                        </tr>
                    </thead>
                    <tbody id="reservation-data">
                        <?php include 'data_reservation.php'; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-5 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Voyage Explore. Tous droits réservés.</p>
        </div>
    </footer>

</body>

</html>