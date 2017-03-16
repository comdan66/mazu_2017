<form id='form' method='post' action='<?php echo base_url ('create', 'submit');?>' enctype='multipart/form-data'>
  <h1>新增文章</h1>

<?php if ($_flash_danger = Session::getData ('_flash_danger', true)) { ?>
        <div id='danger'><?php echo $_flash_danger;?></div>
<?php } else if ($_flash_info = Session::getData ('_flash_info', true)) { ?>
        <div id='alert'><?php echo $_flash_info;?></div>
<?php }?>

  <label class='row'>
    <span class='must'>標題</span>
    <input type='text' name='title' placeholder='請輸入標題..' value='<?php echo isset ($posts['title']) ? $posts['title'] : '';?>' maxlength='200' pattern='.{1,200}' required title='輸入文章標題!' autofocus />
  </label>

  <label class='row'>
    <span>子標題</span>
    <input type='text' name='subtitle' placeholder='請輸入說明用的子標題..' value='<?php echo isset ($posts['title']) ? $posts['title'] : '';?>' maxlength='200' pattern='.{1,200}' required title='輸入文章子標題!' autofocus />
  </label>
  
  <label class='row'>
    <span class='must'>分類</span>
    <select name='tag_id'>
      <option>討論區</option>
      <option>陣頭介紹</option>
    </select>
  </label>

  <label class='row'>
    <span>封面</span>
    <input type='file' name='cover' />
  </label>

  <label class='row'>
    <span class='must'>內容</span>
    <textarea name='content' class='pure cke' placeholder='請輸入內容..'><?php echo isset ($posts['content']) ? $posts['content'] : '';?></textarea>
  </label>

  <div>
    <button type='submit'>確定送出</button>
    <button type='reset'>取消重寫</button>
  </div>

</form>