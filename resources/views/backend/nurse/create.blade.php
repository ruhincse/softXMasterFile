
@extends('backend.app')

@push('css')

@endpush

@section('content')

  <!-- Start Content-->
  <div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Nurse</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
                <h4 class="page-title">Nurse Information</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
<form action="{{route('nurse.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     
                        <h4> Personal Information </h4>
                    <div class="row">
                        <div class="col-md-6">
                            
                                <div class="form-group">
                                    <label>Name <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="name" value="{{old('name')}}"  placeholder="Nurse Name" required>
                                 </div>
                                <div class="form-group">
                                    <label>Mobile No <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="mobile"  value="{{old('mobile')}}" placeholder="Mobile No" required>
                                    {{-- <span class="font-13 text-muted">e.g "HH:MM:SS"</span> --}}
                                </div>

                                <div class="form-group">
                                    <label>Father's Name <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="father_name" value="{{old('father_name')}}" placeholder="Father's Name" required>
                                    
                                </div>

                                <div class="form-group">
                                    <label>Mother's Name <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="mother_name"   value="{{old('mother_name')}}" placeholder="Mother's Name"
                                    required>                                    
                                </div>

                                <div class="form-group">
                                    <label>Date of Birth <span style="color:red">*<span></label>
                                    <input type="date" class="form-control" data-toggle="input-mask" name="dob" value="{{old('dob')}}"  placeholder="Date of Birth" required>
                                </div>

                                <div class="form-group">
                                    <label>Maritual Status <span style="color:red">*<span></label>

                                    <select class="form-control" name="maritual_status" required>
                                        <option value="">Select Maritual Status</option>
                                        <option value="Unmarried">Unmarried</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow">Widow</option>
                                    </select>
                                     
                                </div>


                              

                            
                        </div> <!-- end col -->

                        <div class="col-md-6">
                           
                                <div class="form-group">
                                    <label>Photo <span style="color:red">*<span></label>
                                    <input type="file" class="form-control" data-toggle="input-mask"  name="photo" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Gender <span style="color:red">*<span></label>
                                    <select class="form-control" name="gender" required>
                                        <option value="">Select Gender</option>                                         
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Nationality <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="nationality" value="{{old('nationality')}}"  placeholder="Nationality" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Religion <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="religion" value="{{old('religion')}}" placeholder="Religion" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Present Address <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="present_address"  value="{{old('present_address')}}" placeholder="Present Address" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Permanent_address <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask"  name="Permanent_address" value="{{old('Permanent_address')}}" placeholder="Permanent Address"  required>                                    
                                </div>                               
                             

                          
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Education Qualifications</h4>                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" id="edct_tbl">
                                <thead>
                                    <tr>
                                        <th>Exam Name </th>
                                        <th>Group / Subject  </th>
                                        <th>Year</th>
                                        <th>Grade</th>
                                        <th>Board/University</th>
                                        <th>Action</th>
                                     </tr>
                                </thead>
                                <tr>    
                                    <td>
                                    <input type="text" class="form-control exam_name" data-toggle="input-mask" name="exam_name" placeholder="Exam Name">
                                        <span style="color:red;display:none" id="error_exam">Exam field is Required</span>
                                    </td>
                                    <td> 
                                         <input type="text" class="form-control group_name" data-toggle="input-mask" name="group" placeholder="Subject or Group Name">
                                         <span style="color:red;display: none" id="error_group">Group field is Required</span>
                                    </td>
                                    <td>
                                          <input type="text" class="form-control exam_year" data-toggle="input-mask" name="year" placeholder="Exam Year">
                                          <span style="color:red;display: none" id="error_exam_year">Year field is Required</span>
                                    </td>
                                    <td>  
                                        <input type="text" class="form-control grade" data-toggle="input-mask" name="grade" placeholder="Grade">
                                        <span style="color:red;display: none" id="error_grade">Grade field is Required</span>
                                    </td>
                                    <td> 
                                         <input type="text" class="form-control university" data-toggle="input-mask" name="university" placeholder="University">
                                         <span style="color:red;display: none" id="error_borad">Board/University field is Required</span>
                                    </td>
                                    <td> <button class="btn btn-success waves-effect waves-light" id="add_exam"> <i class="mdi mdi-plus-circle mr-1"></i>  </button></td>


                                </tr>

                        </table>
                             

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" id="exam_body">
                                    <thead id="exam_tbl_head" style="display: none">
                                        <tr>
                                            <th>Exam Name </th>
                                            <th>Group / Subject  </th>
                                            <th>Year</th>
                                            <th>Grade</th>
                                            <th>Board/University</th>
                                            <th>Action</th>
                                            
                                         </tr>
                                    </thead>

                            </table>

           
                        </div> <!-- end col -->
 
                    </div>

                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row --> 
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Job Expereicence (if any)</h4>                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" id="exp_tbl">
                                <thead>
                                    <tr>
                                        <th>Organization Name </th>
                                        <th>Year</th>
                                        <th>Starting Date</th>
                                        <th>Ending Date</th>
                                        <th>Action</th>
                                     </tr>
                                </thead>
                                <tr>    
                                    <td>  <input type="text" class="form-control" data-toggle="input-mask" name="org_name" placeholder="Organization Name"></td>
                                    <td>  <input type="text" class="form-control" data-toggle="input-mask" name="year" placeholder="Total Year"></td>
                                    <td>  <input type="text" class="form-control" data-toggle="input-mask" name="starting_date" placeholder="Starting Date"></td>
                                    <td>  <input type="text" class="form-control" data-toggle="input-mask" name="ending_date" placeholder="Ending Date"></td>
                                    <td> <button class="btn btn-danger waves-effect waves-light"> <i class="mdi mdi-plus-circle mr-1"></i>  </button></td>


                                </tr>

                        </table>
                             

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Organization Name </th>
                                            <th>Year</th>
                                            <th>Starting Date</th>
                                            <th>Ending Date</th>
                                            <th>Action</th>
                                         </tr>
                                    </thead>                                    

                            </table>

           
                        </div> <!-- end col -->
 
                    </div>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
    
    
    <button type="submit" class="btn btn-primary waves-effect waves-light pull-right">Add Nurse</button>
