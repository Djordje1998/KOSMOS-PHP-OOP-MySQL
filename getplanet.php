<?php
    include 'database.php';

    $sql = "SELECT p.id,p.naziv,p.atmosfera,p.otkrivena,ss.id as ss_id,ss.naziv as solarni_sistem FROM planeta p JOIN solarni_sistem ss ON p.solarni_sistem_id=ss.id";
    $result = mysqli_query($mysqli, $sql);
    if(mysqli_num_rows($result) > 0){
        echo '</br><table>
        <tr>
            <th><a class="column_sort2" id="id" data-order="desc" href="#">ID</a></th>
            <th><a class="column_sort2" id="naziv" data-order="desc" href="#">Naziv</a></th>
            <th><a class="column_sort2" id="atmosfera" data-order="desc" href="#">Atmosfera</a></th>
            <th><a class="column_sort2" id="otkrivena" data-order="desc" href="#">Otkrivena</a></th>
            <th><a class="column_sort2" id="solarni_sistem" data-order="desc" href="#">Solarni sistem</a></th>
        </tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['naziv'] . "</td>";
            echo "<td>" . $row['atmosfera'] . "</td>";
            echo "<td>" . $row['otkrivena'] . "</td>";
            echo "<td>" . $row['solarni_sistem'] .' ['. $row['ss_id'] .']'. "</td>";
            echo "</tr>";
        }
        echo '</table></br>';
    }else{
        echo("Nema rezultata");
    }
?>