  
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <?php $__env->startSection('content'); ?>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Add Client Info</h4>
                    </div>
                    <?php if(session()->has('message')): ?>
                    <?php if(session()->get('message')=='existed'): ?>
                        <div class="alert alert-danger">
                            <p>These values are exist</p>
            
                        </div>
                    <?php elseif(session()->get('message')=='deleted'): ?>
                        <div class="alert alert-danger">
                            <p>Successfully deleted</p>
            
                        </div>
                    <?php elseif(session()->get('message')=='inserted'): ?>
                        <div class="alert alert-success">
                            <p>Successfully Added</p>
            
                        </div>
                    <?php elseif(session()->get('message')=='existed'): ?>
                        <div class="alert alert-success">
                            <p>Successfully Added</p>
            
                        </div>
                    <?php elseif(session()->get('message')=='updated'): ?>
                        <div class="alert alert-success">
                            <p>Successfully Updated</p>
            
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Client Information</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                      <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
               </div>
               <?php endif; ?>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">


                <!-- ============================================================== -->
                <!-- Add Police Station -->
                <div id="insert_form" class="col-12  w-75 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h2 class="card-title text-center" style="text-transform: uppercase;">Add Police Station</h2>-->
                            <form action='<?php echo e(url("admin/insert_client_info")); ?>' method="POST" class="form-horizontal form-material mx-2">
                              <?php echo csrf_field(); ?>
                            <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Client Type</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <select name='c_type_id' class="form-select shadow-none form-control-line" required>
                                            <option value="">Select Client Type</option>
                                            <?php $__currentLoopData = $query_c_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->client_type_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Name</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='c_name' type="text" placeholder="Insert Client Name" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Website</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='c_website' type="url" placeholder="Insert Client Website" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">E-Mail</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='c_email' type="email" placeholder="Insert Client E-Mail" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Phone</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='c_phone' type="tel" placeholder="Insert Client phone" class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Address</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <textarea name="c_address" class="form-control" id="exampleFormControlTextarea1" rows="3">Here Write Your Address</textarea>
                                       
                                        
                                    </div>
                                </div>
                               
                                <div class="form-group d-flex">
                                    <div class="col-sm-12" style="width: 25%;"></div>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <button href='insert_ps' class="btn btn-success text-white">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>








    
                <div id="edit_form" style="display: none" class="edit_form col-12  w-75 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h2 class="card-title text-center" style="text-transform: uppercase;">Add Police Station</h2>-->
                        <form action='<?php echo e(url("admin/update_client_info")); ?>'
                                  method="POST" class="form-horizontal form-material mx-2">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                            <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Client Type</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <select id="select_input" name='c_type_id' class="form-select shadow-none form-control-line" value='' required>
                                            <option value="">Select Client Type</option>
                                            <?php $__currentLoopData = $query_c_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->client_type_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Name</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input id="input2" name='c_name' type="text" placeholder="Insert Client Name" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Website</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input id="input3" name='c_website' type="url" placeholder="Insert Client Website" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">E-Mail</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input id="input4" name='c_email' type="email" placeholder="Insert Client E-Mail" class="form-control form-control-line" required>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Phone</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input id="input5" name='c_phone' type="tel" placeholder="Insert Client phone" class="form-control form-control-line" >
                                    </div>
                                </div>

                                <input id="id" name='id' type="text" class="form-control form-control-line" hidden>

                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Address</label>
                                    <div  class="col-sm-12" style="width: 75%;">
                                        <textarea id="input6" name="c_address" class="form-control" id="exampleFormControlTextarea1" rows="3">Here Write Your Address</textarea>
                                     </div>
                                </div>
                               
                                <div class="form-group d-flex">
                                    <div class="col-sm-12" style="width: 25%;"></div>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <button  class="btn btn-success text-white">Edit</button>
                                        <button id="back" href='back_insert' class="btn btn-success text-white">Back</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               

                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Add Police Station -->
                <!-- ============================================================== -->






                <div class="row">
                    <!-- column -->
                    <div class="col-12   m-auto">
                        <div class="card">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center">S.L.</th>
                                            <th class="border-top-0 text-center">Client Type</th>
                                            <th class="border-top-0 text-center">Client Name</th>
                                            <th class="border-top-0 text-center">Client Website</th>
                                            <th class="border-top-0 text-center">Client Email</th>
                                            <th class="border-top-0 text-center">Client Phone</th>
                                            <th class="border-top-0 text-center">Client Adress</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $query_c_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <!--  -->
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($loop->index+1); ?>

                                            </td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->c_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->c_website); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->c_email); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->c_phone); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->c_address); ?></td>
                                            <td class='td_css' style='line-height: 0.5;padding: .5rem;text-align: center'>
                                            <a id="edit_btn" class="edit_btn" pid="<?php echo e($data->id); ?>" name="btn_edit" class="btn btn-info" style='line-height: 0.5;padding: .5rem'><i class="bi bi-pen"></i></a>
                                            <form class="spacing" method="POST" action='<?php echo e(url("admin/delete/clientInfoModel/$data->id")); ?>'>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button id='custom-btn' class="btn btn-danger" onclick="return confirm('Are you sure??')"> <i class="bi bi-trash"></i></button>
                                             </form>
                                        </td>
                                        
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                







            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
            
        <?php $__env->stopSection(); ?>


        <?php $__env->startSection('javaScript'); ?>
        <script>

                $('.edit_btn').each(function()
                {

                    $(this).on('click',function()
                    {
                        var id = $(this).attr('pid');
                        var tr = $(this).closest("tr");
                        var length = $(tr).find("td").length;

                        
                        // console.log($(tr).find("td").length)
                        // console.log($(tr).find("td:eq(0)").text());
                        // $("#c_type_name").val(tdProx);
                        $('#insert_form').hide();
                        $('#edit_form').show();
                        // $("#input""").val($(tr).find("td:eq("+i+")").text());
                        
                        for(let i=1;i<length-1;i++)
                        {
                                // console.log($(tr).find("td:eq("+i+ ")").text())
                             $("#input"+i+"").val($(tr).find("td:eq("+i+")").text());
                        }
                        
                        $('#id').val(id);
                       });

                });


               

            $('#back').on('click',function(){
             
                $('#edit_form').hide();
                $('#insert_form').show();
            });


        </script>
            
        <?php $__env->stopSection(); ?>

 
        
    
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\invoice\Invoice\resources\views/client_info.blade.php ENDPATH**/ ?>