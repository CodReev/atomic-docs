// JavaScript Document

$(".js-hideAll").on('click', function(event) {
    
    
   
    
if($('.atomic-h1').css('opacity') == '0'){ 
      
      $(this).css('color','#00AFF0');
      
      
      $('.compWrap').velocity({
          opacity: "1",
      }, {
          duration: 200
      });
      
      $('.atoms-side').velocity({
          opacity: "1",
      }, {
          duration: 200
      });
      $('.atomic-h1').velocity({
          opacity: "1",
      }, {
          duration: 200
      });
  } else { 
  
     $(this).css('color','#EB6565');
     $thisComp = $(this).closest('.compWrap');
     
    
    $('.compWrap').not($thisComp).velocity({
        opacity: "0",
    }, {
        duration: 200
    });
    
    $('.atoms-side').velocity({
        opacity: "0",
    }, {
        duration: 200
    });
    $('.atomic-h1').velocity({
        opacity: "0",
    }, {
        duration: 200
    });
  }
});