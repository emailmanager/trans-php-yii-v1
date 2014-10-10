<?php

interface Mail_Emailmanager_Adapter_Interface
{
	public static function getApiKey();
	public static function setupDefaults(Mail_Emailmanager &$mail);
	public static function log($logData);
}