/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {
  $('textarea.cke').ckeditor ({
    // filebrowserUploadUrl: window.vars.apis.ckeditor.postImage (),
    // filebrowserImageBrowseUrl: window.vars.apis.ckeditor.getImages (),
    skin: 'oa',
    height: 300,
    resize_enabled: false,
    removePlugins: 'elementspath',
    toolbarGroups: [{ name: '1', groups: [ 'mode', 'tools', 'links', 'basicstyles', 'colors', 'insert', 'list' ] }],
    removeButtons: 'Strike,Underline,Italic,Table,HorizontalRule,Smiley,Subscript,Superscript,Forms,Save,NewPage,Print,Preview,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Form,RemoveFormat,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Flash,PageBreak,Iframe,About,Styles'
  });
});