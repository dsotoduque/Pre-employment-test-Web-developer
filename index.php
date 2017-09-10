<?php

include 'models/my_patient.php';

$patient_model = new my_patient();

$patients = $patient_model->list_by_age_grouped();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test for New Hires</title>
    <meta name="description" content="Test for New Hires">
    <meta name="author" content="PV">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <h1>Patient Listing</h1>

        <p>
            <label for="inputFilter">Filter by Name</label>
            <input id="inputFilter" type="text" name="patient_filter" />
        </p>

        <p>
            <label for="inputFilter">Number of patients grouped by age</label>
            <ul>
                <!-- Hint: Task 3. -->
                <li><span>Age:  </span><span>Patients quantity: </span></li>
            </ul>
        </p>
        <table id="table">
            <thead>
                <th class="col-xs-4">Name</th>
                <th id="age" class="col-xs-4">Age</th>
                <th class="col-xs-4">Phone</th>
            </thead>
             
            <tbody>
            <?php foreach($patients as $patient): ?>
                <tr>
                    <td class="col-xs-4"><?php echo $patient->patient_name; ?></td>
                    <td class="col-xs-4 ages"><?php echo $patient->patient_age; ?></td>
                    <td class="col-xs-4"><?php echo $patient->patient_phone; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>

        <!-- Hint: Task 4. -->
       
    

    </div>

    <!-- scripts at the bottom! -->
    <script src="src/js/jquery-3.2.1.min.js"></script>
    <script src="src/js/bootstrap.js"></script>
    <script src="src/js/script.js"></script>

    <!--  Hint: Task 5. -->
    <!-- <script src="public/js/script.js"></script> -->
</body>
</html>
