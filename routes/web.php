<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Front\HomeController@show');
Route::post('/agendar', 'Front\HomeController@agendar');
Route::post('/verificar-email', 'Front\HomeController@verificar_email');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/enviar-confirmacao', 'Back\AgendamentoController@send_confirmation'); // enviar email confirmacao
Route::get('/confirmar-agendamento/{token}', 'Back\AgendamentoController@confirm_token');

Route::group(['prefix' => 'admin'], function(){
    
    Route::middleware(['guest'])->group(function(){
        Route::get('/', function () {
            return redirect('admin/login');
        });
        Route::get('login', 'Back\LoginController@index')->name('login');
        Route::post('login', 'Back\LoginController@login');
    });

    Route::middleware(['auth'])->group(function(){
        //CRUD SERVIÇOS
        
        Route::get('/servicos', 'Back\ServicoController@index');
        Route::get('/servicos/show/{id}', 'Back\ServicoController@show')->name('servicos.show');
        Route::get('/servicos/create', 'Back\ServicoController@create');
        Route::post('/servicos/create', 'Back\ServicoController@store')->name('servicos.new');
        Route::get('/servicos/edit/{id}', 'Back\ServicoController@edit')->name('servicos.edit');
        Route::patch('/servicos/edit/{id}', 'Back\ServicoController@patch')->name('servicos.update');
        Route::get('/servicos/delete/{id}', 'Back\ServicoController@destroy')->name('servicos.delete');

        //CRUD USUARIOS
        Route::get('/users', 'Back\UserController@index');
        Route::get('/users/show/{id}', 'Back\UserController@show')->name('users.show');
        Route::get('/users/create', 'Back\UserController@create');
        Route::post('/users/create', 'Back\UserController@store');
        Route::patch('/users/edit/{id}', 'Back\UserController@edit')->name('users.edit');
        // Route::post('/users/edit/{id}', 'Back\UserController@update')->name('users.update');
        Route::post('/users/delete/{id}', 'Back\UserController@destroy');

        //LISTAGEM E DETALHE DOS AGENDAMENTOS
        Route::get('/agendamentos', 'Back\AgendamentoController@index');
        Route::get('/agendamentos/{id}', 'Back\AgendamentoController@show')->name('agendamento.show');
    
        
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
