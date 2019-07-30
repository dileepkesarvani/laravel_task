<?php $__env->startSection('content'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href=".\style.css">
<div class="container header">
		<div class="row">
			<div class="col-md-6 header-left">
				<i class="fab fa-canadian-maple-leaf fa-3x"></i>
			</div>
			<div class="col-md-6 header-right">
				<h4> Google Scrapting</h4>
			</div>
		</div>		
	</div>
	<div class="container content">
			<div class="form-content">
			<h4> Continue with our website.</h4>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Search</span>
				  </div>
				  <input type="search" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
				</div>
				
				
			</div>
		</div>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\task\resources\views/search.blade.php ENDPATH**/ ?>