<?php
//EboardEvals.php

include 'db.php';

$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

$name = $_POST['name'];
$position = $_POST['position']; 

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];

$like = $_POST['like'];
$dislike = $_POST['dislike'];
$otherComments = $_POST['comment'];


if ($like == "" && $dislike == "") {
    http_response_code(403);
    $result = "You need to say something you like or dislike.";
    $json = json_encode($result, JSON_UNESCAPED_SLASHES);
    echo $json;
    die();
}

//escape strings
$user = $mysqli->real_escape_string($user);
$name = $mysqli->real_escape_string($name);
$position = $mysqli->real_escape_string($position);
$q1 = $mysqli->real_escape_string($q1);
$q2 = $mysqli->real_escape_string($q2);
$q3 = $mysqli->real_escape_string($q3);
$q4 = $mysqli->real_escape_string($q4);
$q5 = $mysqli->real_escape_string($q5);
$q6 = $mysqli->real_escape_string($q6);
$q7 = $mysqli->real_escape_string($q7);
$q8 = $mysqli->real_escape_string($q8);
$q9 = $mysqli->real_escape_string($q9);
$q10 = $mysqli->real_escape_string($q10);
$q11 = $mysqli->real_escape_string($q11);
$like = $mysqli->real_escape_string($like);
$dislike = $mysqli->real_escape_string($dislike);
$otherComments  = $mysqli->real_escape_string($otherComments);


/*debug*/ 

/*echo $name . " ";
echo $position . " ";

echo $q1 . " ";
echo $q2 . " ";
echo $q3 . " ";
echo $q4 . " ";
echo $q5 . " ";
echo $q6 . " ";
echo $q7 . " ";
echo $q8 . " ";
echo $q9 . " ";

echo $q10 . " ";
echo $q11 . " ";
*/
/*
echo $like . " ";
echo $dislike . " ";
echo $otherComments . " ";
*/



if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

 $sql = "INSERT INTO evals (name, position, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, youLike, youDislike, comments) VALUES('$name', '$position', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$like', '$dislike', '$otherComments')";


mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

$mysqli->close();

    http_response_code(200);
    $result = "Success";
    $json = json_encode($result, JSON_UNESCAPED_SLASHES);
    echo $json;
    die();

?>
