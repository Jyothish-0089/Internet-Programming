<!DOCTYPE html>
<html>
    <head>
        <title>Mechanic Login Page</title>
        <style>
            table,th{
                border: solid greenyellow 1px;
            }
        </style>
    </head>
    <body style="color:cyan; background-image: url('https://www.liveabout.com/thmb/yPp7L11xCyCUkBUGuZrJQBQS0Fo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/GettyImages-157506266-5aaff39c04d1cf0036a961ed.jpg'); color:cyan;">
        <center>
            <h1>MECHANICS LOGIN HERE!</h1>
            <form action="/IP_Project/mlogin.php" method="POST">
                <table>
                    <tr>
                        <th>
                            Mechanic Login E-mail :    <input type="text" id="memail" name="memail"><br><br>
                            Password :  <input type="password" id="mpass" name="mpass"><br><br>
                                            <input type="submit" id="submit" name="submit">
                                            <input type="button" onclick="homepage()" value="Home">
                        </th>
                    </tr>
                </table>
            </form>
        </center>

        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $servername="localhost";
                $username="root";
                $password="";
                $database="project5";

                $memail = $_POST['memail'];
                $mpass = $_POST['mpass'];

                $con = mysqli_connect($servername,$username,$password,$database);
                $sql = "INSERT INTO `mlogin` (`mechanic_email`, `password`) VALUES ('$memail', '$mpass')";
                $result = mysqli_query($con,$sql);

                if($result)
                    echo "Inserted!";
                else
                    echo "Couldn't Insert...";
            }
            ?>
        <script>
            function homepage(){
                window.location.href = "http://localhost/IP_Project/homepage.html";
            }
        </script>
    </body>
</html>