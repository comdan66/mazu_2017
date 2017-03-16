/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {
  $('.album').each (function () {
    var $album = $(this).attr ('data-n', 0);
    var $next = $album.find ('>a:last-child');
    var $prev = $album.find ('>a:not(:last-child)');
    var $divs = $album.find ('div');

    $next.click (function () {
      $album.attr ('data-n', (parseInt ($album.attr ('data-n'), 10) + 1) % $divs.length);
    });
    $prev.click (function () {
      $album.attr ('data-n',  (t = parseInt ($album.attr ('data-n'), 10) - 1) < 0 ? $divs.length - 1 : t);
    });
  });
});