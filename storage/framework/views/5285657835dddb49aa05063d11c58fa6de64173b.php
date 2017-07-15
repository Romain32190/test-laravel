<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
  <div class="ui container">
    <h1 class="center">Customer's groups</h1>
    <form class="ui form" action="/group" method="post">
      <?php echo e(csrf_field()); ?>

      <div class="field">
        <label>Name Group</label>
        <input type="text" name="name" placeholder="Name group">
      </div>
        <button class="ui button green" type="submit">Add group</button>
    </form>
  </div>
</body>
