jQuery(document).ready(function(){
    jQuery('#next1').click(function(e){
        e.preventDefault();
        // alert('hii');
        jQuery('#err_name').html('');
        jQuery('#err_lname').html('');
        if(jQuery('#fname').val()==''){
            jQuery('#err_name').html('first Name is required');
            return false;
        }
        else if(jQuery('#fname').val().length<3){
            jQuery('#err_name').html('please enter atleast three character');
            return false;
        }
        else if(!isNaN(jQuery('#fname').val())){
            jQuery('#err_name').html('Number is Not allowed');
            return false;
        }
        else if(jQuery('#lname').val()==''){
            jQuery('#err_lname').html('Last Name is required');
            return false;
        }
        else if(jQuery('#lname').val().length<3){
            jQuery('#err_lname').html('please enter three character');
            return false;
        }
        else if(!isNaN(jQuery('#fname').val())){
            jQuery('#err_lname').html('Number not Allowed');
            return false;
        }
        else{
            jQuery('.second_form').css('display','block');
            jQuery('.first_form').css('display','none');
            jQuery('#step1').removeClass('progress-step-active');
            jQuery('#step2').addClass('progress-step-active');
        }
    });
    jQuery('#next2').click(function(e){
        e.preventDefault();
        jQuery('#err_address').html('');
        jQuery('#err_mobile').html('');
        if(jQuery('#address').val==''){
            jQuery('#err_address').html('please enter vaild address');
            return false;
        }else if(jQuery('#mobile').val==''){
            jQuery('#err_mobile').html('please enter vaild mobile number');
            return false;
        }else if(isNaN(jQuery('#mobile').val())){
            jQuery('#err_mobile').html('Only number allowed');
            return false;
        }
        else if(jQuery('#mobile').val().length !=10){
            jQuery('#err_mobile').html('Mobile number must be 10 character');
            return false;
        }
        else{
            jQuery('.second_form').css('display','none');
            jQuery('.first_form').css('display','none');
            jQuery('.third_form').css('display','block');
            jQuery('#step1').removeClass('progress-step-active');
            jQuery('#step2').removeClass('progress-step-active');
            jQuery('#step3').addClass('progress-step-active');
        }
    });
    //privious button
    jQuery('#privious2').click(function(){
        jQuery('.first_form').css('display','block');
        jQuery('.second_form').css('display','none');
        jQuery('#step2').removeClass('progress-step-active');
        jQuery('#step1').addClass('progress-step-active');

    });
    jQuery('#privious3').click(function(){
        jQuery('.second_form').css('display','block');
        jQuery('.third_form').css('display','none');
        jQuery('#step2').addClass('progress-step-active');
        jQuery('#step3').removeClass('progress-step-active');
    });
    jQuery('#submit').click(function(e){
        e.preventDefault();
        jQuery('#err_subject').html('');
        jQuery('#err_query').html('');
        if(jQuery('#subject').val()==''){
            jQuery('#err_subject').html('Enter subject required');
            return false;
        }
        else if(jQuery('#query').val()==''){
            Query('#err_query').html('Enter Query required');
            return false;
        }else{
            // var fname=jQuery('#fname').val();
            // var lname=jQuery('#lname').val();
            // var address=jQuery('#address').val();
            // var mobile=jQuery('#mobile').val();
            // var subject=jQuery('#subject').val();
            // var query=jQuery('#query').val();
            jQuery.ajax({
                type: 'POST',
                dataType: 'text',
                url: my_ajax_object.ajax_url,
                data:jQuery('#form1').serialize(),
                    // fname:fname,
                    // lname:lname,
                    // address:address,
                    // mobile:mobile,
                    // subject:subject,
                    // query:query
              
                success: function(data){
                    alert('data submit successful');
                    jQuery("#form1")[0].reset();
                    jQuery('.first_form').css('display','block');
                    jQuery('.second_form').css('display','none');
                    jQuery('.third_form').css('display','none');
                    jQuery('#step3').removeClass('progress-step-active');
                    jQuery('#step1').addClass('progress-step-active');
                },
        
                
            });
            return false;
        }
    });
});