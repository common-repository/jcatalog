<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_support_required_notification_mailing extends WDataMail{
var $namekey='support_required_notification';
var $rolid='#allusers';
var $wid='#ticket.node';
var $alias='Notification for support required';
var $level=25;
var $tags='{widget:param|name=ticketid}
{widget:param|name=category}
{widget:param|name=title}
{widget:param|name=link}
{widget:param|name=description}
{widget:param|name=created}
{widget:param|name=comment}
{widget:param|name=priority}
{widget:param|name=assignedby}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065050EKTT';
var $ctext='1470801901JGHI';
var $chtml='1418159648NYLP';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}