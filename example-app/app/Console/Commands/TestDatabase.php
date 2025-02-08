<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle() {

        // Добавление данных в таблицу
        $employee = new Employee();
        $employee->first_name = 'John';
        $employee->age = 32;
        $employee->save();

        // Редактирование данных в таблице
        // $employee = Employee::where('id', 3)->first();  //Получаем обьект из БД
        // $employee->first_name = 'Boris';
        // $employee->save();

        // Удаление данных из таблицы
        // Employee::where('id', 3)->delete(); 

        return 0;
    }

}
