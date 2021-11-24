<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST["submit"]))
{
  if((!empty($_POST['firstname'])) && (!empty($_POST['lastname'])) && (!empty($_POST['email'])) && (!empty($_POST['phonenumber'])) && (!empty($_POST['password'])))
  {
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $phonenumber = $_POST['phonenumber'];
     $password = $_POST['password'];
     $query = "INSERT INTO form(firstname,lastname,email,phonenumber,password) VALUES('$firstname','$lastname','$email','$phonenumber','$password')";
       $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

       if($run){
        echo "Form submitted succesfully.";

       }
       else{

        echo "Form not submitted."; 
       }

    }
    else{
      echo "all fields required.";
    }

}