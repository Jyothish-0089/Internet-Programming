<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <style>
            table,th{
                border: solid greenyellow 1px;
            }
        </style>
        <script>

        </script>
    </head>

    <body style="background-image: url('https://www.liveabout.com/thmb/PukHryRD4yFVJ77-7c688mxSbvM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/ag_07solstice2_tirecheck-56a0f6b33df78cafdaa6de1b.jpg'); color:cyan;">
    
        <center>
            <h1>REGISTER HERE!</h1>
            <form action="/IP_Project/register.php" method="POST">
                <table>
                    <tr>
                        <th>
                            First Name :    <input type="text" id="fname" name="fname"><br><br>
                            Last Name :     <input type="text" id="lname" name="lname"><br><br>
                            Register E-mail :    <input type="text" id="email" name="email"><br><br>
                            Password :  <input type="password" id="pass" name="pass"><br><br>
                            Confirm Password :  <input type="password" id="cpass" name="cpass"><br><br>
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

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];

                $con = mysqli_connect($servername,$username,$password,$database);
                $sql = "INSERT INTO `register` (`Fname`, `Lname`, `email`, `pass`, `cpass`) VALUES ('$fname', '$lname', '$email', '$pass', '$cpass')";
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