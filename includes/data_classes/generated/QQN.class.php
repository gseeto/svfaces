<?php
	class QQN {
		/**
		 * @return QQNodeAddress
		 */
		static public function Address() {
			return new QQNodeAddress('address', null, null);
		}
		/**
		 * @return QQNodeAdvocate
		 */
		static public function Advocate() {
			return new QQNodeAdvocate('advocate', null, null);
		}
		/**
		 * @return QQNodeAgency
		 */
		static public function Agency() {
			return new QQNodeAgency('agency', null, null);
		}
		/**
		 * @return QQNodeCaseStatus
		 */
		static public function CaseStatus() {
			return new QQNodeCaseStatus('case_status', null, null);
		}
		/**
		 * @return QQNodeCases
		 */
		static public function Cases() {
			return new QQNodeCases('cases', null, null);
		}
		/**
		 * @return QQNodeCourtInformation
		 */
		static public function CourtInformation() {
			return new QQNodeCourtInformation('court_information', null, null);
		}
		/**
		 * @return QQNodeEthnicity
		 */
		static public function Ethnicity() {
			return new QQNodeEthnicity('ethnicity', null, null);
		}
		/**
		 * @return QQNodeGrant
		 */
		static public function Grant() {
			return new QQNodeGrant('grant', null, null);
		}
		/**
		 * @return QQNodeLanguage
		 */
		static public function Language() {
			return new QQNodeLanguage('language', null, null);
		}
		/**
		 * @return QQNodeLogin
		 */
		static public function Login() {
			return new QQNodeLogin('login', null, null);
		}
		/**
		 * @return QQNodePerson
		 */
		static public function Person() {
			return new QQNodePerson('person', null, null);
		}
		/**
		 * @return QQNodeRelationship
		 */
		static public function Relationship() {
			return new QQNodeRelationship('relationship', null, null);
		}
		/**
		 * @return QQNodeServices
		 */
		static public function Services() {
			return new QQNodeServices('services', null, null);
		}
		/**
		 * @return QQNodeSuspect
		 */
		static public function Suspect() {
			return new QQNodeSuspect('suspect', null, null);
		}
	}
?>