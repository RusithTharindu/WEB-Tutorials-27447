<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            border: 1px solid;
            width: 50%;
            margin-left: 25%;
            text-align: center;
            
        }
        form {
            background-color:aqua;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form action="main.php" method="post">
           <table>
                <tr>
                    <td>First Name :</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>Last Name :</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="gender" value="Male">Male <br>
                         <input type="radio" name="gender"value="Female">Female</td>
                </tr>

                <tr>
                    <td>Academic Year :</td>
                                          <td><select name="year">
                                             <option value="1st year">1st year</option>
                                             <option value="2nd year">2nd year</option>
                                          </select></td>
                </tr>

                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="email" ></td>
                </tr>
                <tr>
                    <td>Phone No :</td>
                    <td><input type="tel" name="mobile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>

           </table>
        </form>
    </div>



<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    

   if(isset($_POST['year'])){
     $year = $_POST['year'];

   }

   if (isset($_POST['gender'])){
        $gender = $_POST['gender'];

   }
   

   echo "
   <table border = '1'>
   <tr>
       <td>First Name : </td>
       <td>$fname</td>
   </tr>
   <tr>
       <td>Last Name :</td>
       <td>$lname</td>
   </tr>
   <tr>
       <td>Username :</td>
       <td>$username</td>
   </tr>
   <tr>
       <td>password :</td>
       <td>$password</td>
   </tr>
   <tr>
       <td>Gender :</td>
       <td>$gender</td>
   </tr>
   <tr>
       <td>year :</td>
       <td>$year  </td>
   </tr>
   <tr>
       <td>Email :</td>
       <td>$email </td>
   </tr>
   <tr>
       <td>Phone No :</td>
       <td>$mobile</td>
   </tr>
 </table>
   
   
   ";
   
    

?>




</body>
</html>