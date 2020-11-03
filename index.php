<?php declare(strict_types=1); 

interface iMailer
{
	public function send();
}

class mailchimp implements iMailer
{
	public function send():string
	{
		return 'Sending an mail using mailchimp';
	}
}
class sendGrid implements iMailer
{
	public function send():string
	{
		return 'Sending an mail using SendGrid';
	}
}

class mailerFactory
{
	private static $mailer;

	public static function set(iMailer $mailer):void
	{
		if(!self::$mailer)
		{
			self::$mailer= $mailer;
		}
	}

	public static function send():string
	{
		return self::$mailer->send();
	}
}

//mailerFactory::set(new mailchimp);
mailerFactory::set(new sendGrid);

print mailerFactory::send();

