<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

<?php echo $__env->make('partial.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

<div class="main" id="main" >
	</nav>
	<?php echo $__env->yieldContent('content'); ?>
</div>

<!-- Footer -->
<footer class="bg-dark navbar fixed-bottom footer" style="background-color:blue">
		<span class="col-lg-12 col-md-12 col-sm-12"><?php echo e(config('app.name')); ?> - 2021 Version 1.0.0</span>
</footer>
<!-- Footer -->
</body>
</html>
<?php /**PATH C:\laragon\www\test\resources\views/layout.blade.php ENDPATH**/ ?>