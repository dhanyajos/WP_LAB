


<?php
        session_start();
        $sname="117.232.108.36";
        $uname="mca2033";
        $pswd="password33";
        $dbname="dbmca2033";
        //connection
        $conn=new mysqli($sname,$uname,$pswd,$dbname);
        //check connection
        if($conn->connect_error){
                die("Connection failed: ">$conn->connect_error);
        }

if(isset($_POST['btn']))
{
        $usr=$_POST['usr'];
        $pswd=$_POST['pswd'];

        $sql=mysqli_query($conn,"select * from login where username='$usr'");

        if(mysqli_num_rows($sql)>0)
        {
                echo "<script>alert('username already Exists!!!!!!!!!!!');</script>";
                echo '<script type="text/javascript">
                        location.replace("php1.5-1.php");
                        </script>';
        }
        else
        {

                if(mysqli_query($conn,"insert into login values('$usr','$pswd')"))
                {
                        echo "<script>alert('Login........');</script>";
                        echo '<script type="text/javascript">
                        location.replace("php1.5-1.php");
                        </script>';
                }
        }
}
if(isset($_POST['submit']))
{
        $usr=$_POST['usr'];
        $pswd=$_POST['pswd'];
        $sql=mysqli_query($conn,"select * from login where username='$usr' and password='$pswd'");

        if(mysqli_num_rows($sql)>0)
        {
                $_SESSION['login_user'] = $usr;

         header("location: php1.5_welcome.php");
        }
        else
        {
                echo "<script>alert('Incorrect Username and Password!!!!!!!!!!!');</script>";
                echo '<script type="text/javascript">
                location.replace("php1.5-1.php");
                </script>';
        }

 $sql=mysqli_query($conn,"select * from login where password='$pswd'");
        if(mysqli_num_rows($sql)>0)
        {
                echo "<script>alert('Incorrect Username!!!!!!!!!!!');</script>";
                echo '<script type="text/javascript">
                location.replace("php1.5-1.php");
                </script>';
        }
        else
        {
                $sql=mysqli_query($conn,"select * from login where username='$usr'");
                if(mysqli_num_rows($sql)>0)
                {
                        echo "<script>alert('Incorrect Password!!!!!!!!!!!');</script>";
                        echo '<script type="text/javascript">
                        location.replace("php1.5-1.php");
                        </script>';
                }
        }

}
?>
