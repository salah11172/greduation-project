<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<div class="text-center">
       
         
        </div>
        <table class="table mt-4">
            <thead>

           
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Comment</th>
                <th scope="col">options</th>
              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $commentCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($comment->id); ?></td>
                  <td><?php echo e($comment->name); ?></td>
                  <td><?php echo e($comment->email); ?></td>
                  <td><?php echo e($comment->phone); ?></td>
                  <td><?php echo e($comment->comment); ?></td>
                  <td><a href="<?php echo e(route('deletecoment',['comentid'=>$comment['id']])); ?>">delete</a></td>
                 
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>


          <span style="margin-bottom: 300px !important;">
          <?php echo e($commentCollection->Links()); ?>

          </span>

          <style>
          .w-5{
            margin-bottom: 300px !important;
            display: none;
          }
          </style>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/admin/comment/index.blade.php ENDPATH**/ ?>