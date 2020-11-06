<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PersonImport;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Person::all();

        $sumMounth = Person::select('month', Person::raw('SUM(monthly_fee) as sum'))
                ->groupBy('month')
                ->get();

        $sumNames = Person::select('name', Person::raw('SUM(monthly_fee) as sum'))
                ->groupBy('name')
                ->get();

        return view('persons.index', [
            'allPersons' => $persons,
            'sumMounths' =>  $sumMounth,
            'sumNames' =>  $sumNames
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Person;
        $month = $request['month'];
        $fileName = $_FILES['file']['tmp_name'];
        
        $file = fopen($fileName, "r");

        $personsData = [];
        $rowIndex = 0;
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                if($rowIndex > 0){
                    $name = "";
                    if (isset($column[0])) {
                        $name = $column[0];
                    }

                    $age = 0;
                    if (isset($column[1])) {
                        $age = $column[1];
                    }

                    $phone = "";
                    if (isset($column[2])) {
                        $phone = $column[2];
                    }
                    
                    $monthly_fee = "";
                    if (isset($column[3])) {
                        $monthlyFee = $column[3];
                    }

                    $personsData[] = [
                        'name' => $name,
                        'age' => $age,
                        'phone' => $phone,
                        'monthly_fee' => $monthlyFee,
                        'month' => $month
                    ];
                    
                }
                $rowIndex++;
            }

        Person::insert($personsData);
        //Excel::import(new PersonImport, $_FILES['file']['tmp_name']);
        return redirect('/persons');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
// https://www.positronx.io/laravel-import-expert-excel-and-csv-file-tutorial-with-example/