<?php

use Illuminate\Support\Facades\Route;
// 2_pasage de donnes a la vue
use Illuminate\Http\Request;

// Route::get('/welcome/{nom}/{prenom}', function (Request $request) {
//     return view('welcome', [
//         'nom' => $request->nom, 
//         'prenom' => $request-> prenom
//     ]);
// });

//1_routage
$employees = [
    1 => [
        'id' => 1,
        'nom' => 'Doe',
        'prenom' => 'John',
        'age' => 35,
        'subordonnees' => [
            ['id' => 101, 'nom' => 'Smith', 'prenom' => 'Alice', 'poste' => 'Assistant'],
            ['id' => 102, 'nom' => 'Johnson', 'prenom' => 'Mark', 'poste' => 'Junior Developer']
        ]
    ],
    2 => [
        'id' => 2,
        'nom' => 'Brown',
        'prenom' => 'Emily',
        'age' => 29,
        'subordonnees' => [
            ['id' => 201, 'nom' => 'Taylor', 'prenom' => 'Chris', 'poste' => 'Designer']
        ]
    ],
    3 => [
        'id' => 3,
        'nom' => 'White',
        'prenom' => 'Sophia',
        'age' => 42,
        'subordonnees' => []
    ]];
        
Route::get('/employee/{id?}', function ($id = null) use ($employees) {
    // si en ne donne pas un id en affiche tous les les employes
            if ($id === null) {
                // passer les donnes utilsant un tableau 
                return view('1_routage.allEmployee', [
                    'employees' => $employees
                ]);
            }
    // nchofo wach id existe(kayn ola la ) ou non
            if (isset($employees[$id])) {
                //passe des donnes specifique pour  l'employee choisis
                return view('1_routage.employee', [
                    'employee' => $employees[$id]
                ]);
            }
            return view('1_routage.employee',[
                'error'=> 'employee intovable !!!'  , 'id' =>$id
            ]);
    // le plus utilise
    // abort(404, "NOT FOUND !!!");
})->name('employee');



Route::get('/employee/{id}/subordinates', function ($id) use ($employees) {
    if (isset($employees[$id])) {
        $employee = $employees[$id];
        return view('1_routage.subordinates', [
            'employee' => $employee
        ]);
    }
})->name('subordinates');


Route::get('/employee/{id}/subordinates/{subordinateId}', function ($id, $subordinateId) use ($employees) {
    if (isset($employees[$id])) {
        $employee = $employees[$id];
        foreach ($employee['subordonnees'] as $subordinate) {
            if ($subordinate['id'] == $subordinateId) {
                return view('1_routage.subordinateDetails', [
                    'subordinate' => $subordinate,
                    'employee' => $employee
                ]);
            }
        }
    }

})->name('subordinateDetails');



// Route::get('/links',function (){
//     return view('1_routage.links');
// })->name('links');

