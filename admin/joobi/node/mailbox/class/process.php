<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Process_class extends WClasses {
	public function searchForWords($subject,$body,$ruleA) {
		if ( empty($ruleA) ) return false;
				$notFound = true;
		$wordType = 0;
		foreach( $ruleA as $rule ) {
						$words = strtolower( $rule->words );
						$wordType = $rule->type;
						if ( $rule->searchin == 2 ) {				
								$wordPosSubject = strpos( strtolower($subject), $words );
								if ( $wordPosSubject !== false ) {
					$notFound = false;
					break;
				}			
			} elseif ( $rule->searchin == 1 || $rule->searchin == 0 ) {
								$wordPosSubject = strpos( strtolower($subject), $words );
				if ( $wordPosSubject !== false ) {
					$notFound = false;
					break;
				}				
				$wordPosBody = strpos( strtolower($body), $words );
				if ( $wordPosBody !== false ) {
					$notFound = false;
					break;
				}			
			} else {				
								$wordPosBody = strpos( strtolower($body), $words );
								if ( $wordPosBody !== false ) {
					$notFound = false;
					break;
				}				
			}				
			$notFound = true;
		}				
		if ( $notFound ) {
			return false;
		} else {
			return $wordType;
		}		
	}
	public function getEmailFromBody($body,&$email,&$uid) {
		$resultsA = array();
				preg_match_all("/(?s)X-SubscriberID: (.+?)\n/", $body, $resultsA, PREG_PATTERN_ORDER );
		if ( !empty($resultsA[1][0]) ) {
			$encodedEmail = $resultsA[1][0];
						$emailDecodedA = explode( '|', $encodedEmail );
			$usersEmail = WClass::get( 'users.email' );
			if ( $usersEmail->validateEmail( $emailDecodedA[0], false ) ) {
				$email = $emailDecodedA[0];
			}				
			if ( !empty($emailDecodedA[1]) ) $uid = $emailDecodedA[1];
		} else {
			$matchesA = array();
						$pattern = '/[A-Za-z0-9_-]+@[A-Za-z0-9_-]+\.([A-Za-z0-9_-][A-Za-z0-9_]+)/'; 			preg_match_all( $pattern, $body, $matchesA ); 						if ( empty($matchesA[0]) ) return false;
			$foundEmailA = $matchesA[0];
						$goodEMailA = array_diff( $foundEmailA, Mailbox_Mailbox_class::$ignoreEmailA );
			if ( empty($goodEMailA) ) return false;
			foreach( $goodEMailA as $oneEmai ) {
				if ( $this->_checkEmail( $oneEmai ) ) {
					$email = $oneEmai;
					break;
				}	
			}				
			$usersEmail = WClass::get( 'users.email' );
			if ( ! $usersEmail->validateEmail( $email, false ) ) {
				$email = '';
			}				
		}	
	}	
	public function getMailIDFromBody($body,&$mgid) {
		$resultsA = array();
				preg_match_all("/(?s)X-mgid: (.+?)\n/", $body, $resultsA, PREG_PATTERN_ORDER );
		if ( !empty($resultsA[1][0]) ) {
			$mgid = $resultsA[1][0];
		}		
	}
	private function _checkEmail($email) {
								$noValidA = array( 'mailer', 'daemon' );
		foreach( $noValidA as $oneM ) {
			if ( strpos( $email, $oneM ) !== false ) return false;
		}		
		return true;
	}	
}