<?php

require_once(dirname(__FILE__) . '/../Emailmanager.php');

define('EMAILMANAGERAPP_API_KEY', Mail_Emailmanager::TESTING_API_KEY);
define('EMAILMANAGERAPP_MAIL_FROM_NAME', 'Foo Bar');
define('EMAILMANAGERAPP_MAIL_FROM_ADDRESS', 'foo@bar.com');

require_once('simpletest/autorun.php');

class ConstantsTests extends TestSuite {
	public function ConstantsTests()
	{
		$this->TestSuite('Constants tests');
		$this->addFile(dirname(__FILE__) . '/Tests_Base.php');
		$this->addFile(dirname(__FILE__) . '/Tests_Attachment.php');
	}
}
