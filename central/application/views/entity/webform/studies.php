<?php

$fields=array("FirstName", "LastName", "DOB", "CNP");
foreach($fields as $field){
    echo '<strong>'.$field.'</strong>: '.$person->$field.'<br />';
}
?>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>ISCED</th>
            <th>School name</th>
            <th>Started</th>
            <th>Finished</th>
            <th>Is completed?</th>
            <th>Finish GPA</th>
            <th>Exam GPA</th>
        </tr>
    </thead>
    <tbody>
<?php

foreach($studies as $study){
    ?>
        <tr>
            <td><?php echo $study->ID; ?></td>
            <td><?php echo $study->StudyLevel; ?></td>
            <td><?php echo $study->SchoolName; ?></td>
            <td><?php echo $study->DateStarted; ?></td>
            <td><?php echo $study->DateCompleted; ?></td>
            <td><?php echo $study->IsCompleted; ?></td>
            <?php if($study->IsCompleted){
                ?>
            <td><?php echo $study->FinishGPA; ?></td>
            <td><?php echo $study->ExamGPA; ?></td>            
                <?php
            } else {
                ?>
            <td>-</td>
            <td>-</td>            
                <?php                
            } ?>
        </tr>
    <?php
}

?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>ISCED</th>
            <th>School name</th>
            <th>Started</th>
            <th>Finished</th>
            <th>Is completed?</th>
            <th>Finish GPA</th>
            <th>Exam GPA</th>
        </tr>
    </tfoot>
</table>