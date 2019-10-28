
<?php
    include'dbconnexion.php' ;
    if(isset($_GET['delete']))
      {

        $id=$_GET['delete'];

        $_SESSION['message']="Record has been deleted !";
        $_SESSION['msg_type']="danger";

        $mysqli->query("DELETE FROM students WHERE ID=$id") or die ($mysqli->error());

        header("location:index.php");
      }
    ?>
