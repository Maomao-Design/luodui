<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * mantob Website Management System
 *
 * @since		version 2.0.0
 * @author		mantob <mantob@gmail.com>
 * @license     http://www.mantob.com/license
 * @copyright   Copyright (c) 2013 - 9999, mantob.Com, Inc.
 * @filesource	svn://www.mantob.net/v2/news/controllers/member/back.php
 */

require FCPATH.'mantob/core/D_Member_Back.php';
 
class Back extends D_Member_Back {

    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
    }

}