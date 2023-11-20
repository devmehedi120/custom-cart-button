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
}

@media (max-width: 1024px) {
    .product-block.grid .add-cart {
        padding: 2px !important;
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
    overflow: hidden !important;
    line-height: 20px !important;
    border: 1px solid #e3e3e3 !important;
    color: #282828 !important;
    background-color: #20533b00 !important;
    font-size: 12px !important;
    font-weight: 500 !important;
    position: relative !important;
    display: flex !important;
    width: 100% !important;
    text-align: left !important;
    height: auto !important;
    padding: 4px 10px !important;
    transition: all 0.3s ease-in-out 0s !important;
    box-shadow: 0 3px 7px 0 rgba(91, 91, 91, 0.1) !important;
    justify-content: space-between !important;
    align-items: center !important;
    margin-top: 10px !important;
}

.product-block.grid .add-cart > .added_to_cart,
.product-block.grid .add-cart > .button:hover {
    background-color: #20533b11 !important;
}

.product-block.grid .add-cart > .added_to_cart:not(.loading)::before,
.product-block.grid .add-cart > .button:not(.loading)::before {
    width: 25px !important;
    height: 22px !important;
    transition: all 0.3s ease-in-out 0s !important;
    font-family: "bfres" !important;
    content: "\e915" !important;
    color: #333 !important;
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
