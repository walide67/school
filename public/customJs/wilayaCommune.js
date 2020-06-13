function getWilayas(domId){
    $.getJSON('/wilayas_communes/wilayas.json',{},
     function(data){
        data.forEach(obj => {
            $(domId).append(
                "<option value="+obj.code+">"+obj.nom+"</option>"
            );
        });
    });
}

function getCommune(domId, w_domId){
    $(domId).empty();
    $(domId).append("<option value='' selected>اختر البلدية</option>");
    var selected_wilaya = $(w_domId).val();
    $.getJSON('/wilayas_communes/communes.json',{},
     function(data){
        data.forEach(obj => {
            if(obj.wilaya_id == selected_wilaya){
                $(domId).append(
                    "<option value="+obj.nom+">"+obj.nom+"</option>"
                );
            }
        });
    });
}