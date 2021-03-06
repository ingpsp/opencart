<form action="<?php echo $action; ?>" method="post" id="klarna-form-payment">
    <div class="form-group required">
        <label class="col-sm-2 control-label" for="gender"><?php echo $text_please_select_gender; ?>:</label>
        <div class="col-sm-3">
            <select name="gender" class="form-control">
                <option value="male"><?php echo $text_please_select_gender_male; ?></option>
                <option value="female"><?php echo $text_please_select_gender_female; ?></option>
            </select>
        </div>
    </div>

    <div class="form-group required">
        <label class="col-sm-2 control-label" for="dob"><?php echo $text_please_enter_dob; ?>:</label>
        <div class="col-sm-3">
            <input type="text" name="dob" id="dob" placeholder="dd-mm-yyyy" class="form-control"/>
        </div>
    </div>

    <div class="form-group pull-right">
        <div class="right col-sm-3">
            <input type="submit" value="<?php echo $button_confirm; ?>" id="klarna-button-payment" class="button btn btn-primary"/>
        </div>
    </div>
</form>
<script type="text/javascript"><!--
$(document).delegate('#klarna-button-payment', 'click', function(e) {
    e.preventDefault();
    if (!$('#dob').val().match(/^(0[1-9]|[12][0-9]|3[01])\-(0[1-9]|1[012])\-[0-9]{4}/)) {
        $('#collapse-checkout-confirm .panel-body').prepend('<div class="alert alert-danger">' + '<?php echo $text_error_invalid_dob; ?>' + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
    } else {
        $('#klarna-form-payment').submit();
    
    }
});
//--></script>