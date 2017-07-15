<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
      <div class="container ui">
        <table class="ui selectable inverted table">
          <thead>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>More details</th>
            <th>Delete</th>
          </thead>
          <tbody>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($customer->id); ?></td>
              <td><?php echo e($customer->first_name); ?></td>
              <td><?php echo e($customer->last_name); ?></td>
              <td>
                <a href="customer/<?php echo e($customer->id); ?>">
                  <div class="ui animated button" tabindex="0">
                    <div class="visible content">Details</div>
                    <div class="hidden content">
                      <i class="right arrow icon"></i>
                    </div>
                  </div>
                </a>
              </td>
              <td>
                <a href="customer/delete/<?php echo e($customer->id); ?>">
                  <div class="ui animated red button" tabindex="0">
                    <div class="visible content">Delete</div>
                    <div class="hidden content">
                      <i class="trash icon"></i>
                    </div>
                  </div>
                </div>
              </a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

      </div>
    </body>
