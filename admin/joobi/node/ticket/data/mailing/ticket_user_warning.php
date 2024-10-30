<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_user_warning_mailing extends WDataMail{
var $namekey='ticket_user_warning';
var $rolid='#allusers';
var $wid='#ticket.node';
var $alias='User Warning Close';
var $level=50;
var $tags='{widget:param|name=ticketid}
{widget:param|name=link}
{widget:param|name=delaywarning}
{widget:param|name=closein}
{widget:param|name=title}
{widget:param|name=description}
{widget:param|name=linkclose}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065050EKTU';
var $ctext='1470801901JGHK';
var $chtml='1418159648NYLR';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}