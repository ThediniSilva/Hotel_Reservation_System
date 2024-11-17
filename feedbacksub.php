
<?php
    include_once'config.php';
?>

<?php

    $Cname=$_POST["name"];
    $Cemail=$_POST["email"];
    $Cmessage=$_POST["message"];


    $sql="INSERT INTO feedback(CusID,Cusname, Cusemail, Cusmessage )VALUES( '','$Cname', '$Cemail', '$Cmessage ')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Record Inserted Successfully!!')</script>";
    } 
    else {
        echo "<script>alert('Error in Insertion!!')</script>";
    }
    
    //close the conection
    mysqli_close($conn);

?>