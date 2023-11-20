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
     .product-block.grid .add-cart {
     padding: 5px 3px;
     position: inherit;
}
 .product-block.grid .add-cart > .added_to_cart, .product-block.grid .add-cart > .button {
     border-radius: 5px !important;
     -webkit-border-radius: 5px !important;
     -moz-border-radius: 5px !important;
     -ms-border-radius: 5px !important;
     -o-border-radius: 5px !important;
     line-height: 20px !important
     border: 1px solid #e3e3e3;
     color: #fff;
     background-color: #20533b;
     font-size: 12px !important;
     font-weight: 500;
     position: relative;
     display: inline-block;
     width: 100% !important;
     height: auto !important;
     text-align: left !important;
     padding: 6px 10px !important;
     transition: all 0.3s ease-in-out 0s;
     box-shadow: 0 5px 10px 0 rgba(91, 91, 91, 0.1);
}
 .product-block.grid .add-cart > .added_to_cart:not(.loading)::before, .product-block.grid .add-cart > .button:not(.loading)::before {
     content: "" !important;
}
 .product-block.grid .add-cart > .added_to_cart:not(.loading)::before, .product-block.grid .add-cart > .button:not(.loading)::after {
     width: 48px;
     height: 40px;
     transition: all 0.3s ease-in-out 0s;
     content: " ";
     position: absolute;
     top: 8px;
     left: 0px;
     right: -25px;
     background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjAvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvVFIvMjAwMS9SRUMtU1ZHLTIwMDEwOTA0L0RURC9zdmcxMC5kdGQiPg0KPCEtLSBVcGxvYWRlZCB0bzogU1ZHIFJlcG8sIHd3dy5zdmdyZXBvLmNvbSwgR2VuZXJhdG9yOiBTVkcgUmVwbyBNaXhlciBUb29scyAtLT4NCjxzdmcgdmVyc2lvbj0iMS4wIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgDQoJIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE1cHgiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNjQgNjQiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHBvaW50cz0iNDQsMTggNTQsMTggNTQsNjMgMTAsNjMgMTAsMTggMjAsMTggIi8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTIyLDI0VjExYzAtNS41MjMsNC40NzctMTAsMTAtMTBzMTAsNC40NzcsMTAsMTB2MTMNCgkiLz4NCjwvc3ZnPg==);
     background-repeat: no-repeat;
}
 .product-block.grid .add-cart > .added_to_cart.product_type_grouped:before, .product-block.grid .add-cart > .added_to_cart.product_type_external:before, .product-block.grid .add-cart > .added_to_cart.product_type_variable:before, .product-block.grid .add-cart > .button.product_type_grouped:before, .product-block.grid .add-cart > .button.product_type_external:before, .product-block.grid .add-cart > .button.product_type_variable:before {
     content: "" !important;
}
 @media (max-width:767px){
     .product-block.grid .add-cart > .added_to_cart, .product-block.grid .add-cart > .button {
         width: 100% !important;
         height: 100% !important;
    }
}
.product-block.grid .title-wrapper {
    display: inherit !important;
}
@media (min-width: 1200px){
.product-block.grid .title-wrapper {
    display: inherit !important;
}
}
media (max-width: 1024px){
.product-block.grid .add-cart {
    padding: 5px;
    position: inherit !important;
   }
}


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
@media (min-width: 1200px){
.product-block.grid .title-wrapper {
    display: inline-block;
}
}
@media (max-width: 1024px){
.product-block.grid .add-cart {
    padding: 2px;
    position: inherit;
}
}

.product-block.grid .add-cart > .added_to_cart, .product-block.grid .add-cart > .button {
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    overflow: hidden;
    line-height: 20px;
    border: 1px solid #e3e3e3;
    color: #282828;
    background-color: #20533b00;
    font-size: 12px;
    font-weight: 500;
    position: relative;
    display: flex;
    width: 100%;
    text-align: left;
    height: auto;
    padding: 4px 10px;
    transition: all 0.3s ease-in-out 0s;
    box-shadow: 0 3px 7px 0 rgba(91, 91, 91, 0.1);
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}
.product-block.grid .add-cart > .added_to_cart, .product-block.grid .add-cart > .button:hover{
    background-color: #20533b11;
}

.product-block.grid .add-cart > .added_to_cart:not(.loading)::before, .product-block.grid .add-cart > .button:not(.loading)::before {
    width: 25px;
    height: 22px;
    transition: all 0.3s ease-in-out 0s;
    font-family: "bfres";
    content: "\e915";
    color: #333;
     position:initial; 
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

@media(max-width:767px){
    .product-block.grid .add-cart > .button:not(.loading)::before {
    width: unset !important;
    height: unset !important;
    font-size: 13px;
}

.product-block.grid .add-cart > .added_to_cart:not(.loading)::before, .product-block.grid .add-cart > .button:not(.loading)::before {
    width: unset !important;
    height: unset !important;
    font-size: 13px;
}
}
       
   </style>
   <?php
}

add_action('wp_head', 'add_custom_cart_button_styles');
?>
