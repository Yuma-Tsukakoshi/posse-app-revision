const recordButton = document.getElementById("record-modalButton")
// 文字数取得
function viewStrLen(){
var len = document.getElementById("tweet-area").value.length;
  if (len > 140 ){
    alert("字数が140文字を超えています")
    recordButton.disabled = true;
  }else{
    recordButton.disabled = false;
  }
}
