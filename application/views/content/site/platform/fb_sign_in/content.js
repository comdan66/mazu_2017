/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {
  if ($('#_flash_danger').length)
    _fss ('_flash_danger', $('#_flash_danger').val ());
  
  if ($('#_flash_info').length)
    _fss ('_flash_info', $('#_flash_info').val ());
  
  if ($('#_user').length)
    _fss ('_user', $('#_user').data ('val'));
  
  if ($('#_url').length)
    window.location.replace ($('#_url').val ());
});