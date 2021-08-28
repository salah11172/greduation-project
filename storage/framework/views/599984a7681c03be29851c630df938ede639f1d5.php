<?php $__env->startSection("content"); ?>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">address</th>
        <th scope="col">firstname</th>
        <th scope="col">lastname</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>
        <th scope="col">city</th>
        <th scope="col">order-date</th>
        <th scope="col">user_id</th>
        <th scope="col">status now</th>
        <th scope="col">status </th>



      </tr>
      <?php $__currentLoopData = $delivereddata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
      
      <tr>
        <th scope="row"><?php echo e($order['id']); ?></th>
        <td><?php echo e($order['address']); ?></td>
        <td><?php echo e($order['firstname']); ?></td>
        <td><?php echo e($order['lastname']); ?></td>
        <td><?php echo e($order['phone']); ?></td>
        <td><?php echo e($order['email']); ?></td>
        <td><?php echo e($order['city']); ?></td>
        <td><?php echo e($order['order-date']); ?></td>
        <td><?php echo e($order['user_id']); ?></td>
        <td><?php echo e($order['status']); ?></td>
        <td><form method="POST" action="<?php echo e(route('updatestatus',["orderid"=>$order['id']])); ?>">
            <?php echo csrf_field(); ?>
            <select name="status">
            <option value="pending">pending</option>
            <option value="dispatched">dispatched</option>
            <option value="processed">processed</option>
            <option value="shipped">shipped</option>
            <option value="delivered">delivered</option>
          </select>
          <input class="btn alert-dark"  type="submit" value="update">
        </form></td>
         


      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </thead>
    <tbody>
      
    </tbody>
  </table>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/ordertrackforadmin/showallorderforadmin.blade.php ENDPATH**/ ?>