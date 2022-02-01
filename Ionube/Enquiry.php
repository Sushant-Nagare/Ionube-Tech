<?php
$Name= $_POST['Name'];
$Number= $_POST['Number'];
$Email= $_POST['Email'];
$Comment= $_POST['Comment'];

// Database Connection Code

$conn = new mysqli('localhost','ionubeso_ionube','9(g@ZZ0W$C*p','ionubeso_ionube');
if($conn->connect_error){
    die('Connection Failed'.$conn-> connect_error);
}
else {
    $stmt= $conn->prepare("insert into myform(Name,Number,Email,Comment) values(?,?,?,?)");
    $stmt-> bind_param(ssss,$Name,$Number,$Email,$Comment);
    $stmt-> execute();
    echo "Your response Submitted Successfully, Kindly go back for more";
    $stmt->close();
    $conn->close();
}
?>