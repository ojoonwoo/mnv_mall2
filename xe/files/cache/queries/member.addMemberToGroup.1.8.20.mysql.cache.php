<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("addMemberToGroup");
$query->setAction("insert");
$query->setPriority("");

${'group_srl88_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl88_argument'}->checkNotNull();
if(!${'group_srl88_argument'}->isValid()) return ${'group_srl88_argument'}->getErrorMessage();
if(${'group_srl88_argument'} !== null) ${'group_srl88_argument'}->setColumnType('number');

${'member_srl89_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl89_argument'}->checkNotNull();
if(!${'member_srl89_argument'}->isValid()) return ${'member_srl89_argument'}->getErrorMessage();
if(${'member_srl89_argument'} !== null) ${'member_srl89_argument'}->setColumnType('number');

${'site_srl90_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl90_argument'}->ensureDefaultValue('0');
if(!${'site_srl90_argument'}->isValid()) return ${'site_srl90_argument'}->getErrorMessage();
if(${'site_srl90_argument'} !== null) ${'site_srl90_argument'}->setColumnType('number');

${'regdate91_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate91_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate91_argument'}->isValid()) return ${'regdate91_argument'}->getErrorMessage();
if(${'regdate91_argument'} !== null) ${'regdate91_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`group_srl`', ${'group_srl88_argument'})
,new InsertExpression('`member_srl`', ${'member_srl89_argument'})
,new InsertExpression('`site_srl`', ${'site_srl90_argument'})
,new InsertExpression('`regdate`', ${'regdate91_argument'})
));
$query->setTables(array(
new Table('`xe_member_group_member`', '`member_group_member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>