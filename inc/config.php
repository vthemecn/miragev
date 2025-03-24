<?php
require_once TEMP_DIR .'/inc/codestar/codestar-framework.php';

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    $prefix = 'miragev';

    CSF::createOptions( $prefix, array(
        'menu_title' => __('MirageV 设置','vt'),
        'menu_slug'  => 'miragev',
        'framework_title' => __('MirageV 主题设置','vt'),
        'footer_text' => '',
        'theme' => 'light',
        'show_bar_menu' => false,
        'footer_text' => '<img src="https://vtheme.cn/favicon.ico" style="width:20px;position:relative;top:5px"> Powered by <a href="https://vtheme.cn/miragev" copyright target="_blank">MirageV</a>'
    ));


    /**
     * 常规设置
     */
    CSF::createSection( $prefix, array(
        'title'  => __('常规设置','vt'),
        'icon'   => 'dashicons dashicons-admin-generic',
        'fields' => array(
            array(
                'id'    => 'basic_style',
                'type'  => 'color',
                'title' => __('主题色调','vt'),
                'default' => '#007aff'
            ),
            array(
                'id'         => 'update_is_on',
                'type'       => 'radio',
                'title'      => __('更新提示','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '0',
                'inline' => true,
                'desc' => __('关闭以后，不提示PHP版本，主题和插件更新提示','vt')
            ),
            array(
                'id'         => 'editor_type',
                'type'       => 'radio',
                'title'      => __('编辑器','vt'),
                'options'    => array(
                    '0' => __('古腾堡编辑器','vt'),
                    '1' => __('经典编辑器','vt')
                ),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'         => 'editor_revision',
                'type'       => 'radio',
                'title'      => __('文章修订版本','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '0',
                'inline' => true
            ),
            array(
                'id'         => 'widget_title_type',
                'type'       => 'radio',
                'title'      => __('边框标题样式','vt'),
                'options'    => array(
                    '0' => __('无','vt'),
                    '1' => __('竖线','vt'),
                    '2' => __('圆点','vt'),
                    '3' => __('横线','vt')
                ),
                'default'    => '0',
                'inline' => true
            ),
            array(
                'id'         => 'page_data_type',
                'type'       => 'radio',
                'title'      => __('显示页面参数','vt'),
                'options'    => array('1' => __('显示','vt'), '0' => __('隐藏','vt')),
                'default'    => '0',
                'inline' => true
            ),
            array(
                'id'         => 'list_type',
                'type'       => 'radio',
                'title'      => __('默认文章列表排版','vt'),
                'options'    => array('1' => __('卡片','vt'), '0' => __('文章','vt')),
                'default'    => '0',
                'inline' => true
            ),
            array(
                'id'         => 'list_cards_col',
                'type'       => 'radio',
                'title'      => __('每行列数','vt'),
                'options'    => array(
                    '3' => __('3','vt'),
                    '4' => __('4','vt'),
                    '5' => __('5','vt'),
                    '6' => __('6','vt')
                ),
                'default'    => '3',
                'inline' => true
            ),
            array(
                'id'         => 'dark_mode_type',
                'type'       => 'radio',
                'title'      => __('暗黑模式','vt'),
                'options'    => array(
                    '1' => __('开启','vt'),
                    '0' => __('关闭','vt'),
                    '2' => __('跟随系统','vt'),
                ),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'         => 'show_copyright',
                'type'       => 'switcher',
                'title'      => __('文章版权声明','vt'),
                'default'    => true
            ),
            array(
                'id'         => 'show_copyright_text',
                'type'       => 'textarea',
                'title'      => __('文章版权声明','vt'),
                'dependency' => array('show_copyright', '==', 'true'),
                'default'    => __('文章版权声明','vt')
            ),
            array(
                'id'    => 'image_items_height',
                'type'  => 'slider',
                'title' => __('图片高宽比','vt'),
                'unit'  => '%',
                'max'   => '300',
                'default' => '100'
            ),
            array(
                'id'    => 'default_image',
                'type'  => 'upload',
                'title' => __('默认图片','vt'),
                'default' => get_template_directory_uri() . '/assets/images/default.jpg',
                'preview' => true
            ),
            array(
                'id'    => 'background_image',
                'type'  => 'upload',
                'title' => __('背景图片','vt'),
                'default' => '',
                'preview' => true
            ),
            array(
                'id'    => 'qrcode_image',
                'type'  => 'upload',
                'title' => __('收款二维码','vt'),
                'default' => '',
                'preview' => true
            ),
            array(
                'id'    => 'qrcode_title',
                'type'  => 'text',
                'title' => __('二维码标题','vt'),
                'default' => __('二维码标题','vt'),
                'preview' => true
            ),
            array(
                'id'         => 'user_center_is_on',
                'type'       => 'radio',
                'title'      => __('个人中心','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '0',
                'inline' => true
            ),
            array(
                'id'         => 'highlight_is_on',
                'type'       => 'radio',
                'title'      => __('代码高亮','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'         => 'comments_is_on',
                'type'       => 'radio',
                'title'      => __('开启评论','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'         => 'attempts_is_on',
                'type'       => 'radio',
                'title'      => __('防暴力破解','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '1',
                'inline' => true
            )

        )
    ));

    
    /**
     * SEO设置
     */
    CSF::createSection( $prefix, array(
        'title'  => __('SEO设置','vt'),
        'icon'   => 'dashicons dashicons-admin-generic',
        'fields' => array(
            array(
                'id'    => 'meta_keywords',
                'type'  => 'text',
                'title' => __('网站关键词','vt')
            ),
            array(
                'id'    => 'meta_description',
                'type'  => 'textarea',
                'title' => __('网站描述','vt')
            ),
        )
    ));


    /**
     * 首页设置
     */
    CSF::createSection( $prefix, array(
        'id' => 'home_fields',
        'title' => __('首页设置','vt'),
        'icon' => 'dashicons dashicons-admin-home'
    ));

    /**
     * 首页设置 - 布局设置
     */
    CSF::createSection($prefix, array(
        'parent'      => 'home_fields',
        'title'       => __('布局设置','vt'),
        // 'icon'        => 'fa fa-home',
        'description' => '',
        'fields'      => array(
            array(
                'id'             => 'home_layout',
                'type'           => 'sorter',
                'title'          => '',
                'enabled_title'  => __('显示','vt'),
                'disabled_title' => __('隐藏','vt'),
                'default'        => array(
                    'enabled'  => array(
                        'sliders'   => __('幻灯片','vt'),                       
                        'hot'       => __('热门推荐','vt'),
                        'posts'     => __('最新文章','vt'),
                        'links'     => __('友情链接','vt'),
                    ),
                    'disabled' => array()
                ),
            ),

        ),
    ));


    /**
     * 首页设置 - 幻灯片模块
     */
    CSF::createSection($prefix, array(
        'parent'      => 'home_fields',
        'title'       => __('幻灯片','vt'),
        // 'icon'        => 'fa fa-home',
        'description' => '',
        'fields'      => array(
            array(
                'id'      => 'slider_autoplay',
                'type'    => 'switcher',
                'title'   => __('自动播放','vt'),
                'label'   => '',
                'default' => true,
            ),
            array(
                'id'      => 'slider_height',
                'type'    => 'text',
                'title'   => __('幻灯片高度','vt'),
                'default' => '380'
            ),
            array(
                'id'         => 'slider_items',
                'type'       => 'group',
                'title'      => __('幻灯片列表','vt'),
                'fields'     => array(
                    array(
                        'id'      => 'title',
                        'type'    => 'text',
                        'title'   => __('标题','vt')
                    ),
                    array(
                        'id'      => 'description',
                        'type'    => 'text',
                        'title'   => __('描述','vt')
                    ),
                    array(
                        'id'          => 'image',
                        'type'        => 'upload',
                        'title'       => __('上传','vt'),
                        'library'     => 'image',
                        'placeholder' => 'http://',
                        'preview'     => true
                    ),
                    array(
                        'id'      => 'target',
                        'type'    => 'switcher',
                        'title'   => __('新窗口打开链接','vt'),
                        'label'   => ''
                    ),
                    array(
                        'id'      => 'link',
                        'type'    => 'text',
                        'title'   => __('链接地址','vt')
                    ),
                ),
                'default' => array(
                                array(
                                    'title' => __('你好，MirageV','vt'),
                                    'description' => __('这是幻灯片的内容展示，支持HTML代码','vt'),
                                    'image' => get_template_directory_uri() . '/assets/images/slider1.jpg'
                                ),
                                array(
                                    'title' => __('你好，MirageV','vt'),
                                    'description' => __('这是幻灯片的内容展示，支持HTML代码','vt'),
                                    'image' => get_template_directory_uri() . '/assets/images/slider2.jpg'
                                )
                            )
            )
        )
    ));

    /**
     * 首页设置 - 热门推荐模块
     */
    CSF::createSection($prefix, array(
        'parent'      => 'home_fields',
        'title'       => __('热门推荐','vt'),
        'description' => '',
        'fields'      => array(
            array(
                'id'      => 'hot_title',
                'type'    => 'text',
                'title'   => __('标题','vt'),
                'default' => __('推荐模块标题','vt')
            ),
            array(
                'id'    => 'hot_is_show',
                'type'  => 'radio',
                'title' => __('推荐模块','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'         => 'hot_items',
                'type'       => 'group',
                'title'      => __('推荐列表','vt'),
                'fields'     => array(
                    array(
                        'id'      => 'title',
                        'type'    => 'text',
                        'title'   => __('标题','vt')
                    ),
                    array(
                        'id'          => 'image',
                        'type'        => 'upload',
                        'title'       => __('上传','vt'),
                        'library'     => 'image',
                        'placeholder' => 'http://',
                        'preview'     => true
                    ),
                    array(
                        'id'      => 'target',
                        'type'    => 'switcher',
                        'title'   => __('新窗口打开链接','vt'),
                        'label'   => ''
                    ),
                    array(
                        'id'      => 'link',
                        'type'    => 'text',
                        'title'   => __('链接地址','vt')
                    ),
                ),
                'default' => array(
                                array(
                                    'title' => __('推荐模块标题','vt').' 1',
                                    'image' => get_template_directory_uri() . '/assets/images/hot.jpg'
                                ),
                                array(
                                    'title' => __('推荐模块标题','vt').' 2',
                                    'image' => get_template_directory_uri() . '/assets/images/hot.jpg'
                                ),
                                array(
                                    'title' => __('推荐模块标题','vt').' 3',
                                    'image' => get_template_directory_uri() . '/assets/images/hot.jpg'
                                ),
                                array(
                                    'title' => __('推荐模块标题','vt').' 4',
                                    'image' => get_template_directory_uri() . '/assets/images/hot.jpg'
                                )
                            )
            )
        )
    ));

    /**
     * 首页设置 - 最新文章模块
     */
    CSF::createSection($prefix, array(
        'parent'      => 'home_fields',
        'title'       => __('最新文章','vt'),
        'description' => '',
        'fields'      => array(
            // array(
            //     'id'      => 'posts_title',
            //     'type'    => 'text',
            //     'title'   => __('模块标题','vt'),
            //     'default' => __('模块标题','vt')
            // ),
            // array(
            //     'id'      => 'posts_description',
            //     'type'    => 'textarea',
            //     'title'   => __('模块描述','vt'),
            //     'default' => __('模块描述','vt'),
            // ),
            array(
                'id'      => 'posts_ids',
                'type'    => 'select',
                'title'   => __('文章分类','vt'),
                'chosen'      => true,
                'multiple'    => true,
                'options'     => 'categories'
            ),
            array(
                'id'      => 'posts_not_in_ids',
                'type'    => 'select',
                'title'   => __('排除分类','vt'),
                'chosen'      => true,
                'multiple'    => true,
                'options'     => 'categories'
            ),
            array(
                'id'    => 'posts_auto_load',
                'type'  => 'radio',
                'title' => __('自动加载','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'    => 'posts_auto_load_limit',
                'type'  => 'text',
                'title' => __('自动加载次数','vt'),
                'default' => '1',
                'desc' => __('自动加载到第几页，0代表无限加载','vt')
            )
        )
    ));

    /**
     * 首页设置 - 友情链接模块
     */
    CSF::createSection($prefix, array(
        'parent'      => 'home_fields',
        'title'       => __('友情链接','vt'),
        'description' => '',
        'fields'      => array(
            array(
                'id'    => 'links_is_show',
                'type'  => 'radio',
                'title' => __('友情链接','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '1',
                'inline' => true
            ), 
        )
    ));

    /**
     * 顶部设置
     */
    CSF::createSection( $prefix, array(
        'title'  => __('顶部设置','vt'),
        'icon'   => 'dashicons dashicons-admin-generic',
        'fields' => array(
            // array(
            //     'id'         => 'header_type',
            //     'type'       => 'radio',
            //     'title'      => __('显示类型','vt'),
            //     'options'    => array('0' => __('简单','vt'), '1' => __('全部','vt')),
            //     'default'    => '0',
            //     'inline' => true
            // ),
            array(
                'id'    => 'site_logo',
                'type'  => 'upload',
                'title' => __('网站LOGO','vt'),
                'default' => get_template_directory_uri() . '/assets/images/logo.png',
                'preview' => true
            ),
            array(
                'id'    => 'site_logo_dark',
                'type'  => 'upload',
                'title' => __('网站LOGO(暗黑模式)','vt'),
                'default' => get_template_directory_uri() . '/assets/images/logo.png',
                'preview' => true
            ),
            array(
                'id'         => 'is_show_login_register',
                'type'       => 'radio',
                'title'      => __('显示登录按钮','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'         => 'show_admin_bar',
                'type'       => 'radio',
                'title'      => __('顶部工具栏','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '0',
                'inline' => true
            ),
        )
    ));

    /**
     * 底部设置
     */
    CSF::createSection( $prefix, array(
        'title'  => __('底部设置','vt'),
        'icon'   => 'dashicons dashicons-admin-generic',
        'fields' => array(
            array(
                'id'         => 'footer_type',
                'type'       => 'radio',
                'title'      => __('显示类型','vt'),
                'options'    => array('0' => __('简单','vt'), '1' => __('全部','vt')),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'    => 'footer_bg_type',
                'type'  => 'radio',
                'title' => __('背景颜色','vt'),
                'options' => array('0' => __('亮色','vt'), '1' => __('暗色','vt')),
                'default' => 1,
                'inline' => true
            ),
            array(
                'id'    => 'footer_copyright',
                'type'  => 'textarea',
                'title' => __('底部版权','vt'),
                'default' => '&copy; '.date('Y').' <a href="http://www.vtheme.cn">vtheme.cn</a> All Rights Reserved.'
            ),
            array(
                'id'       => 'footer_js',
                'type'     => 'code_editor',
                'title'    => __("自定义JS代码",'vt'),
                'subtitle' => '',
                // 'settings' => array(
                //     'theme' => 'dracula',
                //     'mode'  => 'javascript',
                // ),
                'sanitize' => false,
                'default'  => '',
            ),
            array(
                'id'    => 'mobile_nav_show',
                'type'  => 'radio',
                'title' => __('移动导航栏','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '0',
                'inline' => true
            ),
            array(
                'id'        => 'mobile_nav_config',
                'type'      => 'group',
                'title'     => __('导航栏设置','vt'),
                'fields'    => array(
                                array(
                                    'id'    => 'nav_text',
                                    'type'  => 'text',
                                    'title' => __('标题','vt'),
                                ),
                                array(
                                    'id'    => 'nav_icon',
                                    'type'  => 'text',
                                    'title' => __('图标','vt'),
                                ),
                                array(
                                    'id'    => 'nav_link',
                                    'type'  => 'text',
                                    'title' => __('链接','vt')
                                ),
                            ),
                'default'   => array(
                    array('nav_text'=>__('首页','vt'), 'nav_icon'=>'#xe89a;', 'nav_link'=>'/'),
                    array('nav_text'=>__('电话','vt'), 'nav_icon'=>'#xe71d;', 'nav_link'=>'tel:13312341234'),
                    array('nav_text'=>__('微信','vt'), 'nav_icon'=>'#xe903;', 'nav_link'=>''),
                    array('nav_text'=>__('产品','vt'), 'nav_icon'=>'#xe7f4;', 'nav_link'=>'/'),
                )
            ),

        )
    ));


    /**
     * 邮箱设置
     */
    CSF::createSection( $prefix, array(
        'title'  => __('邮箱设置','vt'),
        'icon'   => 'dashicons dashicons-admin-generic',
        'fields' => array(
            array(
                'id'    => 'smtp_is_on',
                'type'  => 'radio',
                'title' => __('导航栏','vt'),
                'options'    => array('1' => __('开启','vt'), '0' => __('关闭','vt')),
                'default'    => '1',
                'inline' => true
            ),
            array(
                'id'    => 'smtp_host',
                'type'  => 'text',
                'title' => __('SMTP地址','vt'),
            ),
            array(
                'id'    => 'smtp_port',
                'type'  => 'text',
                'title' => __('SMTP端口','vt'),
            ),
            array(
                'id'    => 'smtp_username',
                'type'  => 'text',
                'title' => __('SMTP账户','vt'),
            ),
            array(
                'id'    => 'smtp_password',
                'type'  => 'text',
                'title' => __('SMTP密码','vt'),
            ),
            array(
                'id'    => 'smtp_nicename',
                'type'  => 'text',
                'title' => __('发件人昵称','vt'),
            ),
        )
    ));


    /**
     * 备份
     */
    CSF::createSection( $prefix, array(
        'title'  => __('备份','vt'),
        'icon'   => 'dashicons dashicons-shield',
        'fields' => array(
            array(
                'type' => 'backup',
            )
        )
    ));


}



