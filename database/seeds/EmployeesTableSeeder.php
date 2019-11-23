<?php

// use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;

class EmployeesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'employees';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'/public/employee_data.csv';
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::disableQueryLog();

        DB::table($this->table)->truncate();

        parent::run();
    }
}
