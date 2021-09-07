$(document).ready(function(){
	//console.log('Готов!');
    jQuery(function($){
        $("#phone_field").mask("+ 9 (999) 999-9999");
     });
     showOrHide();
});

function showOrHide(){
    check1 = document.getElementById("radioForum");
    check2 = document.getElementById("radioMK");
    if (check1.checked){
        $("#div_dop_content_form").html('<div class="col"><label class="form-check-label">Стоимость билета: 3000 ₽</label></div>');
    }
    else if (check2.checked){
        var html="";
        html=html+'<div class="row align-items-center"><div class="col"><label for="size_form_field" class="form-label">Размер <label class="text-danger">*</label></label><input type="number" id="size_form_field" class="form-control" aria-describedby="size_form_fieldHelpBlock"> <div id="size_form_fieldHelpBlock" class="form-text"> В данном поле укажите размер джерси.</div></div></div>';
        html=html+'<div class="row align-items-center"><div class="col"><label for="text_from_field" class="form-label">Надпись <label class="text-danger">*</label></label><input type="text" id="text_from_field" class="form-control" aria-describedby="text_from_fieldHelpBlock"><div id="text_from_fieldHelpBlock" class="form-text">В данном поле укажите надпись на джерси.</div></div></div>';
        html=html+'<div class="row align-items-center"><div class="col"><label class="form-label">Стоимость билета: 10000 ₽</label></div></div>';
        $("#div_dop_content_form").html(html);
    }
}
