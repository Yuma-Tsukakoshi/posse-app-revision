<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>webapp</title>
  <script src="{{asset('/assets/js/jquery-3.6.1.min.js')}}" defer></script>
  <script src="https://kit.fontawesome.com/eca7fb4794.js" crossorigin="anonymous" defer></script>
  <script src="{{asset('/assets/js/main.js')}}" defer></script>
  <script src="{{asset('/assets/js/storage.js')}}" defer></script>
  <script src="https://chancejs.com/chance.min.js" defer></script>
  <link rel="stylesheet" href="{{asset('/assets/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/routine.css')}}">
</head>

<body>
  <header class="header">
    <figure class="header-logo">
      <img src="{{asset('/assets/img/logo.png')}}" alt="POSSE">
    </figure>
    <nav class="header-nav">
      <ul class="header-nav-contents">
        <li class="header-nav-list">
          <button class="header-button js-openWebapp">Webappに戻る</button>
        </li>
        <li class="header-nav-list">
          <div class="header-button nav-title">POSSE</div>
          <ul class="dropdown-menu">
            <li class="nav-items">
              <a href="https://github.com/Yuma-Tsukakoshi" target="_blank">Github</a>
            </li>
            <li class="nav-items">
              <a href="https://docs.google.com/spreadsheets/d/1W6UFRlzyWrJnPTNKabJUHVVEwBDMmy8ef1jAMpvpKCY/edit#gid=688004640" target="_blank">3.0振り返り</a>
            </li>
            <li class="nav-items">
              <a href="https://docs.google.com/spreadsheets/d/1K6N22GmuDBpRfjR464PgdvpSbjR-Se2nhB1RVl1-U24/edit#gid=688004640" target="_blank">3.5振り返り</a>
            </li>
            <li class="nav-items">
              <a href="https://docs.google.com/spreadsheets/d/1c6MYWRcKtU8nQLPYkQHFtvtSqK6aDkQBnVIrqbAPdNU/edit#gid=0" target="_blank">ブラシス</a>
            </li>
            <li class="nav-items">
              <a href="https://docs.google.com/spreadsheets/d/1U11jBsWJjnD8NOhC0h9dq3HQSkC1puD9EPOJIpVkCNU/edit#gid=1683349193" target="_blank">リンクまとめ</a>
            </li>
          </ul>
        </li>
        <li class="header-nav-list">
          <div class="header-button nav-title">zoomリンク</div>
          <ul class="dropdown-menu">
            <li class="nav-items">
              <a href="https://us02web.zoom.us/j/89249953679?pwd=VUdlekhQSlNZdi9Hem03VTFabG5lZz09" target="_blank">毎週のmu</a>
            </li>
            <li class="nav-items">
              <a href="https://us02web.zoom.us/j/89249953679?pwd=VUdlekhQSlNZdi9Hem03VTFabG5lZz09" target="_blank">縦もくH</a>
            </li>
            <li class="nav-items">
              <a href="https://us02web.zoom.us/j/89249953679?pwd=VUdlekhQSlNZdi9Hem03VTFabG5lZz09" target="_blank">横もくA</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <main class="main">
      <div class="top-title">
        <h2 class="routine-title">ルーティンやること</h2>
        <h2 class="routine-title">タスク追跡</h2>
      </div>

      <div class="main-contents">
        <section class="routine">
          <div class="top-content">
            <h3 class="action-title">実施可否</h3>
            <div class="timer-contents">
              <h4>＜経過時間＞</h4>
              <p class="time">
                <span id="min">0</span>分
                <span id="sec">0</span>秒
              </p>
              <p class="timer-button">
                <input type="button" id="start" value="START">
                <input type="button" id="stop" value="STOP" disabled>
                <input type="button" id="reset" value="RESET">
                <input type="button" id="record" value="RECORD">
              </p>
            </div>
          </div>
          <ul class="routine-list" id="routine-list"></ul>

          <div class="record-rest">
            <h3>残りのタスク数<span id="rest-count">0</span></h3>
            <h3>達成度<span id="achive">0</span>%</h3>
          </div>
          <button class="btn-reset" id="resetBtn">リセット</button>
        </section>
  
        <section class="task">
          <div class="task-wrapper">
            <form id="taskInputForm">
              <div class="form-group">
                <label for="task-name" class="label1">タスク名</label>
                <input type="text" class="form-content" id="task-name" placeholder="タスク名記入..." required>
              </div>
              <div class="flex">
                <div class="form-group">
                  <label for="task-severity" class="flex-label">優先度</label>
                  <select id="task-severity" class="form-content" required>
                    <option class="severity-option" value="必須" >必須</option>
                    <option class="severity-option" value="任意" >任意</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="task-deadline">締切日</label>
                  <input type="date" class="form-content" id="task-deadline" value="" required>
                </div>
                <div class="form-group">
                  <label for="task-url">フォームリンク</label>
                  <input type="url" class="form-content" id="task-url" value="" required placeholder="フォームやサイトリンク記入...">
                </div>
              </div>
              <button type="submit" class="header-button create-task-btn">生成</button>
            </form>
          </div>
          <div class="created-task">
            <div id="taskList"></div>
          </div>
        </section>
      </div>
    </main>
  </div>

</body>
</html>