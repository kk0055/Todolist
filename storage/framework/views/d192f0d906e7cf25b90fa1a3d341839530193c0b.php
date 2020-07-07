

<?php $__env->startSection('content'); ?>
<h1>Todos</h1>

<?php if(count($todos) > 0 ): ?>
<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card">
<h2><a href="todo/<?php echo e($todo->id); ?>"><?php echo e($todo->title); ?> </a></h2>

<span class="badge badge-danger"><?php echo e($todo->due); ?> </span>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todolist\resources\views/index.blade.php ENDPATH**/ ?>