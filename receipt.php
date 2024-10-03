<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>
    <h1>RECEIPT</h1>

    <?php
    // Menu prices
    $prices = [
        'Orange Juice' => 25,
        'Cheese Fries'  => 50,
        'Fried Chicken'  => 80
    ];

    // Fetch form data
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    // Calculate total price
    $total_price = $prices[$order] * $quantity;

    // Calculate change
    $change = $cash - $total_price;

    // Display receipt details
    echo "<p>Total Price: $total_price</p>";
    echo "<p>You Paid: $cash</p>";
    echo "<p>CHANGE: $change</p>";

    // Display current date and time
    echo "<p>" . date("m/d/Y h:i:s A") . "</p>";
    ?>
</body>
</html>
