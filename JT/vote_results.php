<?php
session_start();
include "header.php";
include "db.php";

$query = "SELECT candidates,votes from vote_results";
$result = mysqli_query($conn,$query);

$candidates = array();
$votes = array();
while($row = mysqli_fetch_assoc($result))
{
    array_push($candidates,$row["candidates"]);
    array_push($votes,$row["votes"]);
}

?>
<html>
    <head>
        <title>Voting Results</title>
        <link rel="stylesheet" type="text/css" href="voting_page.css?version=13">
    </head>
    <body>
        <div class ="bg">
            <div class="image_box" id ="img_box">
                <img src="" alt="The required image cannot be displayed" id="election_img">
                <div id="election_name"></div>   
            </div>

            <div class="table_box">
                <table id ="results" align="center" >
                    <th>Candidate Name</th>
                    <th>Number of Votes</th>
                </table>
            </div>

        </div>
    </body>
    <script>
        var cands = <?php echo json_encode($candidates); ?>;
        var votes = <?php echo json_encode($votes); ?>;
        var table = document.getElementById("results");

        for(i=0;i<cands.length;i++)
        {
            var tr = document.createElement("tr");

            var td = document.createElement("td");
            td.innerText = cands[i];
            tr.appendChild(td);

            var td = document.createElement("td");
            td.innerText = votes[i];
            tr.appendChild(td);
            
            table.appendChild(tr);
        }
       
        
    </script>
</html>