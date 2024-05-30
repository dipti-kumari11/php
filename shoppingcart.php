<?php
// Initialize the shopping cart as a multidimensional array
$cart = array();

// Function to add a product to the cart
function addToCart($productId, $productName, $productPrice, $quantity) {
    global $cart;
    
    if (isset($cart[$productId])) {
        // Product already exists in the cart, update the quantity
        $cart[$productId]['quantity'] += $quantity;
    } else {
        // Add the product to the cart
        $cart[$productId] = array(
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity,
        );
    }
}

// Function to update the quantity of a product in the cart
function updateQuantity($productId, $newQuantity) {
    global $cart;
    
    if (isset($cart[$productId])) {
        $cart[$productId]['quantity'] = $newQuantity;
    }
}

// Function to display the cart's contents
function displayCart() {
    global $cart;
    
    echo "<h2>Your Shopping Cart</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
    
    $totalPrice = 0;
    
    foreach ($cart as $productId => $productInfo) {
        $productName = $productInfo['name'];
        $productPrice = $productInfo['price'];
        $quantity = $productInfo['quantity'];
        $total = $productPrice * $quantity;
        
        echo "<tr>";
        echo "<td>$productName</td>";
        echo "<td>$productPrice</td>";
        echo "<td><input type='number' min='1' value='$quantity' onchange='updateQuantity($productId, this.value)'></td>";
        echo "<td>$total</td>";
        echo "</tr>";
        
        $totalPrice += $total;
    }
    
    echo "</table>";
    echo "<p>Total Price: $totalPrice</p>";
}
// Example usage:
addToCart(1, "Product A", 10.99, 2);
addToCart(2, "Product B", 5.99, 3);

displayCart();

// Example to update the quantity of a product in the cart
// updateQuantity(1, 5);

// Display the updated cart
// displayCart();
?>