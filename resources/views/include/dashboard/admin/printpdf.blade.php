
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Invoice Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{  asset('assets/dist/css/adminlte.min.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> IMFI ICT ACADEMY
          <small class="float-right">Date: </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>IMFI ICT ACADEMY.</strong><br>
          54 Nsikak Eduok, Uyo<br>
          Akwa Ibom State, Nigeria<br>
          Phone: (+234) 802 823 7116<br>
          Email: info@info@imfiacademy.edu.ng
        
        </address>
      </div>
   
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>First Name</th>
            <th>Middleame</th>
            <th>Regnumber</th>
            <th>Course Title</th>
            <th>Course Amount</th>
          </tr>
          </thead>
          <tbody>
          
            @foreach ($print_payments as $print_payment)
                @if ($print_payment->status = 'confirm')
                <tr>
                <td>{{ $print_payment->student_firstname}}</td>
                <td>{{ $print_payment->student_middlename }}</td>
                <td>{{ $print_payment->student_regnumber }}</td>
                <td>{{ $print_payment->course_title }}</td>
                <td>₦ {{ $print_payment->course_amount }}</td> 
            </tr>
                @else
                    
                @endif
            @endforeach
            
          
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
       
        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
          This online Receipt does not reguire signature
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        {{-- <p class="lead">Amount Due 2/22/2014</p> --}}

        <div class="table-responsive">
          {{-- <table class="table">
            <tr>
              <th style="width:50%">Course Period:</th>
              <td>	{{ $print_payments->course_period}}</td>
            </tr>
            <tr>
              <th>Program</th>
              <td>{{ $print_payments->course_programs}}</td>
            </tr>
            
    
          </table> --}}
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
