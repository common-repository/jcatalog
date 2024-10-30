<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_unsolved_ticket_warning_mailing extends WDataMail{
var $namekey='unsolved_ticket_warning';
var $rolid='#allusers';
var $wid='#ticket.node';
var $alias='Unsolved ticket warning';
var $level=50;
var $tags='{widget:param|name=ticketid}
{widget:param|name=title}
{widget:param|name=created}
{widget:param|name=author}
{widget:param|name=lastreply}
{widget:param|name=link}
{widget:param|name=linkclose}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065050EKTS';
var $ctext='1470801901JGHH';
var $chtml='1418159648NYLO';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}