<?php
$con=mysqli_connect("localhost", "root", "", "db1");
    $query="SELECT * FROM tablee ORDER BY id DESC LIMIT 1";
    $query_run=mysqli_query($con, $query);

    if(mysqli_num_rows($query_run)>0)
    {
        foreach($query_run as $row)
         {
            ?>
            <tr>
               
                <td><?= $row['namee']; ?> </td>

         </tr>
            <?php

        }

    }
    else
    {
        ?>
        <tr>
            <td colspan="2"> no record found </td>

    </tr>
        <?php
    }
    
    ?>