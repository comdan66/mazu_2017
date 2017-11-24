<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

class Articles extends Site_controller {
  private $obj = null;

  public function __construct () {
    parent::__construct ();
    
    if (in_array ($this->uri->rsegments (2, 0), array ('show', 'edit', 'update', 'destroy')))
      if (!(($id = $this->uri->rsegments (3, 0)) && ($this->obj = Article::find ('one', array ('conditions' => array ('id = ?', $id))))))
        return redirect_message (array (''), array ('_flash_danger' => '找不到該筆資料。'));
  }
  public function index () {
    return $this->load_view (array (
        'now_url' => base_url ('articles'),
      ));
  }
  public function show () {
    return $this->load_view (array (
        'now_url' => base_url ('articles'),
        'obj' => $this->obj
      ));
  }
}
