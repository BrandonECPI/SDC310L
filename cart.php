<?php include 'header.php'; ?>

<h2>Shopping Cart</h2>
<p class="notice">Under Construction: cart items will load from the database in Week 3.</p>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Cost</th>
        <th>Total</th>
    </tr>
    <tr>
        <td colspan="5">Your cart is empty.</td>
    </tr>
</table>

<div class="totals">
    <p>Subtotal: $0.00</p>
    <p>Tax (5%): $0.00</p>
    <p>Shipping &amp; Handling (10%): $0.00</p>
    <p><strong>Order Total: $0.00</strong></p>
</div>

<a class="button" href="index.php">Continue Shopping</a>
<a class="button" href="#">Check Out</a>

<?php include 'footer.php'; ?>