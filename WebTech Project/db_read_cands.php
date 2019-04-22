<?php
include "db.php";

$query = "SELECT election_name,date,image FROM admin_table";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    if($row["date"] == date("Y-m-d"))
    {
        $election_name = $row["election_name"];
        $date = $row["date"];
        $election_image = base64_encode($row["image"]);
        break;
    }
}


$query = "SELECT * FROM candidate_table";
$result = mysqli_query($conn,$query);

$candidates = array();
$age = array();
$qualifications = array();
$experience = array();
$motto = array();
$quote = array();
$reason_to_vote = array();
$images = array();

while($row = mysqli_fetch_assoc($result))
{
    if($row["name"] == $election_name)
    {
        array_push($candidates,$row["candy_name"]);
        array_push($age,$row["age"]);
        array_push($qualifications,$row["qualifications"]);
        array_push($experience,$row["experience"]);
        array_push($motto,$row["motto"]);
        array_push($quote,$row["quote"]);
        array_push($reason_to_vote,$row["reason_to_vote"]);   
        array_push($images,(base64_encode($row["image"])));
    }
}
mysqli_close($conn);
?>


<!-- //echo '<img src= "data:image/jpeg;base64,'.base64_encode($row['image']).' " height = "100px"/>';
//<img src = "data:image;base64,\<\?php echo $row[image[0]] ; ?>" height = "100px"> -->

