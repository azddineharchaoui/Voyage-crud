<?php 
    include ("connect.php");
    $sql = "SELECT * from `reservation` as r inner join client as c on r.id_client = c.id_client inner join activite as a on r.id_activite = a.id_activite ";
    $result = $connexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='py-3 px-4 border-b'>{$row['id_reservation']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['nom']} {$row['prenom']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['titre']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['date_reservation']}</td>";
        echo "<td class='py-3 px-4 border-b'>{$row['statut']}</td>";
        echo "<td>
                <form action='add_r.php' method='POST'>
                    <button type=\"submit\" name=\"delete_reservation\" value=\"{$row['id_reservation']}\"class='px-2 py-1 rounded-lg bg-red-500 text-white'>Delete</a>
                </form>
                </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4' class='text-center py-3'>Aucun client trouvé</td></tr>";
}
$connexion->close();
?>
