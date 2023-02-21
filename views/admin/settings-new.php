<form class="row g-3 forms" id="forms">
<?php 
echo CHtml::hiddenField('action','adminSettings');
FunctionsV3::addCsrfToken(false);
?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="navbar navbar-expand-xl">
        <div class="container-fluid">

          <div class="nav-tabs-responsive scrollbar-hidden shadown-none order-2 order-xl-1">
            
            <ul class="nav nav tabs border-0 mt-2 mt-xl-0">
                
                <li class="nav-item dropdown">
                  <a href="#tab1" class="navbar-nav-link active" data-bs-toggle="tab" data-bs-target="#tab1"><?php echo t("Website")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab2" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab2"><?php echo t("Map API Keys")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab3" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab3"><?php echo t("Google Recaptcha Settings")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab4" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab4"><?php echo t("Printing Options")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab5" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab5"><?php echo t("Login & Signup")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab6" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab6"><?php echo t("Terms and Conditions")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab7" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab7"><?php echo t("Reviews")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab8" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab8"><?php echo t("Website Security")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab9" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab9"><?php echo t("Website Timezone")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab10" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab10"><?php echo t("Website Ordering")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab11" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab11"><?php echo t("Menu Options")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab12" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab12"><?php echo t("Order Status")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab13" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab13"><?php echo t("Merchant Registration")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab14" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab14"><?php echo t("Address & Currency")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab15" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab15"><?php echo t("Home Search Area")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab16" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab16"><?php echo t("Order Cancellation")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab17" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab17"><?php echo t("Book a Table")?></a>
                </li>

                <li class="nav-item dropdown ms-1">
                  <a href="#tab18" class="navbar-nav-link" data-bs-toggle="tab" data-bs-target="#tab18"><?php echo t("Others")?></a>
                </li>

              </ul>

          </div>

        </div>
      </div>

      <div class="card-body tab-content border border-top-0 p-3">
        
        <div class="tab-pane fade show active" id="tab1">
          <div class="mb-3">
            <label class="form-label"><?php echo Yii::t("default","Title")?></label>  
            <?php 
            echo CHtml::textField('website_title',
            Yii::app()->functions->getOptionAdmin('website_title'),
            array(
            'class'=>"form-control",
            'placeholder'=>"Title of the website"
            ))
            ?> 
          </div>
            
            <?php 
            $country_list=require_once "CountryCode.php";
            $country_list2=$country_list;
            //array_unshift($country_list2,t("All"));
            
            $merchant_specific_country=Yii::app()->functions->getOptionAdmin('merchant_specific_country');
            if (!empty($merchant_specific_country)){
            $merchant_specific_country=json_decode($merchant_specific_country);
            }
            ?>
            <div class="mb-3"> 
              <label class="form-label"><?php echo t("Desktop Website Logo")?></label>
              <a href="javascript:;" id="sau_upload_file" 
              class="btn btn-secondary" data-progress="sau_progress" data-preview="website_logo_preview" data-field="photo">
                <?php echo t("Browse")?>
              </a>
            </div>

            <div class="sau_progress"></div>
            <p class="text-muted"><?php echo Yii::t("default","Desktop Website logo")?> 352x139</p>
            
            <div class="website_logo_preview">
            <?php 
            $website_logo = getOptionA('website_logo');
            if(!empty($website_logo)){
              echo '<img src="'.FunctionsV3::getImage($website_logo).'" class="img-thumbnail" id="logo-small"  />';
              echo CHtml::hiddenField('photo',$website_logo);
              echo '<br/>';
              echo '<a href="javascript:;" class="sau_remove_file" data-preview="website_logo_preview" >'.t("Remove image").'</a>';
            }
            ?>
            </div>

            <div style="height:30px;"></div>
	
            <!--MOBILE LOGO -->
            <div class="mb-3"> 
              <label class="form-label"><?php echo t("Mobile Website Logo")?></label>
              
              <a href="javascript:;" id="saup_upload_file" 
              class="btn btn-secondary" data-progress="saup_progress" data-preview="mobile_logo_preview" data-field="mobilelogo" >
              <?php echo t("Browse")?>
              </a>
            
            </div>
            
            <div class="saup_progress"></div>
            <div class="mobile_logo_preview">
              <?php 
            $mobilelogo = getOptionA('mobilelogo');
            if(!empty($mobilelogo)){
              echo '<img src="'.FunctionsV3::getImage($mobilelogo).'" class="img-thumbnail" id="logo-small"  />';
              echo CHtml::hiddenField('mobilelogo',$mobilelogo);
              echo '<br/>';
                echo '<a href="javascript:;" class="sau_remove_file" data-preview="mobile_logo_preview" >'.t("Remove image").'</a>';
            }
            ?>	 
            </div>
        </div>

        <div class="tab-pane fade" id="tab2">
          <div class="row mb-3">
          <label class="form-label"><?php echo t("Choose Map Provider")?></label>
          <?php 
          echo CHtml::dropDownList('map_provider',
          getOptionA('map_provider'),array(
            'google.maps'=>t("Google Maps (default)"),
            'mapbox'=>t("Mapbox"),
          ),array(
            'class'=>"form-select"    
          ));
          ?>
          </div>
          
          
          <h3><?php echo t("Distance results")?></h3>
          
          <?php $map_distance_results = getOptionA('map_distance_results')?>
          
          <div class="mytable" style="width:50%;">
            <div class="col-6">
              <?php echo CHtml::radioButton('map_distance_results',
              $map_distance_results==1?true:false
              ,array(
              'value'=>1,
              'class'=>"icheck"
              ))?>
              <?php echo t("Using straight line")?>
              <p class="text-muted" style="width:200px;">
              <?php echo t("This options does not use any api like google and mapbox for faster results")?>
              </p>
            </div>
            
            <div class="col-6">
              <?php echo CHtml::radioButton('map_distance_results',
              $map_distance_results==2?true:false
              ,array(
              'value'=>2,
              'class'=>"icheck"
              ))?>
              <?php echo t("Using map provider")?>
              <p class="text-muted" style="width:200px;">
              <?php echo t("This options will use api like google and mapbox")?>
              </p>
            </div>
          </div>
          
          <hr/>
          
            <h3><?php echo t("Google Maps")?></h3>
          
          <div class="mb-3">
          <label class="form-label"><?php echo t("Geocoding API Key")?></label>
          <?php 
          echo CHtml::textField('google_geo_api_key',
          Yii::app()->functions->getOptionAdmin('google_geo_api_key'),array(
          'class'=>"form-control"    
          ));
          ?>
          </div>
          
          <p class="text-sm text-muted">
          <?php echo t("This api key wil be use to get the distance, don't restrict this api key")?>
          </p>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo t("Google Maps JavaScript API")?></label>
          <?php 
          echo CHtml::textField('google_maps_api_key',
          Yii::app()->functions->getOptionAdmin('google_maps_api_key'),array(
          'class'=>"form-control"    
          ));
          ?>
          </div>
          
          <p class="text-sm text-muted">
          <?php echo t("This api key wil be using to plot the maps. you can restrict this api")?>
          </p>
          
          <p class="text-sm text-muted">
          <span style="color:red;"><?php echo t("Note")?>:</span>
          <?php echo t("these section is now mandatory in order for your search functions will work 100%")?><br/>
          <?php echo t("enabled Google Maps Distance Matrix API, Google Maps Geocoding API and Google Maps JavaScript API in your google developer account")?></p>
          
          
          
          <div class="row mb-3">
          <label class="form-label"><?php echo t("Method")?></label>
          <?php 
          echo CHtml::dropDownList('google_distance_method',getOptionA('google_distance_method'),array(	
          'driving'=>t("Driving"),
          'transit'=>t("Transit"),
          'walking'=>t("walking"),
          'bicycling'=>t("bicycling")
          ), array(
            'class'=>"form-select"
          ))
          ?>
          </div>
          
          <div style="height:20px;"></div>
          <a href="<?php echo Yii::app()->createUrl('admin/testmapapi')?>"
          class="btn btn-secondary"><?php echo t("Click here to test API")?></a>
          
          
          <hr/>
          
          
          <h3><?php echo t("Mapbox")?></h3>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo t("Access Token")?></label>
          <?php 
          echo CHtml::textField('mapbox_access_token',
          Yii::app()->functions->getOptionAdmin('mapbox_access_token'),array(
          'class'=>"form-control"    
          ));
          ?>
          </div>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo t("Default Zoom")?></label>
          <?php 
          echo CHtml::textField('mapbox_default_zoom',
          Yii::app()->functions->getOptionAdmin('mapbox_default_zoom'),array(
          'class'=>"numeric_only form-control",
          'placeholder'=>t("Default is 13")
          ));
          ?>
          </div>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo t("Method")?></label>
          <?php 
          echo CHtml::dropDownList('mapbox_method',getOptionA('mapbox_method'),array(	
            'driving'=>t("Driving"),
            'cycling'=>t("cycling"),
            'walking'=>t("walking"),
          ), array(
            'class'=>"form-select"
          ))
          ?>
          </div>
          
          <div style="height:20px;"></div>
          <a href="<?php echo Yii::app()->createUrl('admin/testmapapi')?>"
          class="btn btn-secondary"><?php echo t("Click here to test API")?></a>
          
          <hr/>
        </div>

        <div class="tab-pane fade" id="tab3">
          <h4><?php echo t("reCAPTCHA v3")?></h4>	
          <p class="text-sm text-muted"><?php echo t("Please generate keys for Google reCAPTCHA v3")?></p>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Site Key")?></label>
          <?php 
          echo CHtml::textField('captcha_site_key',
          Yii::app()->functions->getOptionAdmin('captcha_site_key')
          ,array(
          'class'=>"form-control"
          ))
          ?>
          </div>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Secret Key")?></label>
          <?php 
          echo CHtml::textField('captcha_secret',
          Yii::app()->functions->getOptionAdmin('captcha_secret')
          ,array(
          'class'=>"form-control"
          ))
          ?>
          </div>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Language")?></label>
          <?php 
          echo CHtml::textField('captcha_lang',
          Yii::app()->functions->getOptionAdmin('captcha_lang')
          ,array(
          'class'=>"form-control"
          ));  
          ?>
          <span class="text-muted"><?php echo t("default is = en");?></span>
          </div>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enable Customer signup")?></label>  
          <?php 
          echo CHtml::checkBox('captcha_customer_signup',
          Yii::app()->functions->getOptionAdmin('captcha_customer_signup')==2?true:false
          ,array(
          'class'=>"icheck form-control",
          'value'=>2
          ))
          ?>    
          </div>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enable Merchant signup")?></label>  
          <?php 
          echo CHtml::checkBox('captcha_merchant_signup',
          Yii::app()->functions->getOptionAdmin('captcha_merchant_signup')==2?true:false
          ,array(
          'class'=>"icheck",
          'value'=>2
          ))
          ?>    
          </div>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enable Customer login")?></label>  
          <?php 
          echo CHtml::checkBox('captcha_customer_login',
          Yii::app()->functions->getOptionAdmin('captcha_customer_login')==2?true:false
          ,array(
          'class'=>"icheck",
          'value'=>2
          ))
          ?>    
          </div>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enable Merchant login")?></label>  
          <?php 
          echo CHtml::checkBox('captcha_merchant_login',
          Yii::app()->functions->getOptionAdmin('captcha_merchant_login')==2?true:false
          ,array(
          'class'=>"icheck",
          'value'=>2
          ))
          ?>    
          </div>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enable Admin login")?></label>  
          <?php 
          echo CHtml::checkBox('captcha_admin_login',
          Yii::app()->functions->getOptionAdmin('captcha_admin_login')==2?true:false
          ,array(
          'class'=>"icheck",
          'value'=>2
          ))
          ?>    
          </div>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enable Order")?></label>  
          <?php 
          echo CHtml::checkBox('captcha_order',
          Yii::app()->functions->getOptionAdmin('captcha_order')==2?true:false
          ,array(
          'class'=>"icheck",
          'value'=>2
          ))
          ?>    
          </div>
          
          
          <?php if ( FunctionsV3::hasModuleAddon('driver')):?>
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enable Driver signup")?></label>  
          <?php 
          echo CHtml::checkBox('captcha_driver_signup',
          Yii::app()->functions->getOptionAdmin('captcha_driver_signup')==1?true:false
          ,array(
          'class'=>"icheck",
          'value'=>1
          ))
          ?>    
          </div>
          <?php endif;?>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enable Contact form")?></label>  
          <?php 
          echo CHtml::checkBox('captcha_contact_form',
          Yii::app()->functions->getOptionAdmin('captcha_contact_form')==1?true:false
          ,array(
          'class'=>"icheck",
          'value'=>1
          ))
          ?>    
          </div>
        </div>

        <div class="tab-pane fade" id="tab4">
          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Receipt Width")?></label>
          <?php 
          echo CHtml::textField('admin_printing_receipt_width',
          getOptionA('admin_printing_receipt_width')
          ,array(
          'class'=>"numeric_only form-control"
          ))
          ?>  
          <span><?php echo t("px")?></span>
          </div>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Font size")?></label>
          <?php 
          echo CHtml::textField('admin_printing_receipt_size',
          getOptionA('admin_printing_receipt_size')
          ,array(
          'class'=>"numeric_only form-control"
          ))
          ?>  
          <span><?php echo t("px")?></span>
          </div>

            
          
          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled logo on receipt")?>?</label>  
            <?php 
            echo CHtml::checkBox('website_enabled_rcpt',
            Yii::app()->functions->getOptionAdmin('website_enabled_rcpt')==2?true:false
            ,array(
            'class'=>"icheck",
            'value'=>2
            ))
            ?>  
          </div>

            <div class="row mb-3"> 
            <label class="form-label"><?php echo t("Receipt Logo")?></label>
            <a href="javascript:;" id="file_upload2" 
            class="btn btn-secondary" data-progress="file_upload2_progress" data-preview="file_upload2_preview" data-field="website_receipt_logo">
            <?php echo t("Browse")?>
            </a>
          </div>
          <div class="file_upload2_progress"></div>
          
          <div class="file_upload2_preview">
          <?php 
          $website_receipt_logo = getOptionA('website_receipt_logo');
          if(!empty($website_receipt_logo)){
            echo '<img src="'.FunctionsV3::getImage($website_receipt_logo).'" class="img-thumbnail" id="logo-small"  />';
            echo CHtml::hiddenField('website_receipt_logo',$website_receipt_logo);
            echo '<br/>';
            echo '<a href="javascript:;" class="sau_remove_file" data-preview="file_upload2_preview" >'.t("Remove image").'</a>';
          }
          ?>
          </div>
        </div>

        <div class="tab-pane fade" id="tab5">
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled Mobile Verification")?></label>  
          <?php 
          echo CHtml::checkBox('website_enabled_mobile_verification',
          Yii::app()->functions->getOptionAdmin('website_enabled_mobile_verification')=="yes"?true:false
          ,array(
          'class'=>"icheck website_enabled_mobile_verification",
          'value'=>"yes"
          ))
          ?>  
          </div>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled Email Verification")?></label>  
          <?php 
          echo CHtml::checkBox('theme_enabled_email_verification',
          Yii::app()->functions->getOptionAdmin('theme_enabled_email_verification')==2?true:false
          ,array(
          'class'=>"icheck theme_enabled_email_verification",
          'value'=>2
          ))
          ?>  
          </div>
          
          <h3><?php echo t("Registration custom fields")?></h3>
          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Add New Custom Field")?></label>  
          <?php   
          echo CHtml::textField('client_custom_field_name1',
          Yii::app()->functions->getOptionAdmin('client_custom_field_name1')
          ,array(
          'class'=>"form-control",
          'placeholder'=>t("Field name")
          ));
          ?>  
          </div>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Add New Custom Field")?></label>  
          <?php   
          echo CHtml::textField('client_custom_field_name2',
          Yii::app()->functions->getOptionAdmin('client_custom_field_name2'),
          array(
          'class'=>"form-control",
          'placeholder'=>t("Field name")
          ));
          ?>  
          </div>
          
          <h3><?php echo t("Block email address list")?></h3>
          <div class="row mb-3">
          <?php 
          echo CHtml::textArea('blocked_email_add',getOptionA('blocked_email_add'),array(
          'class'=>"form-control"
          ))?>
          </div>
          <p class="text-muted"><?php echo t("Multiple email separated by comma")?></p>
          
          <h3><?php echo t("Block mobile number list")?></h3>
          <div class="row mb-3">
          <?php 
          echo CHtml::textArea('blocked_mobile',getOptionA('blocked_mobile'),array(
          'class'=>"form-control"
          ))?>
          </div>
          <p class="text-muted"><?php echo t("Multiple mobile separated by comma")?></p>
        </div>
        
        <div class="tab-pane fade" id="tab6">
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled On Merchant Signup")?>?</label>  
          <?php 
          echo CHtml::checkBox('website_terms_merchant',
          Yii::app()->functions->getOptionAdmin('website_terms_merchant')=="yes"?true:false
          ,array(
          'class'=>"icheck",
          'value'=>"yes"
          ))
          ?>  
          </div>
          
          <div class="row mb-3 url_1">
          <label class="form-label"><?php echo Yii::t("default","URL Link")?></label>  
          <?php 
          echo CHtml::textField('website_terms_merchant_url',
          Yii::app()->functions->getOptionAdmin('website_terms_merchant_url'),array(
          'class'=>"form-control"
          ));
          ?>  
          </div>
          
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled On Customer Signup")?>?</label>  
          <?php 
          echo CHtml::checkBox('website_terms_customer',
          Yii::app()->functions->getOptionAdmin('website_terms_customer')=="yes"?true:false
          ,array(
          'class'=>"icheck",
          'value'=>"yes"
          ))
          ?>  
          </div>
          
          <div class="row mb-3 url_2">
          <label class="form-label"><?php echo Yii::t("default","URL Link")?></label>  
          <?php 
          echo CHtml::textField('website_terms_customer_url',
          Yii::app()->functions->getOptionAdmin('website_terms_customer_url'),array(
          'class'=>"form-control"
          ));
          ?>    
          </div>
        </div>

        <div class="tab-pane fade" id="tab7">
          <div class="row mb-3">
            <label class="form-label"><?php echo t("Review Type")?></label>  
            <?php 
            echo CHtml::dropDownList('website_review_type',
            getOptionA('website_review_type'),array(
              1=>t("Review merchant"),
              2=>t("Review per order")
            ),array(
              'class'=>'form-select'
            ));
            ?>  
          </div>

          <hr/>
          <h4><?php echo t("Review per order Settings")?></h4>  


          <div class="row mb-3">
            <label class="form-label"><?php echo t("Order status")?></label>  
            <?php 
            $review_baseon_status = getOptionA('review_baseon_status');
            if(!empty($review_baseon_status)){
                $review_baseon_status = json_decode($review_baseon_status,true);
            }
            unset($status_list[0]);
            echo CHtml::dropDownList('review_baseon_status',(array)$review_baseon_status,
            (array)$status_list,array(
              'class'=>"form-control chosen",
              "multiple"=>"multiple"
            ));
            ?>  
            <p class="text-muted indent" >
              <?php echo t("customer can review the order based on this order status")?>
            </p>
          </div>

          <div class="row mb-3">
            <label class="form-label"><?php echo t("Earn review status")?></label>  
            <?php 
            $earn_points_review_status = getOptionA('earn_points_review_status');
            if(!empty($earn_points_review_status)){
                $earn_points_review_status = json_decode($earn_points_review_status,true);
            }
            unset($status_list[0]);
            echo CHtml::dropDownList('earn_points_review_status',(array)$earn_points_review_status,
            (array)$status_list,array(
              'class'=>"form-control chosen",
              "multiple"=>"multiple"
            ));
            ?>  
            <p class="text-muted indent" >
              <?php echo t("customer will earn points based on this status")?>
            </p>
          </div>


          <div class="row mb-3">
            <label class="form-label"><?php echo t("Publish review")?></label>  
            <?php 
            $publish_review_status = getOptionA('publish_review_status');
            if(!empty($publish_review_status)){
                $publish_review_status = json_decode($publish_review_status,true);
            }
            unset($status_list[0]);
            echo CHtml::dropDownList('publish_review_status',(array)$publish_review_status,
            (array)$status_list,array(
              'class'=>"form-control chosen",
              "multiple"=>"multiple"
            ));
            ?>  
            <p class="text-muted indent" >
              <?php echo t("publish review based on this order status")?>
            </p>
          </div>


          <hr/>

          <h4><?php echo t("Review merchant Settings")?></h4>  

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Allow only those who has actual purchases")?></label>  
            <?php 
            echo CHtml::checkBox('website_reviews_actual_purchase',
            Yii::app()->functions->getOptionAdmin('website_reviews_actual_purchase')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Merchant can edit review or delete")?></label>  
            <?php 
            echo CHtml::checkBox('merchant_can_edit_reviews',
            Yii::app()->functions->getOptionAdmin('merchant_can_edit_reviews')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>  


          <div class="row mb-3">
            <label class="form-label"><?php echo t("Order status")?></label>  
            <?php 
            $review_merchant_can_add_review_status = getOptionA('review_merchant_can_add_review_status');
            if(!empty($review_merchant_can_add_review_status)){
                $review_merchant_can_add_review_status = json_decode($review_merchant_can_add_review_status,true);
            }
            unset($status_list[0]);
            echo CHtml::dropDownList('review_merchant_can_add_review_status',(array)$review_merchant_can_add_review_status,
            (array)$status_list,array(
              'class'=>"form-control chosen",
              "multiple"=>"multiple"
            ));
            ?>  
            <p class="text-muted indent" >
              <?php echo t("customer can review the order based on this order status")?>
            </p>
          </div>
        </div>

        <div class="tab-pane fade" id="tab8">
          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Admin Do Not Allow User Multiple Sigin")?>?</label>  
            <?php 
            echo CHtml::checkBox('website_admin_mutiple_login',
            Yii::app()->functions->getOptionAdmin('website_admin_mutiple_login')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Merchant Do Not Allow User Multiple Sigin")?>?</label>  
            <?php 
            echo CHtml::checkBox('website_merchant_mutiple_login',
            Yii::app()->functions->getOptionAdmin('website_merchant_mutiple_login')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>
        </div>

        <div class="tab-pane fade" id="tab9">
          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Time Zone")?></label>
          <?php 
          echo CHtml::dropDownList('website_timezone',
          Yii::app()->functions->getOptionAdmin("website_timezone")
          ,Yii::app()->functions->timezoneList(),
          array('class' => 'form-select'))
          ?>
          </div>


          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Date Format")?></label>
          <?php 
          echo CHtml::textField('website_date_format',
          Yii::app()->functions->getOptionAdmin("website_date_format")
          ,array(
            'class'=>'form-control',
            'placeholder'=>"M d,Y",
            "maxlength"=>20
          ));
          echo " ".t("Default")." M d,Y"
          ?>
          </div>
          <p class="text-muted text-sm"><?php echo t("Note: must be a valid php date format")?>
          <br/><a target="_blank" href="http://php.net/manual/en/function.date.php">http://php.net/manual/en/function.date.php</a>
          </p>


          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Time Format")?></label>
          <?php 
          echo CHtml::textField('website_time_format',
          Yii::app()->functions->getOptionAdmin("website_time_format")
          ,array(
            'class'=>'form-control',
            'placeholder'=>"G:i:s",
            "maxlength"=>20
          ));
          echo " ".t("Default")." G:i:s"
          ?>
          </div>
          <p class="text-muted text-sm"><?php echo t("Note: must be a valid php time format")?>
          <br/><a target="_blank" href="http://php.net/manual/en/function.date.php">http://php.net/manual/en/function.date.php</a>
          </p>

          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Date Picker Format")?></label>
          <?php 
          echo CHtml::dropDownList('website_date_picker_format',
          Yii::app()->functions->getOptionAdmin("website_date_picker_format")
          ,array(
          'yy-mm-dd'=>"yy-mm-dd - default",
          'mm-dd-yy'=>"mm-dd-yy",
          'dd-mm-yy'=>"dd-mm-yy",
          'yy-M-d'=>"yy-M-d",
          'M dd,yy'=>"M d, Y",
          ),array('class'=>'form-select'));
          ?>
          </div>


          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Time Picker Format")?></label>
          <?php 
          echo CHtml::dropDownList('website_time_picker_format',
          Yii::app()->functions->getOptionAdmin("website_time_picker_format")
          ,array(
          '24'=>t("24 hour format"),
          '12'=>t("12 hour format"),
          ),array(
            'class'=>'form-select'
          ));
          ?>
          </div>


          <div class="row mb-3">
            <label class="form-label"><?php echo t("Date Picker")?></label>
            <?php 
            echo CHtml::dropDownList('website_use_date_picker',
            getOptionA('website_use_date_picker'),array(    
              2=>t("List Date picker"),
              1=>t("Jquery Date picker"),
            ),array(
              'class'=>'form-select'
            ))
            ?>
          </div>

          <div class="row mb-3">
            <label class="form-label"><?php echo t("Time Picker")?></label>
            <?php 
            echo CHtml::dropDownList('website_use_time_picker',
            getOptionA('website_use_time_picker'),array(
              3=>t("List time picker"),
              1=>t("Jquery time picker"),
              2=>t("Jquery time picker 2"),    
            ),array(
              'class'=>'form-select'
            ))
            ?>
          </div>

          <div class="row mb-3">
            <label class="form-label"><?php echo t("Time picker list interval")?></label>
            <?php 
            echo CHtml::textField('website_time_picker_interval',getOptionA('website_time_picker_interval'),array(
              'class'=>"numeric_only form-control",
              'placeholder'=>t("default is 15mins")
            ));
            ?>
          </div>
        </div>

        <div class="tab-pane fade" id="tab10">
          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled")?></label>  
            <?php 
            echo CHtml::checkBox('disabled_website_ordering',
            Yii::app()->functions->getOptionAdmin('disabled_website_ordering')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Hide food price")?></label>  
            <?php 
            echo CHtml::checkBox('website_hide_foodprice',
            Yii::app()->functions->getOptionAdmin('website_hide_foodprice')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled single food item auto add to cart")?></label>  
            <?php 
            echo CHtml::checkBox('website_disbaled_auto_cart',
            Yii::app()->functions->getOptionAdmin('website_disbaled_auto_cart')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Disabled Cart Price Validation")?>      
            </label>  
            <?php 
            echo CHtml::checkBox('website_disabled_cart_validation',
            Yii::app()->functions->getOptionAdmin('website_disabled_cart_validation')==2?true:false
            ,array(
            'class'=>"icheck",
            'value'=>2
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Enabled Checking of merchant closing time before placing order")?></label>  
            <?php 
            echo CHtml::checkBox('enabled_merchant_check_closing_time',
            Yii::app()->functions->getOptionAdmin('enabled_merchant_check_closing_time')==1?true:false
            ,array(
            'class'=>"icheck",
            'value'=>1
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Disabled order confirm page")?></label>  
            <?php 
            echo CHtml::checkBox('disabled_order_confirm_page',
            Yii::app()->functions->getOptionAdmin('disabled_order_confirm_page')==1?true:false
            ,array(
            'class'=>"icheck",
            'value'=>1
            ))
            ?>  
          </div>

          <?php
          unset($status_list[0]);	
          if(!empty($restrict_order_by_status)){
            $restrict_order_by_status = json_decode($restrict_order_by_status,true);
          } else $restrict_order_by_status=array();
          ?>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Cannot do order again if previous order status is")?></label>  
            <?php 
              echo CHtml::dropDownList('restrict_order_by_status',
              $restrict_order_by_status
              ,(array)$status_list,array(
              'class'=>"form-control chosen",
                "multiple"=>"multiple"
              ));
              ?>
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Enabled Map selection (for delivery transaction)")?></label>  
            <?php 
            echo CHtml::checkBox('enabled_map_selection_delivery',
            Yii::app()->functions->getOptionAdmin('enabled_map_selection_delivery')==1?true:false
            ,array(
            'class'=>"icheck",
            'value'=>1
            ))
            ?>
            <p class="text-muted"><?php echo t("during checkout customer will need to select their address from the map for delivery location accuracy")?></p>  
          </div>



          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Service fee")?></label>  
            <?php 
            echo CHtml::textField('admin_service_fee',
            getOptionA('admin_service_fee')
            ,array(
            'class'=>"form-control numeric_only",   
            ))
            ?>  
          </div>

          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Do not apply tax to service fee")?></label>
          <?php echo CHtml::checkBox('admin_service_fee_applytax',
          getOptionA('admin_service_fee_applytax')==1?true:false
          ,array(
          'class'=>"icheck",
          'value'=>1
          ));  
          ?>
          </div>
        </div>

        <div class="tab-pane fade" id="tab11">
          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;">
            <?php echo Yii::t("default","Allow merchant to change there own menu")?>?</label>  
            <?php 
            echo CHtml::checkBox('admin_menu_allowed_merchant',
            Yii::app()->functions->getOptionAdmin('admin_menu_allowed_merchant')==2?true:false
            ,array(
            'class'=>"icheck",
            'value'=>2
            ))
            ?>  
          </div>


          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;">
            <?php echo t("Enabled lazyload")?></label>  
            <?php 
            echo CHtml::checkBox('admin_menu_lazyload',
            getOptionA('admin_menu_lazyload')==1?true:false
            ,array(
            'class'=>"icheck",
            'value'=>1
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Hide empty category")?></label>  
            <?php 
            echo CHtml::checkBox('mobile2_hide_empty_category',
            getOptionA('mobile2_hide_empty_category')==1?true:false
            ,array(
            'class'=>"icheck",
            'value'=>1
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Default Menu")?></label>
            <?php 
            echo CHtml::radioButton('admin_activated_menu',
            Yii::app()->functions->getOptionAdmin("admin_activated_menu")==""?true:false
            ,array(
              'value'=>"",
              'class'=>"icheck"
            ))
            ?> 
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Activate Menu 1")?></label>
            <?php 
            echo CHtml::radioButton('admin_activated_menu',
            Yii::app()->functions->getOptionAdmin("admin_activated_menu")=="1"?true:false
            ,array(
              'value'=>"1",
              'class'=>"icheck"
            ))
            ?> 
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Activate Menu 2")?></label>
            <?php 
            echo CHtml::radioButton('admin_activated_menu',
            Yii::app()->functions->getOptionAdmin("admin_activated_menu")=="2"?true:false
            ,array(
              'value'=>"2",
              'class'=>"icheck"
            ))
            ?> 
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled Food name Search")?></label>  
            <?php 
            echo CHtml::checkBox('enabled_food_search_menu',
            getOptionA('enabled_food_search_menu')==1?true:false
            ,array(
            'class'=>"icheck",
            'value'=>1
            ))
            ?>  
          </div>
        </div>

        <div class="tab-pane fade" id="tab12">
          <div class="row mb-3">
            <label class="form-label">
            <?php echo Yii::t("default","Nos. of days merchant can change the order status")?>  
            </label>  
            <?php 
            echo CHtml::textField('merchant_days_can_edit_status',
            Yii::app()->functions->getOptionAdmin('merchant_days_can_edit_status'),
            array(
              'class'=>"numeric_only form-control"    
            ))
            ?>   
          </div>

          <div class="row mb-3">
            <label class="form-label">
            <?php echo Yii::t("default","Time can change the order")?>  
            </label>  
            <?php 
            echo CHtml::textField('merchant_time_can_edit_status',
            Yii::app()->functions->getOptionAdmin('merchant_time_can_edit_status'),
            array(
              'class'=>"timepick24format time_mask form-control"    
            ))
            ?>   
          </div>

          <div class="row mb-3">
            <label class="form-label">
            <?php echo t("Based on the following")?>
            </label>  
            <?php 
            echo CHtml::dropDownList('merchant_days_can_edit_status_basedon',
            Yii::app()->functions->getOptionAdmin('merchant_days_can_edit_status_basedon')
            ,array(
              1=>t("On order creation date"),
              2=>t("On Delivery/Pickup Date")
            ),array('class'=>' form-select'));
            ?>
          </div>

          <p class="text-muted"><?php echo t("leave empty if you want merchant can change the order status anytime")?></p>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;">
            <?php echo t("Disabled Merchant can add their own status")?>?
            </label>
            <?php 
            echo CHtml::checkBox('merchant_status_disabled',
            getOptionA('merchant_status_disabled')==2?true:false
            ,array(
              'value'=>2,
              'class'=>"icheck"
            ))
            ?>
          </div>
        </div>

        <div class="tab-pane fade" id="tab13">
          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Registration")?>?</label>  
            <?php 
            echo CHtml::checkBox('merchant_disabled_registration',
            Yii::app()->functions->getOptionAdmin('merchant_disabled_registration')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>
            <p class="text-muted"><?php echo Yii::t("default","Check this if you want to disabled merchant registration")?></p>
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled ABN")?></label>  
            <?php 
            echo CHtml::checkBox('merchant_reg_abn',
            Yii::app()->functions->getOptionAdmin('merchant_reg_abn')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>


          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Registration Status")?></label>  
            <?php 
            echo CHtml::dropDownList('merchant_sigup_status',
            Yii::app()->functions->getOptionAdmin('merchant_sigup_status')
            ,clientStatus(),array(
            'class'=>"form-select"
            ));
            ?>
            <p class="text-muted"><?php echo Yii::t("default","The status of the merchant after registration")?></p>
          </div>

          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Default Country")?></label>  
            <?php 
            echo CHtml::dropDownList('merchant_default_country',
            Yii::app()->functions->getOptionAdmin('merchant_default_country')
            ,$country_list,array(
            'class'=>"form-select"
            ));
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Specific Country")?></label>  
            <?php 
            echo CHtml::dropDownList('merchant_specific_country[]',
            $merchant_specific_country
            ,$country_list2,array(
            'class'=>"form-control chosen",
            "multiple"=>"multiple"
            ));
            ?> 
            <p class="text-muted"><?php echo t("leave empty to show all country")?></p> 
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Verification")?>?</label>  
            <?php 
            echo CHtml::checkBox('merchant_email_verification',
            Yii::app()->functions->getOptionAdmin('merchant_email_verification')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>
            <p class="text-muted"><?php echo Yii::t("default","Check this if you want to disabled merchant Verification")?></p>
          </div>

          <div class="row mb-3">
            <label class="form-label"><?php echo t("Pre-configure food item size")?></label>  
            <?php 
            echo CHtml::textArea('pre_configure_size', getOptionA('pre_configure_size'),array(
              'style'=>"width:50%;",
              'class'=>'form-control'
            ));
            ?>
            <p class="text-muted"><?php echo t("this will be added as default food item size to merchant during registration")?>.
            <br/>
            <?php echo t("value must be separated by comma eg. small,medium,large")?>
            </p>
          </div>
        </div>

        <div class="tab-pane fade" id="tab14">
          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Country")?></label>  
            <?php 
            echo CHtml::dropDownList('admin_country_set',
            Yii::app()->functions->getOptionAdmin('admin_country_set')
            ,$country_list,array(
              'class'=>"form-select",
              'data-validation'=>"required"
            ));
            ?> 
          </div>

          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t('default',"Address")?></label>  
          <?php 
            echo CHtml::textField('website_address',
            Yii::app()->functions->getOptionAdmin('website_address'),
            array(
              'class'=>"form-control"    
            ))
            ?> 
          </div>

          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t('default',"Contact Phone Number")?></label>  
          <?php 
            echo CHtml::textField('website_contact_phone',
            Yii::app()->functions->getOptionAdmin('website_contact_phone'),
            array(
              'class'=>"form-control"    
            ))
            ?> 
          </div>

          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t('default',"Contact email")?></label>  
          <?php 
            echo CHtml::textField('website_contact_email',
            Yii::app()->functions->getOptionAdmin('website_contact_email'),
            array(
              'class'=>"form-control" ,
              //'data-validation'=>"email"
            ))
            ?> 
          </div>

          <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t('default',"Global Sender email")?></label>  
          <?php 
            echo CHtml::textField('global_admin_sender_email',
            Yii::app()->functions->getOptionAdmin('global_admin_sender_email'),
            array(
              'class'=>"form-control" ,
              //'data-validation'=>"email"
            ))
            ?> 
          </div>
          <p class="text-muted">(<?php echo t("This email address will be use when sending email")?>)</p>

          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Currency Code")?></label>  
            <?php 
            echo CHtml::dropDownList('admin_currency_set',
            Yii::app()->functions->getOptionAdmin('admin_currency_set')
            ,
            (array)Yii::app()->functions->currencyList()
            ,array(
              'class'=>"form-select",
              'data-validation'=>"required"
            ));
            ?> 
          </div>

          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Currency code position")?></label>  
            <?php 
            echo CHtml::dropDownList('admin_currency_position',
            Yii::app()->functions->getOptionAdmin('admin_currency_position')
            ,
            (array)Yii::app()->functions->currencyPosition()
            ,array(
              'class'=>"form-select",
              'data-validation'=>"required"
            ));
            ?> 
          </div>

          <?php $admin_decimal_place=Yii::app()->functions->getOptionAdmin('admin_decimal_place');?>
          <?php $admin_use_separators=Yii::app()->functions->getOptionAdmin('admin_use_separators');?>
          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Decimal Places")?></label>
            <?php echo CHtml::dropDownList('admin_decimal_place',empty($admin_decimal_place)?0:$admin_decimal_place,(array)Yii::app()->functions->decimalPlacesList()
            ,array(
            'class'=>'form-select',
            'data-validation'=>"required"
            ))?>
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Add space between price and currency")?></label>
            <?php 
            echo CHtml::checkBox('admin_add_space_between_price',
            getOptionA('admin_add_space_between_price')==1?true:false
            ,array(
              'value'=>1,
              'class'=>"icheck"
            ))
            ?>
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Use 1000 Separators(,)")?>?</label>
            <?php 
            echo CHtml::checkBox('admin_use_separators',
            $admin_use_separators=="yes"?true:false
            ,array(
              'value'=>"yes",
              'class'=>"icheck"
            ))
            ?>
          </div>

          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Thousand Separators")?></label>
            <?php 
            echo CHtml::textField('admin_thousand_separator',
            Yii::app()->functions->getOptionAdmin('admin_thousand_separator'),array(
            'class'=>"form-control",
            'maxlength'=>1
            ));
            ?>
          </div>
          <p class="text-muted">(<?php echo t("leave empty to use standard comma separators")?>)</p>

          <div class="row mb-3">
            <label class="form-label"><?php echo Yii::t("default","Decimal Separators")?></label>
            <?php 
            echo CHtml::textField('admin_decimal_separator',
            Yii::app()->functions->getOptionAdmin('admin_decimal_separator'),array(
              'class'=>"form-control",
              'maxlength'=>1
            ));
            ?>
          </div>
          <p class="text-muted">(<?php echo t("leave empty to use standard decimal separators")?>)</p>
        </div>

        <div class="tab-pane fade" id="tab15">
          <div class="row mb-3"> 
            <label class="form-label"><?php echo t("Map Icon Marker")?></label>
            <a href="javascript:;" id="file_upload" 
            class="btn btn-secondary" data-progress="file_upload_progress" data-preview="file_upload_preview" data-field="photo2">
              <?php echo t("Browse")?>
            </a>
          </div>
          <div class="file_upload_progress"></div>
          
          <div class="file_upload_preview">
          <?php 
          $map_marker = getOptionA('map_marker');
          if(!empty($map_marker)){
            echo '<img src="'.FunctionsV3::getImage($map_marker).'" class="img-thumbnail" id="logo-small"  />';
            echo CHtml::hiddenField('photo2',$map_marker);
            echo '<br/>';
            echo '<a href="javascript:;" class="sau_remove_file" data-preview="file_upload_preview" >'.t("Remove image").'</a>';
          }
          ?>
          </div>	
            
          
          <div style="height:30px;"></div>
          


        <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled advance search")?>?</label>  
          <?php 
          echo CHtml::checkBox('enabled_advance_search',
          Yii::app()->functions->getOptionAdmin('enabled_advance_search')=="yes"?true:false
          ,array(
          'class'=>"icheck",
          'value'=>"yes"
          ))
          ?>
          <p class="text-muted"><?php echo Yii::t("default","Check this if you want to enabled advance search on homepage")?></p>
        </div>

        <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Enabled Maps")?>?</label>  
          <?php 
          echo CHtml::checkBox('enabled_search_map',
          Yii::app()->functions->getOptionAdmin('enabled_search_map')=="yes"?true:false
          ,array(
          'class'=>"icheck",
          'value'=>"yes"
          ))
          ?>
          <p class="text-muted"><?php echo Yii::t("default","Check this if you want to enabled maps in search result")?></p>
        </div>

        <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Share location")?>?</label>
          <?php 
          echo CHtml::checkBox('disabled_share_location',
          Yii::app()->functions->getOptionAdmin('disabled_share_location')=="yes"?true:false
          ,array(
            'value'=>"yes",
            'class'=>"icheck"
          ))
          ?>   
        </div>

        <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Google Auto Address")?>?</label>
          <?php 
          echo CHtml::checkBox('google_auto_address',
          Yii::app()->functions->getOptionAdmin('google_auto_address')=="yes"?true:false
          ,array(
            'value'=>"yes",
            'class'=>"icheck"
          ))
          ?>   
        </div>
        <p class="text-muted"><?php echo Yii::t("default","This will disabled the google auto address fill")?></p>


        <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Set Google Default Country On")?>?</label>
          <?php 
          echo CHtml::checkBox('google_default_country',
          Yii::app()->functions->getOptionAdmin('google_default_country')=="yes"?true:false
          ,array(
            'value'=>"yes",
            'class'=>"icheck"
          ))
          ?>   
        </div>

        <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Search within radius")?></label>  
          <?php 
          echo CHtml::textField('home_search_radius',
          Yii::app()->functions->getOptionAdmin('home_search_radius'),
          array(    
            "class"=>"numeric_only form-control",
            "placeholder"=>Yii::t("default","Default is 10")
          ))
          ?> 
          
          <?php 
          echo CHtml::dropDownList('home_search_unit_type',
          Yii::app()->functions->getOptionAdmin("home_search_unit_type"),Yii::app()->functions->distanceOption(),array('class'=>'form-select'));
          ?>    
        </div>


        <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Sort result by distance")?></label>
          <?php 
          echo CHtml::checkBox('search_result_bydistance',
          Yii::app()->functions->getOptionAdmin('search_result_bydistance')==2?true:false
          ,array(
            'value'=>2,
            'class'=>"icheck"
          ))
          ?>   
        </div>


        <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Home Title Text")?></label>  
          <?php 
          echo CHtml::textField('home_search_text',
          Yii::app()->functions->getOptionAdmin('home_search_text'),
          array(
            'class'=>"form-control",
            'placeholder'=>t("Find restaurants near you")
          ))
          ?> 
        </div>

        <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Home SubTitle Text")?></label>  
          <?php 
          echo CHtml::textField('home_search_subtext',
          Yii::app()->functions->getOptionAdmin('home_search_subtext'),
          array(
            'class'=>"form-control",
            'placeholder'=>t("Order Delivery Food Online From Local Restaurants")
          ))
          ?> 
        </div>

        <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Search As Address")?></label>
          <?php 
          echo CHtml::radioButton('home_search_mode',
          Yii::app()->functions->getOptionAdmin('home_search_mode')=="address"?true:false
          ,array(
            'value'=>"address",
            'class'=>"icheck"
          ))
          ?> 
          <p class="text-muted"><?php echo Yii::t("default","User will search restaurant using address (default)")?></p>
        </div>

        <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Search by location")?></label>
          <?php 
          echo CHtml::radioButton('home_search_mode',
          Yii::app()->functions->getOptionAdmin('home_search_mode')=="postcode"?true:false
          ,array(
            'value'=>"postcode",
            'class'=>"icheck"
          ));      
          ?> 
          <p class="text-muted"><?php echo Yii::t("default","User will search restaurant using location")?></p>
        </div>

        <div class="row mb-3">
          <label class="form-label"><?php echo Yii::t("default","Location search type")?></label>
          <?php 
          echo CHtml::dropDownList('admin_zipcode_searchtype',getOptionA('admin_zipcode_searchtype'),
          (array)FunctionsK::zipcodeSearchType(),array(
            'class'=>"chosen"   
          ))
          ?>
        </div>  


        <div class="row mb-3">
          <label class="form-label"><?php echo t("Location Country")?></label>
          <?php 
          echo CHtml::dropDownList('location_default_country',getOptionA('location_default_country'),
          (array)FunctionsV3::countryList(),array(
            'class'=>"form-select"   
          ))
          ?>
        </div>
        </div>

        <div class="tab-pane fade" id="tab16">
          <div class="row mb-3">
          <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Enabled Cancel Order")?></label>  
          <?php
            echo CHtml::checkBox('cancel_order_enabled',
            getOptionA('cancel_order_enabled')==1?true:false
            ,array(
              'value'=>1,
              'class'=>"icheck"
            ));
          ?>
          </div>
          
          
          <p><?php echo t("Cancelation of order will only be applied on the following condition")?></p>
          
          
          <div class="row mb-3">
          <label class="form-label"><?php echo t("after how many days of purchase")?></label>  
          <?php 
          echo CHtml::textField('cancel_order_days_applied',
          getOptionA('cancel_order_days_applied'),
          array(
          'class'=>"form-control numeric_only",
          'placeholder'=>t("eg. 1 day")
          ))
          ?> 
          </div>
          
          <div class="row mb-3">
          <label class="form-label"><?php echo t("after how many hours")?></label>  
          <?php 
          echo CHtml::dropDownList('cancel_order_hours',
          getOptionA('cancel_order_hours')
          ,FunctionsV3::generateHours(), array('class'=>'form-select'));
          ?> 
          <?php 
          echo CHtml::dropDownList('cancel_order_minutes',
          getOptionA('cancel_order_minutes')
          ,FunctionsV3::generateMinutes(),array('class'=>'form-select'));
          ?> 
          </div>
          
          <?php 
          unset($status_list[0]);	
          if(!empty($cancel_order_status)){
            $cancel_order_status = json_decode($cancel_order_status,true);
          } else $cancel_order_status=array();
          ?>
          
          <div class="row mb-3">
            <label class="form-label"><?php echo t("With the following order status")?></label>
            <?php 
            echo CHtml::dropDownList('cancel_order_status_accepted',
            $cancel_order_status
            ,(array)$status_list,array(
            'class'=>"chosen",
              "multiple"=>"multiple"
            ));
            ?>
          </div>
          
          
          
          <div class="row mb-3">
          <label class="form-label"><?php echo t("Request Cancel Order approved status")?></label>  
          <?php 
            echo CHtml::dropDownList('website_review_approved_status',
            getOptionA('website_review_approved_status')
            ,(array)$status_list,array(
            'class'=>"form-select",       
            ));
            ?>
            <p class="text-muted">
            <?php echo t("The order status that will set when the request order cancel is approved")?>
            </p>
          </div>
        </div>

        <div class="tab-pane fade" id="tab17">
          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Table Booking")?></label>  
            <?php 
            echo CHtml::checkBox('merchant_tbl_book_disabled',
            Yii::app()->functions->getOptionAdmin('merchant_tbl_book_disabled')==2?true:false
            ,array(
            'class'=>"icheck",
            'value'=>2
            ))
            ?>     
          </div>

          <p><?php echo t("Cancelation of booking will only be applied on the following condition")?></p>

          <div class="row mb-3">
            <label class="form-label"><?php echo t("after how many days after booking")?></label>  
            <?php 
            echo CHtml::textField('booking_cancel_days',
            getOptionA('booking_cancel_days'),
            array(
            'class'=>"form-control numeric_only",
            'placeholder'=>t("eg. 1 day")
            ))
            ?> 
            </div>
            
            <div class="row mb-3">
            <label class="form-label"><?php echo t("after how many hours")?></label>  
            <?php 
            echo CHtml::dropDownList('booking_cancel_hours',
            getOptionA('booking_cancel_hours')
            ,FunctionsV3::generateHours(),array(
              'class'=>'form-select'
            ));
            ?> 
            <?php 
            echo CHtml::dropDownList('booking_cancel_minutes',
            getOptionA('booking_cancel_minutes')
            ,FunctionsV3::generateMinutes(),array(
              'class'=>'form-select'
            ));
            ?> 
            </div>
        </div>

        <div class="tab-pane fade" id="tab18">
          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled popup asking customer address")?></label>  
            <?php 
            echo CHtml::checkBox('customer_ask_address',
            Yii::app()->functions->getOptionAdmin('customer_ask_address')==2?true:false
            ,array(
            'class'=>"icheck",
            'value'=>2
            ))
            ?>  
          </div>
              

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo t("Cash on delivery change Required")?></label>  
            <?php 
            echo CHtml::checkBox('cod_change_required',
            Yii::app()->functions->getOptionAdmin('cod_change_required')==2?true:false
            ,array(
            'class'=>"icheck",
            'value'=>2
            ))
            ?>  
          </div>
            
          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Guest Checkout")?></label>  
            <?php 
            echo CHtml::checkBox('website_disabled_guest_checkout',
            Yii::app()->functions->getOptionAdmin('website_disabled_guest_checkout')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>

          <div class="row">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Credit Card Payment Management")?></label>  
            <?php 
            echo CHtml::checkBox('disabled_cc_management',
            Yii::app()->functions->getOptionAdmin('disabled_cc_management')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Featured Restaurants")?></label>  
            <?php 
            echo CHtml::checkBox('disabled_featured_merchant',
            Yii::app()->functions->getOptionAdmin('disabled_featured_merchant')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>

          <div class="row mb-3">
            <label class="form-label" style="width:180px;padding-right:20px;"><?php echo Yii::t("default","Disabled Subscription")?></label>  
            <?php 
            echo CHtml::checkBox('disabled_subscription',
            Yii::app()->functions->getOptionAdmin('disabled_subscription')=="yes"?true:false
            ,array(
            'class'=>"icheck",
            'value'=>"yes"
            ))
            ?>  
          </div>
        </div>

        <div class="mb-3 d-flex align-items-center">
        <input type="submit" value="<?php echo Yii::t("default", "Save") ?>" class="btn btn-success">
      </div>
      </div>

    </div>
  </div>
</div>

</form>
