 <?php
session_start();
             include ('./connection.php');

            $user = ($_POST["username"] );
            $password = $_POST["password"];
            
            $sql = 'SELECT * FROM users WHERE username="'.$user.'" 
            AND password="'.$password.'"';
            $_SESSION['name'] = $user;
            
            $result = $conn->query($sql);
            
            $row =  mysqli_num_rows($result);
            
            if($row === 1 ) {
            
            header ("Location: http://localhost/medical/index.php");
            
            }

             else {
            
                echo "Please check your username or password";
            
            }
          
            $conn->close();

            ?>