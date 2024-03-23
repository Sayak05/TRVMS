<?php
    $name=$_POST['name'];
    $vehicle=$_POST['vehicle'];
    $offence=$_POST['offence'];
    $model=$_POST['model'];
    $phone=$_POST['phone'];
    $fine=$_POST['fine'];
    $loc=$_POST['loc'];
    $map=$_POST['map'];

    $conn=new mysqli('localhost','root','','challan');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into generate(name, vehicle, offence, model, phone, fine, loc, map)
        value(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssiiss",$name, $vehicle, $offence, $model, $phone, $fine, $loc, $map);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process the form and insert data into the database as you were doing.
    
        // After successful insertion, redirect back to the form page.
        header("Location: generated.html");
        exit;
    }
    
?>