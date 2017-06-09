<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$employees = [
			[
				'name'       => 'Sam',
				'department' => 'iOS',
				'is_current' => true,
			],

			[
				'name'       => 'Kelvin',
				'department' => 'devOps',
				'is_current' => true,
			],
			[
				'name'       => 'Walter',
				'department' => 'Android',
				'is_current' => true,
			],

		];

		//@TODO use insert

		foreach ($employees as $employee) {
			$employee_instance = new Employee();

			foreach ($employee as $key => $value) {
				$employee_instance->{$key} = $value;
			}
			$employee_instance->save();
		}

		//		$employee_list[0];
		//
		//		$employee             = new Employee();
		//		$employee->name       = 'Yousoufov';
		//		$employee->department = 'Web';
		//		$employee->is_current = true;
		//		$employee->save();
	}
}

