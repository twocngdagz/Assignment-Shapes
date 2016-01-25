<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class TriangleCalculateAreaCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'shape:triangle';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Calculate a triangle\'s area.';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$b = $this->argument('base');
		$h = $this->argument('height');

		$this->info("Output the calculated area of a triangle with a base of $b and height of $h");
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			[ 'base', InputArgument::REQUIRED, 'The triangle base.' ],
			[ 'height', InputArgument::REQUIRED, 'The triangle height.' ]
		];
	}

}
