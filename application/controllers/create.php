<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

class Create extends Site_controller {

  public function index () {
    $posts = Session::getData ('posts', true);

    $this->add_js (resource_url ('resource', 'javascript', 'autosize_v3.0.8', 'autosize.min.js'))
         ->add_js (resource_url ('resource', 'javascript', 'ckeditor_d2015_05_18', 'ckeditor.js'), false)
         ->add_js (resource_url ('resource', 'javascript', 'ckeditor_d2015_05_18', 'config.js'), false)
         ->add_js (resource_url ('resource', 'javascript', 'ckeditor_d2015_05_18', 'adapters', 'jquery.js'), false)
         ->load_view (array (
        'posts' => $posts,
      ));
  }
  public function submit () {
    if (!$this->has_post ())
      return redirect_message (array ('create'), array ('_flash_danger' => '非 POST 方法，錯誤的頁面請求。'));

    $posts = OAInput::post ();
    $posts['content'] = OAInput::post ('content', false);
    $cover = OAInput::file ('cover');

    if ($msg = $this->_validation_create ($posts, $cover))
      return redirect_message (array ('create'), array ('_flash_danger' => $msg, 'posts' => $posts));
echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><pre>';
var_dump ();
exit ();
    // if (!Article::transaction (function () use (&$obj, $posts, $cover) { return verifyCreateOrm ($obj = Article::create (array_intersect_key ($posts, Article::table ()->columns))) && $obj->cover->put ($cover); }))
    //   return redirect_message (array ('create'), array ('_flash_danger' => '新增失敗！', 'posts' => $posts));

  }
  private function _validation_create (&$posts, &$cover) {
    if (!isset ($posts['title'])) return '沒有填寫 文章標題！';
    if (!isset ($posts['content'])) return '沒有填寫 文章內容！';
    if (!isset ($cover)) return '沒有選擇 文章封面！';
    
    if (!(is_string ($posts['title']) && ($posts['title'] = trim ($posts['title'])))) return '文章標題 格式錯誤！';
    if (!(is_string ($posts['subtitle']) && ($posts['subtitle'] = trim ($posts['subtitle'])))) return '文章子標題 格式錯誤！';
    if (!is_upload_image_format ($cover, 20 * 1024 * 1024, array ('gif', 'jpeg', 'jpg', 'png'))) return '文章封面 格式錯誤！';
    if (!(is_string ($posts['content']) && ($posts['content'] = trim ($posts['content'])))) return '文章內容 格式錯誤！';

    return '';
  }
  private function _validation_update (&$posts, &$cover, $obj) {
    if (!isset ($posts['title'])) return '沒有填寫 文章標題！';
    if (!isset ($posts['content'])) return '沒有填寫 文章內容！';
    if (!((string)$obj->cover || isset ($cover))) return '沒有選擇 文章封面！';

    if (!(is_string ($posts['title']) && ($posts['title'] = trim ($posts['title'])))) return '文章標題 格式錯誤！';
    if (!(is_string ($posts['subtitle']) && ($posts['subtitle'] = trim ($posts['subtitle'])))) return '文章子標題 格式錯誤！';
    if ($cover && !is_upload_image_format ($cover, 20 * 1024 * 1024, array ('gif', 'jpeg', 'jpg', 'png'))) return '文章封面 格式錯誤！';
    if (!(is_string ($posts['content']) && ($posts['content'] = trim ($posts['content'])))) return '文章內容 格式錯誤！';
    
    return '';
  }
}
