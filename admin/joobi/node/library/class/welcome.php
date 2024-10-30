<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Library_Welcome_class extends WClasses {
private $_CMS_Name='';
private $_CMS_ID='';
private $_CMS_Alt='';
private $_CMS_Extension='';
private $_CMS_CSS='';
private $_videoID='';
public function welcome(){
$css=$this->_addCSS();
switch( JOOBI_FRAMEWORK_TYPE){
case 'joomla':
$this->_CMS_Name='Joomla';
$this->_CMS_ID='joomla';
$this->_videoID='146505709';
$this->_CMS_Apps='Joomla components';
$this->_CMS_Alt='&alt=joomla';
$this->_CMS_Extension='extensions';
$this->_CMS_review='<a target="_blank" href="http://extensions.joomla.org/extensions/extension?searchall=joobi&filter[tags][]=&filter[core_catid]=&filter[includes]=&filter[versions]=&filter[type]=&filter[hasdemo]=&filter[newupdated]=&filter[score]=&dir=DESC&limitstart=&controller=filter&view=extension&layout=list&Itemid=145&clearorders=0&clearfilters=1">Joomla.org</a>';
WPage::addCSS($css );
WPage::addCSSFile('css/bootstrap.css');
break;
default:
$this->_CMS_Name='WordPress';
$this->_videoID='215505713';
$this->_CMS_Apps='WordPress plugins';
$this->_CMS_ID='wp';
$this->_CMS_Alt='&alt=wordpress';
$this->_CMS_Extension='plugins';
$this->_CMS_CSS=$css;
$this->_CMS_CSS .='body{padding-top:0 !important;}';$this->_CMS_review='<a target="_blank" href="https://wordpress.org/plugins/search.php?type=term&amp;q=joobi">WordPress.org</a>';
break;
}
return $this->_renderWelcomPage();
}
private function _renderWelcomPage(){
$html='';
if(!empty($this->_CMS_CSS))$html .='<style type="text/css">'.$this->_CMS_CSS.'</style>';
$html .='<div class="container"><header class="jumbotron hero-spacer jumbohead"><h1>Welcome to Joobi!</h1><br><p>Eliminate the hassle arising from having your customer data spread across multiple software. Discover what it feels like to have all your data at your fingertips!</p>';
$html .=$this->_renderSocial();
$html .='</header>';
$html .='<hr><div class="row"><div class="col-md-7">';
if(!empty($this->_videoID))$html .='<iframe src="https://player.vimeo.com/video/'.$this->_videoID.'?byline=0&portrait=0" width="600" height="337" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
$html .='</div><div class="col-md-5"><h1>Latest News</h1>';
$html .=$this->_renderRSS();
$html .='<a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-blog" class="btn btn-primary"><i class="fa fa-bullhorn"></i> Visit the blog</a></div></div><hr><div class="row"><div class="col-lg-12"><div class="well wellcolor text-center"> We highly recommend to browse below <strong>resources</strong> to help you get started and if you have <strong>question</strong>, you may contact us and we will do our best response as soon as possible. Oh, and you should really follow us on&nbsp;<a target="_blank" href="https://twitter.com/ijoobi">Twitter</a>,&nbsp;<a target="_blank" href="https://www.facebook.com/JoobiWiki">Facebook</a>, and&nbsp;<a target="_blank" href="https://plus.google.com/106079931847128580279">Google+</a>. </div></div></div><div class="row"><div class="row text-center"><div class="col-lg-10 col-lg-offset-1"><h1><i class="fa fa-paper-plane-o font-color"></i> Get Started</h1><hr class="smallhr"></div></div><div class="col-md-4"><h3><i class="fa fa-leanpub"></i> Resources</h3><ul><li><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-doc" target="_blank">Documentation</a></li><li><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-faq" target="_blank">FAQ</a></li><li> Video Tutorials</li></ul></div><div class="col-md-4"><h3><i class="fa fa-users"></i> Community and Support</h3><ul><li>VIP Support (Paid Members)</li><li>Community Forum</li><li>Live Chat (Pre-sale)</li></ul><p>Support Hours: <strong>7:00 - 21:00</strong> GMT Monday-Friday</p><a target="_blank" class="btn btn-warning btn-md" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-help"><i class="fa fa-support"></i> Visit Support Center</a></div><div class="col-md-4"><h3><i class="fa fa-send"></i> Connect with Us</h3><p>Subscribe to our newsletter to receive product updates and promotion. <br>We do not share your emails.</p><div><form action="https://joobi.co/index.php?option=com_jnews" method="post" name="modjnewsForm"><input type="hidden" name="Itemid" value="0"/><input id="wz_31" type="checkbox" class="inputbox" value="1" name="subscribed[1]" checked="checked"/><input type="hidden" name="sub_list_id[1]" value="115"/>Joobi '.$this->_CMS_Extension.' News<br/><input type="hidden" name="acc_level[1]" value="29"/><input id="wz_12" type="text" size="25" value="E-mail" class="inputbox" name="email" onblur="if(this.value==\'\') this.value=\'E-mail\';" onfocus="if(this.value==\'E-mail\') this.value=\'\' ; "/><input id="wz_22" type="submit" value="Subscribe" class="button"/><input type="hidden" name="act" value="urlsubscribe"/><input type="hidden" name="listname" value="1"/><input type="hidden" name="passwordA" value="y2HFkeFHrax"/><input type="hidden" name="fromSubscribe" value="1"/></form></div></div></div><hr><div class="row"><div class="row text-center"><div class="col-lg-10 col-lg-offset-1"><h1><i class="fa fa-rocket iconcolor"></i> Boost Your '.$this->_CMS_Name.' Site</h1><p>'.$this->_CMS_Apps.' designed to help you build a successful online business.</p><hr class="smallhr"></div></div></div><div class="col-lg-12"><h3><i class="fa fa-shopping-cart"></i> eCommerce</h3></div><div class="row text-center"><div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jstore.png" alt="jstore"><div class="caption"><h3>jStore</h3><h5><strong>Create your own online store</strong></h5><p>A free Joomla shopping cart software packed with all required feature you will need to build a successful online store.</p><p><a target="_blank" href="#" class="btn btn-danger">Download</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jstore&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jmarket.png" alt="jmarket for wordpress"><div class="caption"><h3>jMarket</h3><h5><strong>Build your on marketplace</strong></h5><p>Mimick popular online stores such as eBay, Amazon, Etsy, Envato, or Groupon and start earning profit from your vendors\' sales.</p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jmarket&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jauction.png" alt="jauction for wordpress"><div class="caption"><h3>jAuction</h3><h5><strong>Start your own auction website</strong></h5><p>Create your own eBay-like auction website—where multiple vendors sell on your store and gain profit from auctioneers sales.</p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jauction&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jclassifieds.png" alt="classifieds for wordpress"><div class="caption"><h3>jClassifieds</h3><h5><strong>Start your own classifieds website</strong></h5><p>With jClassifieds you can have wanted ads, listing site like auto, services, properties, and more… or anything you want.</p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jclassifieds&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jvoucher.png" alt="sell vouchers"><div class="caption"><h3>jVouchers</h3><h5><strong>Sell vouchers, gift certificate and more...</strong></h5><p>Build site like Groupon or livingsocial. It enables you to create and sell vouchers, gift certificate, coupons and rebate offer.</p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jvouchers&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jsubscription.png" alt="subscription for wordpress"><div class="caption"><h3>jSubscription</h3><h5><strong>Setup a membership base website </strong></h5><p>You can make monthly recurring income by selling website contents or restrict access to some section of your website.</p><p><a target="_blank" href="#" class="btn btn-warning">Coming Soon</a></p></div></div></div><div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jaffiliates.png" alt="affiliates for wordpress"><div class="caption"><h3>jAffiliates</h3><h5><strong>Easily grow your sales and traffic</strong></h5><p>Easily create, manage and track affiliate referrals and commission from vendor sales. It helps you generate substantial revenue online - more traffic, more sales...</p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jaffiliates&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jaffiliates.png" alt="affiliates for wordpress"><div class="caption"><h3>jCatalog</h3><h5><strong>Product Catalogue</strong></h5><p>Build your own professional and attractive product catalogue for free.</p><p><a target="_blank" href="#" class="btn btn-danger">Download</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jcatalog&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div></div><hr><div class="col-lg-12"><h3><i class="fa fa-calendar"></i> Customer & Security</h3></div><div class="row text-center"><div class="col-md-4 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jcontacts.png" alt="contact management for wordpress"><div class="caption"><h3>jContacts</h3><h5><strong>Contact management, simplified.</strong></h5><p>Consolidate all your contacts and customers into one place so that you can keep track of your customers, and other organizations that you do business with.</p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jcontacts&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-4 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jtickets.png" alt="wordpress ticket system"><div class="caption"><h3>jTickets</h3><h5><strong>Make customer support simple and efficient</strong></h5><p>Manage inbound inquiries, track and respond to customers\' requests easily and quickly with jTickets. Never worry about missing out on an e-mail from your customer.</p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect&linkidid='.$this->_CMS_ID.'-jtickets&alt=wordpress&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-4 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jdefender.png" alt="wordpress security"><div class="caption"><h3>jDefender</h3><h5><strong>Protect your site from intruders</strong></h5><p>Easily track user views, behavior and activities for security and reporting purpose. And Blacklist IP Addresses from visiting your website to prevent any malicious activity.</p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jdefender&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div></div><hr><div class="col-lg-12"><h3><i class="fa fa-puzzle-piece"></i> More Awesome Tools</h3></div><div class="row text-center"><div class="col-md-4 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jdloads.png" alt="wordpress file manager"><div class="caption"><h3>jDloads</h3><h5><strong>Manage your downloadable files</strong></h5><p>Manage your downloadable files efficiently by controlling the views and downloads to specific group of users like managers, authors, registered users, and more. Fully integrated with jMarket allows vendors to manage files.</p><p><p><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-try" class="btn btn-primary">Try Now!</a><a target="_blank" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-jdloads&alt=wordpress" class="btn btn-default">Browse Features</a></p></div></div></div><div class="col-md-4 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jnewsletter.png" alt="wordpress newsletter"><div class="caption"><h3>jNewsletters</h3><h5><strong>Create. Send. Connect</strong></h5><p>Easily create, send, share and track lovely email for Free.</p><p><a target="_blank" href="#" class="btn btn-warning">Coming Soon</a></p></div></div></div><div class="col-md-4 col-sm-6 hero-feature"><div class="thumbnail marginthumb"><img src="https://joobi.co/images/apps/all/jcampaign.png" alt="wordpress campaign"><div class="caption"><h3>jCampaign</h3><h5><strong>Automate Marketing. Track Campaigns</strong></h5><p>Send campaign, auto-newsletter, follow-up emails and ensure delivery.</p><p><a target="_blank" href="#" class="btn btn-warning">Coming Soon</a></p></div></div></div></div><hr><div class="row"><div class="row text-center"><div class="col-lg-10 col-lg-offset-1"><h1><i class="fa fa-usd font-color"></i> We have 3 available pricing</h1><p>We\'ve got a plan for everyone and every budget. All plans start with a Free full featured version.</p><hr class="smallhr"></div></div><div class="col-md-4"><div class="thumbnail freeprice"><div class="caption"><h2><i class="fa fa-rocket font-color"></i> Free - Full Featured</h2><h5><strong>Got no money? We still love you.</strong></h5><p>Simply upgrade when you\'re happy with our services. All the work you\'ve done using the Free version is always preserved.</p><a target="_blank" class="btn btn-success" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect&link='.$this->_CMS_ID.'_try">Download Now</a></div></div></div><div class="col-md-4"><div class="thumbnail clubprice"><div class="caption"><h2><i class="fa fa-graduation-cap font-color"></i> Join the Club</h2><h5><strong>The full boat of feature to help you get started.</strong></h5><p>Starting at $90, you can use All Joobi '.$this->_CMS_Apps.' (even new ones) and install for unlimited websites.</p><a target="_blank" class="btn btn-primary" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-club">Browse Plans</a></div></div></div><div class="col-md-4"><div class="thumbnail singleprice"><div class="caption"><h2><i class="fa fa-plug font-color"></i> Single License</h2><h5><strong>Buy Only One Plugin!</strong></h5><p>The perfect remedy for those with smaller budgets. Price range starts from $26 to $209 depending on the plugin and your the duration of your chosen subscriptin.</p><a target="_blank" class="btn btn-primary" href="https://joobi.co/index.php?option=com_jlinks&controller=redirect'.$this->_CMS_Alt.'&linkid='.$this->_CMS_ID.'-single-pricing">Browse Plugins</a></div></div></div></div><hr><div class="row"><div class="col-lg-12"><div class="well wellcolor text-center"><p><i class="fa fa-comments fa-2x font-color"></i> Hey, if we helped you, we\'d be grateful if you let people know by giving us an awesome review on '.$this->_CMS_review.'. The more business you refer to us, the better the service we can provide.</p></div></div></div><footer><div class="row"><div class="col-lg-12">';
$html .='<p>Copyright &copy; Joobi 2006 - '.date('Y'). ' - Joobi is not a company. It\'s a way of Life...</p></div></div></footer></div>';
return $html;
}
private function _renderRSS(){
$xml='https://joobi.co/blog/latest.html?format=feed&type=rss';
if(!class_exists('DOMDocument')){
$this->userN('1433250437OEYO');
return false;
}$xmlDoc=new DOMDocument();
if(!$xmlDoc || ! method_exists($xmlDoc, 'load')) return '';
$xmlDoc->load($xml );
if(empty($xmlDoc)) return;
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
if(empty($channel)) return;
$channel_title=$channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
$channel_link=$channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
$channel_desc=$channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
$html='';
$x=$xmlDoc->getElementsByTagName('item');
$maxFeed=4;
$html .='<ul>';
for($i=0; $i<=$maxFeed; $i++){
$item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
$item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
$html .='<li><a href="'.$item_link.'" target="_blank">'.$item_title.'</a></li>';
}$html .='</ul>';
return $html;
}
private function _renderSocial(){
$html='<div id="fb-root"></div>
<script>(function(d, s, id){
  var js, fjs=d.getElementsByTagName(s)[0];
  if(d.getElementById(id)) return;
  js=d.createElement(s); js.id=id;
  js.src="//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=760256454058012&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<div class="fb-like" data-href="https://www.facebook.com/JoobiWiki" data-width="10" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
<a href="https://twitter.com/ijoobi" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ijoobi</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>
<div class="g-follow" data-annotation="none" data-height="24" data-href="https://plus.google.com/u/0/b/106079931847128580279/106079931847128580279" data-rel="publisher"></div>
<script type="text/javascript">
  (function(){
var po=document.createElement(\'script\'); po.type=\'text/javascript\'; po.async=true;
po.src=\'https://apis.google.com/js/platform.js\';
var s=document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>';
return $html;
}
private function _addCSS(){
$css='body{padding-top:70px;color:#535353}.navbar-fixed-top .nav{padding:15px 0}.font-color{color:green}.navbar-fixed-top .navbar-brand{padding:0 15px}footer{padding:30px 0}@media(min-width:768px){body{padding-top:100px}.navbar-fixed-top .navbar-brand{padding:15px 0}.jumbohead{color:#FFF;background-color:#40B8E9}.wellcolor{background-color:#F3F3DB}.smallhr{width:48%}.iconcolor{color:#E04116}.marginthumb{padding-top:20px;background-color:#EEF7FB;border-color:#EEF7FB;color:#474747}.thumbnail .caption{color:#5C5A5A}.freeprice{background-color:#F6F6F6;border-color:#F6F6F6;padding:13px}.clubprice{background-color:#E0F8E1;border-color:#E0F8E1}.singleprice{background-color:#F8F1FB;border-color:#F8F1FB}}';
return $css;
}
}