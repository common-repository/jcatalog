<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Attachments_class extends WClasses {
public function getAttachment($connector,$authorid=0,$subject='') {
	$structure = $connector->getCurrentMessage( 'structure' );
	$attachmentA = array();					
	for( $ctr = 0; $ctr < count($structure->parts); $ctr++ ) {
				if ( $ctr > 10 ) break;
		$attachmentA[$ctr] = array(
			'is_attachment'	=> false,		
			'filename' 		=> '',			
			'name'			=> '',			
			'attachment'	=> '',			
			'size'			=> '',			
			'tmp_name'		=> '',			
			'type'			=> '',			
 		);
		if ($structure->parts[$ctr]->ifdparameters){
			foreach($structure->parts[$ctr]->dparameters as $object){
				if (strtolower($object->attribute) == 'filename'){
					$attachmentA[$ctr]['is_attachment'] = true;
					$attachmentA[$ctr]['filename'] = $object->value;		
				}
			}
		}
		if ($structure->parts[$ctr]->ifparameters){
			foreach($structure->parts[$ctr]->parameters as $object){
				if (strtolower($object->attribute) == 'name'){				
					$attachmentA[$ctr]['is_attachment'] = true;
					$attachmentA[$ctr]['name'] = $object->value;			
				}
			}
		}
		if ( $attachmentA[$ctr]['is_attachment'] ) {
			$attachmentA[$ctr]['attachment'] = imap_fetchbody( $connector->getMailBox(), $connector->getNBMessages(), $ctr+1 );
			if ( $structure->parts[$ctr]->encoding == 3 ) {				
				$attachmentA[$ctr]['attachment'] = base64_decode($attachmentA[$ctr]['attachment']);
			}elseif ( $structure->parts[$ctr]->encoding == 4 ) { 			
				$attachmentA[$ctr]['attachment'] = quoted_printable_decode( $attachmentA[$ctr]['attachment'] );
			}
			$attachmentA[$ctr]['type'] = $structure->parts[$ctr]->subtype;
			$attachmentA[$ctr]['size'] = $structure->parts[$ctr]->bytes;
		}
	}
	return $attachmentA;
}
}