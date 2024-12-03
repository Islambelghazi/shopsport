<?php
// Include the database connection file
include('db.php');

// Query to fetch orders from the database
$sql = "SELECT * FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>
    <link rel="stylesheet" href="css/admin.css"> 
</head>
<body>
    <header>
        <a href="admin.php" class="logo">Order Management</a>
        <nav>
            <!-- Additional links can go here -->
        </nav>
    </header>

    <main>
        <h2>Customer Orders</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Order Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display orders
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['price'] . " DA</td>";
                        echo "<td>" . $row['order_date'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No orders yet.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>© 2024 | EA SPORT</p>
    </footer>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
