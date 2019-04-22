<?php
include 'includes/common.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>submit page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3><b>SIGN UP</b></h3>
                    </div>
                    
                    <div class="panel-body">
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="Email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="Password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="Contact" placeholder="Contact">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="City" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Address" placeholder="Address">
                            </div>
                            
                            <a href=<?php echo "products.php";?>  class="btn btn-primary">SUBMIT</a>
                            
                                
                                
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
