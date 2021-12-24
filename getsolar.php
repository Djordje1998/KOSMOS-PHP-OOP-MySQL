<?php
    include 'database.php';

    $query = "SELECT * FROM solarni_sistem";
    $result = mysqli_query($mysqli, $query);
    if(mysqli_num_rows($result) > 0){
        echo '</br><table>
        <tr>
            <th><a class="column_sort" id="id" data-order="desc">ID</a></th>
            <th><a class="column_sort" id="naziv" data-order="desc" >Naziv</a></th>
            <th><a class="column_sort" id="zvezda" data-order="desc" >Zvezda</a></th>
            <th><a class="column_sort" id="otkriven" data-order="desc">Otkriven</a></th>
        </tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['naziv'] . "</td>";
            echo "<td>" . $row['zvezda'] . "</td>";
            echo "<td>" . $row['otkriven'] . "</td>";
            echo "</tr>";
        }
        echo '</table></br>';
    }else{
        echo("Nema rezultata");
    }
?>