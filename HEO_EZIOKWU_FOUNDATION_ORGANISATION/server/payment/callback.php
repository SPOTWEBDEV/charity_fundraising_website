<?php
include('../connection.php');

if (isset($_GET['reference']) && isset($_GET['id'])) {
    $reference = $_GET['reference'];
    $id = $_GET['id'];

 
    // Paystack Verification
    $url = "https://api.paystack.co/transaction/verify/" . $reference;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer sk_test_6670ce23fe0169c865415cf6d9bf8ce0843ad392",
        "Cache-Control: no-cache",
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    if ($result === false) {
        die("cURL Error: " . curl_error($ch));
    }
    $response = json_decode($result);
    curl_close($ch);

   


    if ($response->status && $response->data->status == "success") {
        $status = "success";
    } else {
        $status = "cancelled";
    }

    echo $status . ' - ' . $id;

    $stmt = $connection->prepare("UPDATE `donation` SET `status` = ? WHERE `id` = ?");
    $stmt->bind_param("si", $status, $reference);
    $stmt->execute();

    $stmt->close();
    $connection->close();

    // Redirect to a confirmation page
    header("Location: ../../denation_success?status=$status&reference=$reference");
    exit;
}
?>
