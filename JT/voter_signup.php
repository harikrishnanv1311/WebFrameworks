
<!DOCTYPE html>

<html>
    <head>
        
        <title>voter_signup page</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <style type="text/css">
            body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  
  padding-top: 75px;
 padding-bottom: 50px;
 text-align: center;
 color: #f8f8f8;
 background: url(back.jpg) no-repeat center center;
 background-size: cover;
 height:100%;
 width:100%;
 overflow-y: hidden;
}

/* Add styles to the form container */
.container {
  position: relative;
  margin-top:10px;
  top: 50%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%,-50%);
  width: 400px;
  color: #000000;
  padding: 15px;
  background-color: rgba(169,169,169,0.5);
}

/* Full-width input fields */
  input[type=email], input[type=password], input[type=text], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus, input[type=number]:focus, input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
        </style>
        
 

        
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
       <!--  <script type="text/javascript">
          alert("FTS");
        </script> -->
                            <div class="bg-img">
                            <form class="container" method="POST" action="voter_process.php">
                                <h1>VOTER SIGNUP</h1>
                                 <label for="Name"><b>NAME</b></label>
                                <input type="text"  name="Name" placeholder="Name" >

                                <label for="email"><b>EMAIL</b></label>
                               
                                <input type="email" name="Email" placeholder="email" required="true" >
                                                                    
                                <label for="psw"><b>PASSWORD</b></label>
                                <input type="password"  name="Password" placeholder="password" >

                                
                                
                                <label for="Contact"><b>CONTACT</b></label>
                                <input type="number"  name="Contact" placeholder="Contact" >

                                <label for="City"><b>CITY</b></label>
                                <input type="text"  name="City" placeholder="City" >

                                

                                <input type="submit" name="Voter" class="btn" value="Signup as Voter" "> <input type="submit" name="Admin"class="btn" value="Signup as Admin"  >
                            </form>
                        </div>                       


                         
                                
                                              
                    
                    
                
                    
                   
        
        
        
        
    </body>
</html>
