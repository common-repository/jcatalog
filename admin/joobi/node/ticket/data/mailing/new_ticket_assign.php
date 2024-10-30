<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_new_ticket_assign_mailing extends WDataMail{
var $namekey='new_ticket_assign';
var $rolid='#allusers';
var $wid='#ticket.node';
var $alias='New ticket notification';
var $level=0;
var $tags='{widget:param|name=ticketid}
{widget:param|name=category}
{widget:param|name=title}
{widget:param|name=link}
{widget:param|name=description}
{widget:param|name=priority}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065050EKTQ';
var $ctext='1470801901JGHE';
var $chtml='1418159648NYLL';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}