$(".js-check").each(function(check){
  if(check.prop('checked')){
    check.prev().css('display','block')
  }else{
    check.prev().css('display','none')
  }
})

