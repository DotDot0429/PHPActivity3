<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Menu</h1>
    <table border="1">
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Orange Juice</td>
            <td>25</td>
        </tr>
        <tr>
            <td>Cheese Fries</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fried Chicken</td>
            <td>80</td>
        </tr>
    </table>

    <form action="receipt.php" method="POST">
        <label for="order">Select an order:</label>
        <select name="order" id="order">
            <option value="Orange Juice">Orange Juice</option>
            <option value="Cheese Fries">Cheese Fries</option>
            <option value="Fried Chicken">Fried Chicken</option>
        </select>
        <br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="1" min="1" required>
        <br><br>

        <label for="cash">Cash:</label>
        <input type="number" name="cash" id="cash" value="1" min="1" required>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
