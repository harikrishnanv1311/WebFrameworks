<?php
    include "db_read_cands.php";
    include "header.php";
?>

<html>
    <head>
        <title>Candidates Details</title>    
        <link rel="stylesheet" href="cands_details.css?version=13">
    </head>
    <body>
        <div class="bg">
            <div class="image_box" >
                <img src="" alt="The required image cannot be displayed" id="election_img">
                <div id="election_name"></div>   
            </div>

            <div>
                <h1 class="heading">CANDIDATE DETAILS</h1>
            </div>

            <div id= "main_div" class="main_div">

            </div>

        </div>
    </body>
    <script type="text/javascript">

        var election_img = <?php echo json_encode($election_image); ?>;
        var election_name = <?php echo json_encode($election_name); ?>;
       
        var main_div = document.getElementById("main_div");
        var el_img = document.getElementById("election_img");
        var el_name= document.getElementById("election_name");

        el_img.setAttribute("src","data:image/jpeg;base64,"+ election_img);
        el_name.innerText = election_name;

        
        var cand_name = <?php echo json_encode($candidates); ?>;
        var age = <?php echo json_encode($age); ?>;
        var qualifications = <?php echo json_encode($qualifications); ?>;
        var experience = <?php echo json_encode($experience); ?>;
        var motto = <?php echo json_encode($motto); ?>;
        var quote = <?php echo json_encode($quote); ?>;
        var reason_to_vote = <?php echo json_encode($reason_to_vote); ?>;
        var images = <?php echo json_encode($images); ?>;

        for(i=0;i<cand_name.length;i++)
        {

            var img = document.createElement("img");
            img.setAttribute("src","data:image/jpeg;base64,"+ images[i]);
            img.setAttribute("height","150px")
            img.setAttribute("alt","Cannot display image")
            img.setAttribute("id","photo")
            
            var div = document.createElement("div");
            var br = document.createElement("br");
            div.setAttribute("class","candidate");

            var nameText = document.createElement("h1");
            nameText.innerText = cand_name[i];
            nameText.setAttribute("align","center");

            var ageText = document.createElement("h1");
            ageText.innerText = "Age: "+age[i];
            
            var mottoText = document.createElement("h3");
            mottoText.innerText = motto[i];
            mottoText.setAttribute("align","center");

            var qual = document.createElement("p");
            qual.innerText = "Qualifications:\n" + qualifications[i];
            
            var exp = document.createElement("p");
            exp.innerText = "Experience:\n" + experience[i];
            
            var reason = document.createElement("p");
            reason.innerText = "Why you should vote for me?\n" + reason_to_vote[i]
            
            var quoteText = document.createElement("h3");
            quoteText.innerText = quote[i];
            quoteText.setAttribute("align","center");

            div.appendChild(img);
            div.appendChild(nameText);
            div.appendChild(ageText);
            div.appendChild(mottoText);
            div.appendChild(qual);
            div.appendChild(exp);
            div.appendChild(reason);
            div.appendChild(quoteText);
            
            main_div.appendChild(div);
        }                
    </script>
</html>

