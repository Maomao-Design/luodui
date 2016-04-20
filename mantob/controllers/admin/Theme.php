<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Omweb Website Management System
 *
 * @since		version 2.0.0
 * @author		mantob <kefu@mantob.com>
 * @license     http://www.mantob.com/license
 * @copyright   Copyright (c) 2013 - 9999, mantob.Com, Inc.
 * @filesource	svn://www.mantob.com/v2/mantob/controllers/admin/theme.php
 */

require FCPATH.'mantob/core/D_File.php';

class Theme extends D_File {

    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
		$this->path = FCPATH.'mantob/statics/';
		$this->template->assign(array(
			'path' => $this->path,
			'furi' => 'admin/theme/',
			'auth' => 'admin/theme/',
			'menu' => $this->get_menu(array(
				lang('231') => 'admin/theme/index'
			)),
		));
    }
	
}