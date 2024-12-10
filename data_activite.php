<?php 
    include ("connect.php");
    $sql = "SELECT * from `activite`";
    $result = $connexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='py-3 px-4 border-b'>{$row['id_activite']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['titre']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['description']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['destination']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['prix']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['date_debut']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['date_fin']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['place_disponibles']}</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4' class='text-center py-3'>Aucun client trouvé</td></tr>";
}
$connexion->close();
?>
