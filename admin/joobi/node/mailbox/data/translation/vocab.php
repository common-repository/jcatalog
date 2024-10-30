<?php
defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_vocab_translation{
var $translationA=array(
 '1241989378NWKW'=>'Handle the connection to mail accounts'
,'1241989377TGDL'=>'Mailbox'
,'1470801882CXGK'=>'Mailbox main model'
,'1206961882TDGU'=>'Message'
,'1254227305KKYZ'=>'rule'
,'1470801882CXGL'=>'Model for Bounceback Filter feature of jbounceback.'
,'1251697925DNIM'=>'Dictionary'
,'1254227305KKZB'=>'rule.condition'
,'1470801882CXGQ'=>'Edit/Create a connection to a mailbox'
,'1241989377TGEV'=>'This screen enables you to create or modify a mail account so the system can connect to it and handle the messages.<br><br><ul><li>If you click on the button "Connect", the system will save your configuration and try to connect to your mailbox so that you can easily test the connection.<br></li></ul>'
,'1448452745BFNN'=>'Mailbox Preferences'
,'1206732392OZUQ'=>'Preferences'
,'1241989377TGEX'=>'<p>This view enables you to configure the global preferences used by the system and by all plugins.<br />
<br />
You will find more detailed preferences for each plugin and for each mailbox.</p>'
,'1448507524BKSR'=>'Rule'
,'1470801882CXGR'=>'Form for entry of words in the dictionary.'
,'1241989377TGES'=>'Mailboxes'
,'1470801882CXGS'=>'Listing to configure/test the connection to mailboxs'
,'1242580112DTJZ'=>'This view enables you to create, modify and test the connection to one or several mail accounts.<br><br>To configure the system properly, you have to:<br><ol><li>Click on the button "New" to configure the connection to your Mailbox.</li><li>Test the connection via the button "Connect".</li><li>If the Connection succeed, you can select your Mailbox and click on the button "Process" to handle the messages and trigger the assigned widgets.</li></ol><ul><li>If you select a mail account and click on the button "Connect", the system will try to connect to the mail account so that you can test the connection.<br></li><li>The button "Process" will enable to system to connect to the selected mailbox and handle the messages.</li><li>This process can be done automatically with a scheduler but only on published Mailboxes.<br></li><li>If you delete a Mailbox, the messages received for this mailbox will be also deleted.<br></li></ul>'
,'1206732411EGRQ'=>'Inbox'
,'1211811609TEZV'=>'Messages'
,'1251697925DNIO'=>'<p>This view shows you a list of messages which have been received in your mailboxes.<br />
You can configure each mailbox so that the system will keep the messages in the database or not.<br />
<br />
The Sender displayed on this view is not always the real sender of the message and will be the identified e-mail address for bounced back e-mails so that you can easily search for messages which bounced from a certain e-mail address.<br />
&nbsp;</p>

<ul>
	<li>You can click on the subject of the message to see the entire message in a popup.</li>
</ul>'
,'1307526847SFJZ'=>'Bounce Emails Report'
,'1241989381TAOJ'=>'Messages statistics'
,'1241989381TAOH'=>'This view displays the statistics for the messages identified by the system (which are not the messages the system received but really the messages which have been recognized as a certain type and handled by the system).<br><br>For each identified e-mail address and for each type of message, you can see when the first message has been handled, the latest time a message has been received and how many messages the system handled.<br><br><ul><li>The button "Purge" enables you to delete all statistics from your database.</li></ul>'
,'1448507526OUJL'=>'Rules'
,'1470801882CXGW'=>'Dictionary of words for filtering process of emails.'
,'1484062727MNJS'=>'<p><br />
This view shows you the entries of words which can be found in the subject, body and in both parts of the message for filtering process.<br />
<br />
You can add entries for your own filters depending on what type of message they belong.</p>

<p>&nbsp;</p>

<ul>
	<li>The core column tells you that the entry can be exported.<br />
	&nbsp;</li>
	<li>If you want to delete the given entries you may have to uncore them first.<br />
	&nbsp;</li>
</ul>

<p>&nbsp;</p>'
,'1249453427FZXK'=>'Sent'
,'1470801882CXGT'=>'Storage for sent messages.'
,'1251697925DNIQ'=>'<p>This view shows you a list of messages which have been sent.</p>

<ul>
	<li>You can click on the subject of the message to see the entire message in a popup.</li>
</ul>'
,'1206732375LZCI'=>'Trash'
,'1470801882CXGU'=>'Storage for deleted messages from the inbox.'
,'1260253912CIOM'=>'<p>This view shows you a list of messages which have been filtered directly from inbox and stored into this box.</p>

<ul>
	<li>You can click on the subject of the message to see the entire message in a popup.</li>
</ul>'
,'1206732375LZCH'=>'Archive'
,'1470801882CXGV'=>'Storage for the messages handled automatically.'
,'1241989377TGEW'=>'<p>This view shows you a list of messages which have been processed and stored into this box.</p>

<ul>
	<li>You can click on the subject of the message to see the entire message in a popup.</li>
</ul>'
,'1263527489DDRU'=>'Bounce Messages Report'
,'1253693139FSTT'=>'Tips/Guidelines'
,'1275727304KGSZ'=>'<p>This report shows how many Bounced Messages. By default, <strong>the report is generated by interval of Weekly of This Month range.</strong></p>

<ul>
	<li>To <strong>change the date range of the generated report</strong>, select the range in the drop down list then it will automatically generated the report.</li>
	<li>To <strong>generate a report on a specific date</strong>, select the start and end date in the specified date group, then click generate button.</li>
	<li>Report Type radio list is to change the view of report whether to display data in Graph or Data Listing.</li>
</ul>

<p><span style="color:rgb(0, 51, 255)">*NOTE:</span></p>

<p>&nbsp;</p>

<ul>
	<li><strong>Click Refresh Button</strong>, if you change the intervals to reload the page.</li>
	<li>The <strong>Reference Time is the Time Zone in the Local Settings of your Joomla Website Configuration.</strong></li>
	<li>For the Line Graph, the big graph is the relative data values of all data.</li>
</ul>

<p>&nbsp;</p>'
,'1263527489DDRV'=>'Mailboxes Report'
,'1275727304KGTA'=>'<p>This report shows how many Messages bounced on each Mailbox. By default, <strong>the report is generated by interval of Weekly of This Month range.</strong></p>

<ul>
	<li>To <strong>change the date range of the generated report</strong>, select the range in the drop down list then it will automatically generated the report.</li>
	<li>To <strong>generate a report on a specific date</strong>, select the start and end date in the specified date group, then click generate button.</li>
	<li>Report Type radio list is to change the view of report whether to display data in Graph or Data Listing.</li>
</ul>

<p><span style="color:rgb(0, 51, 255)">*NOTE:</span></p>

<p>&nbsp;</p>

<ul>
	<li><strong>Click Refresh Button</strong>, if you change the intervals to reload the page.</li>
	<li>The <strong>Reference Time is the Time Zone in the Local Settings of your Joomla Website Configuration.</strong></li>
</ul>

<p>&nbsp;</p>'
,'1206732391QBUT'=>'Ordering List'
,'1470801882CXGM'=>'Mailbox Rules'
,'1302521429NWLK'=>'Dictionary SearchIn'
,'1302521453EJNJ'=>'Where to search the words added to the dictionary.'
,'1470801882CXGN'=>'Save Email'
,'1470801882CXGO'=>'Bounce List'
,'1302521451NKFF'=>'All mailboxes with default value.'
,'1470801882CXGP'=>'Inbox Rules'
,'1302521451NKFE'=>'List of mailbox'
,'1217251965LDTZ'=>'Actions'
,'1215001889GXZA'=>'Connection'
,'1206961869IGNC'=>'Header'
,'1298350843FMVJ'=>'Column 1'
,'1298350843FMVK'=>'Column 2'
,'1448452743HLGC'=>'Hard Bounce'
,'1206961893RSRQ'=>'Scheduler'
,'1448452743HLGF'=>'Soft Bounce'
,'1246509032AGXF'=>'Integration'
,'1220362026AJEJ'=>'Spam'
,'1206732392OZVB'=>'Name'
,'1241989377TGDM'=>'Name of the account, this name is not used to connect to the mailbox but enables you to sort your mailbox properly<br><br>'
,'1206732392OZVG'=>'Description'
,'1241989377TGDN'=>'Description of your mailbox<br><br>'
,'1241989377TGEG'=>'Server'
,'1241989377TGDO'=>'Address of the server you connect to.<br>Example : imap.gmail.com<br><br>'
,'1206732411EGRV'=>'Username'
,'1241989377TGDP'=>'Username used to connect to the mailbox.<br>Example : myname@gmail.com<br><br>'
,'1206732412DADP'=>'Password'
,'1241989377TGDQ'=>'Password used to connect to the mailbox<br><br>'
,'1241989377TGEH'=>'Port'
,'1241989377TGDR'=>'Port used to connect to the server<br><br>'
,'1241989377TGEI'=>'Secure Method'
,'1241989377TGDS'=>'Does the account requires a secure connection?<br>'
,'1241989377TGEJ'=>'Connection Method'
,'1241989377TGDT'=>'Select the system of connection you want to use<br>'
,'1206732372QTKN'=>'Publish'
,'1241989377TGDU'=>'The system won\'t&nbsp;automatically handle the messages for a non published mailbox.<br>'
,'1448582283AXFE'=>'Save report'
,'1448582283AXFH'=>'Log a report about the email processed.'
,'1241989377TGEK'=>'Forward'
,'1241989377TGDW'=>'Should the system forward the message (store in Inbox) to another e-mail address?<br><br>If so, please specify the e-mail address in this field.<br>If you leave this field empty, the system won\'t forward the e-mail.<br><br>'
,'1448452743HLFX'=>'Save the email'
,'1241989377TGDX'=>'The system can save the email in the inbox so you can easily review it later if necessary.'
,'1241989377TGEN'=>'Open time out'
,'1241989377TGDZ'=>'Set the time (in seconds) the system will try to connect to your mailbox.<br>If you enter the value 0, the default time out of your php configuration will be applied.<br>'
,'1206732400OXCG'=>'Subject'
,'1241989377TGEA'=>'Subject of the received message<br><br>'
,'1206732412DAGD'=>'Body'
,'1241989377TGEB'=>'Content of the message<br>'
,'1241989377TGEC'=>'Header informations<br><br>'
,'1409690288JIOV'=>'Maximum Emails'
,'1241989377TGED'=>'Maximum number of emails the system will handle per mailbox.<br>If you set this preference to 0, the system will not handle any email. Please provide a value other than 0 by default this is set to 50.'
,'1448463363EQZS'=>'Auto Delete Statistics'
,'1241989377TGEE'=>'Automatically delete the statistics if the latest received date is older than X days.<br>If you enter 0, the statistics will never be deleted automatically.'
,'1448452743HLFY'=>'Auto Delete Emails'
,'1241989377TGEF'=>'Automatically delete messages if the message has been handled more than X days in the past.<br>If you enter 0, the system won\'t delete automatically the messages.'
,'1242580112DTJY'=>'Email detector'
,'1242580112DTJX'=>'When a message is parsed to detect which e-mail address it comes from (this e-mail address is always in the content of the message), the system may identify an e-mail address which is not the right one.<br>To avoid this problem, you can specify in this field a list of e-mail address which should not be identified by the system.<br>Each e-mail address should be separated by the character |.<br><br><span style="text-decoration: underline;">Example</span> : If you don\'t want the system to identify any email address which comes from the domain mywebsite.com, you can simply write in this field @mywebsite.com'
,'1206732400OWZX'=>'Sender Informations'
,'1244722788BFSH'=>'Self-signed Certificates'
,'1244722787NNCA'=>'If you select "Yes", the system won\'t require the validation of certificates from TLS/SSL server.<br>This option is needed if            your server uses self-signed certificates.<br><br>'
,'1251697924MLJP'=>'Words'
,'1251697924MLJL'=>'<p>Enter words to be added into the dictionary for filtering purposes.</p>'
,'1251697924MLJQ'=>'SearchIn'
,'1251697924MLJM'=>'Specify where the words will be search in the message.'
,'1251697924MLJN'=>'Select the type of message where these words belong.<br><br>Note:&nbsp; <br>You can\'t select All Types because there\'s no available filter for All Types of Message. This is only use for default value purposes.'
,'1257414617RUXN'=>'If the entry is to be used for the filtering of the message we need to Publish the entry.'
,'1448452743HLFZ'=>'Delete from Mailbox'
,'1256863992BRRE'=>'Upon processing the mailbox, should the system delete the message or email from your external mailbox?<br><br>If you select "Yes" the emails will be automatically removed from your external mailbox.<br><br>If you select "No", the e-mails will stay in the external mailbox until you manually delete it.<br><font color="#CC0000"><br><u>Recommended:</u><br>This option should be turn "Yes" so that each message get processed only once. Leaving this to No could create lot of problem of performance.</font>'
,'1256863993QDJH'=>'Trash Box Frequency'
,'1260253911PVFX'=>'Automatically delete messages from Trash Box according to X days you specify here. <br><br>The frequency is based on Days.<br>If you enter 0, the system won\'t delete automatically the messages.'
,'1448452743HLGA'=>'Process Hard Bounce'
,'1448452744RRQW'=>'Yes to process the Hard Bounce email.'
,'1448452743HLGB'=>'Process Soft Bounce'
,'1448452744RRQX'=>'Yes to process the Soft Bounce email.'
,'1448452743HLGD'=>'Delete User'
,'1449097477KDAY'=>'Delete the user from the website'
,'1495050586AFKT'=>'Block Unregistered User'
,'1495050587MJGY'=>'<p>Block the unregistered user from accessing the website</p>'
,'1211974416EMQU'=>'Unsubscribe'
,'1449097477KDBA'=>'Unsubscribe the user from all lists'
,'1448452743HLGE'=>'Subscribe To'
,'1448452744RRQY'=>'Choose a list to subscribe to when there is a hard bounce.'
,'1448463363EQZT'=>'Attempt Period'
,'1448463364KXGL'=>'Define the attempt period in days. The attempt period is the time during which we try to keep sending an email when it soft bounce.'
,'1448463363EQZU'=>'Number Active Bounce'
,'1448463364KXGM'=>'Define the number of attempts when the subscriber has some activity.'
,'1448463363EQZV'=>'Number Inactive Bounce'
,'1448463364KXGN'=>'Define the number of attempts when the subscriber did not have any activity.'
,'1448507524BKSS'=>'Email to Ticket'
,'1448507525EGSV'=>'Convert email into tickets'
,'1448507524BKST'=>'Convert Ticket Reply'
,'1448507525EGSW'=>'Convert email reply from ticket into a ticket reply.'
,'1448926071NEOT'=>'Amazon SES Notification'
,'1448507525EGSX'=>'Process Amazon SES notification emails.'
,'1448564825HNCB'=>'Process Rules'
,'1448564825HNCC'=>'Yes to process all the other rules which are not soft or hard bounce.'
,'1448582283AXFF'=>'Log Report'
,'1449097477KDAX'=>'Unconfirm'
,'1449097478CKME'=>'Unconfirm the email of the user since it is a bounce.'
,'1206961869IGNP'=>'Order'
,'1242282446GIMA'=>'Block User'
,'1449097477KDAZ'=>'Block the user from accessing the website'
,'1492567980MCCJ'=>'Email to Ignore'
,'1492567980MCCK'=>'Make a list delimited by comma of any email which should be ignored.'
,'1495050587MJGX'=>'Block Registered User'
,'1495050587MJGZ'=>'<p>Block the registered user from accessing the website</p>'
,'1218203992KUZO'=>'Connect'
,'1206961898PIOC'=>'Process'
,'1206732399EINF'=>'Divider'
,'1206732361LXFD'=>'New'
,'1206732361LXFE'=>'Edit'
,'1206732372QTKL'=>'Delete'
,'1206732392OZUP'=>'Help'
,'1206732399EINB'=>'Save'
,'1242282449PIPC'=>'Done'
,'1206732393CXVV'=>'Cancel'
,'1206732391QBUR'=>'Wizard'
,'1241989381TANY'=>'Purge'
,'1251697925DNIJ'=>'Create or add entry to the dictionary.<br>'
,'1251697925DNIK'=>'Used for forwarding of messages to a certain email account.<br>'
,'1251697925DNIL'=>'Delete Forever'
,'1206732392OZVA'=>'#'
,'1206732400OWXG'=>'ID'
,'1241989377TGER'=>'body'
,'1211811588SCXI'=>'Sender'
,'1206961850KLRI'=>'Date'
,'1206732411EGRU'=>'Email'
,'1206732392OZVD'=>'Type'
,'1241989381TANW'=>'First date'
,'1241989381TANX'=>'Latest date'
,'1206961912MJPF'=>'Total'
,'1251697924MLJR'=>'Entry number'
,'1212516267RPGN'=>'Checkbox'
,'1254227306FJFO'=>'Search In'
,'1251697924MLJT'=>'Where to search the words either in the body, subject of the message or both.'
,'1251697924MLJS'=>'Words to be search.'
,'1256863993QDJI'=>'Ordering of Entries'
,'1206961869IGNE'=>'Core'
,'1251697924MLJV'=>'To determine if the entry is predefined or not.'
,'1251697924MLJX'=>'If the Entry is publish or not.'
,'1251697924MLJY'=>'ID of the entry'
,'1263527488PFLQ'=>'No. Of Bounced Messages'
,'1263527488PFLR'=>'Mailbox Name'
,'1263527488PFLS'=>'No. Of Messages'
,'1448636224SFUN'=>'Select a Rule'
,'1347652450ENIY'=>'Undefined'
,'1448452746GUOI'=>'Spam or Virus'
,'1448452746GUOJ'=>'Challenge Verification'
,'1254192098RWXL'=>'Autoreply'
,'1254192098RWXO'=>'Do Not Reply'
,'1254192098RWXQ'=>'Email Address Changed'
,'1206732405TIXC'=>'Standard'
,'1448452745BFNR'=>'All Parts'
,'1448452745BFNS'=>'Both Subject and Body'
,'1448452745BFNO'=>'Always save the email in the inbox'
,'1448452745BFNP'=>'Only save the email if not identified properly'
,'1448582285JCXM'=>'Delete the email'
,'1251697926LPNL'=>'mailbox-dictionary'
,'1251697926LPNG'=>'Controller for Bounceback Dictionary.<br>'
,'1251697926LPNN'=>'mailbox-trash'
,'1251697926LPNI'=>'Controller for Trash Menu.<br>'
,'1251697926LPNJ'=>'Controller for adding enty in the dictionary.<br><br>'
,'1251697926LPNO'=>'mailbox-archive'
,'1220793699CLWU'=>'<br><br>'
,'1380027886ELRJ'=>'Message forwarded : {widget:param|name=subject}'
,'1380027886ELRL'=>'<p>{widget:param|name=body}</p>'
,'1241989374PAXK'=>'Handle Messages'
,'1241989376CCKB'=>'The next message which will be handled by the system is :<br/><br/>Subject : $SUBJECT<br/>From : $SENDER<br/><br/>$CONTENT'
,'1241989376CCKC'=>'You need to upgrade to the Commercial version to handle the messages'
,'1241989381TANT'=>'The statistics have been deleted'
,'1241989757SUSF'=>'The user $EMAIL has been subscribed to the list $LISTNAME'
,'1242580111TAIP'=>'ERROR : Could not connect to the mailbox $MAILBOX_NAME'
,'1242580111TAIQ'=>'Successfully connected to the mailbox $MAILBOX_NAME'
,'1254227304QDMN'=>'There is still $NUMBEROFMESSAGE to retrieved'
,'1258010751GXJB'=>'You need to put value in the Maximum number of messages from the Mailbox Preferences other than 0'
,'1260253904QSSO'=>'This scheduler extension is to automatically remove the messages stored in the Trash Box depending on the specified date.'
,'1260253904QSSP'=>'Empty Trash Box'
,'1267609148IZFT'=>'No jNews user has been found for the email $EMAIL'
,'1267609148IZFV'=>'The user $EMAIL has been unconfirmed from jNews'
,'1267609148IZFW'=>'The user $EMAIL has been black listed in jNews'
,'1267609148IZFX'=>'The user $EMAIL has been deleted from jNews'
,'1298388578RGBW'=>'The user $EMAIL has been unsubscribed from jNews.'
,'1304525968YBL'=>''
,'1389656700JZFI'=>'Process stopped because of a time limitation. It will continue again at next launch.'
,'1418159587ECXG'=>'Can not connect to the mailbox "$NAME"'
,'1418159587ECXJ'=>'Could not delete the message "$SUBJECT"'
,'1418159587ECXK'=>'Message "$SUBJECT" successfully deleted from external mailbox'
,'1418159587ECXL'=>'Successfully connected to "$NAME"'
,'1418159587ECXM'=>'There are $NBMSG messages in the mailbox "$NAME"'
,'1433086401BPBR'=>'Scheduler to launch automatically the process task for the mailboxes to handle the messages automatically.'
,'1448507522RQGF'=>'All Mailboes'
,'1448507522RQGG'=>'No list'
,'1448582282BAKU'=>'Message "$SUBJECT" saved in the database.'
,'1449105541GONN'=>'Warning from PHP: $WARNING'
,'1449105541GONO'=>'Error from imap:'
,'1449105542AKFJ'=>'The email is a Soft Bounce: $EMAIL'
,'1449105542AKFK'=>'The email is a Hard Bounce: $EMAIL'
,'1456969706OIHT'=>'Hack Bounce'
,'1494976816RTCF'=>'No user has been found for the email $EMAIL'
,'1494976816RTCG'=>'The user $EMAIL has been unsubscribed.'
,'1494976816RTCH'=>'The user $EMAIL has been unconfirmed.'
,'1494976816RTCI'=>'The user $EMAIL has been black listed.'
,'1494976816RTCJ'=>'The user $EMAIL has been deleted.'
);}