

<?php $__env->startSection('content'); ?>
<h1>Edit Todo</h1>
<form action="/todo/<?php echo e($todo->id); ?>" method="post">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
  <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="<?php echo e($todo->title); ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Content</label>
    <input type="text" name="content"  class="form-control"  id="content" placeholder="Enter content" value="<?php echo e($todo->content); ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Due</label>
    <input type="text" name="due"  class="form-control"  id="due"  placeholder="Enter Due" value="<?php echo e($todo->due); ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todolist\resources\views/edit.blade.php ENDPATH**/ ?>