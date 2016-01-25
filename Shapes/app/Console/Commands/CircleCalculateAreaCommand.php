<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class CircleCalculateAreaCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'shape:circle';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Calculate a circle\'s area.';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$r = $this->argument('radius');

		$this->info("Output the calculated area of a circle with radius of $r");
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			[ 'radius', InputArgument::REQUIRED, 'The circles radius.' ],
		];
	}

}
