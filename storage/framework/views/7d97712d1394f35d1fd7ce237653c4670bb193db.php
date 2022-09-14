<?php echo $__env->make('incl.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
        <div class="row">
                <legend>Read TaskList</legend>
            <p class="lead"><?php echo e($articles->Task); ?> </p>
                <p><?php echo e($articles->Description); ?> </p>
                    </div> 
    
</div>


<?php echo $__env->make('incl.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>