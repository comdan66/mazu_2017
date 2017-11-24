/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */
/* get local storage */
function _fsg (key) { if (typeof (Storage) !== 'undefined') return (value = localStorage.getItem (key)) && (value = JSON.parse (value)) ? value : undefined; else return (value = _s[key]) && (value = JSON.parse (value)) ? value : undefined; }
/* set local storage */
function _fss (key, data) { try { if (typeof (Storage) !== 'undefined') localStorage.setItem (key, JSON.stringify (data)); else _s[key] = JSON.stringify (data); return true; } catch (err) { _s[key] = JSON.stringify (data); return true; } }

$(function () {
});