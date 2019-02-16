
<!doctype html>
    <html>
        <head>

        </head>

        <body>
            <?php
             require_once('connection.php');
            session_start();
            ?>
            <?php

            require_once('connection.php');

            if (isset($_POST['button']))
            {
              $university = $_POST["university"];
              $universityEmail = $_POST["universityemail"];
              $field = $_POST["studyfield"];
              $course = $_POST["coursename"];
              $level = $_POST["level"];
              $qualification= $_POST["qualification"];
              $interest = $_POST["interest"];
            }



            $fname = $_SESSION["firstname"];
            $lname = $_SESSION["lastname"];
            $Uname = $_SESSION['username'];
            $gender = $_SESSION["gender"];
            $email = $_SESSION["email"];
            $pass = $_SESSION["password"];


            ?>

            <?php





            $sql = "insert into details
            values('$fname','$lname','$Uname','$gender','$email','$pass','$university','$universityEmail','$field','$course','$level','$qualification','$interest')";

            if(!mysqli_query($conn, $sql))
            {
                header('Location:Nextlogin1.php');
            }

            else{

              $_SESSION["login"] = "OK"  ;
              $_SESSION["user"] = "$Uname"  ;
              header('Location:homepage.php');
            }


            ?>
        </body>
    </html>
