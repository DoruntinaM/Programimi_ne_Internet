<?php include('header.php'); require('database.php'); ?>
<?php 
    $sql = <<<SQL
    SELECT *
    FROM `semester_dates`
SQL;
// $result = $db->query($sql)

$result=mysqli_query($db, $sql);


?>

<div class="pjesa3">
                    <h2 style="color:rgb(48, 4, 4);font-size:35px;text-align: center"> Academic Calendar </h2>
                <table border="2" width=100% cellspacing="10" cellpadding="20" >
                    <caption style="color:rgb(14, 4, 4);font-size:50px;text-decoration-line: underline">Fall Semester 2019</caption>
                    <theadbgcolor=" brown">
                        <tr>
                            <th colspan="3" style="color:brown">Date</th>
                            <th style="color:brown">Description</th>
                        </tr>
                    </thead>
                    <?php
                    while($row = $result->fetch_assoc()){?>
                    <tr>
                        <td style="color:brown"><?php echo $row["months"]; ?></td>
                        <td><?php echo $row["day_of_month"];?></td>
                        <td><?php echo $row["day_of_week"];?></td>
                        <td><?php echo $row["decription"];?></td>
                    </tr>
                   
                    <?php } ?>  
               
                
                 
                </table>
        </div>

    <?php 
        
        include('deadlines.php');
    
    
    
    ?>



        
        
        
        