<?php 
        $mysqli= new mysqli("localhost","root","");
        $qry= "INSERT INTO did (no, command, texta) VALUES ('1', 'eee' , 'dsfsdf')";
        $insert=$mysqli->query($qry);
        if ($insert){
            if ($mysqli->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $mysqli . "<br>" . $conn->error;
            }
        }
?>