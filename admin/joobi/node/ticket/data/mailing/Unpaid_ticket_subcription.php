<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_Unpaid_ticket_subcription_mailing extends WDataMail{
var $namekey='Unpaid_ticket_subcription';
var $rolid='#allusers';
var $wid='#ticket.node';
var $alias='Unpaid Ticket Notification for Subcription';
var $level=50;
var $tags='{widget:param|name=ticketid}
{widget:param|name=project}
{widget:param|name=title}
{widget:param|name=link}
{widget:param|name=description}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065050EKTV';
var $ctext='1470801901JGHL';
var $chtml='1418159648NYLS';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}