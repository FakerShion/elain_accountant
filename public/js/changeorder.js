
$(document).ready(function(){


    $('.change').click(function(){

        if($(this).val()=="true"){
            $(this).text("取消");
            $attribute = $(this).attr('id').toString();
            $modify=$attribute;
            $attribute = $attribute.substr(7);
            if( !$('#form_'+$attribute).length ) {
                if ($attribute == 'item' || $attribute == 'client') {
                    $(this).before(" <div class=\"form-group\"  id=\"form_" + $attribute + "\">\n" +
                        "                <input type=\"text\" class=\"form-control\" id=\"" + $attribute +
                        "\" name=\"" + $attribute + "\" required>\n" +
                        "</div>");
                }else if($attribute == 'duedate'){
                    $(this).before(" <div class=\"form-group\"  id=\"form_" + $attribute + "\">\n" +
                        "                <input type=\"date\" class=\"form-control\" id=\"" + $attribute +
                        "\" name=\"" + $attribute + "\" required>\n" +
                        "</div>");
                }else if($attribute == 'comment'){
                    $(this).before("<div class=\"form-group\" id='form_"+ $attribute+"'>\n" +
                        "                <textarea id=\"comment\" name=\"comment\" class=\"form-control\" required></textarea>\n" +
                        "            </div>");
                }else{
                    $(this).before(" <div class=\"form-group\"  id=\"form_" + $attribute + "\">\n" +
                        "                <input type=\"number\" class=\"form-control\" id=\"" + $attribute +
                        "\" name=\"" + $attribute + "\" required>\n" +
                        "</div>");
                }

                $('#form_' + $attribute).css("float", "right");

            }
            $(this).val("false");
        }else{
            $attribute = $(this).attr('id').toString();
            $attribute = $attribute.substr(7);
            $('#form_' + $attribute).remove();
            $($attribute).remove();
            $(this).text("change");
            $(this).val("true");
        }
    })
})

