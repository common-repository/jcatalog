<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_reply_notify_first_moderator_mailing extends WDataMail{
var $namekey='reply_notify_first_moderator';
var $rolid='#allusers';
var $wid='#ticket.node';
var $alias='Notify first assigned moderator that reply is made';
var $level=0;
var $tags='{widget:param|name=ticketid}
{widget:param|name=description}
{widget:param|name=category}
{widget:param|name=link}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065050EKUA';
var $ctext='1470801902CUDH';
var $chtml='1418159648NYLW';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}