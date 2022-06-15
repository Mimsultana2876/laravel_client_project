  
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
                    <?php if(session()->get('message')=='exist'): ?>
                        <div class="alert alert-danger">
                            <p>These values are exist</p>
            
                        </div>
                    <?php elseif(session()->get('message')=='delete'): ?>
                        <div class="alert alert-success">
                            <p>Successfully deleted</p>
            
                        </div>
                    <?php elseif(session()->get('message')=='insert'): ?>
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
                <div class="col-12  w-75 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h2 class="card-title text-center" style="text-transform: uppercase;">Add Police Station</h2>-->
                            <form action='<?php echo e(url("admin/update_client_info/$query_c_info->id")); ?>' method="POST" class="form-horizontal form-material mx-2">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('put'); ?>
                            <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Client Type</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <select name='c_type_id' class="form-select shadow-none form-control-line">
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
                                        <input name='c_name' type="text" placeholder="Insert Client Name" class="form-control form-control-line" required value="<?php echo e($query_c_info->c_name); ?>">
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Website</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='c_website' type="url" placeholder="Insert Client Website" class="form-control form-control-line" required value="<?php echo e($query_c_info->c_website); ?>">
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">E-Mail</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='c_email' type="email" placeholder="Insert Client E-Mail" class="form-control form-control-line" required value="<?php echo e($query_c_info->c_email); ?>">
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Phone</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='c_phone' type="tel" placeholder="Insert Client phone" class="form-control form-control-line" required value="<?php echo e($query_c_info->c_phone); ?>">
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Address</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <textarea name="c_address" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e($query_c_info->c_address); ?></textarea>
                                       
                                        
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

                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Add Police Station -->
                <!-- ============================================================== -->






            

                







            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by . Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
            
        <?php $__env->stopSection(); ?>

 
        
    
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\Invoice\resources\views/update/client_info.blade.php ENDPATH**/ ?>