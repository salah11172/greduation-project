<?php $__env->startSection("content"); ?>

<br>
<a style="margin-left: 700px" class="btn btn-success" href="<?php echo e(route('categorycreate')); ?>">add new category</a>

<?php if(Session::has("message")): ?>
<span class="alert alert-danger"><?php echo e(session("message")); ?></span>
<?php endif; ?>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">action</th>
        <th scope="col">action</th>
      </tr>
      <?php $__currentLoopData = $deriveddata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($item['id']); ?></th>
        <td><?php echo e($item['name']); ?></td>
        <td><a href="<?php echo e(route('admindeletecategory',["categoryid"=>$item['id']])); ?>">delete</a></td>
        <td><a href="<?php echo e(route('admineditcategry',["categoryid"=>$item['id']])); ?>">update</a></td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </thead>
    <tbody>
      
    </tbody>
  </table>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/admin/category/categorypageforadmin.blade.php ENDPATH**/ ?>