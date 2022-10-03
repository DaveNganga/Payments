<?php
include_once('dbinc.php');
session_name('CreditCard');
session_start(); 
if (isset($_POST['submit'])) { 
    $_SESSION['Card'] = $_POST['Card'];
    $_SESSION['Date'] = $_POST['Date'];
    $_SESSION['CVV'] = $_POST['CVV'];
    $_SESSION['Name'] = $_POST['Name'];
    $link = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
    if($link->connect_error){
        echo "Please Refresh the page or try again later";
        echo mysqli_connect_error();
    }
    else{
        echo "<script>console.log('Success' );</script>";
        #require_once('dbenc.php');
        #$text = $_SESSION['Card']
        #echo encrpt($text);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Payment Check</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script> 
  <script src="validation.js"></script> 
<body>
<div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card p-3">
                    <p class="mb-0 fw-bold h4">Card Payment Method</p>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-3">
                    <div class="card-body border p-0">
                        <br />
                        <div class="collapse show p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-5 mb-lg-0 mb-3">
                                    <p class="h4 mb-0">Summary</p>
                                    <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green"> Donation </span>
                                    </p>
                                    <p class="mb-0">
                                        <span class="fw-bold">Price:</span>
                                        <span class="c-green">:$100</span>
                                    </p>
                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                        nihil neque</p>
                                </div>
                                <div class="col-lg-7">
                                    <form action="" method="post" class="form" name="creditCards">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" name= "Card" placeholder=" ">
                                                    <label for="" class="form__label">Card Number</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" name= "Date" placeholder=" ">
                                                    <label for="" class="form__label">MM / yy</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="password" class="form-control" name= "CVV" placeholder=" ">
                                                    <label for="" class="form__label">cvv code</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" name= "Name" placeholder=" ">
                                                    <label for="" class="form__label">name on the card</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="submit" onclick="validate( document.creditCards.Card , document.creditCards.Date , document.creditCards.CVV , document.creditCards.Name )" class="btn btn-primary w-100">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
            </div>
        </div>
    </div>
<?php
$link->close();
?>
</body>
</html> 