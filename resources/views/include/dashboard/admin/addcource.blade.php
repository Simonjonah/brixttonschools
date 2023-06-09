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
                    {{-- @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                        </div>
                    @endif --}}
                    
                  <div class="card-body">
                 
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Semester</label>
                      <input type="text" name="firstsemester_fee" class="form-control" @error('firstsemester_fee')
                          
                      @enderror value="{{ old('firstsemester_fee') }}" id="exampleInputEmail1" placeholder="First Semester Fee">
                    </div>
                    @error('firstsemester_fee')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Second Semester</label>
                      <input type="text" name="secondsemester_fee" class="form-control" @error('secondsemester_fee')
                          
                      @enderror value="{{ old('secondsemester_fee') }}" id="exampleInputEmail1" placeholder="Second Semester Fee ">
                    </div>
                    @error('secondsemester_fee')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Period</label>
                        <select class="form-control" name="course_period">
                          <option value="One Month">1 Month</option>

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
                      <label for="exampleInputEmail1">Program Amount</label>
                      <input type="number" name="course_amount" class="form-control" @error('course_amount')
                          
                      @enderror value="{{ old('course_amount') }}" id="exampleInputEmail1" placeholder="Program Amount">
                    </div>
                    @error('course_amount')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                      <label for="exampleInputEmail1">Third Semester</label>
                      <input type="text" name="thirddsemester_fee" class="form-control" @error('thirddsemester_fee')
                          
                      @enderror value="{{ old('thirddsemester_fee') }}" id="exampleInputEmail1" placeholder="Third Semester Fee">
                    </div>
                    @error('thirddsemester_fee')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
               
                    <div class="form-group">
                      <label for="">Message</label>
                    <textarea class="textarea" name="course_contents" class="form-control" @error('pubmessage') is-invalid @enderror" placeholder="Place some text here"
                    value="{{ old('course_contents') }}     style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                   </div>
                   @error('course_contents')
                   <span class="text-danger">{{ $message }}</span>
                   @enderror
              
                   <div class="form-group">
                    <label for="exampleInputEmail1">Program Type</label>

                      <select class="form-control" name="course_programs">
                        <option value="Certificate in Data Processing">Certificate in Data Processing</option>
                        <option value="Diploma in Data Processing">Diploma Data Processing</option>
                        <option value="Diploma Hardware Maintenance and Repairs">Maintenance and Repairs</option>
                        <option value="Professional Programs">Professional Programs</option>
                        <option value="National Skills Qualification">National Skills Qualification(NSQ)</option>
                        <option value="NID Programmes">NID Programmes</option>
                        
                      </select>
                    {{-- @enderror value="{{ old('course_programs') }}" id="exampleInputEmail1" placeholder="Course Period"> --}}
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>

                      <select class="form-control" name="category">
                        <option value="Computer Foundation Courses">Computer Foundation Courses</option>
                        {{-- <option value="Diploma in Data Processing">Diploma Data Processing</option>
                        <option value="Diploma Hardware Maintenance and Repairs">Maintenance and Repairs</option>
                        <option value="Professional Programs">Professional Programs</option>
                        <option value="National Skills Qualification">National Skills Qualification(NSQ)</option>
                        <option value="NID Programmes">NID Programmes</option> --}}
                        
                      </select>
                    {{-- @enderror value="{{ old('course_programs') }}" id="exampleInputEmail1" placeholder="Course Period"> --}}
                  </div>
                  @error('course_programs')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror

                    <div class="form-group">
                      <label for="exampleInputFile">Course Photo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input  type="file" class="form-control" name="courseimages"  @error('courseimages') is-invalid @enderror"
                          value="{{ old('courseimages') }}"
                          id="exampleInputFile">
                        </div>
                        
                      </div>
                      @error('courseimages')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                    </div>
                   
  
                    
                  </div>
                  <!-- /.card-body -->
    
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
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
  
  <script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });
    
    </script>

  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
  
      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function() {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
  
      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function() {
        toastr.error('Dear {{ Auth::guard('admin')->user()->name }} you do not have upto N5000 to withraw')
      });
      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
  
      $('.toastsDefaultDefault').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultTopLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomRight').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultNotFixed').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          fixed: false,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultFull').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          icon: 'fas fa-envelope fa-lg',
        })
      });
      $('.toastsDefaultFullImage').click(function() {
        $(document).Toasts('create', {
          body: 'Dear {{ Auth::guard('admin')->user()->name }} your account has been suspended, please contact Whatsapp',
          title: 'Suspended',
          class: 'bg-danger', 
          subtitle: 'Subtitle',
          image: '{{ asset('/public/../'.Auth::guard('admin')->user()->images)}}',
          imageAlt: 'User Picture',
        })
      });
      $('.toastsDefaultSuccess').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultInfo').click(function() {
        $(document).Toasts('create', {
          class: 'bg-info', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
          class: 'bg-maroon', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });
  
  </script>
  <script>
    window.addEventListener('showtoastr', function(event){
      toastr.remove();
      if (event.detail.type == 'info') {
        toastr.info(event.detail.message);
      }eleif(event.detail.type == 'success'){
        toastr.success(event.detail.message);
      }eleif(event.detail.type == 'error'){
        toastr.error(event.detail.message);
      }eleif(event.detail.type == 'warning'){
        toastr.warning(event.detail.message);
      }else{
        return false;
      }

    });
  </script>
    @include('dashboard.admin.footer')