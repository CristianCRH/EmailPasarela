<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasarela', ['as'=>'pasarela','uses'=>'PasarelaController@pasarela']);
Route::get('/envio', ['as'=>'envio','uses'=>'PasarelaController@envio']);

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('sendemail',function(){
	$data=array(
		'name'=>"Hola Cristian Estas seguro de participar en nustro taller de Laravel",
	);

	Mail::send('emails.welcome',$data,function($message){
		$message->from('huayanayricardo88@gmail.com','Curso Laravel');
		$message->to('huayanayricardo88@gmail.com')->subject('test email curso laravel');
	});
	return "Tu email ha sido enviado correctamente";
});

// Route::get('auth/register','Auth\RegisterController@getRegister');
// Route::post('auth/register','Auth\RegisterController@postRegister');
Route::post('/login',['as'=> 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('logout','Auth\LoginController@logout');