<?php 
    session_start();
require_once('../../koneksi.php');



if (isset($_SESSION['is_login'])!= NULL){
  header ("location: ../Barang/index.php");
  
}
if (isset($_POST['login'])){
  $username = $_POST['username'];
  
  $password = $_POST['password'];
  
  $query = "SELECT * FROM loginadmin WHERE username='$username' AND password='$password'";
  $result = $koneksi->query($query);
  
  if ($result->num_rows > 0){
    $user = $result->fetch_assoc();
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['is_login'] = true;
    header ("location: ../Barang/index.php");
}else{
    echo "<script> alert ('username atau password salah') </script>";
}
    
}
    
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/style/loginDash.css" />
</head>

<body>

    <div id="frame">
        <div class="bingkai">
            <h4>LOGIN</h4>

            <form class="form" method="post">
                <div>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username" />
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password" />
                </div>

                <span id="pesanEror" style="font-size: 16; color: red"></span>

                <div style="display: flex; justify-content: center">
                    <button type="submit" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function login() {
        let username = document.getElementById("username").value;
        let password = document.getElementById("pass").value;
        let pesanEror = document.getElementById("pesanEror")

        if (username === "") {
            pesanEror.innerHTML = "Username tidak boleh kosong!"
        } else if (password.length < 8) {
            pesanEror.innerHTML = "Password harus terdiri minimal 8 karakter!"
        } else if (username === "admin" && password === "admin") {
            location.replace("dashboard.html")
        } else {
            pesanEror.innerHTML = "Username dan Password salah!"
        }


    }
    </script>

</body>

</html>