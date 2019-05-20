
<?php 
    $sql = <<<SQL
    SELECT *
    FROM `deadlines`
SQL;
// $result = $db->query($sql)

$result=mysqli_query($db, $sql);


?>

                        <div class="pjesa3">
                <table border="1">
                        <caption style="color:rgb(14, 4, 4);font-size:50px;text-decoration-line: underline">Fall 2019 Dates and Deadlines</caption>
                        <thead bgcolor=" brown">
                            <tr>
                                <td>Class Duration</td>
                                <td>Classes Begin</td>
                                <td>Last day to web register(Add/drop)in banner web</td>
                                <td>Last day for departments or instructors to add students to a course or independent work**</td>
                                <td>Last day to drop a class without a grade credit/no credit change deadline</td>
                                <td>Last day to drop from a course with "W" Last day to change to/from Audit</td>
                                <td>Last possible day of classes</td>
                                <td>Final examination week</td>
                                <td>Submit grades by noon</td>
                                <td>grades viewable to students(subject to change</td>
                            </tr>
                        </thead>
                        
                        <?php 
                            while($row=$result->fetch_assoc()) {   ?>

                    <tr>
                            <td bgcolor="grey"><?php echo $row["class_duration"]; ?></td>
                            <td><?php echo date("D M d", strtotime($row["begin_date"])) ; ?></td>
                            <td><?php echo date("D M d",strtotime($row["register_last_date"])); ?></td>
                            <td><?php echo date("D M d",strtotime($row["course_last_date"])); ?></td>
                            <td><?php echo date("D M d",strtotime ($row["drop_class_last_date"])); ?></td>
                            <td><?php echo date("D M d",strtotime($row["drop_course_last_date"])); ?></td>
                            <td><?php echo date("D M d",strtotime($row["class_last_possible_last_date"])); ?></td>
                            <td><?php echo date("D M d",strtotime($row["last_examination_date"])); ?></td>
                            <td><?php echo $row["submit_grades_date"]; ?></td>
                            <td><?php echo date("D M d",strtotime($row["viewable_students_grates_date"])); ?></td>
                  </tr>


                        <?php }
                            ?>

                        
                        
                        
                     
             </table>
        </div>