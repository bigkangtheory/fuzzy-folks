<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
          [
            'name' => 'Web'
          ],
          [
            'name' => 'iOS'
          ],
          [
            'name' => 'android'
          ],
        ];

        foreach ($departments as $department) {
          $department_instance = new Department();
          foreach ($department as $key => $value) {
            $department_instance->{$key} = $value;
          }
          $department_instance->save();
        }
    }
}
