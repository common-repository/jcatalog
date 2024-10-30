<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Node_install extends WInstall {
	public function install(&$object) {
		if ( !empty( $this->newInstall ) || ( property_exists($object, 'newInstall' ) && $object->newInstall) ) {
						$mailboxM = WModel::get( 'mailbox' );
						$mailboxM->name = 'Sample Mailbox';
			$mailboxM->description = 'This sample mailbox is created just for our reference, on how we should create and set the connection of the mailbox';
			$mailboxM->publish=0;
			$mailboxM->addon = 'imap';
			$mailboxM->username='youremail@domain.com';
			$mailboxM->password='password';
			$mailboxM->server='imap.domain.com';
			$mailboxM->params="secure=ssl\nnocertif=1\nport=993\nsavemessage=2\ndeletemsg=1";
			$mailboxM->returnId();
			$mailboxM->save();
			$schedulerInstallC = WClass::get( 'scheduler.install', null, 'class', false );
			if ( !empty($schedulerInstallC) ) $schedulerInstallC->newScheduler(
				'mailbox.mailbox.scheduler'
			, WText::t('1241989374PAXK')
			, WText::t('1433086401BPBR')
			, 70				, 1800				, 120				, 1					);
			if ( !empty($schedulerInstallC) ) $schedulerInstallC->newScheduler(
				'mailbox.emptytrashbox.scheduler'
			, WText::t('1260253904QSSP')
			, WText::t('1260253904QSSO')
			, 80				, 86400				, 60				, 1					);
			$installWidgetsC = WClass::get( 'install.widgets' );
			$installWidgetsC->installTable( 'mailbox.ruledictionary', $this->_installValuesA() );
		}
		return true;
	}
	private function _installValuesA() {
		return array(
  array('words' => 'You have been added to','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '2'),
  array('words' => 'Autoresponder','type' => '42','core' => '1','searchin' => '2','publish' => '1','ordering' => '3'),
  array('words' => 'Out of Office','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '3'),
  array('words' => 'Out of the Office','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '4'),
  array('words' => 'Vacation Reply','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '9'),
  array('words' => 'Out of Office Autoreply','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '7'),
  array('words' => 'Yahoo! Auto Response ','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '8'),
  array('words' => 'Yahoo! -Message d\'absence','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '16'),
  array('words' => 'Αυτόματη απόκριση του Yahoo!','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '11'),
  array('words' => 'Respuesta automática de Yahoo!','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '12'),
  array('words' => 'AutoReply','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '15'),
  array('words' => 'Automatski odgovor','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '13'),
  array('words' => 'Respuesta automática','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '19'),
  array('words' => 'Automatisch antwoord bij afwezigheid:','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '17'),
  array('words' => 'Absence du bureau :','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '5'),
  array('words' => 'Abwesend:','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '6'),
  array('words' => 'AUTO:','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '20'),
  array('words' => 'Réponse automatique d\'absence du bureau','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '21'),
  array('words' => 'Notification d\'absence','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '22'),
  array('words' => 'Réponse en cas d\'absence','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '23'),
  array('words' => 'Out of Office Notification','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '27'),
  array('words' => 'Automatic Autoresponder','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '26'),
  array('words' => 'Autoresponse from','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '14'),
  array('words' => 'Urlaub / Vacaciones','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '24'),
  array('words' => 'Risposta di assenza','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '25'),
  array('words' => 'Auto Answer','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '18'),
  array('words' => 'Email Address Changed','type' => '77','core' => '1','searchin' => '2','publish' => '1','ordering' => '30'),
  array('words' => 'Email address has changed','type' => '77','core' => '1','searchin' => '2','publish' => '1','ordering' => '31'),
  array('words' => 'Changement d\'adresse email','type' => '77','core' => '1','searchin' => '2','publish' => '1','ordering' => '32'),
  array('words' => 'Change of Address','type' => '77','core' => '1','searchin' => '2','publish' => '1','ordering' => '33'),
  array('words' => 'Mail adres niet meer in gebruik','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '88'),
  array('words' => 'Message Receive Do Not Reply','type' => '42','core' => '1','searchin' => '2','publish' => '1','ordering' => '5'),
  array('words' => 'NON RECAPITATO','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '89'),
  array('words' => 'Your Message has been received','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '10'),
  array('words' => 'Thank you for contacting us','type' => '42','core' => '1','searchin' => '2','publish' => '1','ordering' => '4'),
  array('words' => 'AntiSpam:','type' => '14','core' => '1','searchin' => '2','publish' => '1','ordering' => '39'),
  array('words' => 'AntiSpam requires you to confirm that you are a legitimate sender','type' => '14','core' => '1','searchin' => '2','publish' => '1','ordering' => '40'),
  array('words' => 'Message Not Delivered','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '90'),
  array('words' => 'verify your account','type' => '14','core' => '1','searchin' => '1','publish' => '1','ordering' => '41'),
  array('words' => 'Verification of Account','type' => '14','core' => '1','searchin' => '2','publish' => '1','ordering' => '42'),
  array('words' => 'Your email requires verification verify','type' => '14','core' => '1','searchin' => '2','publish' => '1','ordering' => '43'),
  array('words' => 'Reply to this message and leave the subject line intact','type' => '14','core' => '1','searchin' => '1','publish' => '1','ordering' => '44'),
  array('words' => 'failure notice','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '93'),
  array('words' => 'Non remis:','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '94'),
  array('words' => 'Undeliverable:','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '95'),
  array('words' => 'Nondeliverable mail','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '96'),
  array('words' => 'Returned mail: see transcript for details','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '97'),
  array('words' => 'DELIVERY FAILURE: Recipient\'s Domino Directory entry does not specify a valid Notes mail file','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '98'),
  array('words' => 'Mail delivery failed: returning message to sender','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '91'),
  array('words' => 'Delivery Notification','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '92'),
  array('words' => 'Neisporučivo メールの配達に失敗しました (Mail delivery failed)','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '99'),
  array('words' => 'Your Message Could Not Be Delivered','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '100'),
  array('words' => 'Mail System Error - Returned Mail','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '101'),
  array('words' => '[Auto-Reply]','type' => '33','core' => '1','searchin' => '2','publish' => '1','ordering' => '28'),
  array('words' => 'failure delivery ','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '102'),
  array('words' => 'Mail Delivery Failure','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '103'),
  array('words' => 'Undelivered Mail Returned to Sender','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '104'),
  array('words' => 'Warning: message delayed 25 hours','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '105'),
  array('words' => 'Delivery Notification: Delivery has timed out and failed','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '106'),
  array('words' => 'Delivery Notification: Delivery has been delayed','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '107'),
  array('words' => 'Warning: message 1NDcJD-000331-PO delayed 48 hours','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '108'),
  array('words' => 'Het e-mailbericht is vertraagd:','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '109'),
  array('words' => 'Zprava o nedoruceni:','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '110'),
  array('words' => 'Nondeliverable','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '111'),
  array('words' => 'There has been a problem delivering your email','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '112'),
  array('words' => 'Delivery to the following recipient failed permanently:','type' => '5','core' => '1','searchin' => '2','publish' => '1','ordering' => '113'),
  array('words' => ' Bad destination mailbox address','type' => '5','core' => '0','searchin' => '2','publish' => '1','ordering' => '87'),
  array('words' => 'Bad destination system address','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '86'),
  array('words' => 'Bad destination mailbox address syntax','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '85'),
  array('words' => 'Mailbox has moved','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '84'),
  array('words' => 'Bad sender\'s mailbox address syntax','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '83'),
  array('words' => 'Bad sender\'s system address','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '82'),
  array('words' => 'Other or undefined mailbox status','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '81'),
  array('words' => 'Mailbox disabled, not accepting messages','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '80'),
  array('words' => 'Message length exceeds administrative limit.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '79'),
  array('words' => 'System not accepting network messages','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '78'),
  array('words' => 'Cryptographic algorithm not supported','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '77'),
  array('words' => 'Cryptographic failure','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '76'),
  array('words' => 'Security features not supported','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '75'),
  array('words' => 'Delivery not authorized, message refused','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '74'),
  array('words' => 'Your message to the following recipients cannot be delivered','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '73'),
  array('words' => '554 delivery error: dd This user doesn\'t have a yahoo.com account','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '72'),
  array('words' => 'Unknown user','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '71'),
  array('words' => 'mailbox is full','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '70'),
  array('words' => 'User mailbox exceeds allowed size','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '69'),
  array('words' => 'Could not be delivered','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '68'),
  array('words' => 'The recipient\'s mailbox is full and can\'t accept messages now.','type' => '7','core' => '0','searchin' => '1','publish' => '1','ordering' => '1'),
  array('words' => 'This person\'s account is exceeding their quota.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '67'),
  array('words' => 'The e-mail message could not be delivered because the user\'s mailfolder is full.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '66'),
  array('words' => 'Mailaddress is administratively disabled','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '65'),
  array('words' => 'The user(s) account is disabled.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '64'),
  array('words' => 'The user(s) account is temporarily limited.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '63'),
  array('words' => '550 5.1.1 RESOLVER.ADR.RecipNotFound','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '62'),
  array('words' => '550 5.1.1 RESOLVER.ADR.ExRecipNotFound','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '61'),
  array('words' => '#550 5.2.2 STOREDRV.Deliver: mailbox full.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '60'),
  array('words' => '550 5.1.1 RCP-P2 postmaster.facebook.com/response_codes?ip=192.0.2.135#rcp Refused due to recipient preferences','type' => '5','core' => '0','searchin' => '3','publish' => '1','ordering' => '59'),
  array('words' => 'Mailbox currently suspended','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '58'),
  array('words' => '551 not our user','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '57'),
  array('words' => '551 not our customer','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '56'),
  array('words' => '552 Error: disk quota exceeded','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '55'),
  array('words' => '550 [SUSPEND] Mailbox currently suspended - Please contact correspondent directly','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '54'),
  array('words' => '525 5.7.13 Disabled recipient address','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '53'),
  array('words' => 'Too many "Received" headers - suspected mail loop','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '52'),
  array('words' => '550 5.6.9 improper use of 8-bit data in message header','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '51'),
  array('words' => '500 5.6.1 Message content rejected','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '50'),
  array('words' => 'The message exeeded the maximum size the user accepts','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '49'),
  array('words' => '552 5.2.3 Message size exceeds fixed maximum message size','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '48'),
  array('words' => 'maildir delivery failed: Sorry, the user\'s maildir has overdrawn his diskspace quota, please try again later.','type' => '5','core' => '0','searchin' => '3','publish' => '1','ordering' => '47'),
  array('words' => '552 5.2.3 Message exceeds local size limit.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '46'),
  array('words' => '550 5.2.3 RESOLVER.RST.SendSizeLimit.Org; message too large for this organization','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '45'),
  array('words' => 'Requested action not taken: virus detected','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '44'),
  array('words' => '552-5.7.0 This message was blocked because its content presents a potential security issue','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '43'),
  array('words' => '552-5.7.0 Our system detected an illegal attachment on your message.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '42'),
  array('words' => '554 email rejected due to security policies','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '41'),
  array('words' => 'Technical details of permanent failure: You have exceeded the the allowable number of posts without solving a captcha.','type' => '5','core' => '0','searchin' => '2','publish' => '1','ordering' => '40'),
  array('words' => '553 From <>, message blocked, you are not authorized to send mail, authentication is required.','type' => '5','core' => '0','searchin' => '3','publish' => '1','ordering' => '39'),
  array('words' => 'Our system has detected that this message is likely unsolicited mail.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '38'),
  array('words' => '550 5.7.1 message content rejected','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '37'),
  array('words' => '550 Spam refused.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '36'),
  array('words' => '550-Blacklisted URL in message.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '35'),
  array('words' => '550 5.7.1 Your email breaches local URIBL policy.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '34'),
  array('words' => '554 5.7.1 Message cannot be accepted, spam rejection','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '33'),
  array('words' => '550 Denied due to spam list','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '32'),
  array('words' => '554 5.7.1 Your message failed several antispam checks','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '31'),
  array('words' => ' 550 5.2.3 RESOLVER.RST.RecipSizeLimit','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '30'),
  array('words' => 'Sorry, that message size exceeds my databytes limit','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '29'),
  array('words' => '553 Exceeded maximum inbound message size','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '28'),
  array('words' => 'Mail size limit exceeded.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '27'),
  array('words' => '552 5.3.4 Message too large','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '26'),
  array('words' => '552 Message size exceeds maximum value','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '25'),
  array('words' => '550 5.7.1 can\'t determine Purported Responsible Address','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '24'),
  array('words' => 'DNS lookup failed.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '23'),
  array('words' => '554 5.4.4 SMTPSEND.DNS.MxLoopback','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '22'),
  array('words' => ' Message has exceeded maximum hop count','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '21'),
  array('words' => 'Temporary failure in MX lookup','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '20'),
  array('words' => ' Address family mismatch on destination MXs','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '19'),
  array('words' => ' Due to the following SMTP relay error','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '18'),
  array('words' => 'no host found for existing SMTP connection','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '17'),
  array('words' => 'Destination seem to reject all mails','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '16'),
  array('words' => 'delivery to file forbidden','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '15'),
  array('words' => 'Requested action not taken: mailbox unavailable','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '14'),
  array('words' => '421 Message temporarily deferred','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '13'),
  array('words' => ' 21 4.7.0 [TS01] Messages from x.x.x.x temporarily deferred due to user complaints - 4.16.55','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '12'),
  array('words' => ' 421 4.7.0 [TS02] Messages from x.x.x.x temporarily deferred due to user complaints - 4.16.55','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '11'),
  array('words' => '451 Resources temporarily not available - Please try again later','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '10'),
  array('words' => ' 451 VS1-IP Excessive unknown recipients - possible Open Relay','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '9'),
  array('words' => '554 Message not allowed','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '8'),
  array('words' => ' Delivery error: This user doesn\'t have a yahoo.com account','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '7'),
  array('words' => '[-5] - mta1126.mail.gq1.yahoo.com [BODY]','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '6'),
  array('words' => '554 5.7.9 Message not accepted for policy reasons','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '5'),
  array('words' => '421 RP-001','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '4'),
  array('words' => '421 RP-002','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '3'),
  array('words' => '550 SC-001','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '2'),
  array('words' => 'Sorry, we were unable to deliver your message to the following address.','type' => '5','core' => '0','searchin' => '1','publish' => '1','ordering' => '1')
);
	}
}