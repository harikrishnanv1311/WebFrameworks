<?php
    //Connecting To the Database
    require('db.php');
    ini_set('mysql.connect_timeout', 500);
    ini_set('default_socket_timeout', 500);

    //To Mute Notices
    require('errors.php');

    extract($_POST);

    // = "SELECT * FROM candidate_info WHERE candy_name='".$c_name1."'";

    // $query = "INSERT INTO `candidate_info` (`age`, `qualifications`, `experience`, `quote`, `motto`, `reason_to_vote`)
    // VALUES ('$age1', '$qual1',  '$exp1', '$quote1', '$motto1', '$why1') WHERE candy_name='A'";

    $imgData3 = isset($c_image3)?addslashes (file_get_contents($_FILES['c_image3']['tmp_name'])):'NULL';

    $imgData4 = isset($c_image4)?addslashes (file_get_contents($_FILES['c_image4']['tmp_name'])):'NULL';

    $imgData5 = isset($c_image5)?addslashes (file_get_contents($_FILES['c_image5']['tmp_name'])):'NULL';

    $imgData1 =addslashes (file_get_contents($_FILES['c_image1']['tmp_name']));
    $imgData2 =addslashes (file_get_contents($_FILES['c_image2']['tmp_name']));
    $imgData3 =addslashes (file_get_contents($_FILES['c_image3']['tmp_name']));
    $imgData4 =addslashes (file_get_contents($_FILES['c_image4']['tmp_name']));
    $imgData5 =addslashes (file_get_contents($_FILES['c_image5']['tmp_name']));

    $query1 = "UPDATE `candidate_table` SET `age`='$age1',`qualifications`='$qual1',`experience`='$exp1', `quote`='$quote1', `motto`='$motto1', `reason_to_vote`='$why1', `image`='$imgData1' WHERE candy_name='".$c_name1."'";
    $query2 = "UPDATE `candidate_table` SET `age`='$age2',`qualifications`='$qual2',`experience`='$exp2', `quote`='$quote2', `motto`='$motto2', `reason_to_vote`='$why2', `image`='$imgData2' WHERE candy_name='".$c_name2."'";
    $query3 = "UPDATE `candidate_table` SET `age`='$age3',`qualifications`='$qual3',`experience`='$exp3', `quote`='$quote3', `motto`='$motto3', `reason_to_vote`='$why3', `image`='$imgData3' WHERE candy_name='".$c_name3."'";
    $query4 = "UPDATE `candidate_table` SET `age`='$age4',`qualifications`='$qual4',`experience`='$exp4', `quote`='$quote4', `motto`='$motto4', `reason_to_vote`='$why4', `image`='$imgData4' WHERE candy_name='".$c_name4."'";
    $query5 = "UPDATE `candidate_table` SET `age`='$age5',`qualifications`='$qual5',`experience`='$exp5', `quote`='$quote5', `motto`='$motto5', `reason_to_vote`='$why5', `image`='$imgData5' WHERE candy_name='".$c_name5."'";

    if(!mysqli_query($conn, $query1) | !mysqli_query($conn, $query2) | !mysqli_query($conn, $query3) | !mysqli_query($conn, $query4) | !mysqli_query($conn, $query5))
    {
        echo "Error: " . "<br>" . mysqli_error($conn);
        die();
    }
    else{
        echo "Record inserted.";
    }
