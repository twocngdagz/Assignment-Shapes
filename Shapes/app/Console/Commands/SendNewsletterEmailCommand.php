<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use App\AssignmentLibraries\EmailSender\Sender;

class SendNewsletterEmailCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'email:send';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Send an email to someone.';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$name = $this->argument('name');
		$email = $this->argument('email');
		$subject = $this->argument('subject');
		$body = $this->argument('body');

		$sender = new Sender();
		$sender->send($name, $email, $subject, $body);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			[ 'name', NULL, InputOption::VALUE_OPTIONAL, 'The name of the person to send to.', NULL ],
			[ 'email', NULL, InputOption::VALUE_OPTIONAL, 'The email of the person to send to.', NULL ],
			[ 'subject', NULL, InputOption::VALUE_OPTIONAL, 'The email subject.', NULL ],
			[ 'body', NULL, InputOption::VALUE_OPTIONAL, 'The email body.', NULL ]
		];
	}

}
