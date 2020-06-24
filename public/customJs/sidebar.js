$(document).ready(function(){
        var sidbare_status = window.localStorage.getItem('sidbare_status');
        if(sidbare_status == 'true'){
            $("#sidbar").removeClass("col-sm-1");
            $("#sidbar").addClass("col-md-3");
            $("#content").removeClass("col-sm-11");
            $("#content").addClass("col-md-9");
            $('.sidbar .label').show();
            $("#show-sidbar").find('i').removeClass("fa-chevron-right");
            $("#show-sidbar").find('i').addClass("fa-chevron-left");
            var avatar_width = 150;
            $('.sidbar .sidbar-header .header-content .avatar').width(avatar_width);
            $('.sidbar .sidbar-header .header-content .avatar').height(avatar_width);
   
        }else{
            $("#sidbar").removeClass("col-md-3");
            $("#sidbar").addClass("col-sm-1");
            $("#content").removeClass("col-md-9");
            $("#content").addClass("col-sm-11");
            $('.sidbar .label').hide();
            $("#show-sidbar").find('i').removeClass("fa-chevron-right");
            $("#show-sidbar").find('i').addClass("fa-chevron-left");
            var avatar_width = 70;
            $('.sidbar .sidbar-header .header-content .avatar').width(avatar_width);
            $('.sidbar .sidbar-header .header-content .avatar').height(avatar_width);
   
        }
        $('#show-sidbar').click(function(){
        var sidbare_status = window.localStorage.getItem('sidbare_status');
        sidbare_status =='true'?window.localStorage.setItem('sidbare_status', 'false'):
        window.localStorage.setItem('sidbare_status', 'true');
            $("#sidbar").toggleClass("col-md-3");
            $("#sidbar").toggleClass("col-sm-1");
            $("#content").toggleClass("col-md-9");
            $("#content").toggleClass("col-sm-11");
            $('.sidbar .label').toggle();
            $(this).find('i').toggleClass("fa-chevron-left fa-chevron-right");
            var avatar_width = $('.sidbar .sidbar-header .header-content .avatar').width() == 70 ?
            150: 70;
            $('.sidbar .sidbar-header .header-content .avatar').width(avatar_width);
            $('.sidbar .sidbar-header .header-content .avatar').height(avatar_width);
    });

    
});