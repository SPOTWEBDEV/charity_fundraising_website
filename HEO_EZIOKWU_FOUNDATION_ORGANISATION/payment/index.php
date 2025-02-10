<?php
    include '../server/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST['fullname'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $amount   = $_POST['amount'];

        $stmt = mysqli_query($connection,"INSERT INTO donations (fullname, email, phone, amount) VALUES ( $fullname, $email, $phone, $amount)");

        if ($stmt) {
            echo "<script>alert('Donation submitted successfully!');</script>";
        } else {
            echo "<script>alert('Error submitting donation!');</script>";
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
        .container { max-width: 900px; margin: 30px auto; background-color: #e8eaf6; padding: 35px; }
        .box-right, .box-left { padding: 20px; background-color: white; border-radius: 15px; }
        .bg-blue { background-color: #dfe9fc9c; border-radius: 5px; padding: 10px; }
        .form-control { box-shadow: none !important; }
        .btn-primary { box-shadow: none; height: 40px; padding: 11px; }
        .copy-icon { cursor: pointer; color: #1976d2; }
        .switch-icon { cursor: pointer; color: #28a745; }
    </style>
</head>
<body>

<div class="container">
    <div class="row m-0">
        <div class="col-12">
            <div class="row">
                <div class="col-12 px-0 mb-4">
                    <div class="box-right">
                        <div class="d-flex pb-2">
                            <p class="fw-bold h7">Account Details</p>
                            <p class="ms-auto">
                                <span class="switch-icon fas fa-sync-alt me-3" onclick="switchAccount()"></span>
                                <span class="copy-icon far fa-clone" onclick="copyToClipboard()"></span>
                            </p>
                        </div>
                        <div class="bg-blue p-2">
                            <p class="h8 text-muted accountName"></p>
                            <p class="p-blue bg btn btn-primary h14 accountNumber"></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 px-0">
                    <div class="box-right">
                        <div class="d-flex mb-2">
                            <p class="fw-bold">Personal Information</p>
                        </div>

                        <form class="row" method="POST">
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
                                <button class="btn btn-sm btn-success w-25 mt-4" type="submit">Submit</button>
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
        { id: 1, name: 'H.E.O EZIOKWU FOUNDATION NIG LTD', number: '5070998183', bank_name: 'ZENITH BANK', typeOf: 'Nigeria' },
        { id: 2, name: 'H.E.O EZIOKWU FOUNDATION NIG LTD', number: '5070998183', bank_name: 'ZENITH BANK', typeOf: 'USA Account' },
        { id: 3, name: 'H.E.O EZIOKWU FOUNDATION NIG LTD', number: '5080241271', bank_name: 'ZENITH BANK', typeOf: 'Europe Account' }
    ];

    function displayAccount() {
        let accountName = document.querySelector('.accountName');
        let accountNumber = document.querySelector('.accountNumber');
        accountName.innerHTML = `${bank_details[index].name} - ${bank_details[index].typeOf} Account`;
        accountNumber.innerHTML = `${bank_details[index].number}`;
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
