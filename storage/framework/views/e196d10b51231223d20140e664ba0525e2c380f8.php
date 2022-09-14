<?php echo $__env->make('incl.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6"> 
        <form class="form-horizontal" method="POST" action="<?php echo e(url('/edit',array($articles->id))); ?>">
          <?php echo e(csrf_field()); ?>

                        <fieldset>
                          <legend>Enter your tasks</legend>

                          <?php if(count($errors) >0 ): ?>
                               <?php foreach($errors->all() as $error): ?>
                                    <div class="alert alert-danger">
                                         <?php echo e($error); ?>

                                     </div>
                                  <?php endforeach; ?>
                          <?php endif; ?>


                          <div class="form-group">
                            <label for="exampleInputDescription" class="col-log-2 control-label">Task</label>
                            <div class="col-log-10">
                            <input type="text" name="task" class="form-control" value="<?php echo $articles->Task; ?>"  placeholder="Enter Task">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputDescription">Description</label>  
                            <textarea name= "description" class="form-control"   placeholder="Description"> <?php echo $articles->Description; ?> </textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-danger">Update</button>
                            <a href="<?php echo e('/'); ?>" class="btn btn-primary">Back</a>
                            </div>
                        </fieldset>
                      </form>
        </div>
    </div>
</div>
<?php echo $__env->make('incl.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>