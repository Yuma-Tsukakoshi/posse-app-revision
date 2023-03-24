$(".js-check").change(function(){
  // console.log($(this).next().children());
  if($(this).prop('checked')){
    $(this).next().children().css('display','inline-block')
  }else{
    $(this).next().children().css('display','none')
    $(this).next().children().val(0);
  }
})


$(".js-record-time").on("click",function(){
  let content_sum = 0;
  let language_sum = 0;
  $(".language-meter").each(function(){
    language_sum += parseInt($(this).val());
  })
  $(".content-meter").each(function(){
    content_sum += parseInt($(this).val());
  })
  if(language_sum==content_sum){
    const floatTime = Math.round(content_sum*10/60)/10;
    console.log(floatTime);
    $("#studyHour").val(floatTime);
    alert("時間が正常に反映されました");
  }else{
    alert("コンテンツと言語の時間が合いません");
  }
})
