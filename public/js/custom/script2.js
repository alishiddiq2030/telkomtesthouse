$(document).ready(function() {
    $('form.material').materialForm(); // Apply material
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
    var payment_method = $('input[type=radio][name=payment_method]').val();
    if(payment_method == "atm"){
        $(".metodb .sm-form-control").prop('required',false);
    }else{
        $(".metodb .sm-form-control").prop('required',true);
    }
    $('input[type=radio][name=payment_method]').change(function(){
        var payment_method = $(this).val();
        console.log(payment_method);
        if(payment_method == "cc"){
            $(".metoda").css("display","none");
            $(".metodb").css("display","block");
                $(".metodb .sm-form-control").prop('required',true);
        }else{
            $(".metodb .sm-form-control").prop('required',false);
            $(".metoda").css("display","block");
            $(".metodb").css("display","none");
            }
        });
    });