

<?php $__env->startSection('title'); ?>
    Imtahan Nəticəsi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dərs</h4>
          <div class="form-group">
            <label for="exampleInputName1"> Bal </label>
            <input type="text" name="title" value="<?php echo e($exam->price); ?>" class="form-control" id="exampleInputName1" >
          </div>
          <div class="form-group">
            <label for="exampleInputName2"> Dərs </label>
            <?php if($exam->lesson_id==0): ?>
            <input type="text"  value="Dərs silinib" class="form-control" id="exampleInputName2">
            <?php else: ?>
            <input type="text" value="<?php echo e($exam->getLesson->name); ?>" class="form-control" id="exampleInputName2">
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="exampleInputName2"> Tələbə </label>
            <?php if($exam->user_id==0): ?>
            <input type="text" name="title" value="Tələbə silinib" class="form-control" id="exampleInputName2">
            <?php else: ?>
            <input type="text" name="title" value="<?php echo e($exam->getUser->name); ?>" class="form-control" id="exampleInputName2">
            <?php endif; ?>
          </div>
          <button class="btn btn-dark"><a href="<?php echo e(route('admin.exam.index')); ?>">Geri</a></button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aviasiya\resources\views/admin/pages/exams/show.blade.php ENDPATH**/ ?>