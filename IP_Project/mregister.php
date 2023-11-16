<!DOCTYPE html>
<html>
    <head>
        <title>Mechanic Registration Page</title>
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
            <h1>MECHANICS REGISTER HERE!</h1>
            <form action="/IP_Project/mregister.php" method="POST">
                <table>
                    <tr>
                        <th>
                            First Name :    <input type="text" id="mfname" name="mfname"><br><br>
                            Last Name :     <input type="text" id="mlname" name="mlname"><br><br>
                            Register E-mail :    <input type="text" id="memail" name="memail"><br><br>
                            Password :  <input type="password" id="mpass" name="mpass"><br><br>
                            Confirm Password :  <input type="password" id="mcpass" name="mcpass"><br><br>
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

                $mfname = $_POST['mfname'];
                $mlname = $_POST['mlname'];
                $memail = $_POST['memail'];
                $mpass = $_POST['mpass'];
                $mcpass = $_POST['mcpass'];

                $con = mysqli_connect($servername,$username,$password,$database);
                $sql = "INSERT INTO `mregister` (`m_firstname`, `m_lastname`, `m_email`, `m_pass`, `m_cpass`) VALUES ('$mfname', '$mlname', '$memail', '$mpass', '$mcpass')";
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
            function verify(){
                if(document.getElementById("fname").value==""){
                    alert("First name must not be empty");
                }
                else if(document.getElementById("lname").value==!""){
                    alert("Last name must not be empty")
                }
            }
        </script>
    </body>
    
</html>