<!DOCTYPE html>
<html>
    <head>
        <title>User Login Page</title>
        <style>
            table,th{
                border: solid greenyellow 1px;
            }
        </style>
    </head>
    <body style="color:cyan; background-image: url('https://www.liveabout.com/thmb/yPp7L11xCyCUkBUGuZrJQBQS0Fo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/GettyImages-157506266-5aaff39c04d1cf0036a961ed.jpg'); color:cyan;">
        <center>
            <h1>LOGIN HERE!</h1>
            <form action="/IP_Project/login.php" method="POST">
                <table>
                    <tr>
                        <th>
                            Login E-mail :    <input type="text" id="email" name="email"><br><br>
                            Password :  <input type="password" id="pass" name="pass"><br><br>
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

                $email = $_POST['email'];
                $pass = $_POST['pass'];

                $con = mysqli_connect($servername,$username,$password,$database);
                $sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$pass')";
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