<?php
$conn=new mysqli('localhost','root','','registration');
if(isset($_POST['submit']))
{

    
    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"]; 
    
    $gender=$_POST["gender"];
    $education=$_POST["education"];
    $time=$_POST["time"];
    $favorites =$_POST["favorites"];
   
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);

       // Check if the lastname already exists
       $sql1 = "SELECT * FROM form  WHERE  lastname='$lastname'";
       $result = $conn->query($sql1);
   
       if ($result === FALSE) {
           echo "Error checking lastname: " . $conn->error;
           exit;
       }
   
       if ($result->num_rows > 0) {
           echo "lastname already exists. Please use a different  lastname.";
           exit;
       }
    
    
    
     // Insert user data into the database
     $sql = "INSERT INTO form VALUES ('', '$firstname','$lastname','$gender','$education','$time','$favorites',
     '$password')";
    $query=mysqli_query($conn,$sql);
    if($query)
    {
     echo'login successfuly';
    }
    else{
     echo 'failed';
    }
}
    
   



?>
