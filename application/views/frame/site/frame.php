<!DOCTYPE html>
<html lang="zh">
  <head>
    <?php echo isset ($meta_list) ? $meta_list : ''; ?>

    <title><?php echo isset ($title) ? $title : ''; ?></title>

<?php echo isset ($css_list) ? $css_list : ''; ?>

<?php echo isset ($js_list) ? $js_list : ''; ?>

  </head>
  <body lang="zh-tw"<?php echo isset ($body_class) && $body_class ? ' class="' . $body_class . '"' : '' ;?>>
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
          <img src='<?php echo User::avatar ();?>'>
        </label>
      </div>
    </header>

    <div id='container'><?php echo isset ($content) ? $content : ''; ?></div>

    <div id='menu'>
      <header><div>北港</div><div><span>迎媽祖</span><span>Beigang Mazu</span></div></header>
      <a href='<?php echo $url = base_url ('');?>' class='icon-home<?php echo isset ($now_url) && $now_url == $url ? ' active' : '';?>'>首頁</a>
      <a href='<?php echo $url = base_url ('articles');?>' class='icon-file-text2<?php echo isset ($now_url) && $now_url == $url ? ' active' : '';?>'>所有文章</a>
      <a href='<?php echo $url = base_url ('maps');?>' class='icon-op<?php echo isset ($now_url) && $now_url == $url ? ' active' : '';?>'>最新路關</a>
      <a href='<?php echo $url = base_url ('albums');?>' class='icon-images<?php echo isset ($now_url) && $now_url == $url ? ' active' : '';?>'>活動相簿</a>
      <a href='<?php echo $url = base_url ('videos');?>' class='icon-film<?php echo isset ($now_url) && $now_url == $url ? ' active' : '';?>'>影音紀錄</a>
      <i></i>
      <a href='<?php echo $url = base_url ('license');?>' class='icon-c<?php echo isset ($now_url) && $now_url == $url ? ' active' : '';?>'>授權聲明</a>
      <a href='<?php echo $url = base_url ('author');?>' class='icon-user-secret<?php echo isset ($now_url) && $now_url == $url ? ' active' : '';?>'>關於作者</a>
      <footer><a href='<?php echo base_url ('license');?>'>隱私權政策 - 服務條款</a><span>© 2014-2017 MAZU.IOA.TW</span></footer>
    </div><label for='menu_ckb' class='ckb_cover'></label>

    <div id='user_info'<?php echo User::current () ? '' : ' class="nologin"';?>>
<?php if (User::current ()) { ?>
        <header>
          <div class='user _i'>
            <img src='<?php echo User::avatar ();?>'>
          </div>
          <div class='info'>
            <span class='name'><?php echo User::current ()->name;?></span>
            <span class='mail'><?php echo User::current ()->email;?></span>
            <span>上次登入: <b><?php echo User::current ()->logined_at->format ('Y/m/d');?></b></span>
            <span>登入次數: <b><?php echo number_format (User::current ()->login_count);?></b>次</span>
          </div>
        </header>
<?php } ?>

      <div>
        <label class='icon-f' for='user_info_ckb'>分享至臉書</label>
      </div>

      <footer>
  <?php if (User::current ()) { ?>
          <a href='<?php echo base_url ('logout');?>'>登出</a>
  <?php } else { ?>
          <a href='<?php echo Fb::loginUrl ('platform', 'fb_sign_in');?>'>登入</a>
  <?php } ?>
      </footer>

    </div><label for='user_info_ckb' class='ckb_cover'></label>


  </body>
</html>