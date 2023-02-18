
<div class="spacer"></div>

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','SeoSettings')?>
<?php echo CHtml::hiddenField('id',isset($_GET['id'])?$_GET['id']:"");?>

<p class="text-muted">
<ul  class="text-muted">
<?php echo t("Available Tags")?>:
<li><?php echo t("{website_title}")?></li>
<li><?php echo t("{merchant_name}")?></li>
</ul>
</p>

<h3><?php echo Yii::t("default","Home Page")?></h3>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SEO Title")?></label>
  <?php 
  echo CHtml::textField('seo_home',
  Yii::app()->functions->getOptionAdmin('seo_home')
  ,array('class'=>"form-control"))
  ?>
</div>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Description")?></label>
  <?php 
  echo CHtml::textField('seo_home_meta',
  Yii::app()->functions->getOptionAdmin('seo_home_meta')
  ,array('class'=>"form-control"))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Keywords")?></label>
  <?php 
  echo CHtml::textField('seo_home_keywords',
  Yii::app()->functions->getOptionAdmin('seo_home_keywords')
  ,array('class'=>"form-control"))
  ?>
</div>
<!------------------------------------------------------->


<h3><?php echo Yii::t("default","Search Page")?></h3>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SEO Title")?></label>
  <?php 
  echo CHtml::textField('seo_search',
  Yii::app()->functions->getOptionAdmin('seo_search')
  ,array('class'=>"form-control"))
  ?>
</div>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Description")?></label>
  <?php 
  echo CHtml::textField('seo_search_meta',
  Yii::app()->functions->getOptionAdmin('seo_search_meta')
  ,array('class'=>"form-control"))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Keywords")?></label>
  <?php 
  echo CHtml::textField('seo_search_keywords',
  Yii::app()->functions->getOptionAdmin('seo_search_keywords')
  ,array('class'=>"form-control"))
  ?>
</div>
<!------------------------------------------------------->


<h3><?php echo Yii::t("default","Menu Page")?></h3>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SEO Title")?></label>
  <?php 
  echo CHtml::textField('seo_menu',
  Yii::app()->functions->getOptionAdmin('seo_menu')
  ,array('class'=>"form-control"))
  ?>
</div>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Description")?></label>
  <?php 
  echo CHtml::textField('seo_menu_meta',
  Yii::app()->functions->getOptionAdmin('seo_menu_meta')
  ,array('class'=>"form-control"))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Keywords")?></label>
  <?php 
  echo CHtml::textField('seo_menu_keywords',
  Yii::app()->functions->getOptionAdmin('seo_menu_keywords')
  ,array('class'=>"form-control"))
  ?>
</div>
<!------------------------------------------------------->

<h3><?php echo Yii::t("default","Checkout Page")?></h3>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SEO Title")?></label>
  <?php 
  echo CHtml::textField('seo_checkout',
  Yii::app()->functions->getOptionAdmin('seo_checkout')
  ,array('class'=>"form-control"))
  ?>
</div>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Description")?></label>
  <?php 
  echo CHtml::textField('seo_checkout_meta',
  Yii::app()->functions->getOptionAdmin('seo_checkout_meta')
  ,array('class'=>"form-control"))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Keywords")?></label>
  <?php 
  echo CHtml::textField('seo_checkout_keywords',
  Yii::app()->functions->getOptionAdmin('seo_checkout_keywords')
  ,array('class'=>"form-control"))
  ?>
</div>
<!------------------------------------------------------->

<h3><?php echo Yii::t("default","Contact Page")?></h3>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SEO Title")?></label>
  <?php 
  echo CHtml::textField('seo_contact',
  Yii::app()->functions->getOptionAdmin('seo_contact')
  ,array('class'=>"form-control"))
  ?>
</div>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Description")?></label>
  <?php 
  echo CHtml::textField('seo_contact_meta',
  Yii::app()->functions->getOptionAdmin('seo_contact_meta')
  ,array('class'=>"form-control"))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Keywords")?></label>
  <?php 
  echo CHtml::textField('seo_contact_keywords',
  Yii::app()->functions->getOptionAdmin('seo_contact_keywords')
  ,array('class'=>"form-control"))
  ?>
</div>
<!------------------------------------------------------->



<h3><?php echo Yii::t("default","Merchant Signup Page")?></h3>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SEO Title")?></label>
  <?php 
  echo CHtml::textField('seo_merchantsignup',
  Yii::app()->functions->getOptionAdmin('seo_merchantsignup')
  ,array('class'=>"form-control"))
  ?>
</div>
<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Description")?></label>
  <?php 
  echo CHtml::textField('seo_merchantsignup_meta',
  Yii::app()->functions->getOptionAdmin('seo_merchantsignup_meta')
  ,array('class'=>"form-control"))
  ?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Meta Keywords")?></label>
  <?php 
  echo CHtml::textField('seo_merchantsignup_keywords',
  Yii::app()->functions->getOptionAdmin('seo_merchantsignup_keywords')
  ,array('class'=>"form-control"))
  ?>
</div>
<!------------------------------------------------------->

<div class="row">
  <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success mt-4">
</div>

</form>
