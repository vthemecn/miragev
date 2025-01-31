<?php
/**
 * 主题启用和切换时执行的操作
 */

// 主题启用执行
add_action('after_switch_theme', 'vt_after_switch_action');
function vt_after_switch_action()
{
    // 创建数据表
    global $wpdb;

    // 创建收藏表
    $table_name = $wpdb->prefix . "vt_star";
    if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {
        $sql = "CREATE TABLE `" . $table_name . "` ( 
                    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                    `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
                    `object_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '相关文章或者评论的ID',
                    `type` varchar(10) NOT NULL COMMENT 'like 点赞、star 收藏等',
                    `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                    PRIMARY KEY (`id`),
                    KEY `type` (`type`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

        require_once(ABSPATH . "wp-admin/includes/upgrade.php");
        dbDelta($sql);
    }
}

// 切换其他主题以后，执行
// add_action('switch_theme', 'rt_switch_action');
// function rt_switch_action()
// {

// }
