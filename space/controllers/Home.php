<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * mantob Website Management System
 *
 * @since		version 2.0.1
 * @author		mantob <mantob@gmail.com>
 * @license     http://www.mantob.com/license
 * @copyright   Copyright (c) 2013 - 9999, mantob.Com, Inc.
 */

class Home extends M_Controller {

	private $space;

    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
		$this->space = $this->get_cache('member', 'setting', 'space');
		define('SPACE_URL', $this->space['domain'] ? 'http://'.$this->space['domain'].'/' : SITE_URL.'space/');
		define('SPACE_THEME_PATH', SPACE_URL.'statics/'.SITE_THEME.'/');
    }

    /**
     * 首页
     */
    public function index() {
	
		// 搜索参数
		$get = $this->input->get(NULL, TRUE);
		$get = isset($get['rewrite']) ? dr_rewrite_decode($get['rewrite']) : $get;
		$get['keyword'] = str_replace(array('%', ' '), array('', '%'), $get['keyword']);
		unset($get['c'], $get['m'], $get['page']);
		
		$where = '';
		if ($get) {
			foreach ($get as $name => $v) {
				$where.= $name.'='.$v.' ';
			}
		}
		
		$this->template->assign(array(
			'get' => $get,
			'where' => $where,
			'params' => $get,
			'urlrule' => dr_space_search_url($get, 'page', '[page]'),
            'meta_title' => $this->space['title'],
            'meta_keywords' => $this->space['keywords'],
            'meta_description' => $this->space['description'],
        ));
		$this->template->display('index.html');
    }
}