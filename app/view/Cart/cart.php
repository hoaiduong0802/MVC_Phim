<?php
// Retrieve parameters from the URL
$price = $_GET['price'] ?? '';
$img = $_GET['img'] ?? '';
$expiredAt = $_GET['expiredAt'] ?? '';
$userID = 1; // Assuming you have the user's ID from the session or authentication

// Default values if parameters are not provided
$price = $price ?: '0';
$img = $img ?: 'default.jpg';
$expiredAt = $expiredAt ?: 'N/A';

// Calculate the subtotal, discount, delivery fee, and total
$subtotal = $price;
$discountRate = 0.20;
$discount = $subtotal * $discountRate;
$deliveryFee = 15000;
$total = $subtotal - $discount + $deliveryFee;
?>

<section class="cart" style="padding-top: 90px;">
    <div class="container">
        <div class="cart__title">
            <h3 class="title">GIỎ HÀNG</h3>
        </div>
        <div class="cart__product">
            <div class="cart__product-list">
                <div class="wrap-item">
                    <div class="img">
                        <img src="img/<?php echo $img; ?>" alt="" />
                    </div>
                    <div class="product-info">
                        <p class="title">Movie Pass</p>
                        <p>Expiration Date: <span><?php echo $expiredAt; ?></span></p>
                        <p>Price: <span><?php echo number_format($price); ?> VND</span></p>
                    </div>
                    <div class="crud">
                        <button><i class="fa-solid fa-trash-can"></i></button>
                        <div class="available">
                            <button>-</button>
                            <span class="indexOfProduct">1</span>
                            <button>+</button>
                        </div>
                    </div>
                </div>
                <hr />
            </div>
            <div class="cart__product-checkout">
                <p class="title">Order Summary</p>
                <div class="payment">
                    <p>Subtotal <span><?php echo number_format($subtotal); ?> VND</span></p>
                    <p>Discount <span> (-<?php echo $discountRate * 100; ?>%)</span>
                        <span>-<?php echo number_format($discount); ?> VND</span>
                    </p>
                    <p>Delivery Fee: <span><?php echo number_format($deliveryFee); ?> VND</span></p>
                </div>
                <hr />
                <div class="total">
                    <p>Total <span><?php echo number_format($total); ?> VND</span></p>
                </div>
                <div class="promotion">
                    <div class="wrapper">
                        <i class="fa-solid fa-tag"></i>
                        <input type="text" placeholder="Add Promo Code" />
                    </div>
                    <button>Apply</button>
                </div>
                <div class="ctaCheckout">
                    <form action="index.php?page=checkout&action=checkout" method="POST">
                        <input type="hidden" name="userID" value="<?php echo $userID; ?>">
                        <input type="hidden" name="price" value="<?php echo $price; ?>">
                        <input type="hidden" name="img" value="<?php echo $img; ?>">
                        <input type="hidden" name="expiredAt" value="<?php echo $expiredAt; ?>">
                        <button type="submit">Go to Checkout <i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>