<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class SquareCalculateAreaCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'shape:square';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Calculate a square\'s area.';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$l = $this->argument('length');

		$this->info("Output the calculated area of a square with a length of $l");
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
				[ 'length', InputArgument::REQUIRED, 'The squares length.' ]
		];
	}

}
