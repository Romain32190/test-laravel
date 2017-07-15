<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
  <div class="ui container">
    <h1 class="center">Customer's register</h1>
    <form class="ui form" action="/customer" method="post">
      <?php echo e(csrf_field()); ?>

      <div class="field">
        <label>First Name</label>
        <input type="text" name="first_name" placeholder="First Name">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input type="text" name="last_name" placeholder="Last Name">
      </div>
      <div class="field">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email">
      </div>
      <button class="ui button green" type="submit">Submit</button>
    </form>
  </div>
</body>
