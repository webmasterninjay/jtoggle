jQuery(function($){
    $(document).ready(function(){
      $(".jtoggle-content").hide();
      $(".jtoggle-clicker").click(function(){
        $(this).toggleClass("active").next().slideToggle(100);
        return false; //Prevent the browser jump to the link anchor
      });
    });
});
