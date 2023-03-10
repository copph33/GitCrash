<!DOCTYPE html>
<html>
    <head>
        <title></title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            <h3>Login </h3>
            Username: <input type="text" name="username" value=""/> <br/>
            password: <input type="password" name="password" value=""/><br/>
            <input type="submit" name="submit" value="Send"/><br/>
            <?php
                // Nếu người dùng click vào button Send
                // Vì button đó tên là submit nên đó cũng là
                // tên của key nằm trong biến $_POST
                //
                if (isset($_POST['submit'])){
                    if(empty($_POST['username'])){
                        echo "Please enter username !!!!!";
                    }else{
                        //htmlspecialchar biến 1 chuỗi js hay payload thành 1 chuối tring 
                        // HMTL entities
                        $username_s=filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);
                        //echo 'Username : ' . htmlspecialchars(($_POST['username']));
                        echo $username_s;
                    }
                    echo '<br/>';
                    if(empty($_POST['password'])){
                        echo 'Please Enter password!!!!';
                    }else{
                        echo 'Password : ' . $_POST['password'];
                    }
                }
           ?>
        </form>
    </body>
</html>