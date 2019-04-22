<?php
// session_start();

// if(isset($_SESSION["uname"]) && (time() - $_SESSION["time"])>100){
//     echo "Server timed out!";
// }

include "db.php";

extract($_POST);

$query = "SELECT candidates,votes FROM vote_results";
$result = mysqli_query($conn,$query);
$name = mysqli_real_escape_string($conn,$name);

while($row = mysqli_fetch_assoc($result))
{
    if($name == $row["candidates"]){
        $query = "UPDATE vote_results SET votes = votes+1 WHERE candidates='$name'";
        $result = mysqli_query($conn,$query);
        echo '<script>alert("Voted successfully!\nRedirecting to homepage...")</script>';
        header("Refresh:0.01;url=voting_page.php");
        exit();
    }
}
$query = "INSERT INTO vote_results(candidates,votes) VALUES('$name',1)";
$result = mysqli_query($conn,$query);

if($result){
    echo '<script>alert("Voted successfully!\nRedirecting to homepage...")</script>';
    header("Refresh:0.01;url=voting_page.php");
}
else{
    echo '<script>alert("ERROR!!\nTry again later!\nRedirecting to homepage...")</script>';
    header("Refresh:1;url=voting_page.php");
}

mysqli_close($conn);
?>