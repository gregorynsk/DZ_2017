<?php session_start();
include ('function_dz6_top.php');
?>

<html>

<style type="text/css">
   div {
       margin-top: 15px;
   }
</style> 

<form  method="post">

    <div class="form-row-indented"> 
        <label class="form-label-radio">
            <input type="radio" checked="" value="1" name="private">Частное лицо</label> 
        <label class="form-label-radio">
            <input type="radio" <?php list_ads('private'); ?> value="0" name="private">Компания</label> 
    </div>
    
    <div class="form-row"> 
        <label for="fld_seller_name" class="form-label"><b id="your-name">Ваше имя<span style="color: red;">*</span></b></label>
        <input type="text" maxlength="40" class="form-input-text" value="<?php list_ads('seller_name'); ?>" name="seller_name" id="fld_seller_name">
    </div>
   
    <div class="form-row"> 
        <label for="fld_email" class="form-label">Электронная почта</label>
        <input type="text" class="form-input-text" value="<?php list_ads('email'); ?>" name="email" id="fld_email">
    </div>
    
    <div class="form-row"> 
        <label id="fld_phone_label" for="fld_phone" class="form-label">Номер телефона</label> 
        <input type="text" class="form-input-text" value="<?php list_ads('phone'); ?>" name="phone" id="fld_phone">
    </div>
    
    <div id="f_location_id" class="form-row form-row-required"> 
        <label for="region" class="form-label">Город</label> 
        <select title="Выберите Ваш город" name="location_id" id="region" class="form-input-select"> 
            <option value="">-- Выберите город --</option>
            <option class="opt-group" disabled="disabled">-- Города --</option>
            <?php  list_city(); ?>
        </select> 
  
    <div class="form-row"> 
        <label for="fld_category_id" class="form-label">Категория</label>
        <select title="Выберите категорию объявления" name="category_id" id="fld_category_id" class="form-input-select">
            <option value="">-- Выберите категорию --</option>
            <?php  list_category(); ?>
        </select> 
    </div>

    <div id="f_title" class="form-row f_title"> 
        <label for="fld_title" class="form-label">Название объявления<span style="color: red;">*</span></label> 
        <input type="text" maxlength="50" class="form-input-text-long" value="<?php list_ads('title'); ?>" name="title" id="fld_title"> 
    </div>
    
    <div class="form-row"> 
        <label for="fld_description" class="form-label" id="js-description-label">Описание объявления</label> 
        <textarea maxlength="3000" name="description" id="fld_description" class="form-input-textarea"><?php list_ads('description'); ?></textarea> 
    </div>
    
    <div id="price_rw" class="form-row rl"> 
        <label id="price_lbl" for="fld_price" class="form-label">Цена<span style="color: red;">*</span></label>
        <input type="text" maxlength="9" class="form-input-text-short" value="<?php list_ads('price'); ?>" name="price" id="fld_price">&nbsp;
        <span id="fld_price_title">руб.</span> 
    </div>

    <div class="form-row-indented form-row-submit b-vas-submit" id="js_additem_form_submit">
        <div class="vas-submit-button pull-left"> 
            <span class="vas-submit-border"></span> 
            <span class="vas-submit-triangle"></span> 
            <input type="submit" value="Далее" id="form_submit" name="main_form_submit" class="vas-submit-input"> 
        </div>
    </div>
    
</form>
</html>

<?php include ('function_dz6_bottom.php'); ?>


