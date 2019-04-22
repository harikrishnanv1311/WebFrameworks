
<!DOCTYPE html>

<html>
    <head>
        
        <title>Login page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
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
  position: absolute;
  margin:0;
  top: 50%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%,-50%);
  width: 500px;
  color: #000000;
  padding: 16px;
  background-color: white;
  background-color: rgba(169,169,169,0.5);
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */


.containe{
            max-width: 1180px;
            text-align: center;
            margin:0 auto;
            padding: 0 3rem;
            color: #ffffff;
        } 

footer{
             background: #000000;
             padding: 1rem;
        }
        </style>
        
 

        
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
                            <div class="bg-img">
                            <form class="container" action="login_process.php" method="POST">
                                <h1>LOGIN</h1>
                                <label for="name"><b>NAME</b></label>
                               
                                <input type="text" name="Name" placeholder="name" required="true" ">
                                                                    
                                <label for="psw"><b>PASSWORD</b></label>
                                <input type="password"  name="Password" placeholder="password" >

                                <input type="submit" name="login" value="Login" class="btn black">
                                <br><br>
                                <b>HAVEN'T SIGNED UP YET</b><br><br><br>
                                <a href="voter_signup.php" class="btn black" style="text-decoration: none;">SIGNUP</a>
                            </form>
                        </div>
        <footer>
            <div class="containe">
             <p><center>Copyright &COPY; VOTE MADI. All Rights Reserved | Contact Us: +91 90000 00000</center></p>
         </div>
        </footer>
        
        
    </body>
</html>
