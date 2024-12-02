<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        header {
            background-color: #343a40;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 2rem auto;
        }
        .food-category {
            margin-bottom: 2rem;
        }
        .food-category h2 {
            border-bottom: 2px solid #343a40;
            padding-bottom: 0.5rem;
        }
        .food-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 1rem;
            background-color: white;
        }
        .food-item img {
            width: 100px;
            height: 100px;
            border-radius: 5px;
        }
        .food-item-details {
            flex: 1;
            margin-left: 1rem;
        }
        .food-item-details h3 {
            margin: 0;
        }
        .food-item-details p {
            margin: 0.5rem 0;
        }
        .food-item-price {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .add-to-cart {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }
        .cart {
            margin-top: 2rem;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
        }
        .cart h2 {
            border-bottom: 2px solid #343a40;
            padding-bottom: 0.5rem;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #ddd;
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .cart-item-details {
            flex: 1;
            margin-left: 1rem;
        }
        .cart-item-details h3 {
            margin: 0;
        }
        .cart-item-details p {
            margin: 0.5rem 0;
        }
        .cart-item-price {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .checkout {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1rem;
        }
  </style>
 </head>
 <body>
  <header>
   <h1>
    SMVITM CANTEEN
   </h1>
  </header>
  <div class="container">
   <!-- Menu Access -->
   <div class="food-category">
    <h2>
     Snacks
    </h2>
    <div class="food-item">
     <img alt="A plate of crispy vegetable puffs" height="100" src="https://storage.googleapis.com/a1aa/image/Jm0k5zYotSa4IZSKeLbHAJexgFRkGJlzYiMYXGmwYf4tFfRPB.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Veg Puffs
      </h3>
      <p>
       Crispy pastry filled with spiced vegetables
      </p>
     </div>
     <div class="food-item-price">
      ₹15
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A plate of golden brown samosas" height="100" src="https://storage.googleapis.com/a1aa/image/HE7cOQkEQTLlDteJORcKeEqizZcVOFhVC6tsGabJvVmGjfonA.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Veg Samosa
      </h3>
      <p>
       Golden brown pastry filled with spiced potatoes and peas
      </p>
     </div>
     <div class="food-item-price">
      ₹12
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A veg burger with lettuce, tomato, and cheese" height="100" src="https://storage.googleapis.com/a1aa/image/w23XoLwRhoKcEl7XyZc8PpWqshf4nFy32E5Ybcofaip7ifonA.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Veg Burger
      </h3>
      <p>
       Burger with lettuce, tomato, and cheese
      </p>
     </div>
     <div class="food-item-price">
      ₹15
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A veg sandwich with lettuce, tomato, and cucumber" height="100" src="https://storage.googleapis.com/a1aa/image/YKvJGgKTRJoiMF5sgmdKDGe1b3qygSdSpu9muGQ20AAgxP6JA.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Veg Sandwich
      </h3>
      <p>
       Sandwich with lettuce, tomato, and cucumber
      </p>
     </div>
     <div class="food-item-price">
      ₹15
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A plate of bread pakoras" height="100" src="https://storage.googleapis.com/a1aa/image/ZHGR1AH6XZpuM5R2JDqb3gPdXQn2Wpht1VKwE2dXOxky4H9E.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Bread Pakora
      </h3>
      <p>
       Bread slices dipped in gram flour batter and fried
      </p>
     </div>
     <div class="food-item-price">
      ₹20
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A plate of vadapav" height="100" src="https://storage.googleapis.com/a1aa/image/UqrPEYMsgupPHZ7ATnrgWxlISCkZ7AzuLKVP201d2XGu4H9E.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Vadapav
      </h3>
      <p>
       Spicy potato filling in a bun
      </p>
     </div>
     <div class="food-item-price">
      ₹12
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
   </div>
   <div class="food-category">
    <h2>
     Main Course
    </h2>
    <div class="food-item">
     <img alt="A plate of veg south indian thali" height="100" src="https://storage.googleapis.com/a1aa/image/9XC3vE6DTsIsGFgooK0GMZ8ln8WYP8GlGmJDe2LweML5ifonA.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Veg South Indian Thali
      </h3>
      <p>
       A complete meal with rice, sambar, rasam, and vegetables
      </p>
     </div>
     <div class="food-item-price">
      ₹40
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A plate of veg fried rice combo" height="100" src="https://storage.googleapis.com/a1aa/image/G0VT7GtVgdZXJllRKisPWMy1ZBgdCffZ9ZXtZqWwCreeMejeE.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Veg Fried Rice Combo
      </h3>
      <p>
       Fried rice with vegetables and a side dish
      </p>
     </div>
     <div class="food-item-price">
      ₹45
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A plate of veg noodles combo" height="100" src="https://storage.googleapis.com/a1aa/image/NSR4lCyD2J7AFF5y7T9tAzNRHLVNkfw3vfcpi0MalVW9ifonA.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Veg Noodles Combo
      </h3>
      <p>
       Noodles with vegetables and a side dish
      </p>
     </div>
     <div class="food-item-price">
      ₹45
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A plate of jeera rice combo" height="100" src="https://storage.googleapis.com/a1aa/image/rKYeuv0Dw5W0VKYTvrkZflEtAHcEJ8v4D4JohSs8bMfeLejeE.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Jeera Rice Combo
      </h3>
      <p>
       Jeera rice with a side dish
      </p>
     </div>
     <div class="food-item-price">
      ₹45
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A plate of mini thali" height="100" src="https://storage.googleapis.com/a1aa/image/4k0cCumOndKNBNkqEb7C4f4W1VGmScFsPVlrXoVE7l1mxP6JA.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Mini Thali
      </h3>
      <p>
       A smaller version of the thali with fewer items
      </p>
     </div>
     <div class="food-item-price">
      ₹40
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A plate of pulav" height="100" src="https://storage.googleapis.com/a1aa/image/zEnyLL3HkloWNpCfNua6G9wAfB87zLvgNj0fqt0tygbHGfRPB.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Pulav
      </h3>
      <p>
       Spiced rice with vegetables
      </p>
     </div>
     <div class="food-item-price">
      ₹30
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
   </div>
   <div class="food-category">
    <h2>
     Juices
    </h2>
    <div class="food-item">
     <img alt="A glass of butterscotch juice" height="100" src="https://storage.googleapis.com/a1aa/image/DNUY2tHdBipILplcODygiStgfcSZzvIF6ugVsLuQMBxjxP6JA.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Butterscotch Juice
      </h3>
      <p>
       Refreshing butterscotch flavored juice
      </p>
     </div>
     <div class="food-item-price">
      ₹15
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A glass of mango juice" height="100" src="https://storage.googleapis.com/a1aa/image/SQdLqp8kw57fcio1UU4SQpJlDEwpe9zfeRDSKmzmoKylMejeE.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Mango Juice
      </h3>
      <p>
       Freshly blended mango juice
      </p>
     </div>
     <div class="food-item-price">
      ₹15
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
   </div>
   <div class="food-category">
    <h2>
     Soft Drinks
    </h2>
    <div class="food-item">
     <img alt="A bottle of Thums Up" height="100" src="https://storage.googleapis.com/a1aa/image/r1Q3wQY0p2LDDleWH9e4hm6VYdkZuhCZPFcCJsJfzbBFGfRPB.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Thums Up
      </h3>
      <p>
       Refreshing cola drink
      </p>
     </div>
     <div class="food-item-price">
      ₹10
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
    <div class="food-item">
     <img alt="A bottle of Coke" height="100" src="https://storage.googleapis.com/a1aa/image/bI4ZWcJAtMp8MVACxEyCCuhfBJ6PKRfNwImrVRUMigCMjfonA.jpg" width="100"/>
     <div class="food-item-details">
      <h3>
       Coke
      </h3>
      <p>
       Refreshing cola drink
      </p>
     </div>
     <div class="food-item-price">
      ₹10
     </div>
     <button class="add-to-cart">
      Add to Cart
     </button>
    </div>
   </div>
   <!-- Cart -->
   <div class="cart">
    <h2>
     Cart
    </h2>
    <div class="cart-item">
     <div class="cart-item-details">
      <h3>
       Veg Puffs
      </h3>
      <p>
       Quantity: 2
      </p>
     </div>
     <div class="cart-item-price">
      ₹60
     </div>
    </div>
    <div class="cart-item">
     <div class="cart-item-details">
      <h3>
       Mango Juice
      </h3>
      <p>
       Quantity: 1
      </p>
     </div>
     <div class="cart-item-price">
      ₹50
     </div>
    </div>
    <button class="checkout">
     Proceed to Checkout
    </button>
   </div>
  </div>
  <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
 </body>
</html>
</body>
</html>
