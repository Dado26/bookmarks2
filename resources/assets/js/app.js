
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./jquery');

require('jquery-validation');

$(document).ready(function(){

    //SUBMIT
    $("form.validate").validate({
        errorPlacement: function(){
            return false; //supresses error message text
        },
        
        submitHandler: function(form){
            $(':submit', form).attr('disabled','disabled');
            form.submit();
        }
        
    });
});
