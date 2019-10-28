
<?php
    include'dbconnexion.php' ;
    if(isset($_GET['edit']))
      {

        $id=$_GET['ID'];


        $ers=$mysqli->query("SLECT * FROM students WHERE ID=$id") or die ($mysqli->error());

        if(count ($re)==1){
            $row=$res->fetch_array();
            $firstname=['firstname'];
            $lastname=['lastname'];
            $email=['email'];
            $phone=['phone'];
        }
      }
    ?>
