@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Upload </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="btn btn-success">Add</a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Upload  </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
       
          <!-- right column -->
          <div class="col-md-12">
            
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Certificate in Data Processing Course Uploads</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('admin.createsinglecourse') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label> Course Title</label>
                        <select name="course_title1" class="form-control">
                          <option value="Student Industrial Attachment">Student Industrial Attachment</option>
                          <option value="System Archtecture 2">System Archtecture 2</option>
                          <option value="Computer Workshop Practices 2">Computer Workshop Practices 1</option>
                          <option value="PC Assembling & Upgrading">PC Assembling & Upgrading</option>
                          <option value="Basic Networking">Basic Networking</option>
                          <option value="Electronic Lab">Electronic Lab</option>
                          <option value="Technical Report Wrinting">Computer Application Packages 1</option>
                          <option value="Seminar">Seminar</option>
                          <option value="Entreprneurship">Entreprneurship</option>
                        </select>
                      </div>

                      
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Course Code</label>
                        <select name="course_code1" class="form-control">
                          <option value="CHE 211">CHE 211</option>
                          <option value="CHE 212">CHE 212</option>
                          <option value="CHE 213">CHE 213</option>
                          <option value="CHE 214">CHE 214</option>
                          <option value="CHE 215">CHE 215</option>
                          <option value="CHE 216">CHE 216</option>
                          <option value="CHE 217">CHE 217</option>
                          <option value="CHE 218">CHE 218</option>
                          <option value="GST 211">GST 211</option>
                        </select>
                      </div>
                     
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Credit Unit</label>
                        <select name="credit_unit1" class="form-control">
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Program</label>
                        <select name="programname_id" class="form-control">
                          @foreach ($display_nidprograms as $display_nidprogram)
                            @if ($display_nidprogram->status == 'approved')
                              <option value="{{ $display_nidprogram->id }}">{{ $display_nidprogram->course_programs }} </option>
                            @else
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Semester</label>
                          <select name="semester" class="form-control">
                            <option value="First Semester">First Semester</option>
                        
                          </select>
                        </div>
                      </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Assign Lecturer</label>
                        <select name="lecturer_id" class="form-control">
                          @foreach ($display_alllecturers as $display_alllecturer)
                            @if ($display_alllecturer->status == 'approved')
                              <option value="{{ $display_alllecturer->id }}">{{ $display_alllecturer->fname }} {{ $display_alllecturer->lname }}</option>
                            @else
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Year</label>
                          <select name="resultsyear" class="form-control">
                            <option value="2022/2023">2022/2023</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Code</label>
                          <select name="course_code5" class="form-control">
                            <option value="NIDHARDFIRSTSEMLEVEL200L">NID</option>
                            
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Level</label>
                          <select name="level" class="form-control">
                            <option value="200L"> 200L</option>
                            
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                            Add Second Semester Level 200
                          </button>
                        </div>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


 

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


    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"> </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('admin.createsinglecourse') }}" method="post" enctype="multipart/form-data">
              @csrf
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label> Course Title</label>
                    <select name="course_title1" class="form-control">
                      <option value="Consumer Electronics">Consumer Electronics</option>
                      <option value="Trouble-shootings & Repairs">Trouble-shootings & Repairs</option>
                      <option value="Software Installation & Upgrading">Software Installation & Upgrading</option>
                      <option value="Electrical Measurement & Instrumentation">Electrical Measurement & Instrumentation</option>
                      <option value="Project Management">Project Management</option>
                      <option value="Project">Project</option>
                     
                    </select>
                  </div>

                  
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Course Code</label>
                    <select name="course_code1" class="form-control">
                      <option value="CHE 221">CHE 221</option>
                      <option value="CHE 222">CHE 222</option>
                      <option value="CHE 223">CHE 223</option>
                      <option value="CHE 224">CHE 224</option>
                      <option value="NSS 223">NSS 223</option>
                      <option value="CHE 225">CHE 225</option>
                      
                    </select>
                  </div>
                 
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Credit Unit</label>
                    <select name="credit_unit1" class="form-control">
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Select Program</label>
                    <select name="programname_id" class="form-control">
                      @foreach ($display_nidprograms as $display_nidprogram)
                        @if ($display_nidprogram->status == 'approved')
                          <option value="{{ $display_nidprogram->id }}">{{ $display_nidprogram->course_programs }} </option>
                        @else
                        @endif
                      @endforeach
                    </select>
                  </div>
                </div>
  
                <div class="col-sm-6">
                    <div class="form-group">
                      <label>Semester</label>
                      <select name="semester" class="form-control">
                        {{-- <option value="First Semester">First Semester</option> --}}
                        <option value="Second Semester">Second Semester</option>
                      </select>
                    </div>
                  </div>
  
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Assign Lecturer</label>
                    <select name="lecturer_id" class="form-control">
                      @foreach ($display_alllecturers as $display_alllecturer)
                        @if ($display_alllecturer->status == 'approved')
                          <option value="{{ $display_alllecturer->id }}">{{ $display_alllecturer->fname }} {{ $display_alllecturer->lname }}</option>
                        @else
                        @endif
                      @endforeach
                    </select>
                  </div>
                </div>
  
                <div class="col-sm-6">
                    <div class="form-group">
                      <label>Year</label>
                      <select name="resultsyear" class="form-control">
                        <option value="2022/2023">2022/2023</option>
                      </select>
                    </div>
                  </div>
  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Code</label>
                      <select name="course_code5" class="form-control">
                        <option value="NIDHARDSECONDSEM200L">NID</option>
                        
                      </select>
                    </div>
                  </div>
  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Level</label>
                      <select name="level" class="form-control">
                        <option value="200L">LEVEL 200</option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <div class="modal-footer justify-content-between">
                            {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                            <button type="submit" class="btn btn-primary">Add </button>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{-- <button type="submit" class="btn btn-primary">Add Second Semester Courses Level 100</button> --}}
                </div>
            </form>
            
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->