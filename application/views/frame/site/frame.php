<!DOCTYPE html>
<html lang="zh">
  <head>
    <?php echo isset ($meta_list) ? $meta_list : ''; ?>

    <title><?php echo isset ($title) ? $title : ''; ?></title>

<?php echo isset ($css_list) ? $css_list : ''; ?>

<?php echo isset ($js_list) ? $js_list : ''; ?>

  </head>
  <body lang="zh-tw">
    <?php echo isset ($hidden_list) ? $hidden_list : ''; ?>
    <input type='checkbox' id='menu_ckb' class='ckb' />
    <input type='checkbox' id='user_info_ckb' class='ckb' />

    <header id='header'>
      <div id='header_content'>
        <label class='icon-menu' for='menu_ckb'></label>

        <a href='<?php echo base_url ();?>' id='logo'>北港迎媽祖</a>
        <span class='content'>
          <input type='text' placeholder='搜尋..' />
          <button class='icon-search'></button>
        </span>
        <label class='user _i' for='user_info_ckb'>
          <img src='https://scontent-tpe1-1.xx.fbcdn.net/v/t31.0-8/13112953_1301234786556527_5094798318877121663_o.jpg?oh=e4b336234e5e2079b05e81cebf6deaac&oe=590B57F5'>
        </label>
      </div>
    </header>

    <div id='container'><?php echo isset ($content) ? $content : ''; ?></div>

    <div id='menu'>
      <header>
        <div>北港</div>
        <div>
          <span>迎媽祖</span>
          <span>Beigang Mazu</span>
        </div>
      </header>

      <a href='' target='_blank' class='icon-menu active'>首頁</a>
      <a href='' target='_blank' class='icon-menu'>討論區</a>
      <a href='' target='_blank' class='icon-menu'>陣頭介紹</a>
      <a href='' target='_blank' class='icon-menu'>最新路關</a>
      <a href='' target='_blank' class='icon-menu'>活動相簿</a>
      <a href='' target='_blank' class='icon-menu'>影音紀錄</a>
      <i></i>
      <a href='' target='_blank' class='icon-menu'>授權聲明</a>
      <a href='' target='_blank' class='icon-menu'>關於作者</a>

      <footer>
        <a href='' target='_blank'>隱私權政策 - 服務條款</a>
        <span>© 2014-2017 MAZU.IOA.TW</span>
      </footer>
    </div><label for='menu_ckb' class='ckb_cover'></label>

    <div id='user_info'>
      <header>
        <div class='user _i'>
          <img src='https://scontent-tpe1-1.xx.fbcdn.net/v/t31.0-8/13112953_1301234786556527_5094798318877121663_o.jpg?oh=e4b336234e5e2079b05e81cebf6deaac&oe=590B57F5'>
        </div>
        <div class='info'>
          <span class='name'>吳政賢</span>
          <span class='mail'>comdan66@gmail.com</span>
          <span>上次登入: <b><?php echo date('Y/m/d');?></b></span>
          <span>登入次數: <b><?php echo '1,234';?></b>次</span>
        </div>
      </header>

      <div>
        <label class='icon-menu' for='user_info_ckb'>分享至臉書</label>
        <label class='icon-menu' for='user_info_ckb'>分享至臉書</label>
      </div>

      <footer>
        <a href=''>登出</a>
      </footer>
    </div><label for='user_info_ckb' class='ckb_cover'></label>


  </body>
</html>