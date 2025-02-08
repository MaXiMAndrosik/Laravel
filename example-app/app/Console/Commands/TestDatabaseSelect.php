<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class TestDatabaseSelect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-database-select';

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

        // Получение всех данных из таблицы
        // foreach (Employee::all() as $user) {
        //     echo $user->first_name . PHP_EOL; // Название необходимого поля таблицы
        // }

        // Получение всех данных по ключу
        // $employee = Employee::find(2);  //Получаем обьект из БД
        // echo $employee->first_name;

        // Получение данных по значению поля таблицы

        // Получаем ВСЕ обьекты из БД
        // $employee = Employee::where('age', '>', 26)->get();  

        // Получаем обьекты
        // $employee = Employee::where('first_name', 'John')->get(); 

        // Получаем обьект из БД только первое совпадеине
        // $employee = Employee::where('first_name', 'John')->first();  

        // Получаем обьект из БД только первое совпадеине
        // $employee = Employee::firstWhere('first_name', 'John');  

        // $employee = Employee::where('age', '>', 26) // 
        //     ->where('age', '>', 40)->get(); 

        // $employee = Employee::where('age', '>', 26) // 
        //     ->orWhere('age', '>', 40)->get();  
        
        // echo $employee . PHP_EOL;
        // echo $employee['first_name'] . " " . $employee['age'] . PHP_EOL;
        // foreach ($employee as $user) {
        //     echo $user->first_name . '   ' . $user->age .PHP_EOL; // Название необходимого поля таблицы
        // }


        // Получение данных

        // Получаем обьекты из БД отсортированные по возрастанию
        // $employee = Employee::orderBy('age', 'ASC')->get(); 

        // Получаем обьекты из БД отсортированные по убыванию
        // $employee = Employee::orderBy('age', 'DESC')->get();

        // Получаем обьекты из БД отсортированные по возрастанию первые 2
        // $employee = Employee::orderBy('age', 'ASC')->limit(2)->get();

        // Получаем обьекты из БД пропуская первые 2
        // $employee = Employee::orderBy('age', 'ASC')->skip(2)->limit(2)->get(); 

        // foreach ($employee as $user) {
        //     echo $user->first_name . '   ' . $user->age .PHP_EOL; // Название необходимого поля таблицы
        // }


        // Получение данных

        // $employee = DB::table('employees')
        //             ->groupBy('first_name')
        //             ->select('first_name', DB::raw('count(1) as employee_total'))
        //             ->get();

        // foreach ($employee as $user) {
        //     echo $user->first_name . '   ' . $user->employee_total . PHP_EOL;
        // }

        // $employee = DB::table('employees')
        //     ->select(DB::raw('count(1) as employee_total'))
        //     ->get();

        // foreach ($employee as $user) {
        //     echo $user->employee_total . PHP_EOL; 
        // }

        // $employee = Employee::distinct()->get(); // return уникальные имена
        $employee = Employee::distinct()->orderBy('first_name')->get(); // return уникальные имена orderBy('first_name')

        foreach ($employee as $user) {
            echo $user->first_name . PHP_EOL;
        }




        return 0;
    }
}
