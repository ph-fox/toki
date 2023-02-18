<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/dishes/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default", "Add New") ?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/dishes" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default", "List") ?></a>

<div class="spacer"></div>

<div class="row">
  <div class="col-6">
    <div class="card">
      <form class="row g-3 forms mt-2" id="forms">
        <?php echo CHtml::hiddenField('action', 'addDish') ?>
        <?php echo CHtml::hiddenField('id', isset($_GET['id']) ? $_GET['id'] : ""); ?>
        <?php if (!isset($_GET['id'])) : ?>
          <?php echo CHtml::hiddenField("redirect", Yii::app()->request->baseUrl . "/admin/dishes/Do/Add") ?>
        <?php endif; ?>

        <?php if (Yii::app()->functions->multipleField() == 2) : ?>
          <div class="navbar navbar-expand-xl">
            <div class="container-fluid">
              <ul class="nav-tabs border-0 mt-2 mt-xl-0">
                <li class="nav-item dropdown">
                  <a class="navbar-nav-link active" href="#<?= t('default') ?>" data-bs-toggle="tab" data-bs-target="#<?= t('default') ?>"><?= t('default') ?></a>
                </li>
                <?php if ($fields = FunctionsV3::getLanguageList(false)) : ?>
                  <?php foreach ($fields as $f_val) : ?>
                    <li class="nav-item dropdown ms-1">
                      <a href="navbar-nav-link" href="#<?= $f_val ?>" data-bs-toggle="tab" data-bs-target="#<?= $f_val ?>"><?= $f_val ?></a>
                    </li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </div>
          </div>

          <div class="card-body tab-content border border-top-0 p-3">
            <?php if ($fields = FunctionsV3::getLanguageList(false)) : ?>
              <?php foreach ($fields as $f_val) : ?>
                <div class="tab-pane fade show active" id="<?= $f_val ?>">
                  <div class="mb-3">
                    <label class="form-label mx-3"><?php echo Yii::t("default", "Dish Name") ?></label>
                    <?php echo CHtml::textField(
                      'dish_name',
                      isset($data['default']) ? $data['default']['dish_name'] : '',
                      array(
                        'class' => 'form-control',
                        'data-validation' => "required"
                      )
                    ) ?>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>

            <?php if (is_array($fields) && count($fields) >= 1) : ?>
              <?php foreach ($fields as $key_f => $f_val) : ?>
                <div class="tab-pane fade" id="<?= $f_val; ?>">
                  <div class="mb-3">
                    <label class="form-label mx-3"><?php echo Yii::t("default", "Dish Name") ?></label>
                    <?php echo CHtml::textField(
                      "dish_name_trans[$key_f]",
                      isset($data[$f_val]) ? $data[$f_val]['dish_name'] : '',
                      array(
                        'class' => 'form-control',
                      )
                    ) ?>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        <?php else : ?>
          <div class="mb-3">
            <label class="form-label mx-3"><?php echo Yii::t("default", "Dish Name") ?></label>
            <?php
            echo CHtml::textField(
              'dish_name',
              isset($data['dish_name']) ? $data['dish_name'] : "",
              array('class' => "mx-4 rounded", "style" => "width:90%;padding:5px;", 'data-validation' => "required")
            )
            ?>
          </div>
        <?php endif; ?>
        <div class="mb-3">
          <label class="form-label mx-3 text-center"><?php echo t("Upload Icon") ?></label>
          <a href="javascript:;" id="sau_upload_file" class="btn btn-primary" data-progress="sau_progress" data-preview="image_preview" data-field="spicydish">
            <?php echo t("Browse") ?>
          </a>
        </div>
        <div class="sau_progress"></div>
        <div class="image_preview text-center">
          <?php
          $image = isset($data['default']['photo']) ? $data['default']['photo'] : '';
          if (!empty($image)) {
            echo '<img src="' . FunctionsV3::getImage($image) . '" class="img-thumbnail" id="logo-small"  />';
            echo CHtml::hiddenField('spicydish', $image);
            echo '<br/>';
            echo '<a href="javascript:;" class="sau_remove_file" data-preview="image_preview" >' . t("Remove image") . '</a>';
          }
          ?>
        </div>

        <div style="height:20px;"></div>

        <div class="mb-3">
          <label class="form-label mx-3"><?php echo Yii::t("default", "Status") ?></label>
          <?php echo CHtml::dropDownList(
            'status',
            isset($data['status']) ? $data['status'] : "",
            (array)statusList(),
            array(
              'class' => 'mx-4 rounded',
              'data-validation' => "required",
              "style" => "width:90%;padding:5px;"
            )
          ) ?>
        </div>
        <div class="mb-3 d-flex align-items-center">
          <input type="submit" value="<?php echo Yii::t("default", "Save") ?>" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
</div>
