<?php
    include '../server/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
        $email    = mysqli_real_escape_string($connection, $_POST['email']);
        $phone    = mysqli_real_escape_string($connection, $_POST['phone']);
        $amount   = mysqli_real_escape_string($connection, $_POST['amount']);
        $bank_id  = mysqli_real_escape_string($connection, $_POST['bank_id']); // Get bank ID

        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");
        $status     = 'pending'; // Default status

        // Insert data into donations table
        $query = "INSERT INTO donations (fullname, email, phone, amount, bank_id, created_at, updated_at, status)
              VALUES ('$fullname', '$email', '$phone', '$amount', '$bank_id', '$created_at', '$updated_at', '$status')";

        if (mysqli_query($connection, $query)) {
            echo "<script>alert('Donation submitted successfully!'); window.location.href='donation_page.php';</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($connection) . "');</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body{
            background:rgb(0,29,76);
        }
        .container { max-width: 900px; margin: 30px auto; background-color: rgb(0,29,76); padding: 35px; }
        .box-right, .box-left { padding: 20px; background-color: white; border-radius: 15px; }
        .bg-blue { background-color: #dfe9fc9c; border-radius: 5px; padding: 10px; }
        .form-control { box-shadow: none !important; }
        .btn-primary { box-shadow: none; height: 40px; padding: 11px; }
        .copy-icon { cursor: pointer; color: rgb(0,29,76); }
        .switch-icon { cursor: pointer; color: rgb(0,29,76); }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<a href="../" style="border-radius: 50%; height: 50px; width:50px; background-color: white; display: flex; align-items: center; justify-content: center; top: 20px; left:30px; position: fixed;" class="fixed ">
    
    <i style="color: black; font-size: 20px;" class="bi bi-arrow-left"></i>
</a>

<div class="container">
    <div class="row m-0">
        <div class="col-12">
            <div class="row">
                <div class="col-12 px-0 mb-4">
                    <div class="box-right">
                        <div class="d-flex pb-2">
                            <p class="fw-bold h7">Account Details</p>
                            <p class="ms-auto">
                                <span class="switch-icon d-none fas fa-sync-alt me-3" onclick="switchAccount()"></span>
                                <button class="btn btn-sm btn-success" onclick="switchAccount()">Switch Account</button>
                                <span class="copy-icon far fa-clone" onclick="copyToClipboard()"></span>
                            </p>
                        </div>
                        <div class="bg-blue p-2">
                            <p class="h8 text-muted accountName"></p>
                            <p style="font-size:30px" class="p-blue  text-primary  accountNumber"></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 px-0">
                    <div class="box-right">
                        <div class="d-flex mb-2">
                            <p class="fw-bold">Personal Information</p>
                        </div>

                         <form class="row" method="POST">
    <input type="hidden" name="bank_id" id="bank_id"> <!-- Hidden input for bank ID -->

    <div class="col-12 mb-2">
        <p class="text-muted h8">Full Name</p>
        <input class="form-control" type="text" name="fullname" placeholder="Enter Full Name" required>
    </div>
    <div class="col-6">
        <p class="text-muted h8">Email Address</p>
        <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
    </div>
    <div class="col-6">
        <p class="text-muted h8">Phone Number</p>
        <input class="form-control" type="text" name="phone" placeholder="Enter Your Phone Number" required>
    </div>
    <div class="col-12 mb-2">
        <p class="text-muted h8">Amount for Donation</p>
        <input class="form-control" type="text" name="amount" placeholder="Enter Amount" required>
    </div>
    <div class="col-12 mb-2">
        <button style="background:rgb(0,29,76)" class="btn text-white btn-sm w-25 mt-4" type="submit">Submit</button>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let index = 0;

    let bank_details = [
         {
                  id: 1,
                  name: 'H.E.O EZIOKWU FOUNDATION NIG LTD',
                  number: '5070998183',
                  bank_name: 'ZENITH BANK',
                  typeOf: 'Nigeira'

         },
         {
                  id: 2,
                  name: 'H.E.O EZIOKWU FOUNDATION NIG LTD',
                  number: '5070998183',
                  bank_name: 'ZENITH BANK',
                  typeOf: 'Usa Account'

         },
         {
                  id: 0,
                  name: 'H.E.O EZIOKWU FOUNDATION NIG LTD',
                  number: '5080241271',
                  bank_name: 'ZENITH BANK',
                  typeOf: 'Europe Account'

         }
]

    function displayAccount() {
    let accountName = document.querySelector('.accountName');
    let accountNumber = document.querySelector('.accountNumber');
    let bankIdInput = document.getElementById('bank_id'); // Get hidden input field

    accountName.innerHTML = `${bank_details[index].name} - ${bank_details[index].typeOf} Account`;
    accountNumber.innerHTML = `${bank_details[index].number}`;
    bankIdInput.value = bank_details[index].id; // Set bank_id input value
}


    function switchAccount() {
        index = (index + 1) % bank_details.length;
        displayAccount();
    }

    function copyToClipboard() {
        let copyText = document.querySelector('.accountNumber').innerText;
        navigator.clipboard.writeText(copyText).then(() => {
            alert('Account number copied to clipboard!');
        });
    }

    displayAccount();
</script>

</body>
</html>
