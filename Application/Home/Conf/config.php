<?php
return array(
    //'配置项'=>'配置值'
    //***********************************SESSION设置**********************************
//    'SESSION_OPTIONS'           => array(
//        'name'                  => 'YZCSESSION',                    //设置session名
//        'expire'                => 36000,                           //SESSION保存1小时
//        'use_trans_sid'         => 1,                               //跨页传递
//        'use_only_cookies'      => 0,                               //是否只开启基于cookies的session的会话方式
//    ),

    //***********************************数据库设置**********************************
    'DB_TYPE'                   => 'mysql', // 数据库类型
    'DB_HOST'                   => 'localhost', // 服务器地址
    'DB_NAME'                   => 'borrow', // 数据库名
    'DB_USER'                   => 'root', // 用户名
    'DB_PWD'                    => '',  // 密码
    'DB_PORT'                   => '3306', // 端口
    'DB_PREFIX'                 => '', // 数据库表前缀
    'DB_FIELDTYPE_CHECK'        =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'           =>  false,        // 启用字段缓存
    'DB_CHARSET'                =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'            =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'            =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'             =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'               =>  '', // 指定从服务器序号
    'DB_SQL_BUILD_CACHE'        =>  false, // 数据库查询的SQL创建缓存
    'DB_SQL_BUILD_QUEUE'        =>  'file',   // SQL缓存队列的缓存方式 支持 file xcache和apc
    'DB_SQL_BUILD_LENGTH'       =>  20, // SQL缓存的队列长度
    'DB_BIND_PARAM'             =>  false, // 数据库写入数据自动参数绑定
    'SHOW_PAGE_TRACE'           =>  true, //显示页面追踪信息
    'SHOW_ERROR_MSG'            =>  false,
    'ERROR_MESSAGE'             =>  '发生错误！'
    // 'ERROR_PAGE' =>'http://www.myDomain.com/Public/error.html'
);

