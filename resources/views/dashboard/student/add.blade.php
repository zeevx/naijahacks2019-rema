@extends('layouts.app')

@section('content')



<!--=======Page Heading
    ===============================================-->
    <section class="page-heading-section before-bg bg-image" style="background-image: url({{url('public/images/header/p-header3.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">Add Student</h2>
                    </div><!--/.page-heading-->
                    <a class="btn btn-default btn-primary" href="{{url('home')}}">Back to Dashboard</a>
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.page-heading-area-->
    
    
    <div class="login-page page-wrapper s-pd100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="login-form-area">
                            <form method="POST" action="{{ url('teacher') }}">
                                    @csrf
                                <p>

                                    <div class="">
                                        <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </p>
                                <p>

                                        <div class="">
                                            <div class="form-group">
                                              <select multiple class="form-control" name="subject" id="">
                                                <option>Select Class</option>
                                                <option>J.S.S One(1)</option>
                                                <option>J.S.S Two(2)</option>
                                              </select>
                                            </div>
                                            @error('school')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </p>
                            <p> 

                               
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
   
    

@endsection

    