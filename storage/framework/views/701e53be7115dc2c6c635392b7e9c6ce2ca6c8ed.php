<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Customers</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

      <div class="ui stackable menu">
        <div class="item">
          <img src="http://www.freeiconspng.com/uploads/customers-icon-29.png">
      </div>
      <a href="/customer" class="item">Add Customer</a>
      <a href="/customers" class="item">Customers</a>
      <a href="/product" class="item">Add Products</a>
      <a href="/products" class="item">Products</a>
      <a href="/group" class="item">Add Groups</a>
      <a href="/groups" class="item">Groups</a>
     <div class="right menu">
               <a href="<?php echo e(route('logout')); ?>" class="item"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>

               <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                   <?php echo e(csrf_field()); ?>

               </form>
       <a href="/customer" class="item"><i class="home large icon"></i></a>

    </div>
  </div>
    </header>
