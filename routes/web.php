<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;

use App\Http\Controllers\apiController;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\RedirectResponse;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/testeKidopi', 'kidopi');

Route::view('/testeKidopi/Brasil', 'Brasil');

Route::view('/testeKidopi/Canada', 'Canada');

Route::view('/testeKidopi/Australia', 'Australia');

Route::view('/testeKidopi/Comparar', 'Comparar');

Route::view('/testeKidopi/Brasil', 'apiBrasil');

Route::view('/main', 'Main');




Route::get('/pais=Brasil', function () {

    $Brasil = Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Brazil');
    $BrasilArray = json_decode($Brasil->getBody());

    return view('apiBrasil', compact('BrasilArray'));
});





Route::get('/pais=Australia', function () {

    $Australia = Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Australia');
    $AustraliaArray = json_decode($Australia->getBody());

    return view('apiAustralia', compact('AustraliaArray'));
});





Route::get('/pais=Canada', function () {

    $Canada = Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?pais=Canada');
    $CanadaArray = json_decode($Canada->getBody());

    return view('apiCanada', compact('CanadaArray'));
});



Route::get('/comparar', function () {

    $Paises = Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1');
    $PaisesArray = json_decode($Paises->getBody());

    return view('apiPaises', compact('PaisesArray'));

   


})->name('apiPaises'); 


Route::get('/comparar/resultado', function (Request $_request) {

    
    $primeiroPais = str_replace("_", " ", $_request->input('pais1'));
    $segundoPais = str_replace("_", " ", $_request->input('pais2'));



    DB::table('tb_data')->insert([
        'pais1' => $primeiroPais,
        'pais2' => $segundoPais,
        'data' =>  strval(date("d/m/Y"))
    ]

);


    $primeiroPaisUrl = Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?pais='. $primeiroPais);
    $primeiroPaisData = json_decode($primeiroPaisUrl->getBody());

    $segundoPaisUrl = Http::get('https://dev.kidopilabs.com.br/exercicio/covid.php?pais='. $segundoPais);
    $segundoPaisData = json_decode($segundoPaisUrl->getBody());



    $primeiroPaisConfirmados = 0;
    $primeiroPaisMortes = 0;

    foreach ($primeiroPaisData as $primeiroPais){
        $primeiroPaisMortes += $primeiroPais->Confirmados;
        $primeiroPaisConfirmados += $primeiroPais->Mortos;
    }

    $segundoPaisConfirmados = 0;
    $segundoPaisMortes = 0;

    foreach ($segundoPaisUrl as $segundoPais){
        $segundoPaisConfirmados += $segundoPais->Confirmados;
        $segundoPaisMortes += $segundoPais->Mortos;
    }

    $primeiroPaisMedia = $primeiroPaisMortes / $primeiroPaisConfirmados;
    $segundoPaisMedia = $segundoPaisMortes / $segundoPaisConfirmados;

    $resultado = $primeiroPaisMedia - $segundoPaisMedia;

    $data = array(
        'primeiroPais' => $primeiroPais->Pais,
        'primeiroPaisMedia' => $primeiroPaisMedia,
        'segundoPais' => $segundoPais->Pais,
        'sengundoPaisMedia' => $segundoPaisMedia,
        'resultado' => $resultado
    );

    return view('apiComparar' , compact('data'));
})->name('apiComparar');
