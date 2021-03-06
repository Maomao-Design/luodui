<?php

/**
 * 钩子定义配置
 */
defined('BASEPATH') OR exit('No direct script access allowed');

// 加载应用的钩子配置文件
$app = require FCPATH.'config/app_hooks.php';
if ($app) {
    foreach ($app as $dir => $data) {
        if ($data) {
            foreach ($data as $name => $value) {
                $hook[$name] = $value;
            }
            unset($name, $value);
        }
    }
    unset($data, $dir);
}
unset($app);

// 加载自定义钩子配置文件
if (is_file(FCPATH.'config/my_hooks.php')) require FCPATH.'config/my_hooks.php';

// 加载当前模块的钩子配置文件
if (is_file(APPPATH.'config/my_hooks.php')) require APPPATH.'config/my_hooks.php';

// 同步其他到站点
$hook['syn_content_add'][] = array(
    'class' => 'module_hooks',
    'function' => 'syn_content_add',
    'filename' => 'module_hooks.php',
    'filepath' => 'hooks',
);

/*
$hook['钩子名称'][] = array(
    'class' => '类名称',
    'function' => '方法名称',
    'filename' => '钩子文件.php',
    'filepath' => 'hooks',
);
 */