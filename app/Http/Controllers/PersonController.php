<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use DB;

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

        return view('persons.index', [
            'allPersons' => $persons
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
       /* $pdo = DB::connection()->getPdo();
        $file = $request['file'];
        $sql = "LOAD DATA INFILE 'D:$file' INTO TABLE persons FIELDS TERMINATED BY ',' IGNORE 1 ROWS (`name`,`age`,`phone`,`monthly_fee`)";
        $pdo->exec($sql);*/
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
// https://phppot.com/php/import-csv-file-into-mysql-using-php/