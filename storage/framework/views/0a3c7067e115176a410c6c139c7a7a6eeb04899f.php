<?php $__env->startSection("content"); ?>
<div style="padding: 8rem 0 10rem 0;">
    <a style="margin-left: 650px; margin-bottom:60px;" class="btn btn-success" href="<?php echo e(route('add_slider')); ?>">Add New Image Slider</a>
    <table class="table" style="width:60rem; margin:auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">remove</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $showdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($slider->id); ?></th>
                <td><?php echo e($slider->image); ?></td>
                <td><a class="btn btn-danger" href="<?php echo e(route('deleteimg', ['imgid'=>$slider->id])); ?>">Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/slidertable.blade.php ENDPATH**/ ?>