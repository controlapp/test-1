<div class="sidebar bg-dark ">
	<div class="logo">
		<div class="title">
			<span class="">Prueba</span>
		</div>
	</div>
	<div class="profile clearfix">
	    <div class="row">
	    	<div class="col-lg-6">
	    		<img src="https://cdn.iconscout.com/icon/free/png-256/user-1648810-1401302.png" class="pic">
	    	</div>
	      	<div class="descripcion col-lg-6">
	      		<hr style="background-color: transparent;">
	      		<h5>Bienvenido,</h5>
	      		<h6> <?php echo e($user['name']); ?></h6>
	      		<h6> <?php echo e($user['role']); ?></h6>
	        	<span class="caret"></span>

	    	</div>
	    </div>
	</div>
	  <hr>
	  <a href="<?php echo e(route('test.home')); ?>" ><i class="fa fa-fw fa-home"></i> <span class="">Inicio</span></a>
	  <a href=""><i class="fa fa-fw fa-list"></i> <span>Productos</span></a>
	  <a href="<?php echo e(route('test.logout')); ?>"><i class="fa fa-fw fa-sign-out"></i> <span>Salir</span></a>
</div><?php /**PATH C:\laragon\www\test\resources\views/partial/menu.blade.php ENDPATH**/ ?>