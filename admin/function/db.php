<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dradmin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}


// insert new record 
function db_insert($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Added Success";
        header('"Location: medicaments.php"');
    }
    return false;
}

function db_update($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "update";
        header('"Location: medicaments.php"');
    }
    return false;
}


function getRow($field,$id,$table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$id'";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        $rows[] = mysqli_fetch_assoc($result);
    }
    if(count($rows)>0)
    {
        return $rows[0];
    }
    else 
    {
        return false;
    }

    

}


?>