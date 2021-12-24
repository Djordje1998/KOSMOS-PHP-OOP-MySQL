<?php
include 'database.php';

$output = '';
$order = $_POST["order"];
if($order == 'desc'){
    $order = 'asc';
} else{
    $order = 'desc';
}

$sql = "SELECT * FROM solarni_sistem ORDER BY ".$_POST["column_name"]." ".$_POST["order"];
$result = mysqli_query($mysqli, $sql);
$output .= '
</br><table>
    <tr>
        <th><a class="column_sort" id="id" data-order="'.$order.'" href="#">ID</a></th>
        <th><a class="column_sort" id="naziv" data-order="'.$order.'" href="#">Naziv</a></th>
        <th><a class="column_sort" id="zvezda" data-order="'.$order.'" href="#">Zvezda</a></th>
        <th><a class="column_sort" id="otkriven" data-order="'.$order.'" href="#">Otkriven</a></th>
    </tr>
    ';
    while($row = mysqli_fetch_assoc($result)){
        $output .= '
        <tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['naziv'] . '</td>
        <td>' . $row['zvezda'] . '</td>
        <td>' . $row['otkriven'] . '</td>
        </tr>
        ';
    }
    $output .= '</table></br>';
    echo $output;
