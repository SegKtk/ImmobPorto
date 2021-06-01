<?php 
                require_once 'connexion.php';
                
                if(isset($_POST['btlogin']))
                {
                    $req="select COUNT(*) from utilisateur where email = '".$_POST['email']."' and password='".$_POST['password']."'";

                    $sql="select * from utilisateur where email = '".$_POST['email']."' and password='".$_POST['password']."'";

                    $result = $conn->prepare($req);
                    $result->execute();
                    $result = $result->fetch();
                    $line = pg_fetch_assoc($result);

                    $result1 = $conn->prepare($sql);
                    $result1->execute();
                    $result1 = $result1->fetch();
                    $line1 = pg_fetch_assoc($result1);
                    if($result['count'] == 1)
                    {
                        session_start();
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['id_user'] = $result1['id_user'];
                        echo $_SESSION['email']."<br>";
                        echo $_SESSION['id_user'];
                        header("location:compte.php");
                    }
                    else{
                        echo "<script>alert('Login ou mot de passe invalide');</script>";
                        header("location:inscris.php");
                        //echo "<br> <a href='inscris.php'><<--Retournez à la page de connexion</a>";
                    }
                }
?>