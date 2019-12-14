<?php $__env->startSection('content'); ?> 
<!--=======Page Heading
    =================================-->
    <section class="page-heading-section heading-style-two bg-image before-bg" style="background-image: url(public/images/header/p-header3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">School Dashboard</h2>
                    </div><!--/.page-heading-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.page-heading-area-->
    
    <!--====Featured Section 
        ====================================-->
        <section id="featured-section" class="featured-course-area bg-gray s-pd3">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-8">
                            <div class="section-heading-area text-center">
                                <h2 class="section-heading text-capitalize">Menu</h2>
                            </div><!--/.section-heading-area--> 
                        </div><!--/.col-lg-8-->
                    </div><!--/.row-->
                   <div class="row pt-4">
                        <div class="col-lg-6">
                            <a href="<?php echo e(url('teacher')); ?>" class="video-btn">
                                <img class="img-fluid" src="public/teachers.jpg" alt="img">
                                
                            </a>                                       
                        </div><!--/.col-lg-6-->
                        <div class="col-lg-6">
                            <div class="featured-course-content">
                                <h2>Teachers</h2>
                                <p>Add Teachers and Edit teachers
                                </p>
                                <div class="featured-bottom">
                                <a class="btn btn-default btn-primary" href="<?php echo e(url('teacher')); ?>">Proceed</a>
                                </div>
                            </div><!--/.featured-course-content-->
                        </div><!--/.col-lg-6-->
                    </div><!--/.row-->

                    <div class="row pt-4">
                            <div class="col-lg-6">
                                <a href="https://www.youtube.com/watch?v=Ey1lkwYGSC0" class="video-btn">
                                    <img class="img-fluid" src="public/students.jpg" alt="img">
                                  
                                </a>                                       
                            </div><!--/.col-lg-6-->
                            <div class="col-lg-6">
                                <div class="featured-course-content">
                                    <h2>Students and ScoreSheets</h2>
                                    <p>Add students, Edit students, Assign students, View ScoreSheets...</p>
                                    
                                    <div class="featured-bottom">
                                        <a class="btn btn-default btn-primary" href="<?php echo e(url('student')); ?>">Proceed</a>
                                    </div>
                                </div><!--/.featured-course-content-->
                            </div><!--/.col-lg-6-->
                        </div><!--/.row-->

                            <div class="row pt-4">
                                    <div class="col-lg-6">
                                        <a href="https://www.youtube.com/watch?v=Ey1lkwYGSC0" class="video-btn">
                                            <img class="img-fluid" src="public/analysis.png" alt="img">
                                            
                                        </a>                                       
                                    </div><!--/.col-lg-6-->
                                    <div class="col-lg-6">
                                        <div class="featured-course-content">
                                            <h2>Analysis</h2>
                                            <p>View and Track Analysis....</p>                                            
                                            <div class="featured-bottom">
                                                <a class="btn btn-default btn-primary" href="<?php echo e(url('analysis')); ?>">Proceed</a>
                                            </div>
                                        </div><!--/.featured-course-content-->
                                    </div><!--/.col-lg-6-->
                                </div><!--/.row-->
                </div><!--/.container-->
            </section><!--/#featured-section-->

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/naijahacks2019-rema/resources/views/home.blade.php ENDPATH**/ ?>