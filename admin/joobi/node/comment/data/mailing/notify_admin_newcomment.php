<?php defined('JOOBI_SECURE') or die('J....');
class Data_comment_notify_admin_newcomment_mailing extends WDataMail{
var $namekey='notify_admin_newcomment';
var $rolid='#allusers';
var $wid='#comment.node';
var $alias='Notification admin for new comment';
var $level=0;
var $tags='{widget:param|name=commentid}
{widget:param|name=title}
{widget:param|name=description}
{widget:param|name=score}
{widget:param|name=link}
{widget:param|name=approvalMsg}
{widget:param|name=approvalLink}';
var $template=3;
var $format=0;
var $notify=1;
var $name='1380065076PPZN';
var $ctext='1470801915JKMT';
var $chtml='1380065076PPZR';
var $intro='';
var $smsmessage='';
var $title='';
var $subtitle='';}