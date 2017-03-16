<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

class Migration_Add_articles extends CI_Migration {
  public function up () {
    $this->db->query (
      "CREATE TABLE `articles` (
        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `user_id` int(11) unsigned NOT NULL COMMENT 'User ID',
        `tag_id` int(11) unsigned NOT NULL COMMENT 'Tag ID',
        
        `cover` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '封面',
        `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '標題',
        `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '子標題',
        `content` text COMMENT '內容',
        `pv` int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Page View',
        `enable` tinyint(4) unsigned NOT NULL DEFAULT 0 COMMENT '上下架，1 上架，0 下架',

        `updated_at` datetime NOT NULL DEFAULT '" . date ('Y-m-d H:i:s') . "' COMMENT '更新時間',
        `created_at` datetime NOT NULL DEFAULT '" . date ('Y-m-d H:i:s') . "' COMMENT '新增時間',
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;"
    );
  }
  public function down () {
    $this->db->query (
      "DROP TABLE `articles`;"
    );
  }
}