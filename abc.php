                        <?php
                        $conn = mysqli_connect('localhost','root','','mysql',3308);
                        mysqli_select_db($conn,'mysql');
                        $e=$p="";
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
                            $pass=$_POST['password'];
                            $sql = "SELECT password FROM users WHERE email='$em'";
                            $result = mysqli_query($conn, $sql);
                              if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                $p=$row["password"];

                                }
   
                            }
 
                            if ($p===$pass) {

                                header("Location:http://localhost/DBMS/report.php");
                            }
                            else
                            {
                                header("Location:http://localhost/DBMS/login.php");
                            }
                            
                        }

                        ?>