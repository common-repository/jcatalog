<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_deducted_ticketcredit_reponse_notification_mailing extends WDataMail{
var $namekey='deducted_ticketcredit_reponse_notification';
var $rolid='#allusers';
var $html=0;
var $wid='#ticket.node';
var $alias='Ticket Credit Deduction Reponse Notification';
var $level=50;
var $tags='{widget:param|name=ticket}
{widget:param|name=project}
{widget:param|name=credits}
{widget:param|name=description}
{widget:param|name=link}
{widget:param|name=link2}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065050EKTX';
var $ctext='';
var $chtml='1490099722BLKD';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}