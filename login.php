<?php
       
       $conn = mysqli_connect("localhost","root","", "user");
        
        $username = $_POST["username"];
        $password = md5($_POST['username'] . $_POST['password']);
        // $encrypt = md5($username . $password);
         
        $query = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' and password='$password'");
        $cek = mysqli_num_rows($query);
        
        if($cek==1){
            header("location:home.php");
        }
        else{
        ?>
            <script language="JavaScript">
                alert('Oops! Username atau Password tidak sesuai ...');
                document.location='./';
            </script>
        <?php
        }
    ?>
