<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Results of data collection</title>
  </head>
  <body>
    <h1><font color="Blue"><b>Online Registration Panel</b></font></h1>
    <?php
        $id=$_POST['id'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        $year=$_POST['year'];
        $gender=$_POST['gender'];
        $region=$_POST['region'];
        $email=$_POST['email'];

        //database connection
        $connection= new mysqli('localhost','root','','form_results');
        if ($connection->connect_error){
          die('Connection Failed: '.$connection->connect_error);
        }else{
          $stmt= $connection->prepare("insert into results(id, name, password, year, gender, region, email)
          values(?,?,?,?,?,?,?)");
          $stmt->bind_param("ississs", $id, $name, $password, $year, $gender, $region, $email);
          $stmt->execute();
          echo "Registration was successful!";
          $stmt->close();
          $connection->close();
        }
        

     ?>
     <br><br>
     <button type="push">
     <a href="form.html"> Back to Registration Page</a>
     </button>

  </body>
</html>
