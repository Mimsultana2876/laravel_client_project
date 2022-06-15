  
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
                        <h4 class="page-title">Add Project Info</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Project Information</li>
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
                            <form action='<?php echo e(url("admin/insert_project_info")); ?>' method="POST"  class="form-horizontal form-material mx-2">
                              <?php echo csrf_field(); ?>
                            <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Client Type</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <select id="c_type" name='c_type_id' class="form-select shadow-none form-control-line" >
                                            <option value="first">Select Client Type</option>
                                            <?php $__currentLoopData = $query_c_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->client_type_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group d-flex" >
                                    <label class="col-sm-12" style="width: 25%;" >Client Name</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <select disabled name='c_info_id' id="client_name_select" class="form-select shadow-none form-control-line" >
                                            <option value="">Select Client Name</option>
                                            <?php $__currentLoopData = $query_c_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->c_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group d-flex domain">
                                    <label class="col-sm-12" style="width: 25%;">Domain Name</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='domain_name' id="domain_name" type="text" placeholder="Insert Domain Name" class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group d-flex domain">
                                    <label class="col-sm-12" style="width: 25%;">Start Date</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='s_domain_date' id="s_domain_date" type="date" class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group d-flex domain">
                                    <label class="col-sm-12" style="width: 25%;">End Date</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='e_domain_date'id="e_domain_date" type="date" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group d-flex hosting">
                                    <label class="col-sm-12" style="width: 25%;">Hosting Package</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='hosting_name' id="hosting_name" type="text" placeholder="Insert Hosting Package" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group d-flex hosting">
                                    <label class="col-sm-12" style="width: 25%;">Start Date</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='s_hosting_date' id="s_hosting_date" type="date" class="form-control form-control-line" >
                                    </div>
                                </div>

                                <div class="form-group d-flex project">
                                    <label class="col-sm-12" style="width: 25%;">Project Name</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='project_name' id="project_name" type="text" placeholder="Insert Project Name" class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group d-flex project">
                                    <label class="col-sm-12" style="width: 25%;">Project Details</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <textarea name='project_details' id="project_details" rows="3" class="form-control form-control-line"  placeholder="Project Details"></textarea>
                                    </div>
                                </div>
                                <div class="form-group d-flex project">
                                    <label class="col-sm-12" style="width: 25%;">Start Date</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='project_start_date' id="s_project_date" type="date"  class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group d-flex project">
                                    <label class="col-sm-12" style="width: 25%;">Time Quote</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='porject_time_quote' id="project_quote" type="text" class="form-control form-control-line" >
                                    </div>
                                </div>
                               
                                <div class="form-group d-flex">
                                    <div class="col-sm-12" style="width: 25%;"></div>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <button  class="btn btn-success text-white" id="insert_project">Save</button>
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
                        <form action='<?php echo e(url("admin/update_project_info")); ?>' method="POST" class="form-horizontal form-material mx-2">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                            <div class="form-group d-flex">
                                    <label class="col-sm-12" style="width: 25%;">Edit Client Type</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <select id="select_input_edit" name='c_type_id_edit' class="form-select shadow-none form-control-line" value=''>
                                            <option value="">Select Client Type</option>
                                            <?php $__currentLoopData = $query_c_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->client_type_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group d-flex" >
                                    <label class="col-sm-12" style="width: 25%;" >Edit Client Name</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <select disabled name='c_info_id' id="client_name_select_edit" class="form-select shadow-none form-control-line" >
                                            <option value="">Select Client Name</option>
                                            <?php $__currentLoopData = $query_c_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->c_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group d-flex edit_domain">
                                    <label class="col-sm-12" style="width: 25%;">Edit Domain Name</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='domain_name_edit' id="edit_domain_name" type="text" placeholder="Insert Domain Name" class="form-control form-control-line" >
                                        <input type="hidden" id="domain_id_edit" name="domain_id_edit" value="">
                                    </div>
                                </div>
                                <div class="form-group d-flex edit_domain">
                                    <label class="col-sm-12" style="width: 25%;">Edit Start Date</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='s_domain_date' id="s_domain_date_edit" type="date" class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group d-flex edit_domain">
                                    <label class="col-sm-12" style="width: 25%;">Edit End Date</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='e_domain_date'id="e_domain_date_edit" type="date" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group d-flex edit_hosting">
                                    <label class="col-sm-12" style="width: 25%;">Edit Hosting Package</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='hosting_name' id="hosting_name_edit" type="text" placeholder="Insert Hosting Package" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group d-flex edit_hosting">
                                    <label class="col-sm-12" style="width: 25%;">Edit Start Date</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='s_hosting_date' id="s_hosting_date_edit" type="date" class="form-control form-control-line" >
                                    </div>
                                </div>

                                <div class="form-group d-flex edit_project">
                                    <label class="col-sm-12" style="width: 25%;">Edit Project Name</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='project_name' id="project_name_edit" type="text" placeholder="Insert Project Name" class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group d-flex edit_project">
                                    <label class="col-sm-12" style="width: 25%;">Edit Project Details</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <textarea name='project_details' id="project_details_edit" rows="3" class="form-control form-control-line"  placeholder="Project Details"></textarea>
                                    </div>
                                </div>
                                <div class="form-group d-flex edit_project">
                                    <label class="col-sm-12" style="width: 25%;">Edit Start Date</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='project_start_date' id="s_project_date_edit" type="date"  class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group d-flex edit_project">
                                    <label class="col-sm-12" style="width: 25%;">Edit Time Quote</label>
                                    <div class="col-sm-12" style="width: 75%;">
                                        <input name='porject_time_quote' id="project_quote_edit" type="text" class="form-control form-control-line" >
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






            <?php if(isset($all)): ?>
            <div class="row">
                    <!-- column -->
                    <div class="col-12   m-auto">
                        <div class="card">
                        <h4>Domain Details</h4>
                            <div class="table-responsive">
                                <table id="datatable-domain" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center" style="display:none !important;">S.L-temporary.</th>
                                            <th class="border-top-0 text-center">S.L.</th>
                                            <th class="border-top-0 text-center">Client Type</th>
                                            <th class="border-top-0 text-center">Client Name</th>
                                            <th class="border-top-0 text-center">Domain Name</th>
                                            <th class="border-top-0 text-center">Start Date</th>
                                            <th class="border-top-0 text-center">End Date</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $query_domain_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <!--  -->
                                            <input type="hidden" id="domain_unique_id" name="custId" value="<?php echo e($data->c_type_id); ?>">
                                            
                                            <!-- <input type="hidden" id="domain_id" name="domain_id" value="<?php echo e($data->id); ?>"> -->
                                            <td id="domain_id" style='line-height: 0.5;padding: .5rem;text-align: center; display:none !important;'><?php echo e($data->id); ?>

                                            </td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($loop->index+1); ?>

                                            </td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->c_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->domain_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->domain_start_date); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->domain_end_date); ?></td>
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
                <!-- ***************** -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12   m-auto">
                        <div class="card">
                        <h4>Hosting Package Details</h4>
                            <div class="table-responsive">
                                <table id="datatable-hosting" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center" style="display:none !important;">S.L-temporary.</th>

                                            <th class="border-top-0 text-center">S.L.</th>
                                            <th class="border-top-0 text-center">Client Type</th>
                                            <th class="border-top-0 text-center">Client Name</th>
                                            <th class="border-top-0 text-center">Hosting Package</th>
                                            <th class="border-top-0 text-center">Start Date</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $query_hosting_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <!--  -->
                                        <input type="hidden" id="hosting_unique_id" name="custId" value="<?php echo e($data->c_type_id); ?>">
                                            
                                            <!-- <input type="hidden" id="domain_id" name="domain_id" value="<?php echo e($data->id); ?>"> -->
                                            <td id="hosting_id" style='line-height: 0.5;padding: .5rem;text-align: center; display:none !important;'><?php echo e($data->id); ?>

                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($loop->index+1); ?>

                                            </td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->c_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->hosting_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->hosting_start_date); ?></td>
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
                <!-- ******************* -->

                <div class="row">
                    <!-- column -->
                    <div class="col-12   m-auto">
                        <div class="card">
                            <h4>Project Details</h4>
                            <div class="table-responsive">
                                <table id="datatable-project" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center">S.L.</th>
                                            <th class="border-top-0 text-center">Client Type</th>
                                            <th class="border-top-0 text-center">Client Name</th>
                                            <th class="border-top-0 text-center">Project Name</th>
                                            <th class="border-top-0 text-center">Project Details</th>
                                            <th class="border-top-0 text-center">Project Start Date</th>
                                            <th class="border-top-0 text-center">Project Time Quote</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $query_other_project_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <!--  -->
                                        <input type="hidden" id="project_unique_id" name="custId" value="<?php echo e($data->c_type_id); ?>">
                                            
                                            <!-- <input type="hidden" id="domain_id" name="domain_id" value="<?php echo e($data->id); ?>"> -->
                                            <td id="project_id" style='line-height: 0.5;padding: .5rem;text-align: center; display:none !important;'><?php echo e($data->id); ?>

                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($loop->index+1); ?>

                                            </td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->c_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->project_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->project_details); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->project_start_date); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->project_time_quote); ?></td>
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
            
            <?php elseif(isset($query_domain_info) && $query_domain_info[0]->client_type_name == 'Domain'): ?>
                <div class="row">
                    <!-- column -->
                    <div class="col-12   m-auto">
                        <div class="card">
                        <h4>Domain Details</h4>
                            <div class="table-responsive">
                                <table id="datatable-domain" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center">S.L.</th>
                                            <th class="border-top-0 text-center">Client Type</th>
                                            <th class="border-top-0 text-center">Client Name</th>
                                            <th class="border-top-0 text-center">Domain Name</th>
                                            <th class="border-top-0 text-center">Start Date</th>
                                            <th class="border-top-0 text-center">End Date</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $query_domain_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <!--  -->
                                            
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($loop->index+1); ?>

                                            </td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->c_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->domain_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->domain_start_date); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->domain_end_date); ?></td>
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
              

                <?php elseif(isset($query_hosting_info) && $query_hosting_info[0]->client_type_name == 'Hosting'): ?>
                <div class="row">
                    <!-- column -->
                    <div class="col-12   m-auto">
                        <div class="card">
                        <h4>Hosting Package Details</h4>
                            <div class="table-responsive">
                                <table id="datatable-hosting" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center">S.L.</th>
                                            <th class="border-top-0 text-center">Client Type</th>
                                            <th class="border-top-0 text-center">Client Name</th>
                                            <th class="border-top-0 text-center">Hosting Package</th>
                                            <th class="border-top-0 text-center">Start Date</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $query_hosting_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <!--  -->
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($loop->index+1); ?>

                                            </td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->c_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->hosting_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->hosting_start_date); ?></td>
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
               

                <?php elseif(isset($query_other_project_info) && $query_other_project_info[0]->client_type_name == 'project'): ?>
                <div class="row">
                    <!-- column -->
                    <div class="col-12   m-auto">
                        <div class="card">
                            <h4>Project Details</h4>
                            <div class="table-responsive">
                                <table id="datatable-project" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center">S.L.</th>
                                            <th class="border-top-0 text-center">Client Type</th>
                                            <th class="border-top-0 text-center">Client Name</th>
                                            <th class="border-top-0 text-center">Project Name</th>
                                            <th class="border-top-0 text-center">Project Details</th>
                                            <th class="border-top-0 text-center">Project Start Date</th>
                                            <th class="border-top-0 text-center">Project Time Quote</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $query_other_project_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <!--  -->
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($loop->index+1); ?>

                                            </td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->client_type_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem;text-align: center'><?php echo e($data->c_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->project_name); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->project_details); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->project_start_date); ?></td>
                                            <td style='line-height: 0.5;padding: .5rem; text-align: center'><?php echo e($data->project_time_quote); ?></td>
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
              
                <?php endif; ?>

                







            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved, Designed and Developed by
                <a href="#">Europeant IT Solutions</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
            
        <?php $__env->stopSection(); ?>


        <?php $__env->startSection('javaScript'); ?>
        <script>

                $('.edit_btn').each(function(i)
                {

                    $(this).on('click',function()
                    {
                        var id = $(this).attr('pid');
                        var tr = $(this).closest("tr");
                        // var input1 = $(this).closest("#domain_id");
                        // console.log("input1",input1);
                        // var length = $(tr).find("td").length;
                        // console.log($(tr).find("td").length)
                        // console.log($(tr).find("td:eq(0)").text());
                        // $("#c_type_name").val(tdProx);
                        $('#insert_form').hide();
                        $('#edit_form').show();
                        
                        var c_type = $(tr).find("td:eq("+2+")").text().toLowerCase();
                        var c_type_id = ""
                        console.log("yes",c_type)
                        $('html, body').animate({ scrollTop: 0 }, 1000);
                        // console.log($('.edit_domain').css("display"))
                        if(c_type == 'domain'){ // or this.value == 'volvo'
                    // console.log($('.domain').css("display"));
                            c_type_id = $('#domain_unique_id').val()
                            
                            if($('.edit_domain').css("display")=="none"){
                                $('.edit_domain').attr('style', 'display: flex !important');
                                $('.edit_hosting').attr('style', 'display: none !important');
                                $('.edit_project').attr('style', 'display: none !important');
                                
                                
                            }

                            $('#edit_domain_name').val($(tr).find("td:eq("+4+")").text())
                            $('#domain_id_edit').val($(tr).find("td:eq("+0+")").text())
                            console.log("sss",$(tr).find("td:eq("+0+")").text())
                            $('#s_domain_date_edit').val($(tr).find("td:eq("+5+")").text())
                            $('#e_domain_date_edit').val($(tr).find("td:eq("+6+")").text())
                            $("#select_input_edit option:eq(1)").text($(tr).find("td:eq("+2+")").text()).prop('selected', true)
                            
                            // $('.hosting').attr('style', 'display: none !important');
                            // $('.project').attr('style', 'display: none !important');
                            $('#client_name_select_edit').removeAttr("disabled");
                            // var rowCount = $('#datatable-domain tbody tr').length;
                            // console.log("yes",rowCount);

                            $.ajax({
                            type: "GET",
                            dataType: 'json',
                            url: "client_info_ajax/"+c_type_id,
                            success:function(respose){
                                console.log(respose);
                                var data = '<option value="">Select Client Name</option>';
                                $.each(respose,function(key,value){
                                    data = data + '<option value="'+value.id+'">'+value.c_name+'</option>';
                                    
                                });
                                
                                $('#client_name_select_edit').html(data);
                                i = i+1
                                $("#client_name_select_edit option:eq("+i+")").text($(tr).find("td:eq("+3+")").text()).prop('selected', true)
                            }
                        });
                    }
                    else if (c_type == 'hosting'){
                        $('html, body').animate({ scrollTop: 0 }, 1000);
                        if($('.edit_hosting').css("display")=="none"){
                            $('.edit_hosting').attr('style', 'display: flex !important');
                            $('.edit_domain').attr('style', 'display: none !important');
                            $('.edit_project').attr('style', 'display: none !important');
                            // $('.project').attr('style', 'display: none !important');
                            
                        }
                        $('#client_name_select_edit').removeAttr("disabled");
                        c_type_id = $('#hosting_unique_id').val()
                        $('#hosting_name_edit').val($(tr).find("td:eq("+4+")").text())
                        $('#domain_id_edit').val($(tr).find("td:eq("+0+")").text())
                        console.log("sss",$(tr).find("td:eq("+0+")").text())
                        $('#s_hosting_date_edit').val($(tr).find("td:eq("+5+")").text())
                        $("#select_input_edit option:eq(2)").text($(tr).find("td:eq("+2+")").text()).prop('selected', true)
                        $.ajax({
                            type: "GET",
                            dataType: 'json',
                            url: "client_info_ajax/"+c_type_id,
                            success:function(respose){
                                console.log(respose);
                                var data = '<option value="">Select Client Name</option>';
                                $.each(respose,function(key,value){
                                    data = data + '<option value="'+value.id+'">'+value.c_name+'</option>';
                                    
                                });
                                $('#client_name_select_edit').html(data);
                                i = i+1
                                console.log(i)
                                console.log($(tr).find("td:eq("+3+")").text());
                                $("#client_name_select_edit option:eq("+i+")").text($(tr).find("td:eq("+3+")").text()).prop('selected', true)
                            }
                        });
                    
                    }
                    else{
                        $('html, body').animate({ scrollTop: 0 }, 1000);
                        $('.edit_hosting').attr('style', 'display: none !important');
                        $('.edit_domain').attr('style', 'display: none !important');
                        $('.edit_project').attr('style', 'display: flex !important');
                        $('#client_name_select_edit').removeAttr("disabled");

                        c_type_id = $('#project_unique_id').val()
                        $('#project_name_edit').val($(tr).find("td:eq("+4+")").text())
                        $('#domain_id_edit').val($(tr).find("td:eq("+0+")").text())
                        console.log("sss",$(tr).find("td:eq("+0+")").text())
                        $('#project_details_edit').val($(tr).find("td:eq("+5+")").text())
                        $('#s_project_date_edit').val($(tr).find("td:eq("+6+")").text())
                        $('#project_quote_edit').val($(tr).find("td:eq("+7+")").text())
                        $("#select_input_edit option:eq(3)").text($(tr).find("td:eq("+2+")").text()).prop('selected', true)

                        $.ajax({
                            type: "GET",
                            dataType: 'json',
                            url: "client_info_ajax/"+c_type_id,
                            success:function(respose){
                                console.log(respose);
                                var data = '<option value="">Select Client Name</option>';
                                $.each(respose,function(key,value){
                                    data = data + '<option value="'+value.id+'">'+value.c_name+'</option>';
                                    
                                });
                                $('#client_name_select_edit').html(data);
                                i = i+1
                                console.log(i)
                                console.log($(tr).find("td:eq("+3+")").text());
                                $("#client_name_select_edit option:eq("+i+")").text($(tr).find("td:eq("+3+")").text()).prop('selected', true)
                            }
                        });
                    }
                });

            });


               

            $('#back').on('click',function(){
             
                $('#edit_form').hide();
                $('#insert_form').show();
            });

            $('#c_type').change(function(){
                // console.log();
               
                var value = $(this).find("option:selected").text().toLowerCase();
                if(value == 'domain'){ // or this.value == 'volvo'
                    // console.log($('.domain').css("display"));
                    if($('.domain').css("display")=="none"){
                        $('.domain').attr('style', 'display: flex !important');
                        $('.hosting').attr('style', 'display: none !important');
                        $('.project').attr('style', 'display: none !important');
                        $('#client_name_select').removeAttr("disabled");
                    }
                    
                }
                else if (value == 'hosting'){
                    if($('.hosting').css("display")=="none"){
                        $('.hosting').attr('style', 'display: flex !important');
                        $('.domain').attr('style', 'display: none !important');
                        $('.project').attr('style', 'display: none !important');
                        $('#client_name_select').removeAttr("disabled");
                    }
                }
                else if ($(this).find("option:selected").val() == 'first'){
                    $('.hosting').attr('style', 'display: none !important');
                    $('.domain').attr('style', 'display: none !important');
                    $('.project').attr('style', 'display: none !important');
                    $( "#client_name_select" ).prop( "disabled", true );
                }
                else{
                    $('.hosting').attr('style', 'display: none !important');
                    $('.domain').attr('style', 'display: none !important');
                    $('.project').attr('style', 'display: flex !important');
                    $( "#client_name_select" ).prop( "disabled", false );
                    
                }

                var client_type_id = $(this).val();
                if(client_type_id!="first"){
                    $.ajaxSetup({
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                    });
                    $.ajax({
                        type: "GET",
                        dataType: 'json',
                        url: "client_info_ajax/"+client_type_id,
                        success:function(respose){
                            console.log(respose);
                            var data = '<option value="">Select Client Name</option>';
                            $.each(respose,function(key,value){
                                data = data + '<option value="'+value.id+'">'+value.c_name+'</option>';
                                
                            });
                            $('#client_name_select').html(data);
                        }
                    });
                }
            });

            $('#select_input_edit').change(function(){
                // console.log();
               
                var value = $(this).find("option:selected").text().toLowerCase();
                if(value == 'domain'){ // or this.value == 'volvo'
                    // console.log($('.domain').css("display"));
                    if($('.domain').css("display")=="none"){
                        $('.domain').attr('style', 'display: flex !important');
                        $('.hosting').attr('style', 'display: none !important');
                        $('.project').attr('style', 'display: none !important');
                        $('#client_name_select').removeAttr("disabled");
                    }
                    
                }
                else if (value == 'hosting'){
                    if($('.hosting').css("display")=="none"){
                        $('.hosting').attr('style', 'display: flex !important');
                        $('.domain').attr('style', 'display: none !important');
                        $('.project').attr('style', 'display: none !important');
                        $('#client_name_select').removeAttr("disabled");
                    }
                }
                else if ($(this).find("option:selected").val() == 'first'){
                    $('.hosting').attr('style', 'display: none !important');
                    $('.domain').attr('style', 'display: none !important');
                    $('.project').attr('style', 'display: none !important');
                    $( "#client_name_select" ).prop( "disabled", true );
                }
                else{
                    $('.hosting').attr('style', 'display: none !important');
                    $('.domain').attr('style', 'display: none !important');
                    $('.project').attr('style', 'display: flex !important');
                    $( "#client_name_select" ).prop( "disabled", false );
                    
                }

                var client_type_id = $(this).val();
                if(client_type_id!="first"){
                    $.ajaxSetup({
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                    });
                    $.ajax({
                        type: "GET",
                        dataType: 'json',
                        url: "client_info_ajax/"+client_type_id,
                        success:function(respose){
                            console.log(respose);
                            var data = '<option value="">Select Client Name</option>';
                            $.each(respose,function(key,value){
                                data = data + '<option value="'+value.id+'">'+value.c_name+'</option>';
                                
                            });
                            $('#client_name_select_edit').html(data);
                        }
                    });
                }
            });

            // $("#insert_project").click(function(){
            //     var c_type_id = $("#c_type option:selected").val();
            //     var client_info_id = $("#client_name_select option:selected").val();
            //     var c_type_name = $("#c_type option:selected").text().toLowerCase()
            //     var domain_name = $("#domain_name").val();
            //     var s_domain_date = $("#s_domain_date").val();
            //     var e_domain_date = $("#e_domain_date").val();
            //     var url1 = '<?php echo e(url('admin/insert_project_info')); ?>';
            //     if(c_type_name=="domain"){
            //         console.log(e_domain_date);
            //         $.ajaxSetup({
            //             headers: {
            //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //                 }
            //         });
            //         $.ajax({
            //             url: "insert_project_info",
            //             type: "POST",
            //             // dataType: 'json',
            //             data:{
            //                 c_type_id:c_type_id, 
            //                 client_info_id:client_info_id,
            //                 c_type_name:c_type_name, 
            //                 domain_name:domain_name,
            //                 s_domain_date:s_domain_date, 
            //                 e_domain_date:e_domain_date
            //             },
                        
                        
            //             success:function(respose){
            //                 console.log("yes");
            //                 // var data = '<option value="">Select Client Name</option>';
            //                 // $.each(respose,function(key,value){
            //                 //     data = data + '<option value="'+value.id+'">'+value.c_name+'</option>';
                                
            //                 // });
            //                 // $('#client_name_select').html(data);
            //             }
            //         });

            //     }
            //     console.log(c_type_id,client_info_id);

            // });


        </script>
            
        <?php $__env->stopSection(); ?>

 
        
    
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_pro_11-06-22\Invoice\resources\views/project.blade.php ENDPATH**/ ?>