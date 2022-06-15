
  
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
                  <h4 class="page-title">Client Type</h4>
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
                              <li class="breadcrumb-item active" aria-current="page">Client Type</li>
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
                      <form action='<?php echo e(route('insert_client_type')); ?>' method="POST" class="form-horizontal form-material mx-2">
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group d-flex">
                            <label class="col-sm-12" style="width: 25%;"> Client Type</label>
                            <div class="col-sm-12" style="width: 75%;">
                                <input name='client_type_name' type="text" placeholder="Insert Client Type" class="form-control form-control-line">
                            </div>
                        </div>

                          <div class="form-group d-flex">
                              <label class="col-sm-12" style="width: 25%;"> Status</label>
                              <select name='client_type_status' class="form-select shadow-none form-control-line">
                                <option value="Presindent">Select Status</option>  
                                <option value="Active">Active</option>  
                                <option value="Inactive">Inactive</option>  
                            </select>
                          </div>
                         
                          <div class="form-group d-flex">
                              <div class="col-sm-12" style="width: 25%;"></div>
                              <div class="col-sm-12" style="width: 75%;">
                                  <button class="btn btn-success text-white">Save</button>
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
                                      <th class="border-top-0 text-center">SL</th>
                                      <th class="border-top-0 text-center">Client Type</th>
                                      <th class="border-top-0 text-center">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php $__currentLoopData = $query_client_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                  <!--  -->
                                      <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($loop->index+1); ?>

                                      </td>
                                      <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_name); ?></td>
                                      <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_status); ?></td>

                                      <td class='td_css' style='line-height: 0.5;padding: .5rem;text-align: center'>

                                      <a  href='<?php echo e(url("admin/update_page_client_type/$data->id")); ?>' name="btn_edit" class="btn btn-info" style='line-height: 0.5;padding: .5rem'><i class="bi bi-pen"></i></a>

                                      <form class="spacing" method="POST" action='<?php echo e(url("admin/delete/clienType/$data->id")); ?>' >
                                        <?php echo csrf_field(); ?>
                                       <?php echo method_field('delete'); ?>
                                        <button id='custom-btn' data-confirm='Are you sure??' class="btn btn-danger"> <i class="bi bi-trash" onclick="return confirm('Are you sure??')"></i> </button>
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


  


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\invoice\Invoice\resources\views/client_type.blade.php ENDPATH**/ ?>