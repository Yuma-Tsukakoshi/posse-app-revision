'use strict';

{
  //投稿後の初期化  //ツイート機能
  const checkbox = document.querySelectorAll(".input-checkbox");
  const InputTexts = document.querySelectorAll(".input-text");
  const tweetArea = document.getElementById("tweet-area");
  const shareTweet = document.querySelector(".js-twitter");

  const unChecked = (checkbox) => {
    checkbox.forEach((checkbox) => {
      checkbox.checked = false;
    });
  }; 

  const Textclear = (InputTexts) => {
    InputTexts.forEach((text) => {
      text.value = "";
    });
  }; 

  const tweet = () => {
    if (shareTweet.checked) {
      const tweetText = `${tweetArea.value}`;
      window.open(
        `http://twitter.com/intent/tweet?&text=${tweetText}`
      );
    }
  }; 
  
  //modal遷移
  let $Timeloading;
  $('#record-modalButton').on('click',function(){
    $('#modal-top').css("display","none");
    $('#loading').css("display","block");
    $Timeloading = setTimeout(function(){
        $('#loading').css("display","none");
        tweet();
        $('#access-record').css("display","block");
        unChecked(checkbox);
        Textclear(InputTexts);
    },3000);
  });

  $('.js-closeModal').on('click',function(){
    clearTimeout($Timeloading);
    unChecked(checkbox);
    Textclear(InputTexts);
    $('#modal-top').css("display","block");
    $('#loading').css("display","none");
    $('#access-record').css("display","none");
  });

  let $TimeCalendar;
  $('#studyDay-modalButton').on('click',function(){
    $('#modal-top').css("display","none");
    $('#loading').css("display","block");
    $TimeCalendar = setTimeout(function(){
        $('#loading').css("display","none");
        $('#show-calendar').css("display","block");
        $('.js-closeModal').css("display","none");
        $('.modal-back-button').css("display","block");
    },3000);
  })

  $('.js-closeModal').on('click',function(){
    clearTimeout($TimeCalendar);
    $('#modal-top').css("display","block");
    $('#loading').css("display","none");
    $('#access-record').css("display","none");
    $('#show-calendar').css("display","none");
    $('.modal-back-button').css("display","none");
    $('.js-closeModal').css("display","block");
  });

  $('.js-backModal').on('click',function(){
    $('.js-closeModal').css("display","block");
    $('#show-calendar').css("display","none");
    $('#modal-top').css("display","block");
    $('.modal-back-button').css("display","none");
  });
  $('#decision-button').on('click',function(){
    $('.js-closeModal').css("display","block");
    $('#show-calendar').css("display","none");
    $('#modal-top').css("display","block");
    $('.modal-back-button').css("display","none");
  });

  const $container = $('.overlay')
  const $button = $('.js-openModal')
  const $closeButton = $('.js-closeModal')

  $button.click((e) => {
    $container.addClass('openModal')
    $('.modal-back-button').css("display","none");
  })

  $closeButton.click(() => {
    $container.removeClass('openModal')
  })
}

