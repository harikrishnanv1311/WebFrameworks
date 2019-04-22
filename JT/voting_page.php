    <?php
        include "db_read_cands.php";
        session_start();
        require("header.php");
    ?>

<html>
    <head>
        <title>Cast your vote!</title>
        <link rel="stylesheet" href="voting_page.css?version=69">

    </head>

    <body>
            <div class="bg">
            <div class="image_box" id ="img_box">
                <img src="" alt="The required image cannot be displayed" id="election_img">
                 <div id="election_name"></div>   
            </div>
            <div id="cast_vote">
                <h1>Cast your vote!</h1>
                <h2><i><pre>        Because every vote matters...</pre></i></h2>
            </div>
            
            <form id ="form" action="voting.php" method="POST">
                <div id = "list_of_candidates">

                        <h4>Candidates to vote for</h4>
                        <ul id ="candidates_list">
                        
                        </ul>
                    <div id="submit_button"><input type="button" id="submit_vote" class="btn black" value="VOTE!!"><br><br><br><br></div>

                    <a href="cands_details.php" target="_blank">
                        <div class="know_more black">
                            Know more before you vote!
                        </div>
                    </a>
                </div>
            </form>
            </div>
    </body>
    <script>
        var candidates = <?php echo json_encode($candidates); ?>;
        var election_img = <?php echo json_encode($election_image); ?>;
        var election_name = <?php echo json_encode($election_name); ?>;
       

        var list = document.getElementById("candidates_list");
        var img = document.getElementById("election_img");
        var img_box= document.getElementById("img_box");
        var el_name= document.createElement("h1");
        el_name.setAttribute("class","election_name");
        el_name.innerText = election_name;

        img.setAttribute("src","data:image/jpeg;base64,"+ election_img);
        img_box.appendChild(el_name);

        for(var i=0;i<candidates.length;i++)
        {  
            lab = document.createElement("label");
            lab.setAttribute("class","box");
            lab.innerText = candidates[i];
            list.appendChild(lab);

            ip = document.createElement("input");
            ip.setAttribute("type","radio")
            ip.setAttribute("name","name")
            ip.setAttribute("value",candidates[i])
            lab.appendChild(ip);

            span = document.createElement("span");
            span.setAttribute("class","checkmark");
            lab.appendChild(span);
        }

        var checkbox = document.getElementsByTagName('input');
        var vote = document.getElementById('submit_vote');
        var form = document.getElementById("form");

        vote.addEventListener("click",vote_verified);
        function vote_verified(){
            var cnt = 0;
            for(i=0;i<checkbox.length-1;i++)
            {
                cnt += checkbox[i].checked;
            }
            if(cnt == 0)
                alert("You must choose a candidate to vote for!")
            else if(cnt > 1)
                alert("You can only vote for one candidate!!") 
            else 
                form.submit();
        }
    </script>
</html>
