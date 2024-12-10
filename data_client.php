<?php 
    include ("connect.php");
    $sql = "SELECT * from `client`";
    $result = $connexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='py-3 px-4 border-b'>{$row['id_client']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['nom']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['prenom']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['email']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['telephone']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['adresse']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['date_naissance']}</td>";
        echo "<td>
                <a href=\"edit_client.php?id={$row['id_client']} \" class='px-2 py-1 rounded-lg bg-green-500 text-white'>Edit</a>
                <a href=\"\" class='px-2 py-1 rounded-lg bg-red-500 text-white'>Delete</a>
            </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4' class='text-center py-3'>Aucun client trouvé</td></tr>";
}
$connexion->close();
?>
