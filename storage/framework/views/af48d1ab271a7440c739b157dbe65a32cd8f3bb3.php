

<?php $__env->startSection('content'); ?>
<div id="content">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">Home</li>
	  </ol>
	<section>
		<div class="row col-lg-12">
			<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="card col-lg-5 m-3">
				  <div class="row">
				    <div class="col-md-4">
				      <a href="<?php echo e(route('test.producto',$producto['path'])); ?>"><img src="<?php echo e($producto['image']); ?>" class="image"></a>
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title"><?php echo e($producto['title']); ?></h5>
				        <p class="card-text"><?php echo e($producto['shortDescription']); ?></p>
				        <p class="card-text"><small class="text-muted"><a href="<?php echo e(route('test.producto',$producto['path'])); ?>">Leer mas...</a></small></p>
				      </div>
				    </div>
				  </div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<hr>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\test\resources\views/home.blade.php ENDPATH**/ ?>