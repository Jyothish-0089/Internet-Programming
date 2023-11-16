<!DOCTYPE html>
<html>
    <head>
        <title>Post Feedback</title>
    </head>
    <center><h1>Post Feedback</h1></center>
    <body>
        <form action="/IP_Project/feedback.php" method="POST">
            <center>
                <label for="textarea">Feedback</label><br>
                <textarea id="feedback" name="feedback" cols="50" rows="5"></textarea><br><br>
                <input type="submit" id="submit" name="submit">
                <input type="button" onclick="homepage()" value="Home">
            </center>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $servername="localhost";
                $username="root";
                $password="";
                $database="project5";

                $feedback = $_POST['feedback'];

                $con = mysqli_connect($servername,$username,$password,$database);
                $sql = "INSERT INTO `feedback` (`Feedbacks`) VALUES ('$feedback')";
                $result = mysqli_query($con,$sql);

                if($result)
                    echo "Inserted!";
                else
                    echo "Couldn't Insert...";
            }
            ?>
    </body>
    <script>
        function homepage(){
            window.location.href = "http://localhost/IP_Project/homepage.html";
        }
    </script>
</html>




