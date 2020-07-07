

<?php $__env->startSection('content'); ?>
<h1>Create new Todo</h1>
<form action="/todo" method="post">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
  <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="<?php echo e(old('title')); ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Content</label>
    <input type="text" name="content"  class="form-control"  id="content" placeholder="Enter content" value="<?php echo e(old('content')); ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Due</label>
    <input type="text" name="due"  class="form-control"  id="due"  placeholder="Enter Due" value="<?php echo e(old('due')); ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todolist\resources\views/create.blade.php ENDPATH**/ ?>