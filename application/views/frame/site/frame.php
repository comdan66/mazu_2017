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

    <header id='header'>
      <div id='header_content'>
        <label class='icon-menu' for='menu_ckb'></label>

        <a href='<?php echo base_url ();?>' id='logo'>北港迎媽祖</a>
        <span class='content'>
          <input type='text' placeholder='搜尋..' />
          <button class='icon-search'></button>
        </span>
        <div class='user _i'>
          <img src='https://scontent-tpe1-1.xx.fbcdn.net/v/t31.0-8/13112953_1301234786556527_5094798318877121663_o.jpg?oh=e4b336234e5e2079b05e81cebf6deaac&oe=590B57F5'>
        </div>
      </div>
    </header>


    <div id='container'>
      <?php echo isset ($content) ? $content : ''; ?>
    </div>
    
    <footer id='footer'>
      <div id='footer_content'>
        <div class='r'>
          <a href="">聲明</a>
          <a href="">地圖</a>
          <a href="">影音</a>
          <a href="">相簿</a>
          <a href="">首頁</a>
        </div>
        <div class='l'>© 2014-2017 MAZU.IOA.TW <span>保留所有權利，相關說明請詳閱 <a href='<?php echo base_url ('license');?>' target='_blank'>聲明頁面</a>。</span></div>
      </div>
    </footer>

    <a id='add_btn' class='icon-menu' href='<?php echo base_url ('create');?>'></a>

    <input type='checkbox' id='menu_ckb' class='ckb'>
    <div id='menu'>
      <header>
        <div class='content'>
          <div>北港</div>
          <div>
            <span>迎媽祖</span>
            <span>Beigang Mazu</span>
          </div>
        </div>
      </header>
      <div class='content'>
        <a href="path.html" class="icon-menu">2017 路線回顧</a>
        <a href="license.html" class="icon-menu">授權與聲明</a>
        <span></span>
        <a href="license.html" class="icon-menu">授權與聲明</a>
        <a href="license.html" class="icon-menu">授權與聲明</a>
      </div>
    </div>
    <label for='menu_ckb'></label>


    <!-- <input type='checkbox' id='add_ckb' class='ckb' >

    
    
    
 -->
<!-- 
    <input type='checkbox' id='add_ckb' class='ckb' >
    <div id='add_feature'>
      <label class='icon-menu' for='add_ckb'></label>
      <a class='icon-menu'></a>
      <a class='icon-menu'></a>
      <a class='icon-menu'></a>
      <a class='icon-menu'></a>
    </div>
    <label for='add_ckb'></label> -->

  </body>
</html>