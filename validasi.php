<?php 
        $conn = mysqli_connect("localhost","root","", "user");
        $cek_user=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM login WHERE username='$_POST[username]'"));
        if ($cek_user > 0) {
            echo '<script language="javascript">
                  alert ("Username Sudah Ada Yang Menggunakan");
                  window.location="register.php";
                  </script>';
                  exit();
        }
        else {

            mysqli_query($conn, "INSERT INTO login (fullname, username, password, birthdate)
            VALUES ('$_POST[fullname]', '$_POST[username]', md5('$_POST[username] . $_POST[password]'), '$_POST[birthdate]')");
            
            echo '<script language="javascript">
                  alert ("Registrasi Berhasil Di Lakukan!");
                  window.location="index.php";
                  </script>';
                  exit();
        }
    ?>
