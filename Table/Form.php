<?php
include("connect.php")
?>

<html>
<head>
    <h3 style="text-align: center;"> Student Table</h3>
</head>
<style>

</style>
<body style="background-color: blueviolet; ">


    <Section>
        <div style="align-items: center; justify-content: center; width: 100%;margin-left: 40%;"> 
            <table border="5" style="width: 35%;height: 220px;align-items: center;justify-content: center;border-colour:black">
                <thead>
                  <tr>
                    <th>Roll No</th>
                    <th><Input name="rollno"></Input></th>
                  </tr>
                  <tr>
                    <th>First Name</th>
                    <th><Input name="firstname"></Input></th>
                  </tr>
                
                  <tr>
                    <th>Last Name</th>
                    <th><Input name="lastname"></Input></th>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <th><Input name="email"></Input></th>
                  </tr>
                  <tr>
                    <th>Password</th>
                    <th><Input name="password"></Input></th>
                  </tr>
                
                  <tr>
                    <th>confirm Password</th>
                    <th><Input name="cpassword"></Input></th>
                  </tr>
                
                  <tr>
                  <th ><Button style="width: 100%; height: 100%;background-color: chartreuse;color: black;" name="btn" type="submit">Submit</Button></th>

                
                </table>
        </div>
    </Section>
</body>
</html>
<?php
$rn=$_GET["rollno"];
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$em=$_GET['email'];
$pw=$_GET['password'];
$cpw=$_GET['cpassword'];

$query="INSERT INTO student Values ('$rn','$fn','$ln','$em','$pw','$cpw')";
$data=mysqli_query($Conn,$query);
if ($data)
{
  echo "data";
}
?>
