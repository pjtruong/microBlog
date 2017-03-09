var a = $(".navbar").offset().top;

$(document).ready(function(){

  $('.navbar').css({"padding-top":"3%"});
  $('.navbar').css({"padding-bottom":"3%"});  

});

$(document).scroll(function(){
    if($(this).scrollTop() > a || $(this).scrollTop() < a)
    {   
       $('.navbar').css({"background":"black"});
      
       $('.navbar').css({"padding-top":""});
       $('.navbar').css({"padding-bottom":""});
     
        
       
    } else {
       $('.navbar').css({"background":"transparent"});
          $('.navbar').css({"padding-top":"3%"});
       $('.navbar').css({"padding-bottom":"3%"});
         
    }
});


