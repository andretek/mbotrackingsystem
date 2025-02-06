<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['firstname'])) {

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <title>MBO Tracking System V1.1</title>
     <style type="text/css">
          *{
               text-decoration: none;
          }
          .navbar{
               background-color: #097683; font-family: calibri; padding-right: 15px;padding-left: 15px;
          }
          .navdiv{
               display: flex; align-items: center; justify-content: space-between;
          }
          .logo a{
               font-size: 35px; font-weight: 600; color: white;
          }
          li{
               list-style: none; display: inline-block;
          }
          li a{
               color: white; font-size: 18px; font-weight: bold; margin-right: 25px;
          }
          button{
               background-color: black; margin-left: 10px; border-radius: 10px; padding: 10px; width: 90px;
          }
          button a{
               color: white; font-weight: bold; font-size: 15px;
          }
     </style>
</head>
<body>
     <nav class="navbar">
          <div class="navdiv">
               <div class="logo"><a href="#">AP & NYDD</a> </div>
               <ul>
                    <li><a href="dashboard.php">DASHBOARD</a></li>
                    <li><a href="apindex.php">Accounts Payable</a></li>
                    <li><a href="nydd.php">NYDD</a></li>
                    <button><a href="logout.php">Logout</a></button>
               </ul>
          </div>
     </nav>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>