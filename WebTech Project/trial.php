

<?php 
session_start();

$_SESSION['Admin']=true;
    
include('header.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="t.css"/>
    <title>Document</title>
</head>
<body>

    <div class="container">

    <div class="content">
        <h1> Election Details:</h1>
        Fill in the details of the election. <font color="red">*Required </font> <br><br><br><br>

      <form target="_blank" method="POST" action="admin.php" enctype="multipart/form-data">

        <div class="group">
          <input type="text" name="ad_name" id="ad_name" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Name of Election: <font color="red">*</font></label>
        </div>

        <div class="group">
        <label>Date: <font color="red">*</font></label><br><br>
          <input type="date" name="e_date" id="e_date" required><br>
          <span class="highlight"></span>
          <span class="bar"></span>

        </div>

        <div class="group">
          <input type="number" min="2" max="5" name="candidates" id="candidates" onblur="foo()" onchange="bar()" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Number of Candidates:<font color="red">*</font></label><br><br><br>
        </div>

        <div class="group">
          <input type="number" min="10" max="100" name="voters" id="voters">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Number of Voters:</label>
        </div>

        <div class="group">
          <br><label>Election Poster:<font color="red">*</font></label><br>
          <input type="file" name="e_image" id="e_image"><br>
          <!-- <span class="highlight"></span>
          <span class="bar"></span> -->
        </div>

        <input type="submit" value="Submit" class="submit" id="submit">
      </form>
    </div>

</div>
<script>
    i = 0;
    function bar()
    {
        if(i>1)
        {
            var del1 = document.getElementById("candy1");
            var del2 = document.getElementById("candy2");
            var del3 = document.getElementById("candy3");
            var del4 = document.getElementById("candy4");
            var del5 = document.getElementById("candy5");
            del1.parentNode.parentNode.removeChild(del1.parentNode);
            del2.parentNode.parentNode.removeChild(del2.parentNode);
            del3.parentNode.parentNode.removeChild(del3.parentNode);
            del4.parentNode.parentNode.removeChild(del4.parentNode);
            del5.parentNode.parentNode.removeChild(del5.parentNode);
            console.log(del1);
        }
    }
    function foo()
    {
        i = i+1;
        var candy = document.getElementById("candidates");
        var x = candy.value;
        console.log("Hi");
        if(x<2 || x>5)
        {
            alert("Only Upto 5 candidates.")
        }
        else
        {
            console.log("Hi");
            for(i=1; i<=x; i++)
            {
                var ele = document.createElement("div");
                ele.className = "group";
                var l = document.createElement("label");
                l.innerHTML = "Candidate "+i+":";
                var inp = document.createElement("input");
                inp.type = "text";
                inp.id = "candy"+i;
                inp.name = "candy"+i;
                ele.innerHTML = '<span class="highlight"></span> <span class="bar"></span>';
                ele.appendChild(inp);
                ele.appendChild(l);
                console.log(ele);
                candy.parentNode.insertBefore(ele, ele.nextSibling);
            }
        }
    }
</script>
</body>
</html>
