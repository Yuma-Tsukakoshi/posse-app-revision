<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>webapp</title>
  <link rel="stylesheet" href="{{asset('/assets/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/error.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
  <script src="{{asset('/assets/js/jquery-3.6.1.min.js')}}" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts" defer></script>
  <script src="{{asset('/assets/js/count.js')}}" defer></script>
  <script src="{{asset('/assets/js/bar-charts.js')}}" defer></script>
  <script src="{{asset('/assets/js/donut-charts-1.js')}}" defer></script>
  <script src="{{asset('/assets/js/donut-charts-2.js')}}" defer></script>
  <script src="{{asset('/assets/js/calender.js')}}" defer></script>
  <script src="{{asset('/assets/js/modal.js')}}" defer></script>
</head>

<body>
  <header class="top-header">
    <nav class="header-nav">
      <div class="header-logo">
        <img src="{{asset('/assets/img/logo.png')}}" alt="POSSE">
        <p class="header-week">4th week</p>
      </div>
      <div class="header-buttons">
        <button class="header-button js-openModal">記録・投稿</button>
        <button class="header-button js-openRoutine">タスク管理</button>
      </div>
    </nav>
    <div class="overlay">
      <div class="modal">
        <div class="modal-content" id="js-modal-content">
          <button class="modal-close-button js-closeModal">x</button>
          <button class="modal-back-button js-backModal">←</button>
          <!-- jsで中身の内容変えてく -->
          <div class="modal-top" id="modal-top">
            <div class="modal-both">
              <div class="modal-left">
                <div class="study-day">
                  <h2 class="modal-title">学習日</h2>
                  <input class="study-day-box input-text" type="text" id="studyDay-modalButton" name="study-day">
                </div>
                <div class="study-items">
                  <div class="study-contents">
                    <h2 class="modal-title">学習コンテンツ(複数選択可)</h2>
                    <div class="contents-list">
                      @foreach ($contents as $content)
                      <input type="checkbox" id="check{{$loop->iteration}}" class="input-checkbox" name="content" value="{{$content->content}}"><label for="check{{$loop->iteration}}" class="label">{{$content->content}}<input type="number" value="0" min="0" max="20" step="1" class="meter"></label>
                      @endforeach
                    </div>
                  </div>
                  <div class="study-language">
                    <h2 class="modal-title">学習言語(複数選択可)</h2>
                    <div class="language-list">
                      @foreach ($languages as $language)
                      <input type="checkbox" id="check{{$loop->iteration + count($contents)}}" class="input-checkbox" name="language" value="{{$language->language}}"><label for="check{{$loop->iteration + count($contents)}}" class="label">{{$language->language}}<input type="number" value="0" min="0" max="20" step="1" class="meter"></label>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-right">
                <div class="study-time">
                  <h2 class="modal-title">学習時間</h2>
                  <input class="study-time-box input-text" type="text" id="studyHour" name="study-hour" size="34">
                </div>
                <div class="twitter-section">
                  <h2 class="modal-title" >Twitter用コメント</h2>
                  <textarea class="twitter-comment-box input-text " name="twitter" id="tweet-area"  onkeyup="viewStrLen();"cols="37" rows="13"></textarea>
                  <script src="https://platform.twitter.com/widgets.js" defer></script>
                  <div class="sharing-wrapper">
                    <input type="checkbox" id="check{{count($contents) + count($languages) + 1 }}" class="input-checkbox js-twitter" name="twitter" value="twitter"><label for="check{{count($contents) + count($languages) + 1 }}" class="share-text">Twitterにシェアする</label>
                  </div>
                </div>
                <button class="header-button bottom" id="record-modalButton">記録・投稿</button>
              </div>
            </div>
          </div>
          <!-- top-modal -->
          
          <div class="access-record open-record" id="access-record">
            <span class="record-title">AWESOME!</span>
            <figure class="icon-check-done">
              <img src="{{asset('/assets/img/icon-check-done.png')}}" alt="">
            </figure>
            <span class="record-text">記録・投稿<br>完了しました</span>
          </div>
          <!-- record-modal -->
          
          <div class="loading open-loading" id="loading">
            <div class="circle"></div>
          </div>
          <!-- loading-modal -->

          <div class="calendar open-calendar" id="show-calendar">
            <button id="prev" class="arrow left head" type="button"></button>
            <button id="next"  class="arrow right head" type="button"></button>
            <div id="calendar"></div>
            <div class="decision-button" id="decision-button">決定</div>
          </div>
          <!-- calendar-modal -->
          <!-- jsでの変更アイテム終了 -->
        </div>
      </div>
    </div>
  </header>

  <main class="top-main">
    <div class="both-wrapper">
      <div class="left-side-wrapper">
        <div class="hour-section">
          <ul class="hour-list">
            <li class="hour-items-box">
              <p class="hour-title">Today</p>
              <span class="hour-time">
                <span class="hour-time">{{ $today_hours != null ? (int)$today_hours->hour_today : 0 }}</span>
              </span>
              <span class="hour-text">hour</span>
            </li>
            <li class="hour-items-box">
              <p class="hour-title">Month</p>
              <span class="hour-time">{{ $month_hours != null ? (int)$month_hours->hour_month : 0}}</span>
              <span class="hour-text">hour</span>
            </li>
            <li class="hour-items-box">
              <p class="hour-title">Total</p>
              <span class="hour-time">{{ $total_hours != null ? (int)$total_hours->hour_total : 0}}</span>
              <span class="hour-text">hour</span>
            </li>
          </ul>
        </div>
        <hr class="border">
        <div class="bar-graph" id="bar-charts" style="min-height: initial"></div>
      </div>
      <div class="right-side-wrapper">
        <div class="study-language-section">
          <p class="study-language-title">学習言語</p>
          <div class="circle-graph" id="circle-charts1"></div>
        </div>
        <div class="study-contents-section">
          <p class="study-contents-title">学習コンテンツ</p>
          <div class="circle-graph" id="circle-charts2"></div>
        </div>
        </div>
      </div>
    </div>
    <div class="footer-section">
      <div class="footer-items">
        <button id="prev-f" class="arrow left" type="button"></button>
        <p id="js-changeMonth"></p> 
        <button id="next-f" class="arrow right" type="button"></button>
      </div>
    </div>
    <button class="header-button footer js-openModal" id="record-modalButton">記録・投稿</button>
    
  </main>
</body>
</html>
