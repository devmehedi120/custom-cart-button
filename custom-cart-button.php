<?php
/*
Plugin Name: Custom Cart Button
Description: Custom styles for the WooCommerce cart button.
Version: 1.1.3
Author: Mehedi Hasan
Author URI: https://www.fiverr.com/wpdevmehedi?public_mode=true
Text Domain: custom-cart-button
Domain Path: /languages
*/



function add_custom_cart_button_styles() {
    ?>
    <style>
   

/* new design */
.product-block.grid .title-wrapper {
    width: 100% !important;
}

.rtl .flex .ali-right {
    width: 100% !important;
}

.product-block.grid .add-cart {
    width: 100% !important;
}

@media (min-width: 1200px) {
    .product-block.grid .title-wrapper {
        display: inline-block !important;
    }
    .product-block.grid .add-cart > .added_to_cart,
.product-block.grid .add-cart > .button {
    justify-content:center !important;
    font-size:15px;
    font-weight:700 !important;
    
}
}

@media (max-width: 1024px) {
    .product-block.grid .add-cart {
        padding: 2px !important;
        position: inherit !important;
    }
    .product-block.grid .add-cart > .added_to_cart,
.product-block.grid .add-cart > .button{
    justify-content: center !important;
}
}

.product-block.grid .add-cart > .added_to_cart,
.product-block.grid .add-cart > .button {
    border-radius: 5px !important;
    -webkit-border-radius: 5px !important;
    -moz-border-radius: 5px !important;
    -ms-border-radius: 5px !important;
    -o-border-radius: 5px !important;
    overflow: hidden !important;
    line-height: 20px !important;
    border: 1px solid #e3e3e3 !important;
    color: #333 !important;
    background-color: #20533b00 !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    position: relative !important;
    display: flex !important;
    width: 100% !important;
    text-align: left !important;
    height: auto !important;
    padding: 4px 10px !important;
    transition: all 0.3s ease-in-out 0s !important;
    box-shadow: 0 3px 7px 0 rgba(91, 91, 91, 0.1) !important;
    justify-content: center !important;
    align-items: center !important;
    margin-top: 10px !important;
}

.product-block.grid .add-cart > .added_to_cart,
.product-block.grid .add-cart > .button:hover {
    background-color: #20533b !important;
    color:#ffff !important;
}
.product-block.grid .add-cart > .added_to_cart:not(.loading)::before, .product-block.grid .add-cart > .button:not(.loading)::before:hover {
   
    color: #fff !important;
   
}
.product-block.grid .add-cart > .added_to_cart:not(.loading)::before,
.product-block.grid .add-cart > .button:not(.loading)::before:hover{
    color: #fff !important;
}
.product-block.grid .add-cart > .added_to_cart:not(.loading)::before,
.product-block.grid .add-cart > .button:not(.loading)::before {
    width: 25px !important;
    height: 22px !important;
    transition: all 0.3s ease-in-out 0s !important;
    font-family: "bfres" !important;
    content: "\e915";
    position: initial !important;
    top: 0 !important;
    left: 0 !important;
    right: -7px !important;
    z-index: 2 !important;
    font-size: 16px !important;
    border-right: 0 solid transparent !important;
    border-bottom: 0 solid #20533b !important;
    transform: translateX(0) !important;
    text-align: right !important;
}
.product-block.grid .add-cart > .added_to_cart:hover:before, .product-block.grid .add-cart > .added_to_cart:active:before, .product-block.grid .add-cart > .button:hover:before, .product-block.grid .add-cart > .button:active:before {
    color: #fff !important;
}

.product-block.grid .add-cart > .added_to_cart:not(.loading)::before, .product-block.grid .add-cart > .button:not(.loading)::before {
        color: #333 ;
}
@media (max-width: 767px) {
    .product-block.grid .add-cart > .button:not(.loading)::before {
        width: unset !important;
        height: unset !important;
        font-size: 13px !important;
    }

    .product-block.grid .add-cart > .added_to_cart:not(.loading)::before,
    .product-block.grid .add-cart > .button:not(.loading)::before {
        width: unset !important;
        height: unset !important;
        font-size: 13px !important;
    }

    /* checkout responsive */
    .rtl .goal-checkout-step ul li {
    float: none !important;
}
.goal-checkout-step li .inner {
    position: relative;
    display: flex;
    justify-content: space-between;
    padding: 0px  18px;
}
.rtl .goal-checkout-step .step {
    left: 10%;
    right: auto;
}
.goal-checkout-step .inner-step {
    position: relative;
    z-index: 7;
    right: 10%;
}

.cart_item {
    margin: auto;
    padding: 20px;
    border-bottom: 1px solid #e3e3e3;
}
#add_payment_method table.cart td.actions .coupon, .woocommerce-cart table.cart td.actions .coupon, .woocommerce-checkout table.cart td.actions .coupon {
    border: 0;
    border-radius: unset;
    -webkit-border-radius: unset;
    -moz-border-radius: unset;
    -ms-border-radius: unset;
    -o-border-radius: unset;
}

#add_payment_method table.cart td.actions .coupon .input-text, .woocommerce-cart table.cart td.actions .coupon .input-text, .woocommerce-checkout table.cart td.actions .coupon .input-text {
    border: 1px solid #cfc8d8;
    margin-right:0 !important;
}
}

.goal-footer-mobile > ul {
       display: flex;
    justify-content: space-between;
    align-items: center;
}
.rtl .sliding-menu li a, .sliding-menu li .sliding-menu__nav {
    text-align: right;
}
.sliding-menu .sliding-menu__nav:before {
    float: left;
    margin-right: 1em;
    transform: rotate(180deg);
}

.sliding-menu .sliding-menu__back::before {
    transform: rotate(-2deg);
}
.woocommerce table.shop_table th {
    text-align: right !important;
}

 div.cart_totals_inner > table > tbody > tr.cart-subtotal > td,
 div.cart_totals_inner > table > tbody > tr.order-total > td
 {
    text-align:  left ;
 }
 
   </style>
   <?php
}

add_action('wp_head', 'add_custom_cart_button_styles');
?>
