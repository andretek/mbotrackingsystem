<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['firstname'])) {


include "dbtekconnect.php";

if (isset($_POST["submit"])) {
   $AMOUNT = $_POST['amount'];
   $OFFICECODE = $_POST['office_code'];
   $OFFICENAME = $_POST['name_office'];
   $PAYEE = $_POST['payee'];
   $DISCRIPTION = $_POST['discription'];
   $ACCOUNTCODE = $_POST['account_code'];
   $OBR = $_POST['obr'];
   

   $query= mysqli_query($conn,"SELECT * FROM `accountspayable` WHERE (obr, office_code)= ('$OBR', '$OFFICECODE')");
      if(mysqli_num_rows($query)>0){
      echo "Account Code & Office Code Already Exist";
   }

   else{

   $sql = "INSERT INTO `accountspayable`(`id`, `office_code`, `name_office`, `payee`, `discription`, `account_code`, `obr`, `amount`) VALUES (NULL,'$OFFICECODE','$OFFICENAME','$PAYEE','$DISCRIPTION','$ACCOUNTCODE','$OBR','$AMOUNT')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: apindex.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
   }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="icon" type="icon/ico" href="ico/imbo.ico">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" type="text/css" href="css/stylesheet2.css">

   <title>MBO Accounts Payable</title>

</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      ACCOUNTS PAYABLE AS OF 2024
   </nav>
   <div class="container">
      <div class="text-center mb-4">
         <h3>Add AP-2024</h3>
         <p class="text-muted">Complete all the blank box</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">AMOUNT:</label>
                  <input type="text" class="form-control" name="amount" placeholder="1, 000.00">
               </div>

               <div class="col">
                  <label class="form-label">OFFICENAME:</label>
                  <input type="text" class="form-control" name="name_office" placeholder="MAYORS OFFICE">
               </div>
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">PAYEE:</label>
                  <input type="text" class="form-control" name="payee" placeholder="PRIMER MARKETING SAMPLE">
               </div>
               <div>
                  <label class="form-label">DISCRIPTION:</label>
                  <input type="text" class="form-control" name="discription" placeholder="PURCHASE OF VARIOUS TOOLS">
               </div>

            </div>
            <div class="row mb-4">
               <div>
                  <label class="form-label">ACCOUNTCODE:</label>
                  <input type="text" name="account_code" class="form-control" placeholder="5-02-01-191">
               </div>
               <div>
                  <label class="form-label">OBR:</label>
                  <input type="text" name="obr" class="form-control" placeholder="101-01-24-1100">                 
               </div>
               <div>
                  <label class="form-label">OFFICECODE:</label>
                  <input type="text" name="office_code" class="form-control" placeholder="1011-1">
                 
               </div>      
            </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="apindex.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
 
   </script>
   <script>
      var inputField = document.querySelector('input')
      inputField.onkeyup = function(){
         var removeChar = this.value.replace(/[^0-9\.]/g, '')
         this.value = removeChar
         var formatedNumber = this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
         console.log(formatedNumber);
         this.value = formatedNumber

      }
   </script>

</body>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
