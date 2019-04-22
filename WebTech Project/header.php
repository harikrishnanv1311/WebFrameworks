
<!DOCTYPE html>

<html>
    <head>
        
        <title></title>
         <link rel="stylesheet" href="home.css">
      
        
        
    </head>
    <body>
        
<ul class="topnav"> 

       <?php       
       if(isset($_SESSION['Name']) && $_SESSION['Admin']==false) {
        ?>
       <li ><a href="index.php">VOTE MAADI</a></li>
       <li><a href="#abt">About Us</a></li>
       <li><a href="#htu">How To Use</a></li>
       

       
       <li class="right"><a href="index.php" onclick="<?php session_destroy();?>" > Logout</a></li>
       <li class="right"><a href="vote_results.php" target="_blank"> Results</a></li>
       <li class="right" style="text-align: center;"><?php echo $_SESSION["Name"];?> </a></li>

       
     <?php }

      else if(isset($_SESSION['Name']) && $_SESSION['Admin']==true){
        ?>
        <li ><a href="index.php">VOTE MAADI</a></li>
       <li><a href="#abt">About Us</a></li>
       <li><a href="#htu">How To Use</a></li>
       

       
       <li class="right"><a href="index.php" onclick="<?php session_destroy();?>" > Logout</a></li>
       <li class="right"><a href="vote_results.php" target="_blank"> Results</a></li>
       <li class="right"><a href="trial.php" target="_blank"> Host</a></li>

       <li class="right" id ="username"><?php echo $_SESSION["Name"];?> </a></li>


     <?php  } 

        else {?>

         <li ><a href="index.php">VOTE MAADI</a></li>
       <li><a href="#abt">About Us</a></li>
       <li><a href="#htu">How To Use</a></li>
       

       <li class="right"><a href="voter_signup.php" > Sign up</a></li>
       <li class="right"><a href="login.php" > Login</a></li>
       
       <?php } ?>
                           
    </ul>            
                
                        
                            
    </body>

</html>
