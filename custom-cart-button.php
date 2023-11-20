<?php
/*
Plugin Name: Custom Cart Button
Description: Custom styles for the WooCommerce cart button.
Version: 1.2
Author: Mehedi Hasan
Author URI: https://www.fiverr.com/wpdevmehedi?public_mode=true
Text Domain: custom-cart-button
Domain Path: /languages
*/



function add_custom_cart_button_styles() {
    ?>
    <style>
   

/* main design */
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
}

@media (max-width: 1024px) {
    .product-block.grid .add-cart {
        padding: 2px;
        position: inherit !important;
    }
}

.product-block.grid .add-cart > .added_to_cart,
.product-block.grid .add-cart > .button {
    border-radius: 5px !important;
    -webkit-border-radius: 5px !important;
    -moz-border-radius: 50% !important;
    -ms-border-radius: 50% !important;
    -o-border-radius: 50% !important;
    overflow: hidden;
    line-height: 20px !important;
    border: 1px solid #e3e3e3;
    color: #282828;
    background-color: #20533b00;
    font-size: 12px !important;
    font-weight: 500;
    position: relative;
    display: flex;
    width: 100% !important;
    text-align: left !important;
    height: auto;
    padding: 4px 10px;
    transition: all 0.3s ease-in-out 0s;
    box-shadow: 0 3px 7px 0 rgba(91, 91, 91, 0.1);
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

.product-block.grid .add-cart > .added_to_cart,
.product-block.grid .add-cart > .button:hover {
    background-color: #20533b11;
}

.product-block.grid .add-cart > .added_to_cart:not(.loading)::before,
.product-block.grid .add-cart > .button:not(.loading)::before {
    width: 25px;
    height: 22px;
    transition: all 0.3s ease-in-out 0s;
    font-family: "bfres";
    content: "\e915";
    color: #333;
    position: initial;
    top: 0;
    left: 0;
    right: -7px;
    z-index: 2;
    font-size: 16px;
    border-right: 0 solid transparent;
    border-bottom: 0 solid #20533b;
    transform: translateX(0);
    text-align: right;
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
}

       
   </style>
   <?php
}

add_action('wp_head', 'add_custom_cart_button_styles');
?>
