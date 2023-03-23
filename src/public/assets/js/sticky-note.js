function getNewNote() {
  return  '<div class="note">' + 
          '<input type="text">' +
          '<input class="delete-button" type="button" value="削除">' +
          '<input data-color="#e00020" class="color-button" type="button" value="赤">' +
          '<input data-color="#e0ff20" class="color-button" type="button" value="黄">' +
          '</div>';
}

function appendFunctions($note) {
  $note.draggable();
  $note.resizable();


  $note.children(".delete-button").on('click', function() {
      $(this).parents('.note').remove();
  });

  $note.children(".color-button").on('click', function() {
      const color = $(this).data('color');
      $(this).parents('.note').css('background-color', color);
});
}

$('#add-button').on('click', function(){
  var $note = $(getNewNote());
  appendFunctions($note);

  $('#sticky-note-container').append($note);
});