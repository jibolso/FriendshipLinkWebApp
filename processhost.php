<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/1/2016
 * Time: 12:47 PM
 */

$db = new PDO('mysql:host=ap-cdbr-azure-east-c.cloudapp.net;dbname=friendshiplink;charset=utf8mb4', 'b3c438583f3e44', '3cf27899',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$Name = $_POST['name'];
$Address = $_POST['address'];
$Postcode = $_POST['postcode'];
$phoneNbr = $_POST['phoneNbr'];
$Email = $_POST['email'];
$Status = $_POST['status'];
$Children = $_POST['children'];
$vegan = $_POST['vegan'];
$preference = $_POST['preference'];
$Church = $_POST['Church'];
$pastor = $_POST['pastor'];
$interests = $_POST['interests'];
$interests_nation = $_POST['interest_nation'];
$comments = $_POST['comments'];


/*
echo '<p>'.$Name. '</p>';
echo '<p>'.$Address. '</p>';
echo '<p>'.$Postcode. '</p>';
echo '<p>'.$phoneNbr. '</p>';
echo '<p>'.$Email. '</p>';
echo '<p>'.$Status. '</p>';
echo '<p>'.$Children. '</p>';
echo '<p>'.$vegan. '</p>';
echo '<p>'.$preference. '</p>';
echo '<p>'.$Church. '</p>';
echo '<p>'.$pastor. '</p>';
echo '<p>'.$interests. '</p>';
echo '<p>'.$interests_nation. '</p>';
echo '<p>'.$comments. '</p>';
*/

/*$Nationality= $_POST['Nationality'];
$Lastname = $_POST['Lastname'];
$Address = $_POST['address'];

$Nationality= $_POST['Nationality'];*/

if(submit){

    try {
        $sql = "INSERT INTO host (name, address,postcode,phoneNbr,email,status,children,vegan,preference,church,pastor,interests,interest_nationality,comments)
                  VALUES ('$Name', '$Address', '$Postcode', '$phoneNbr','$Email', '$Status', $Children, '$vegan','$preference', '$Church', '$pastor', '$interests','$interests_nation','$comments')";
        $sth = $db->query($sql);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    header('Location:new_host.php?s=1');
}else{
    header('Location:index.html');
}

?>