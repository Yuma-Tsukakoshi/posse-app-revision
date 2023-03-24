$(".js-check").change(function(){
  // console.log($(this).next().children());
  if($(this).prop('checked')){
    $(this).next().children().css('display','block')
  }else{
    $(this).next().children().css('display','none')
    $(this).next().children().val(0);
    console.log($(this).next().children().val());
  }
})


$(".js-record-time").on("click",function(){
  let content_sum = 0;
  let language_sum = 0;
  $(".language-meter").each(function(){
    language_sum += parseInt($(this).val());
  })
  console.log(language_sum);
  $(".content-meter").each(function(){
    content_sum += parseInt($(this).val());
  })
  console.log(content_sum);
  if(language_sum==content_sum){
    $("#studyHour").val(Math.round(language_sum/60,1));
    alert("時間が正常に反映されました");
  }else{
    alert("コンテンツと言語の時間が合いません");
  }
})
