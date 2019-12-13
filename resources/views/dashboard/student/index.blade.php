@extends('layouts.app')


@section('content') 
<!--=======Page Heading
    =================================-->
    <section class="page-heading-section heading-style-two bg-image before-bg" style="background-image: url(public/images/header/p-header3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">Student</h2>
                    </div><!--/.page-heading-->
                    <a class="btn btn-default btn-primary" href="{{url('home')}}">Back to Dashboard</a>
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.page-heading-area-->
 <div class="container"> 
 </br>
 <center>
     <a class="btn btn-default btn-primary" href="{{url('student/add')}}">Add Student</a>
 </center>
</br>
    <table id="table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Adams Paul</td>
                <td>J.S.S One (1)</td>
                <td>     
                    <div class="float"><a class="btn btn-default btn-primary" href="#">Edit</a>
                </br>
                 <a class="btn btn-default btn-primary" href="#">Delete</a>
                    </br>
                    <a class="btn btn-default btn-primary" href="#">Analyze</a>
                </div>
                </td>
            </tr>
            <tr>
                <td>Adeyemo Praise</td>
                <td>J.S.S Two (2)</td>
                <td>     
                        <a class="btn btn-default btn-primary" href="#">Edit</a>
                        </br>
                        <a class="btn btn-default btn-primary" href="#">Delete</a>
                    </br>
                    <a class="btn btn-default btn-primary" href="#">Analyze</a>
                    </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Subject</th>        
                    <th>Action</th>

                    
                    
            </tr>
        </tfoot>
    </table>

</div>


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
       
    
@endsection
