<?php
include "Includes/dbConnection.php";

    if(isset($_GET['destination'])){
        
        $destination = $_GET['destination'];

        $sql = "SELECT destination, miles, gallons, date, purpose FROM trips WHERE destination ='$destination'";
        $st = $conn->prepare($sql);
        $st->execute(array($destination));
        $result = $st->fetch();
        
        $destination = $result['destination'];
        $miles = $result['miles'];
        $gallons = $result['gallons'];
        $date = $result['date'];
        $purpose = $result['purpose'];
    
        
        $rows = $conn->query($sql);
        
        foreach ( $rows as $row ) {     // display 4 race names and times for runner_id
            echo '<tr>'; //Create a new table row
            echo "<td>" . $row['destination'] . "</td>";
            echo "<td>" . $row['miles'] . "</td>";
            echo "<td>" . $row['gallons'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['purpose'] . "</td>";
            echo '</tr>';
        }
    }
?>