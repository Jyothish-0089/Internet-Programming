<!DOCTYPE html>
<html>
    <head>
        <h1 style="text-align: center;">Comments</h1>
        <title>Display Feedback</title>
    </head>
    <style>
        table,td,tr,th{
            padding:5px;
            border:solid purple 2px;
        }
    </style>
    <body style="background-color: pink;">
        <center><button onclick="homepage()">Home</button></center>
        <form action="/IP_Project/mdisplay.php" method="POST" style="text-align: center;">
                <input type="submit" name="submit" id="submit" value="Display">
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "project5";

                $con = mysqli_connect($servername,$username,$password,$database);
                $sql = "SELECT * FROM `feedback`";
                $result = mysqli_query($con,$sql);

                if($result){
                    echo "<table>
                                <tr>
                                    <th>Feedbacks</th>
                                </tr>";
                                
                                while($row = $result -> fetch_assoc()){
                                    echo "<tr>
                                        <td>".$row["feedback"]."</td>
                                    </tr>";
                                }
                    echo "</table>";
                }
            }
        ?>
        <script>
            function homepage(){
                window.location.href="http://localhost/IP_Project/homepage.html";
            }
        </script>
    </body>
</html>

