<?php
include "./connection.php";
if(isset($_isset['place'])){
    // echo "You have selected :" .$selected_val; 
    }
    $selected_val = $_POST['place']; 

$sql="SELECT * FROM meeting where placename='$selected_val'";
$result=$con->query($sql);

    if($result->num_rows>0){
        $output="<center><table border='1'><tr>
        <th>PLACE</th>
        <th>PURPOSE</th>
        <th>VENUE</th>
        <th>TIME</>
    </tr>";
        while ($row=$result->fetch_assoc()) {
            $output.="
            <tr> 
            <td>{$row['placename']}</td>
            <td>{$row['purpose']}</td>
            <td>{$row['address']}</td>
            <td>{$row['time']}</td>
            </tr>";
            echo $output;
            $output='';
           
        }
    $output.="</table></center>";

    }
    echo $output;

?>