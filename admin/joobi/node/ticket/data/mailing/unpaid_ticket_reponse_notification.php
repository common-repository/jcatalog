<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_unpaid_ticket_reponse_notification_mailing extends WDataMail{
var $namekey='unpaid_ticket_reponse_notification';
var $rolid='#allusers';
var $wid='#ticket.node';
var $alias='Unpaid Ticket Response Notification';
var $level=50;
var $tags='{widget:param|name=ticketid}
{widget:param|name=project}
{widget:param|name=link}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065050EKTW';
var $ctext='';
var $chtml='1490099722BLKC';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}