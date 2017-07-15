<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
      <div class="container ui">
        <table class="ui selectable inverted table">
          <thead>
            <th>Id</th>
            <th>Name Group</th>
            <th>Delete Group</th>
          </thead>
          <tbody>
            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($group->id); ?></td>
              <td><?php echo e($group->name); ?></td>
              <td>
                <a href="group/delete/<?php echo e($group->id); ?>">
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
