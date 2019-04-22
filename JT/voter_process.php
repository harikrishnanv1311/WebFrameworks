<?php

                  $conn= mysqli_connect("localhost","root","","elections") or die(mysqli_error($conn));

                  
                  

                  $Name=$_POST["Name"];
                  $Email=$_POST['Email'];
                  $Password=$_POST['Password'];
                  $Contact=$_POST['Contact'];
                  $City=$_POST['City'];

               
                if(isset($_POST['Voter'])){
                  $sql="INSERT INTO voter_data (Name,Email,Password,Contact,City) VALUES ('$Name','$Email','$Password','$Contact','$City')";
                  mysqli_query($conn,$sql);}
                else if(isset($_POST['Admin']))
                {
                 $sql="INSERT INTO admin_data (Name,Email,Password,Contact,City) VALUES ('$Name','$Email','$Password','$Contact','$City')";
                 mysqli_query($conn,$sql);
                }

                header('location:index.php');

                mysqli_close($conn);
                ?>