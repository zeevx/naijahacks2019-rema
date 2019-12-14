<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">x</button>
<?php echo e($message); ?>

</div>
<?php endif; ?>

<?php if($message = Session::get('failure')): ?>
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">x</button>
<?php echo e($message); ?>

</div>
<?php endif; ?><?php /**PATH /var/www/html/naijahacks2019-rema/resources/views/layouts/flash.blade.php ENDPATH**/ ?>