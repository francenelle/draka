$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
       /* if($('#first_name').val() == '' || $('#last_name').val() == '' || $('#adresse').val() == '' || $('#post_code').val() == '' || $('#city').val() == '' || $('#email').val() == '' || $('#phone').val() == ''){
            $("#error_first_name").append("This value is required.");
            $("#error_last_name").append("This value is required.");
            $("#error_adresse").append("This value is required.");
            $("#error_post_code").append("This value is required.");
            return false;
        }*/
        if($('#first_name').val() == ''){
            $("#error_first_name").append("This value is required.");
            $('#first_name').focus();
            return false;
         }
         else{
            document.getElementById('error_first_name').innerHTML="";
        }
         if($('#last_name').val() == ''){
            $("#error_last_name").append("This value is required.");
            $('#last_name').focus();
            return false;
         }else{
            document.getElementById('error_last_name').innerHTML="";
         }
         if($('#adresse').val() == ''){
            $("#error_adresse").append("This value is required.");
            $('#adresse').focus();
            return false;
         }else{
            document.getElementById('error_adresse').innerHTML="";
         }
         if($('#post_code').val() == ''){
            $("#error_post_code").append("This value is required.");
            $('#post_code').focus();
            return false;
         }else{
            document.getElementById('error_post_code').innerHTML="";
         }
         if($('#city').val() == ''){
            $("#error_city").append("This value is required.");
            $('#city').focus();
            return false;
         }else{
            document.getElementById('error_city').innerHTML="";
         }

         if($('#email').val() == ''){
            $("#error_email").append("This value is required.");
            $('#email').focus();
            return false;
         }else{
            document.getElementById('error_email').innerHTML="";
         }
         email = $('#email').val();
         function IsEmail(email) {
            var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return EmailRegex.test(email);
          }
         if(IsEmail(email)==false){
            $("#error_email").append("Email invalide.");
            $('#email').focus();
            return false;
        }

         if($('#phone').val() == ''){
            $("#error_phone").append("This value is required.");
            $('#phone').focus();
            return false;
         }else{
            document.getElementById('error_phone').innerHTML="";
         }

        
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
    return false;
    })
    
    });

    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});