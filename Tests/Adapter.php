<?php

require_once(dirname(__FILE__) . '/../Adapter_Interface.php');

class Mail_Emailmanager_Adapter implements Mail_Emailmanager_Adapter_Interface
{
	public static $latestLogEntry;
	
	public static function getApiKey()
	{
		return Mail_Emailmanager::TESTING_API_KEY;
	}
	
	public static function setupDefaults(Mail_Emailmanager &$mail)
	{
		$mail->from('foo@bar.com', 'Foo Bar');
	}
	
	public static function log($logData)
	{
		self::$latestLogEntry = $logData;
	}
}

require_once('simpletest/autorun.php');

class AdapterTests extends TestSuite {
	public function AdapterTests()
	{
		$this->TestSuite('Adapter tests');
		$this->addFile(dirname(__FILE__) . '/Tests_Base.php');
		$this->addFile(dirname(__FILE__) . '/Tests_Log.php');
		$this->addFile(dirname(__FILE__) . '/Tests_Attachment.php');
	}
}
