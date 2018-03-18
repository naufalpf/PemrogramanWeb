<?php
    include 'connect.php';
    if (isset($_POST['Masuk'])) 
    {
        if (empty($_POST['username']) || empty($_POST['password'])) {
                $error = "Username or Password is invalid";
                echo $error;
        }
        else
        {
            // Variabel username dan password
            // $username=$_POST['username'];
            // $password=$_POST['password'];
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $username = stripslashes($username);
            $password = stripslashes($password);
            //echo $username;
            //echo $password;
            // Membangun koneksi ke database
            // $connection = mysql_connect("localhost", "root", "");
            // // Mencegah MySQL injection 
            // $username = stripslashes($username);
            // $password = stripslashes($password);
            // $username = mysql_real_escape_string($username);
            // $password = mysql_real_escape_string($password);
            // // Seleksi Database
            //$db = mysql_select_db("tes_db", $connection);
            // // SQL query untuk memeriksa apakah karyawan terdapat di database?
            //mysqli_query($con,"SELECT * FROM Persons");
            //$query = mysqli_query("select * from user where username='$username' AND password='$password'", $conn);
            //$rows = mysqli_num_rows($query);

            $ambilDataSql=mysqli_query($conn,"SELECT * FROM user WHERE user_name = '$username' AND PASSWORD='$password'");
            $row=mysqli_num_rows($ambilDataSql);
            $ambilDataSql2=mysqli_query($conn,"SELECT * FROM user WHERE email = '$username' AND PASSWORD='$password'");
            $row2=mysqli_num_rows($ambilDataSql2);
            if ($row == 1) 
            {
                session_destroy();
                session_unset();
                //echo $username
                session_start();
                $row1=mysqli_fetch_array($ambilDataSql,MYSQLI_ASSOC);
                $_SESSION['email']=$row1['email'];
                $_SESSION['nama']=$row1['name'];
                $_SESSION['msg']="sukses";
                //echo $_SESSION['email'];
                //$_SESSION['login_user']=$username; // Membuat Sesi/session
                //return redirect('login2.php');
                
                //header("location: index.php"); // Mengarahkan ke halaman profil
                //echo "masuk";
                header("location: index2.php");
                //echo "sukses";
                //header("location: login3.php"); // Mengarahkan ke halaman profil
            }
            else if($row2==1)
            { 
                session_destroy();
                session_unset();
                session_start();
                $row1=mysqli_fetch_array($ambilDataSql2,MYSQLI_ASSOC);
                $_SESSION['email']=$username;
                $_SESSION['nama']=$row1['name'];
                $_SESSION['msg']="sukses";
                //echo $_SESSION['email'];
                //header("location: index.html"); // Mengarahkan ke halaman profil
                //echo "masuk";
                header("location: index2.php");
                //header("location: index.php"); // Mengarahkan ke halaman profil
            }
            else 
            {   
                session_start();
                $_SESSION['msg']="fail";
                //echo $_SESSION['msg']; 
                //$error = "Username atau Password belum terdaftar";
                //echo $error;
                header("location: index.php"); // Mengarahkan ke halaman profil
            }
            //mysqli_close($conn); // Menutup koneksi
        }
    }
?>