<?php
/*
+--------------------------------------------------------------------------
|   WeCenter [#RELEASE_VERSION#]
|   ========================================
|   by WeCenter Software
|   © 2011 - 2014 WeCenter. All Rights Reserved
|   http://www.wecenter.com
|   ========================================
|   Support: WeCenter@qq.com
|
+---------------------------------------------------------------------------
*/


if (!defined('IN_ANWSION'))
{
	die;
}

class main extends AWS_CONTROLLER
{
	public function setup()
	{
		if (! $this->user_id)
		{
			HTTP::redirect('/explore/');
		}
	}

	public function index_action()
	{
		$this->crumb(AWS_APP::lang()->_t('动态'), '/home/');

		TPL::output('home/index');
	}

	public function invite_action()
	{
		$this->crumb(AWS_APP::lang()->_t('邀请我回复的问题'), '/home/invite/');

		TPL::output('home/invite');
	}

	public function question_action()
	{
		$this->crumb(AWS_APP::lang()->_t('我关注的问题'), '/home/question/');

		TPL::output('home/question');
	}

	public function explore_action()
	{
		HTTP::redirect('/explore/');
	}
}