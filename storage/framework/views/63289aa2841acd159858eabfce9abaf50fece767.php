

<?php $__env->startSection('content'); ?>
<a href="/" class="btn btn-secondary mt-2" >Go back</a>
<h2><?php echo e($todo->title); ?> </h2>
<div class="badge badge-danger"><?php echo e($todo->due); ?></div>
<hr>
<p><?php echo e($todo->content); ?> </p>
<form action="/todo/<?php echo e($todo->id); ?>" method="post">
  <?php echo csrf_field(); ?>
  <?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-info mt-2 float-right">Delete</button>
</form>
<a href="/todo/<?php echo e($todo->id); ?>/edit" class="btn btn-primary mt-2" >Edit</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todolist\resources\views/show.blade.php ENDPATH**/ ?>