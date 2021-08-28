<?php $__env->startSection('content'); ?>
    
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
       
        <th scope="col">action</th>


      </tr>
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($item['id']); ?></th>
        <td><?php echo e($item['name']); ?></td>
        <td><?php echo e($item['email']); ?></td>
        <td><?php echo e($item['phone']); ?></td>
        <td><a class="btn btn btn-danger" href="<?php echo e(route('admindeleteuser',["userid"=>$item['id']])); ?>">delete</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </thead>
    <tbody>
      
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/admin/user/showalluserforaadmin.blade.php ENDPATH**/ ?>