<?php $__env->startSection('content'); ?>



<!--=======Page Heading
    ===============================================-->
    <section class="page-heading-section before-bg bg-image" style="background-image: url(<?php echo e(url('public/images/header/p-header3.jpg')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">Add Teacher</h2>
                    </div><!--/.page-heading-->
                    <a class="btn btn-default btn-primary" href="<?php echo e(url('home')); ?>">Back to Dashboard</a>
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.page-heading-area-->
    
    
    <div class="login-page page-wrapper s-pd100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="login-form-area">
                            <form method="POST" action="<?php echo e(url('teacher/store')); ?>">
                                    <?php echo csrf_field(); ?>
                                <p>

                                    <div class="">
                                        <input placeholder="Name" id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
        
                                        
                                    </div>
                                </p>
                                <p>

                                        <div class="">
                                            <div class="form-group">
                                              <select multiple class="form-control" name="subject" id="">
                                                <option>Select Subject</option>
                                                <option>Mathematics</option>
                                                <option>English</option>
                                                <option>Physics</option>
                                              </select>
                                            </div>
                                           
                                        </div>
                                    </p>
                                    <p>

                                        <div class="">
                                            <div class="form-group">
                                              <select multiple class="form-control" name="class" id="">
                                                <option>Select Class</option>
                                                <option>JSS 1</option>
                                                <option>JSS 2</option>
                                                <option>SSS 2</option>
                                              </select>
                                            </div>
                                           
                                        </div>
                                    </p>
                            <p> 

                                <div class="">
                                    <input placeholder="Email" id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                </div>
                            </p>
                            <p>
                                    <div class="">
                                    <input placeholder="Phone Number" id="phone" type="tel" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus>
                             
                                </div>
                            </p>
                            <p>

                                <div class="">
                                    <input placeholder="Password" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
    
                                </div>
                            </p>
                            
                            <p><button class="btn btn-default btn-primary" type="submit">Add Teacher</button></p>
                            
                        </form>
                    </div><!--/.login-form-area-->
                </div><!--/.col-lg-4-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.login-page-->
    
   <!-- Start footer area -->
   <footer id="footer" class="site-footer">
       
        <!-- Start footer copyright area -->
        <div class="footer-copyright-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            &copy; Designed by <a href="#">Team REMA - Naija Hacks</a> 
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--End footer copyright area -->
    </footer><!--End footer area -->
   
    

<?php $__env->stopSection(); ?>

    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/naijahacks2019-rema/resources/views/dashboard/teacher/add.blade.php ENDPATH**/ ?>