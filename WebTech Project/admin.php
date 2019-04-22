<?php
    //Connecting To the Database
    ini_set('mysql.connect_timeout', 500);
    ini_set('default_socket_timeout', 500);
    require('db.php');


    session_start();
    include('header.php');

    //To Mute Notices
    require('errors.php');

    extract($_POST);
    $imgData =addslashes (file_get_contents($_FILES['e_image']['tmp_name']));

    $query = "INSERT INTO `admin_table` (`election_name`, `date`, `voters`, `candidates`, `candidates1`, `candidates2`, `candidates3`, `candidates4`, `candidates5`, `image`)
    VALUES ('$ad_name', '$e_date',  '$voters', '$candidates', '$candy1', '$candy2', '$candy3', '$candy4', '$candy5', '$imgData')";

    if(!mysqli_query($conn, $query))
    {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        die();
    }

    for ($i=1; $i<=$candidates ; $i++)
    {
        if($i==1)
            $candy = $candy1;
        if($i==2)
            $candy = $candy2;
        if($i==3)
            $candy = $candy3;
        if($i==4)
            $candy = $candy4;
        if($i==5)
            $candy = $candy5;

        $query = "INSERT INTO `candidate_table` (`date`, `name`, `candy_name`)
        VALUES ('$e_date', '$ad_name', '$candy')";

        if(!mysqli_query($conn, $query))
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    //$q1 = "SELECT candidates1, candidates2, candidates3, candidates4, candidates5 FROM admin WHERE name='".$ad_name."'";

    $q1 = "SELECT candy_name FROM candidate_table WHERE name='".$ad_name."'";

    //GET Result
    $result =  mysqli_query($conn, $q1);

    //FETCH DATA
    $candies = mysqli_fetch_assoc($result);
    //var_dump($candies);

    //FREE Result
    //mysqli_free_result($result);


    //Close connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
         <link rel="stylesheet" type="text/css" href="a.css?version=13"/>

         <title>Candidate Info</title>
     </head>
     <body>

         <div class="content">
        <h1>Candidate Info</h1>

         <form action="success.php" method="post" enctype="multipart/form-data">
         <?php $i=0; foreach($result as $result): $i++; ?>
             <div class="main">
                 <h2><?php echo $result['candy_name'] ?></h2>

                 <input type='hidden' name='c_name<?php echo $i?>' id='c_name<?php echo $i?>' value='<?php echo $result['candy_name']?>'><br>


                 <div class="group">
                   <input type='number' min='5' max='100' name='age<?php echo $i?>' id='age<?php echo $i?>'><br>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label for='Age'>Age</label>
                 </div>


                 <div class="group">
                   <input type='text' name='qual<?php echo $i?>' class='qual<?php echo $i?>'><br>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label for='Qualification'>Qualification</label>
                 </div>

                 <div class="group">
                 <input type='text' name='exp<?php echo $i?>' class='exp<?php echo $i?>'><br>
                 <span class="highlight"></span>
                 <span class="bar"></span>
                 <label for='Experience'>Experience</label>
                 </div>

                 <div class="group">
                 <input type='text' name='quote<?php echo $i?>' class='quote<?php echo $i?>'><br>
                 <span class="highlight"></span>
                 <span class="bar"></span>
                 <label for='Quote'>Quote</label>
                 </div>

                <div class="group">
                 <input type='text' name='motto<?php echo $i?>' class='motto<?php echo $i?>'><br>
                 <span class="highlight"></span>
                 <span class="bar"></span>
                 <label for='Motto'>Motto</label>
                </div>

                <div class="group">
                 <input type='text' name='why<?php echo $i?>' id='why<?php echo $i?>'><br>
                 <span class="highlight"></span>
                 <span class="bar"></span>
                 <label for='Why'>Why</label>
             </div>

                <div class="group">
                     <label for='Image'><br>Image</label><br><br><br>
                 <input type='file' name='c_image<?php echo $i?>' class='c_image<?php echo $i?>'><br><br><br>

                 </div>

             </div>
         <?php endforeach; ?>
         <input type="submit" name="submit" value="SUBMIT">
     </form>
     </div>

    </body>
</html>
