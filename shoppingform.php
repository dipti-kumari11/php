<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Application</title>
</head>
<body>
    <h2>Add Items to Your Shopping List</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="itemID">Item ID:</label>
        <input type="text" name="itemID" required><br><br>
        
        <label for="itemName">Item Name:</label>
        <input type="text" name="itemName" required><br><br>
        
        <label for="itemQuantity">Quantity:</label>
        <input type="number" name="itemQuantity" required><br><br>
        
        <input type="submit" value="Add Item">
    </form>

    <?php
    // Initialize an empty array to store items
    $shoppingList = [];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve item details from the form
        $itemID = $_POST["itemID"];
        $itemName = $_POST["itemName"];
        $itemQuantity = $_POST["itemQuantity"];

        // Create an associative array to represent the item
        $item = [
            "itemID" => $itemID,
            "itemName" => $itemName,
            "itemQuantity" => $itemQuantity
        ];

        // Add the item to the shopping list
        $shoppingList[] = $item;
    }
 // Display the list of items in a table
 echo "<h2>Your Shopping List:</h2>";
 echo "<table border='1'>";
 echo "<tr><th>Item ID</th><th>Item Name</th><th>Quantity</th></tr>";
 foreach ($shoppingList as $item) {
     echo "<tr>";
     echo "<td>" . $item["itemID"] . "</td>";
     echo "<td>" . $item["itemName"] . "</td>";
     echo "<td>" . $item["itemQuantity"] . "</td>";
     echo "</tr>";
 }
 echo "</table>";
 ?>

</body>
</html>