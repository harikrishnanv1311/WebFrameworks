<!DOCTYPE html>
<?php 
    session_start();

    require('db.php');
    $query = "SELECT election_name,date,image FROM admin_table";
    $result = mysqli_query($conn,$query);

    $election_images = array();
    $election_names = array();
    $election_dates = array();
    while($row = mysqli_fetch_assoc($result))
    {
            array_push($election_names, $row["election_name"]);
            array_push($election_dates, $row["date"]);
            array_push($election_images, base64_encode($row["image"]));
    }
?>
<html>
    <head>
        <title>Index page</title>
        <!-- <script type="text/javascript" src="javascript.js"></script> -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <style type="text/css">
         
            .text{
                color: black;
                font-size: 40px;
                font-family: "Times New Roman",Times,serif;
            }
        </style>
        
        
    </head>
    <body>
        <?php
        include 'header.php';
        
        ?>
        
        <div class="banner-image">
                <div class="container ">
                    <div class="banner-content">
                        <h1>Cast Your Votes</h1>
                        <p> every vote counts</p>
                        
                    </div>
                </div>
            </div>


        <section id="elections" class="section bg-light">
            <div class="slideshow-container" id="slideshow">

              <!-- Full-width images with number and caption text -->

              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center" id="small_buttons">

            </div>
        </section>

        <section id="abt" class="section">
            <div class="container">
                <h2 class="section-head">ABOUT US</h2>
                <h3>Voting now made simple!!!</h3>
                <p class="lead">This is a online voting portal, where u can caste your vote as well as host an election all by yourself.
                    Vote for your favorites sitting right at home.
                    This year vote hassle free
                </p>
                <img src="vote.jpg" alt="Handshake">
            </div>
        </section>

        

        <section id="htu" class="section">
            <div class="container">
                <h3>How To Use</h3>
                <p class="lead">
                    1)Create an account<br>
                    2)Register as a voter or and Admin<br>
                    3)Take part in yout favorite elections as voters<br>
                    4)Host your own elections as an admin<br>
                </p>
            </div>
            
        </section>

        <footer>
            <div class="container">
             <p><center>Copyright &COPY; VOTE MADI. All Rights Reserved | Contact Us: +91 90000 00000</center></p>
         </div>
        </footer>
    </body>
    <script>

        var election_img = <?php echo json_encode($election_images); ?>;
        var election_date = <?php echo json_encode($election_dates); ?>;
        var election_name = <?php echo json_encode($election_names); ?>;
        
        var slides = document.getElementById("slideshow");
        var but = document.getElementById("small_buttons");
        for(i=0;i<election_name.length;i++)
        {
            var fade = document.createElement("div");
            fade.setAttribute("class","mySlides fade");

            var img  = document.createElement("img");
            img.style.width="100%"
            img.setAttribute("src","data:image/jpeg;base64,"+ election_img[i]);
            img.setAttribute("alt","No image to display!");
            
            var txt  = document.createElement("div");
            txt.setAttribute("class","text");

            var sub = document.createElement("input");
            sub.setAttribute("type","submit");
            sub.setAttribute("class","btn black vote_ready");
            sub.setAttribute("value","VOTE");
            sub.setAttribute("name",election_date[i]);
            
            txt.innerText = election_name[i]+"\n";
            txt.appendChild(sub);
            

            fade.appendChild(img);
            fade.appendChild(txt);

            slides.appendChild(fade);
        }
        for(i=1;i<election_name.length+1;i++){
            var span = document.createElement("span");
            span.setAttribute("class","dot");
            var curr = "currentSlide("+i+")";
            span.setAttribute("onclick",curr);

            but.appendChild(span);
        }
        
        
        vote_ready = document.getElementsByClassName("vote_ready");
        for(i=0;i<vote_ready.length;i++)
        {
            vote_ready[i].addEventListener('click',function(){
                <?php if(isset($_SESSION['Name'])){ 
                      if($_SESSION["Admin"] == true){
                        echo "alert('Sorry, Admin cannot vote')";
                      }
                      else {
                ?>
                                var d = new Date()
                                var today = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
                                console.log(this.name,today)
                                if(this.name == today){
                                    window.location =  "voting_page.php";
                                }
                                else{
                                    alert("That election is not scheduled for today")
                                } 
                <?php }}
                    else{
                        echo "alert('You have to log in to vote!')";
                    }
                ?>
            });
        }
    


        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

       function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0;i<slides.length ; i++) {
     slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

        </script>
</html>
