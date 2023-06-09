
   
    <section class="content">
      <h2>Dear {{ Auth::guard('student')->user()->fname }} continue your registration</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Bio Data</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                
                    </div>
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal" action="{{ url('student/updatestudentstudent/'.Auth::guard('student')->user()->ref_no) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @method('PUT')
  
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label"> First Name</label>
                          <div class="col-sm-10">
                            <input type="text" name="fname" value="{{ Auth::guard('student')->user()->fname }}" class="form-control" id="inputName" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label"> Middle Name</label>
                          <div class="col-sm-10">
                            <input type="text" name="middlename" value="{{ Auth::guard('student')->user()->middlename }}" class="form-control" id="inputName" placeholder="middlename">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label"> SurName</label>
                          <div class="col-sm-10">
                            <input type="text" name="surname" value="{{ Auth::guard('student')->user()->surname }}" class="form-control" id="inputName" placeholder="surname">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" name="email" value="{{ Auth::guard('student')->user()->email }}" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Contact Address</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ Auth::guard('student')->user()->contactaddress }}" name="contactaddress" id="inputName2" placeholder="Address">
                          </div>
                        </div>
                        <img class="image rounded-circle"  src="{{ asset('/public/../'.Auth::guard('student')->user()->passpot)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
  
                        <div class="form-group row">
                          <label for="inputName2"  class="col-sm-2 col-form-label">Picture</label>
                          <div class="col-sm-10">
                            <input type="file" name="passpot" value="{{ Auth::guard('student')->user()->passpot }}" class="form-control" id="inputName2" placeholder="profileimage">
                          </div>
                        </div>
                      
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Phone</label>
                          <div class="col-sm-10">
                            <input type="number" name="phone" value="{{ Auth::guard('student')->user()->phone }}" class="form-control" id="inputSkills" placeholder="Phone">
                          </div>
                        </div>
                       
                    
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Bio Data</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                  
                      </div>
                      <div class="tab-pane" id="settings">
    
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">State</label>
                            <div class="col-sm-10">
                              <input type="text" name="state" value="{{ Auth::guard('student')->user()->state }}" class="form-control" id="inputName" placeholder="State">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label"> L.G Area</label>
                            <div class="col-sm-10">
                              <input type="text" name="logalgovt" value="{{ Auth::guard('student')->user()->logalgovt }}" class="form-control" id="inputName" placeholder="L.G Area">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label"> nationality</label>
                            <div class="col-sm-10">
                              <input type="text" name="nationality" value="{{ Auth::guard('student')->user()->nationality }}" class="form-control" id="inputName" placeholder="Natioality">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">contactaddress</label>
                            <div class="col-sm-10">
                              <input type="text" name="contactaddress" value="{{ Auth::guard('student')->user()->contactaddress }}" class="form-control" id="inputEmail" placeholder="Contact Address">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label"> Date of Birth</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" value="{{ Auth::guard('student')->user()->dob }}" name="dob" id="inputName2" placeholder="Date of Birth">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                              <select name="gender" class="form-control" id="">
                                <option value="{{ Auth::guard('student')->user()->gender }}">{{ Auth::guard('student')->user()->gender }}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                              {{-- <input type="" class="form-control" value="" name="gender" id="inputName2" placeholder="Gender"> --}}
                            </div>
                          </div>
                          {{-- <img class="image rounded-circle" src="{{ asset('/public/../'.Auth::guard('student')->user()->passpot)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
    
                          <div class="form-group row">
                            <label for="inputName2" value="{{ Auth::guard('student')->user()->passpot }}" class="col-sm-2 col-form-label">Picture</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" name="profileimage" id="inputName2" placeholder="profileimage">
                            </div>
                          </div> --}}
                        
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Permanent Address</label>
                            <div class="col-sm-10">
                              <input type="text" name="permanentaddress" value="{{ Auth::guard('student')->user()->permanentaddress }}" class="form-control" id="inputSkills" placeholder="Permanent Address">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          
          <!-- /.row -->
        </div><!-- /.container-fluid -->
        
      </section>
 

    
    <!-- /.content -->
  </div>
