

<?php 
if(isset($errormsg) && $errormsg !=''){  ?>
    <div class="col-sm-6 offset-sm-3 border p-2 mt-2">
        <h3 class="alert alert-primary text-center"> <?php echo $errormsg ?>  </h3>
    </div>
<?php }?>
<?php if(isset($message ) && $message  !=''){  ?>
    <div class="col-sm-10 offset-sm- border p-2 mt-2">
        <h3 class="alert alert-primary text-center"> <?php echo $message  ?>  </h3>
    </div>
<?php }?>