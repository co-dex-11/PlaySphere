<?php
require 'staff/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $futsal_id = $_POST['futsal_id'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $customer_id = 53;

    $stmt = $pdo->prepare("
        SELECT * FROM bookings 
        WHERE futsal_id = ? 
        AND (
            (start_time <= ? AND end_time > ?) OR
            (start_time < ? AND end_time >= ?)
        )
    ");
    $stmt->execute([$futsal_id, $start_time, $start_time, $end_time, $end_time]);
    if ($stmt->rowCount() > 0) {
        echo "This futsal is no longer available for the selected time.";
        exit;
    }

    // Create the booking
    $stmt = $pdo->prepare("
        INSERT INTO bookings (futsal_id, customer_id, start_time, end_time, status, payment_status)
        VALUES (?, ?, ?, ?, 'pending', 'unpaid')
    ");
    $stmt->execute([$futsal_id, $customer_id, $start_time, $end_time]);

    $booking_id = $pdo->lastInsertId();

    // Redirect to payment page
    header("Location: payment_page.php?booking_id=$booking_id");
    exit;
}
?>
