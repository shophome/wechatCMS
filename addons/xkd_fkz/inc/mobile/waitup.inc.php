<?php

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') === false) {
	exit('请在微信中浏览');
}


defined('IN_IA') or exit('Access Denied');
global $_W,$_GPC;

$this->loadMod('member');
$mod_member = new member();

$this->loadMod('record');
$mod_record = new record();

$uid = $_W['member']['uid'];
$cfg = $this->module['config'];

$member = $mod_member->get_member($uid);

if (empty($member['parent1']) && $uid != $cfg['uid']) {
	include $this->template('nolevel');
	return;
}

$pindex = max(1, intval($_GPC['page']));
$psize = 10;
$total = 0;

$filter = array();
$filter['apply_uid'] = $_GPC['apply_uid'];
$filter['flag'] = 1;
$list = $mod_record->get_record_by_approval_uid($_W['member']['uid'], $filter, $pindex, $psize, $total);

$pager = pagination($total, $pindex, $psize);
include $this->template('waitup');
?>
