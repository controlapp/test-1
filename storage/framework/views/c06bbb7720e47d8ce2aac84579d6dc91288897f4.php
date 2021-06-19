

<?php $__env->startSection('content'); ?>
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item" aria-current="page">Productos</li>
	    <li class="breadcrumb-item active" aria-current="page"><?php echo e($producto['path']); ?></li>
	  </ol>
	<div class="card mb-3" >
		<div style="text-align: center;" class="col-lg-12">
	  		<img src="<?php echo e($producto['image']); ?>" class="card-img-top image-grande" >
	  	</div>
	  <div class="card-body">
	    <h5 class="card-title"><?php echo e($producto['title']); ?> </h5>
	    <p class="card-text"><?php echo e($producto['longDescription']); ?></p>
	    <p class="card-text"><small class="text-muted"></small></p>
	  </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\test\resources\views/productos.blade.php ENDPATH**/ ?>