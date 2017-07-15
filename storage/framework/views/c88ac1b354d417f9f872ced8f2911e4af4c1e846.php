<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
      <div class="container ui">
        <table class="ui selectable inverted table">
          <thead>
            <th>Id</th>
            <th>Name product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>More details</th>
            <th>Delete</th>
          </thead>
          <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($product->id); ?></td>
              <td><?php echo e($product->name); ?></td>
              <td><?php echo e($product->quantity); ?></td>
              <td><?php echo e($product->price); ?></td>
              <td>
                <a href="product/<?php echo e($product->id); ?>">
                  <div class="ui animated button" tabindex="0">
                    <div class="visible content">Details</div>
                    <div class="hidden content">
                      <i class="right arrow icon"></i>
                    </div>
                  </div>
                </a>
              </td>
              <td>

                <a href="product/delete/<?php echo e(product->id); ?>">
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
