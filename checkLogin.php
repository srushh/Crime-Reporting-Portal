                        <?php
                        $conn = mysqli_connect('localhost','root','','mysql',3308);
                        mysqli_select_db($conn,'mysql');
                        $emailErr=$passErr="";
                        $e=$p="";
                        echo 'Hello!';
                        
                        if(!$conn)
                        {
                            echo 'Error!';
                        }
                        if (empty($_POST["email"])) {
                            $emailErr = "Email is required!";
                            header("Location:http://localhost/DBMS/login.php");
                          } 
                        if (empty($_POST["password"])) {
                            $passErr = "Password is required!";
                            header("Location:http://localhost/DBMS/login.php");
                          } 
                          
                        if (isset($_POST['email']) and isset($_POST['password']))
                        {
                            $em = $_POST['email'];
                            $pass = $_POST['password'];
                            $sql = "SELECT email,password FROM users WHERE email='$em' and pass='$pass'";
                            $result = mysqli_query($conn, $sql);
                            
                            echo "Hello";
                              if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                $e=row["email"];
                                $p=row["password"];
                                
                                echo $e."  ".$p;
                                }
   
                            }
 
                            if ($e==$em && $p==$pass) {
                                header("Location:http://localhost/DBMS/report.php");
                            }else{
                                echo "Login failed!";
                                header("Location:http://localhost/DBMS/login.php");
                            }
                        }

                        ?>