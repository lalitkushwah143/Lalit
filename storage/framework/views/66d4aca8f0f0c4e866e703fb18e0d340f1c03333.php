<?php $__env->startSection('content'); ?>   
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<div class="breadcrumbs " >
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1><?php echo e(__('messages.setting')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.setting')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="rowset">
      <div class="col-md-12 col-lg-9">
         <div class="card">
            <div class="card-body">
                <input type="hidden" name="isemailset" id="isemailset" value="<?php echo e(Config::get('mail.username')!=''?1:0); ?>"/>
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active show" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true"><?php echo e(__('messages.general_sec')); ?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"><?php echo e(__('messages.soical_sec')); ?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="shipping-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="true"><?php echo e(__('messages.shipping')); ?> <?php echo e(__('messages.section')); ?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="true"><?php echo e(__('messages.payment_method')); ?> <?php echo e(__('messages.section')); ?></a>
                  </li>
               </ul>
               <div class="tab-content pl-3 p-1" id="myTabContent">
                  <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                     <div class="cmr1">
                        
                                           <div class="form-group col-md-12">
                                              <div class="form-group col-md-6">
                          <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.com_logo')); ?> <b><?php echo e(__('messages.img_tr')); ?> (128X61)</b>
                              <span class="reqfield">*</span>
                              </label>
                        <div id="uploaded_image">
                            <div class="upload-btn-wrapper">
                                <button class="btn imgcatlog">
                                   <input type="hidden" name="real_logo" id="real_logo" value="<?= isset($data->logo)?$data->logo:""?>"/>
                                                   <?php 
                                                         if(isset($data->logo)){
                                                             $path=asset('public/Ecommerce/images/')."/".$data->logo;
                                                         }
                                                         else{
                                                             $path=asset('public/Ecommerce/images/logo1.png');
                                                         }
                                                   ?>
                                                <img src="<?php echo e($path); ?>" alt="..." class="img-thumbnail"  id="img_logo" >
                                                </button>
                                                <input type="hidden" name="logo" id="logo"/>
                                                <input type="file" name="upload_image_logo" id="upload_image_logo" />
                                             </div>
                                          </div>
                                          </div>
                         <div class="form-group col-md-5">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.site_rtl')); ?>

                               <a href="<?php echo e(url('admin/changesettingstatus/is_rtl')); ?>">
                                   <?php if($data->is_rtl==0): ?>
                                     <i class="fa fa-toggle-off" style="font-size: xx-large;font-weight: bolder;color: blue;"></i>
                                   <?php else: ?>
                                      <i class="fa fa-toggle-on" style="font-size: xx-large;font-weight: bolder;color: blue;"></i>
                                   <?php endif; ?>
                                   
                               </a>
                              </label>
                                </br>
                               <?php if($data->is_web==1): ?>
                               <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.site_color_setting')); ?>

                              </label>
                              <a href="<?php echo e(url('admin/changesettingstatus/set_show')); ?>">
                                   <?php if($data->set_show==0): ?>
                                     <i class="fa fa-toggle-on" style="font-size: xx-large;font-weight: bolder;color: blue;"></i>
                                   <?php else: ?>
                                      <i class="fa fa-toggle-off" style="font-size: xx-large;font-weight: bolder;color: blue;"></i>
                                   <?php endif; ?>
                              </a>
                              <?php endif; ?>
                             
                           </div>
                         
                        </div>
                           <div class="form-group col-md-12">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.company_name')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="company_name" placeholder="<?php echo e(__('messages.company_name')); ?>" class="form-control" name="company_name" required value="<?php echo e($data->company_name); ?>">
                           </div>
                        <div class="form-group col-md-12 paddiv">
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.email')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="email" placeholder="<?php echo e(__('messages.email')); ?>" class="form-control" name="email" required value="<?php echo e($data->email); ?>">
                           </div>
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.phone')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="phone" placeholder="<?php echo e(__('messages.phone')); ?>" class="form-control" name="phone" required value="<?php echo e($data->phone); ?>">
                           </div>
                        </div>
                        
                        <div class="form-group col-md-12 paddiv">
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.working_day')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="working_day" placeholder="<?php echo e(__('messages.working_placeholder')); ?>" class="form-control" name="working_day" required value="<?php echo e($data->working_day); ?>">
                           </div>
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.helpline')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="helpline" placeholder="<?php echo e(__('messages.helpline')); ?>" class="form-control" name="helpline" required value="<?php echo e($data->helpline); ?>">
                           </div>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.newsletter')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <textarea  id="newsletter" placeholder="<?php echo e(__('messages.newsletter')); ?>" class="form-control" name="newsletter" required ><?php echo e($data->newsletter); ?></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.main_feature')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <textarea id="main_feature" placeholder="<?php echo e(__('messages.main_feature')); ?>" class="form-control h150" name="main_feature" required ><?php echo e($data->main_feature); ?></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.address')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <textarea  id="address" placeholder="<?php echo e(__('messages.address')); ?>" class="form-control h150" name="address" required ><?php echo e($data->address); ?></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.default_country')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <select class="form-control" name="default_country" id="default_country" required="">
                              <option value=""><?php echo e(__('messages.select_country')); ?></option>
                              <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $co): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($co->id); ?>" <?=$data->default_country ==$co->id ? ' selected="selected"' : '';?>><?php echo e($co->nicename); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.default_locales')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <select class="form-control" name="default_locale" id="default_locale" required="">
                              <option value=""><?php echo e(__('messages.select_locale')); ?></option>
                              <?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $la): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($la->id); ?>" <?=$data->default_locale ==$la->id ? ' selected="selected"' : '';?>><?php echo e($la->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.default_timezone')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <select class="form-control" name="timezone" id="timezone" required="">
                              <option value=""><?php echo e(__('messages.select_timezone')); ?></option>
                              <?php $__currentLoopData = $timezone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tz=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($tz); ?>" <?=$data->default_timezone ==$tz ? ' selected="selected"' : '';?>><?php echo e($value); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                        </div>
                        <div class="form-group col-md-12">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.default_currency')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <select class="form-control" name="currency" id="currency" required="">
                              <option value="<?php echo e($data->default_currency); ?>" selected><?php echo e($data->default_currency); ?></option>
                              <?php echo $__env->make('admin.setting.currency', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           </select>
                        </div>
                        <div class="form-group col-md-12 cmr1" >
                           <div class="col col-md-12">
                              <div class="form-check">
                                 <div class="status">
                                    <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="is_customer_order" onclick="changeboxoption(this.value,'is_customer_order')" name="is_customer_order" value="1" class="form-check-input" <?=$data->customer_order_status =='1' ? ' checked="checked"' : '';?>>
                                    <?php echo e(__('messages.customer_order_confirm_email')); ?></label>
                                 </div>
                              </div>
                              <div class="form-check hidd">
                                 <div class="status">
                                    <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="is_email_confirm" name="is_email_confirm" value="1" class="form-check-input" <?=$data->customer_reg_email =='1' ? ' checked="checked"' : '';?>>
                                    <?php echo e(__('messages.is_email_confirm')); ?></label>
                                 </div>
                              </div>
                              <div class="form-check">
                                 <div class="status">
                                    <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="is_admin_send_mail" onclick="changeboxoption(this.value,'is_admin_send_mail')" name="is_admin_send_mail" value="1" class="form-check-input" <?=$data->admin_order_mail =='1' ? ' checked="checked"' : '';?>>
                                    <?php echo e(__('messages.is_admin_send_mail')); ?></label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12"> 
                                <?php if(Session::get("is_demo")=='1'): ?>
                                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary florig">
                                               <?php echo e(__('messages.save')); ?>

                                        </button>
                                     <?php else: ?>
                                         <button class="btn btn-primary florig" type="button" onclick="savegeneralinfo()" > <?php echo e(__('messages.update')); ?></button>
                                     <?php endif; ?> 
                         
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                     <div class="cmr1">
                        <div class="form-group col-md-12 paddiv" style="display:none">
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label" style="display:none">
                              <?php echo e(__('messages.facebook_api_id')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="facebook_id" placeholder="<?php echo e(__('messages.facebook_api_id')); ?>" class="form-control" name="facebook_id" required value="<?php echo e($data->facebook_id); ?>">
                           </div>
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label" style="display:none">
                              <?php echo e(__('messages.facebook_secret')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="facebook_secret" placeholder="<?php echo e(__('messages.facebook_secret')); ?>" class="form-control" name="facebook_secret" required value="<?php echo e($data->facebook_secret); ?>">
                           </div>
                        </div>
                        <div class="form-group col-md-12 paddiv" style="display:none">
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.google_api_id')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="google_id" placeholder="<?php echo e(__('messages.google_api_id')); ?>" class="form-control" name="google_id" required value="<?php echo e($data->google_id); ?>">
                           </div>
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.google_secret')); ?>

                              <span class="reqfield">*</span>
                              </label>
                              <input type="text" id="google_secret" placeholder="<?php echo e(__('messages.google_secret')); ?>" class="form-control" name="google_secret" required value="<?php echo e($data->google_secret); ?>">
                           </div>
                        </div>
                        <div class="form-group col-md-12 cmr1">
                          
                              <div class="form-check">
                                 <div class="status">
                                    <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="is_facebook_required" name="is_facebook_required" value="1" class="form-check-input" <?=$data->facebook_active =='1' ? ' checked="checked"' : '';?>>
                                    <?php echo e(__('messages.enable_facebook_login')); ?></label>
                                 </div>
                              </div>
                              <div class="form-check">
                                 <div class="status">
                                    <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="is_google_required" name="is_google_required" value="1" class="form-check-input" <?=$data->google_active =='1' ? ' checked="checked"' : '';?>>
                                    <?php echo e(__('messages.enable_google_login')); ?></label>
                                 </div>
                              </div>
                         
                        </div>
                        <p><?php echo e(__('messages.soical_note')); ?> :- </p>
                            <span><b><?php echo e(__('messages.facebook_redirect_url')); ?>:- <?php echo e(url('/')); ?>/auth/facebook/callback</b></span><br>
                            <span><b><?php echo e(__('messages.google_redirect_url')); ?>:- <?php echo e(url('/')); ?>/auth/google/callback</b></span>
                        <div class="form-group col-md-12">
                              <?php if(Session::get("is_demo")=='1'): ?>
                                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary florig">
                                              <?php echo e(__('messages.update')); ?>

                                        </button>
                                     <?php else: ?>
                                             <button class="btn btn-primary florig" type="button" onclick="savesoicallogin()" ><?php echo e(__('messages.update')); ?></button>
                                     <?php endif; ?> 
                      
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                     <div class="cmr1">
                        <div class="table-responsive dtdiv">
                           <table id="shippingTable" class="table table-striped table-bordered dttablewidth">
                              <thead>
                                 <tr>
                                    <th><?php echo e(__('messages.id')); ?></th>
                                    <th><?php echo e(__('messages.label')); ?></th>
                                    <th><?php echo e(__('messages.cost')); ?></th>
                                    <th><?php echo e(__('messages.action')); ?></th>
                                 </tr>
                              </thead>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                     <div class="cmr1">
                        <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active show" id="pay1-tab" data-toggle="tab" href="#pay1" role="tab" aria-controls="pay1" aria-selected="true"><?php echo e(__('messages.paypal')); ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pay2-tab" data-toggle="tab" href="#pay2" role="tab" aria-controls="pay2" aria-selected="true"><?php echo e(__('messages.stripe')); ?></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pay3-tab" data-toggle="tab" href="#pay3" role="tab" aria-controls="pay3" aria-selected="true"><?php echo e(__('messages.case_on_delivery')); ?></a>
                           </li>
                        </ul>
                        <div class="tab-content pl-3 p-1" id="nav-tabContent">
                           <div class="tab-pane fade active show" id="pay1" role="tabpanel" aria-labelledby="pay1-tab">
                              <div class="cmr1">
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.status')); ?></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <div class="form-check">
                                          <div class="status">
                                             <label for="checkbox1" class="form-check-label ">
                                             <input type="checkbox" id="is_enable1" name="is_enable1" value="1" class="form-check-input" <?=$paymentmethod[0]->status =='1' ? ' checked="checked"' : '';?>><?php echo e(__('messages.enable')); ?> <?php echo e($paymentmethod[0]->label); ?>

                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.label')); ?> <span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <input type="text" id="pay1_label" placeholder="<?php echo e(__('messages.label')); ?>" class="form-control" value="<?php echo e($paymentmethod[0]->label); ?>" name="pay1_label" required>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.description')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <textarea id="pay1_desc" name="pay1_desc" required="" class="form-control"><?php echo e($paymentmethod[0]->description); ?>

                                       </textarea>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.sandbox')); ?></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <div class="form-check">
                                          <div class="status">
                                             <label for="checkbox1" class="form-check-label ">
                                             <input type="checkbox" id="is_paymentmode" name="is_paymentmode" value="1" class="form-check-input" <?=$paymentmethod[0]->payment_mode =='1' ? ' checked="checked"' : '';?>><?php echo e(__('messages.use_sandbox')); ?>

                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.api_key')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <input type="text" id="pay1_key" placeholder="<?php echo e(__('messages.api_key')); ?>" class="form-control" value="<?php echo e($paymentmethod[0]->payment_key); ?>" name="pay1_key" required>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.secret')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <input type="password" id="pay1_secret_key" placeholder="<?php echo e(__('messages.secret')); ?>" class="form-control" value="<?php echo e($paymentmethod[0]->payment_secret); ?>" name="pay1_secret_key" required>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-12">
                                     <?php if(Session::get("is_demo")=='1'): ?>
                                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary florig">
                                              <?php echo e(__('messages.update')); ?>

                                        </button>
                                     <?php else: ?>
                                             <button class="btn btn-primary florig" type="button" onclick="changepayment(1)" ><?php echo e(__('messages.update')); ?></button>
                                     <?php endif; ?> 
                                  
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pay2" role="tabpanel" aria-labelledby="pay2-tab">
                              <div class="cmr1">
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.status')); ?></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <div class="form-check">
                                          <div class="status">
                                             <label for="checkbox1" class="form-check-label ">
                                             <input type="checkbox" id="is_enable2" name="is_enable2" value="1" class="form-check-input" <?=$paymentmethod[1]->status =='1' ? ' checked="checked"' : '';?>><?php echo e(__('messages.enable')); ?> <?php echo e($paymentmethod[1]->label); ?>

                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.label')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <input type="text" id="pay2_label" placeholder="<?php echo e(__('messages.label')); ?>" class="form-control" value="<?php echo e($paymentmethod[1]->label); ?>" name="pay2_label" required>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.description')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <textarea id="pay2_desc" name="pay2_desc"  class="form-control" required=""><?php echo e($paymentmethod[1]->description); ?>

                                       </textarea>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.api_key')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <input type="text" id="pay2_key" placeholder="<?php echo e(__('messages.api_key')); ?>" class="form-control" value="<?php echo e($paymentmethod[1]->payment_key); ?>" name="pay2_key" required>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.secret')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <input type="password" id="pay2_secret_key" placeholder="<?php echo e(__('messages.secret')); ?>" class="form-control" value="<?php echo e($paymentmethod[1]->payment_secret); ?>" name="pay2_secret_key" required>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-12">
                                      <?php if(Session::get("is_demo")=='1'): ?>
                                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary florig">
                                              <?php echo e(__('messages.update')); ?>

                                        </button>
                                     <?php else: ?>
                                               <button class="btn btn-primary florig" type="button"  onclick="changepayment(2)" ><?php echo e(__('messages.update')); ?></button>
                                     <?php endif; ?> 
                                 
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pay3" role="tabpanel" aria-labelledby="pay3-tab">
                              <div class="cmr1">
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.status')); ?></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <div class="form-check">
                                          <div class="status">
                                             <label for="checkbox1" class="form-check-label ">
                                             <input type="checkbox" id="is_enable3" name="is_enable3" value="1" class="form-check-input" <?=$paymentmethod[2]->status =='1' ? ' checked="checked"' : '';?>><?php echo e(__('messages.enable')); ?> <?php echo e($paymentmethod[2]->label); ?>

                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.label')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <input type="text" id="pay3_label" placeholder="<?php echo e(__('messages.label')); ?>" class="form-control" value="<?php echo e($paymentmethod[2]->label); ?>" name="pay3_label" required>
                                    </div>
                                 </div>
                                 <div class="row form-group col-md-12">
                                    <div class="col col-md-3">
                                       <label for="text-input" class=" form-control-label"><?php echo e(__('messages.description')); ?><span class="reqfield">*</span></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <textarea id="pay3_desc" name="pay3_desc"  class="form-control" required=""><?php echo e($paymentmethod[2]->description); ?>

                                       </textarea>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-12">
                                       <?php if(Session::get("is_demo")=='1'): ?>
                                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary florig">
                                              <?php echo e(__('messages.update')); ?>

                                        </button>
                                     <?php else: ?>
                                               <button class="btn btn-primary florig" type="button"  onclick="changepayment(3)" ><?php echo e(__('messages.update')); ?></button>
                                     <?php endif; ?>
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="editshipping" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="smallmodalLabel"><?php echo e(__('messages.edit')); ?> <?php echo e(__('messages.shipping_method')); ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="<?php echo e(url('admin/updateshipping')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" id="id" />
            <div class="modal-body">
               <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.label')); ?> </label>
                  <input id="label" name="label" type="text" class="form-control"  value="" readonly="">
               </div>
               <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.cost')); ?> </label>
                  <input id="cost" name="cost" type="text" class="form-control"  value="" >
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('messages.cancel')); ?> </button>
               <button type="submit" class="btn btn-primary"><?php echo e(__('messages.update')); ?> </button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/admin/setting/setting.blade.php ENDPATH**/ ?>