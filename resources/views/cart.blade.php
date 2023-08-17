@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
<!-- Include the FoxyCart JavaScript library -->
  <script src="https://cdn.foxycart.com/outdclub/loader.js" async defer></script>
  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <div class="hero-banner">
        <h1>Cart Test</h1>
      </div>
<div class="container">



   Certainly! Here's an updated example where the "Add to Cart" button submits the product to the cart with the appropriate product ID and cost values. The form action URL is set to "https://outdclub.foxycart.com," and the product ID is passed in the name attribute, while the cost is passed in the value attribute.


  <!-- Your website content here -->

  <!-- Product 1 -->
  <div class="product">
    <h2>Product 1</h2>
    <p>Price: $9.99</p>
    <button class="addToCartBtn" data-product-id="1" data-product-cost="9.99">Add to Cart</button>
  </div>

  <!-- Product 2 -->
  <div class="product">
    <h2>Product 2</h2>
    <p>Price: $19.99</p>
    <button class="addToCartBtn" data-product-id="2" data-product-cost="19.99">Add to Cart</button>
  </div>

  <!-- The modal -->
  <div id="myModal" style="display: none;">
    <p>Product added to cart successfully!</p>
    <button id="checkoutBtn">Go to Checkout</button>
    <button id="continueShoppingBtn">Continue Shopping</button>
  </div>

  <!-- JavaScript to handle the cart functionality and modal -->
  <script>
    $(document).ready(function() {
      // Add to Cart button click event
      $(".addToCartBtn").click(function() {
        var productId = $(this).data("product-id");
        var productCost = $(this).data("product-cost");
        addToCart(productId, productCost);
      });

      // Add product to cart using AJAX
      function addToCart(productId, productCost) {
        $.ajax({
          type: "POST",
          url: "https://outdclub.foxycart.com",
          data: {
            name: productId,
            price: productCost,
            cart: "add",
            quantity: 1
          },
          success: function(response) {
            showModal();
          },
          error: function(error) {
            console.log(error);
          }
        });
      }

      // Show modal
      function showModal() {
        $("#myModal").show();
      }

      // Close modal and continue shopping
      $("#continueShoppingBtn").click(function() {
        closeModal();
      });

      // Navigate to checkout
      $("#checkoutBtn").click(function() {
        navigateToCheckout();
      });

      // Close modal
      function closeModal() {
        $("#myModal").hide();
      }

      // Navigate to checkout
      function navigateToCheckout() {
        // Redirect to FoxyCart checkout page
        window.location.href = "https://YOUR_STORE_NAME.foxycart.com/cart";
      }
    });
  </script>


   In this updated example, the "Add to Cart" button includes two `data` attributes: `data-product-id` and `data-product-cost`. These attributes hold the product ID and cost values, respectively.

   When the button is clicked, the `addToCart()` function is called with the corresponding product ID and cost. This function dynamically creates a form with the appropriate input fields for product ID and cost. The form is then appended to the body of the page and submitted, effectively adding the product to the cart.

   Please remember to replace "YOUR_STORE_NAME" with your actual FoxyCart store name and adjust the form's action URL accordingly.






</div>
@stop
