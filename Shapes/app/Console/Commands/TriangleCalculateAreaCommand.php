<?php namespace App\Console\Commands;

use Illuminate\Console\Command;

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
		$this->info('it works!');
	}

}
