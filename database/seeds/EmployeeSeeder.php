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
				'department_id' => 1,
				'is_current' => true,
			],

			[
				'name'       => 'Kelvin',
				'department_id' => 2,
				'is_current' => true,
			],

			[
				'name'       => 'Walter',
				'department_id' => 1,
				'is_current' => true,
			],

			[
				'name'       => 'AJ',
				'department_id' => 2,
				'is_current' => true,
			],

			[
				'name'       => 'Noah',
				'department_id' => 2,
				'is_current' => true,
			],

			[
				'name'       => 'JorEl',
				'department_id' => 2,
				'is_current' => true,
			],

			[
				'name'       => 'Anthony',
				'department_id' => 3,
				'is_current' => true,
			],

			[
				'name'       => 'Peter',
				'department_id' => 3,
				'is_current' => true,
			],

			[
				'name'       => 'Cesar',
				'department_id' => 3,
				'is_current' => true,
			],

		];

		//@TODO use insert

		foreach ($employees as $employee) {
			$employee_instance = new Employee();

			foreach ($employee as $key => $value) {
				//employee -> dept == "" .find() where === "Web"
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