</form>
</div> <!-- container -->

@endsection


@push('js')


<script>

var exam_qty=0;
$(document).on('click','#add_exam',function(){

    ++exam_qty;

    var examName=$('.exam_name').val();
     
    var examGroup=$('.group_name').val();
    var examYear=$('.exam_year').val();
    var examGrade=$('.grade').val();
    var universityName=$('.university').val();

    /*Hide the Error Msg*/
    $('#error_exam').hide()
    $('#error_group').hide()
    $('#error_exam_year').hide()
    $('#error_grade').hide()
    $('#error_borad').hide()
    
    
    // console.log(examName);

    if(examName && examGroup && examYear  && examGrade && universityName){
        


        var _token = '{{ csrf_token() }}';
           $.ajax({
               url: "{{ route('add.nurse.qualification') }}",
               method: "POST",
               data: {_token:_token, examName:examName,examGroup:examGroup,examYear:examYear,examGrade:examGrade,universityName:universityName ,exam_qty:exam_qty},
               dataType: "json",
               success: function (response) {

                   console.log(response);
                   $('#exam_tbl_head').show();
                //    console.log(response);
                    $('#exam_body').append(response);

                //     $('#qtty').val('');
                //     $('#pro_total').val(0);
                //     $('#u_price').val(0);
                    

                //      getTotalPrice();

               }
           });



    }else{
            if(examName==''){                            
                $('#error_exam').show()
     }else if(examGroup ==''){

        $('#error_group').show()


     }else if(examYear ==''){
    $('#error_exam_year').show()

    }else if(examGrade ==''){
    $('#error_grade').show()

    }else{
        $('#error_borad').show()
    }

    }

    

})

$(document).on('click', '.btn-remove', function() {
          $('#test_row_' + $(this).data('testid')).remove();
            getTotalPrice();
           $('#due').html(total_test_price() - $('#customer_pay').val());

           
       });
       
</script>

@endpush

