
<?php
    require 'connection.php';

    session_start();

    #if login button is clicked
    if(isset($_POST['login']))
    {
        $query="SELECT * FROM `user` WHERE `email`='$_POST[email_username]' OR `username` = '$_POST[email_username]'";
        $result=mysqli_query($con,$query);

        if($result)
        {
            if(mysqli_num_rows($result)==1)
            {
                $result_fetch=mysqli_fetch_assoc($result);
                if(password_verify($_POST['password'], $result_fetch['password']))
                {
                    #if password is correct
                    echo " login success";
                    $_SESSION['logged_in']=true;
                    $_SESSION['username']=$result_fetch['username'];
                    header('location: main.php');
        
                }
                else
                {
                    #if incorrect password
                    echo "<script>alert('Incorrect Password');
                    window.location.href='profile.php';
                    </script>";
                }
            }
            else
            {
                echo "<script>alert('User Not Exist');
                window.location.href='profile.php';
                </script>";
            }
        }
        else
        {
            echo "<script>alert('User Not Exist');
            window.location.href='profile.php';
            </script>";
        }
    }
    #if register button is clicked
    if(isset($_POST['register']))
    {
        $user_exist_query="SELECT * FROM user WHERE username = '$_POST[username]' OR email = '$_POST[email]'";
        $result=mysqli_query($con,$user_exist_query);

        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
                #if username  already exist
                $result_fetch=mysqli_fetch_assoc($result);
                if($result_fetch['username'] == $_POST['username'])
                {
                    echo "<script>alert('Username Already Exist');
                    window.location.href='profile.php';
                    </script>";
                }
                else
                {
                    #if email already exist
                    echo "<script>alert('$result_fetch[email] - Email Already Exist');
                    window.location.href='profile.php';
                    </script>";
                }
            }
            else  #if username and email not exist
            {
                $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                $query="INSERT INTO `user`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[full_name]','$_POST[username]','$_POST[email]','$password')";
                if(mysqli_query($con,$query))
                {
                    echo "<script>alert('Registration Successful');
                    window.location.href='profile.php';
                    </script>";
                }
                else
                {
                    echo "<script>alert('Registration Failed');
                    window.location.href='profile.php';
                    </script>";
                }
            }
        }
        else
        {
            echo "<script>alert('User Already Exist');
            window.location.href='profile.php';
            </script>";
        }
    }
?>