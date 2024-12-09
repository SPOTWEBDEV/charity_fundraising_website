<?php
if (isset($_POST['donate_btn'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $status = "pending"; // Initial status before payment completion



    // Insert initial record with "pending" status
    $date = date("Y-m-d H:i:s"); // Current date and time
    $stmt = $connection->prepare("INSERT INTO `donation`(`email`, `phone`, `amount`, `firstname`, `lastname`, `date`, `status`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdssss", $email, $phone, $amount, $firstName, $lastName, $date, $status);

    if (!$stmt->execute()) {
        echo "<script>window.onload = () => Model('Database error: {$stmt->error}', 'danger');</script>";
        $stmt->close();
        $conn->close();
        exit;
    }

    // Paystack API call
    $url = "https://api.paystack.co/transaction/initialize";
    $fields = [
        'email' => $email,
        'amount' => $amount * 100, // Paystack requires amount in kobo
        'callback_url' => $domain . "server/payment/callback.php?id={$connection->insert_id}", // Pass donation ID as reference
    ];

    $fields_string = http_build_query($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer sk_test_6670ce23fe0169c865415cf6d9bf8ce0843ad392",
        "Cache-Control: no-cache",
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    if ($result === false) {
        echo "<script>window.onload = () => Model('cURL Error: " . curl_error($ch) . "', 'danger');</script>";
    } else {
        $response = json_decode($result);

        if (isset($response->data->authorization_url)) {
            header("Location: " . $response->data->authorization_url); // Redirect to Paystack
            exit;
        } else {
            echo "<script>window.onload = () => Model('Paystack Error: " . $response->message . "', 'danger');</script>";
        }
    }

    curl_close($ch);
    $stmt->close();
    $conn->close();
}
?>
