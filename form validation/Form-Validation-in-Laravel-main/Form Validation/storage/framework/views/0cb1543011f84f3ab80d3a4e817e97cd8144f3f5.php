<html>
    <title>Form</title>
    <h1 align="center">Contact Form</h1>
    <body>
        <form method="post" action="<?php echo e(URL::to('/submit')); ?>" enctype="multiparth/form-data">
            <?php echo csrf_field(); ?>
            Name : <input type="text" name="txt1"/>
            <?php $__errorArgs = ['txt1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <strong style="color:red"><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</br>
 
            Surname : <input type="text" name="txt2"/>
            <?php $__errorArgs = ['txt2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <strong style="color:red"><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</br>

            Mobile : <input type="text" name="txt3"/>
            <?php $__errorArgs = ['txt3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <strong style="color:red"><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</br>

            Email : <input type="email" name="txt4"/>
            <?php $__errorArgs = ['txt4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <strong style="color:red"><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</br>
           <input type="submit" name="action" value="submit"/>
</form>
</body>
</html>
<?php /**PATH C:\Users\HP\laravel-validation\resources\views/form.blade.php ENDPATH**/ ?>