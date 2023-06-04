@include('dashboard.admin.header')


  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Courses </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Course</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <form action="{{ route('admin.createcourse') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Title</label>
                      <input type="text" name="course_title" class="form-control" @error('course_title')
                          
                      @enderror value="{{ $view_courses->course_title }}" id="exampleInputEmail1" placeholder="Course title">
                    </div>
                    @error('course_title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Code</label>
                      <input type="text" name="course_code" class="form-control" @error('course_code')
                          
                      @enderror value="{{ $view_courses->course_code }}" id="exampleInputEmail1" placeholder="Course Code">
                    </div>
                    @error('course_code')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Period</label>
                        <select class="form-control" name="course_period">
                          <option value="One Month">{{ $view_courses->course_period }}</option>

                          <option value="Three Months">3 Months</option>
                          <option value="Six Months">6 Months</option>
                          <option value="One Year">1 Year</option>
                          <option value="2 Years">2 Year</option>
                        </select>
                      {{-- @enderror value="{{ old('course_period') }}" id="exampleInputEmail1" placeholder="Course Period"> --}}
                    </div>
                    @error('course_period')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror


                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Amount</label>
                      <input type="number" name="course_amount" class="form-control" @error('course_amount')
                          
                      @enderror value="{{ $view_courses->course_amount }}" id="exampleInputEmail1" placeholder="Course Amount">
                    </div>
                    @error('course_amount')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                  </div>
                 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                   
                  <div class="card-body">
                                            
                  {{-- <div class="card-body pad"> --}}
                    <div class="form-group">
                    <textarea class="textarea" name="course_contents" class="form-control"  placeholder="Place some text here"
                    >{{ $view_courses->course_contents }}</textarea>
                   </div>
                   @error('course_contents')
                   <span class="text-danger">{{ $message }}</span>
                   @enderror
              
                  
                    <div class="form-group">
                      <label for="exampleInputFile">Course Photo</label>
                      <div class="input-group">
                        <td><img style="width: 50%; height: 60%;" src="{{ URL::asset("/public/../$view_courses->courseimages")}}" alt=""></td>
                       
                        
                      </div>
                     
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
    
                  
                </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  </div>
  
 
    @include('dashboard.admin.footer')