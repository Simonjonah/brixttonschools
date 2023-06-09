@include('dashboard.student.header')

  @include('dashboard.student.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   @if (Auth::guard('student')->user()->status == null)
     @include('dashboard.student.firstregistration')
   @else
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $countcoureses }}</h3>

                <p>Courses Registered By Me</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('student.yourcourse') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ Auth::guard('student')->user()->amount }}<sup style="font-size: 20px"></sup></h3>

                <p>School Initial Fees</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('student.paymenthistory') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $countschs }}</h3>

                <p>Other Payments</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('student.paymenthistory') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $countresults }}</h3>

                <p>My Results NID</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              {{-- <a href="{{ route('student.legalcontact') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $countresult }}</h3>

                <p>Results</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>

              </div>
              {{-- <a href="{{ route('student.viewpersonnel') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->

        </div>
        <!-- /.row -->
        <!-- Main row -->
       <!-- TABLE: LATEST ORDERS -->
       <div class="card">
        <div class="card-header border-transparent">
          <h3 class="card-title">Latest Orders</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                <th>Student ID</th>
                <th>Surname</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Reg Number</th>
                <th>Status</th>
              </tr>
              
              </thead>
              <tbody>
              <tr>
                <td><a href="studentprofile/{{ Auth::guard('student')->user()->id  }}">{{ Auth::guard('student')->user()->ref_no  }}</a></td>
                <td>{{ Auth::guard('student')->user()->surname  }}</td>
                <td>{{ Auth::guard('student')->user()->fname  }}</td>
                <td>{{ Auth::guard('student')->user()->middlename  }}</td>
                <td>{{ Auth::guard('student')->user()->regnumber  }}</td>
               <td>
                @if (Auth::guard('student')->user()->status = null)
                <td><span class="badge badge-info">Admission in progress</span></td>
                @elseif (Auth::guard('student')->user()->status = 'admitted')
                <td><span class="badge badge-success">Admtted</span></td>
                @elseif (Auth::guard('student')->user()->status = 'reject')
                <td><span class="badge badge-danger">Admtted</span></td>
                @elseif (Auth::guard('student')->user()->status = 'approved')
                <td><span class="badge badge-success">Approved</span></td>
                @elseif (Auth::guard('student')->user()->status = 'suspend')
                <td><span class="badge badge-warning">Suspended</span></td>
                @endif
               </td>
               
              </tr>
             
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <a href="studentprofile/{{ Auth::guard('student')->user()->surname  }}" class="btn btn-sm btn-info float-left">View Profile</a>
          {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->


      </div><!-- /.container-fluid -->
    </section>

   @endif

    
    <!-- /.content -->
  </div>
  @include('dashboard.student.footer')