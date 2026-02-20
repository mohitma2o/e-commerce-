function EmptyInputPayment($name, $number, $month, $year, $cvv, $address, $phone) {
    $item->setData();

    $sql = "INSERT INTO Payment(OrderID, PaymentDate)
            VALUES($orderid, CURRENT_TIME)";

    // Send confirmation email
    mail("admin@ogtech.com", "Payment Received", "Order ID: " . $orderid);
    $conn->conn()->query($sql) or die($conn->error);
}