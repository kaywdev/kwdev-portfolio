jQuery(document).ready(function($){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        const link_pos = $('.page-nav-link').offset().top;
        const dark_height = $('.entry-header').height();
       

        if(link_pos <5000){
            $('.page-nav-link').fadeIn();
            if(link_pos > dark_height) {
                $('.page-nav-link').addClass('menu_black');
                $('.page-nav-link').removeClass('menu_white');
            }
            else {
                $('.page-nav-link').removeClass('menu_black');
                $('.page-nav-link').addClass('menu_white');
            }
        }else{
            $('.page-nav-link').fadeOut();
        }


     });
  
});