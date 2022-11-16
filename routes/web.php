  <?php

use Illuminate\Support\Facades\Route;

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




Route::get('/', function () {
   return view('welcome');
});

Auth::routes();
  Route::group(['middleware' => 'auth'], function () {
      Route::get('/home', 'HomeController@index')->name('home');

      Route::prefix('courses')->group(function () {
          Route::get('', 'CourseController@index');
          Route::get('create', 'CourseController@create');
          Route::post('', 'CourseController@store');
          Route::get('{course}', 'CourseController@show');
          Route::get('{course}/edit', 'CourseController@edit');
          Route::put('{course}', 'CourseController@update');
          Route::delete('{course}', 'CourseController@destroy');
      });

      Route::prefix('groups')->group(function () {
          Route::get('', 'GroupController@index');
          Route::get('create', 'GroupController@create');
          Route::post('', 'GroupController@store');
          Route::get('{group}', 'GroupController@show');
          Route::get('{group}/edit', 'GroupController@edit');
          Route::put('{group}', 'GroupController@update');
          Route::delete('{group}', 'GroupController@destroy');
      });


      Route::prefix('students')->group(function () {
          Route::get('', 'StudentController@index');
          Route::get('create', 'StudentController@create');
          Route::get('create/{groupId}', 'StudentController@createWGroup');
          Route::post('', 'StudentController@store');
          Route::get('{student}', 'StudentController@show');
          Route::get('{student}/edit', 'StudentController@edit');
          Route::put('{student}', 'StudentController@update');
          Route::delete('{student}', 'StudentController@destroy');

      });
      Route::get('export', 'StudentController@export');
      Route::get('import', 'StudentController@importForm');
      Route::post('import', 'StudentController@import');

      Route::prefix('studentTests')->group(function () {
          Route::get('', 'TestController@stIndex');
          Route::get('{groupTest}/option', 'TestController@stOptionIndex');
          //Route::get('create', 'TestController@stCreate');
          //Route::post('', 'TestController@stStore');
          Route::get('{groupTest}/{testID}', 'TestController@stShow');
          Route::get('{groupTest}/{testID}/edit', 'TestController@stEdit');
          Route::get('{groupTest}/{testID}/editss2', 'TestController@stEditSS2');
          Route::get('{groupTest}/{testID}/editss', 'TestController@stEditSS');
          Route::put('{studentTest}ss2', 'TestController@stUpdateSS2');
          Route::put('{studentTest}ss', 'TestController@stUpdateSS');
          Route::put('{studentTest}', 'TestController@stUpdate');
          Route::delete('{studentTest}', 'TestController@stDestroy');
      });

      Route::prefix('tests')->group(function () {
          Route::get('', 'TestController@index');
          Route::get('create', 'TestController@create');
          Route::post('', 'TestController@store');
          Route::get('{test}', 'TestController@show');
          Route::get('{test}/edit', 'TestController@edit');
          Route::put('{test}', 'TestController@update');
          Route::delete('{test}', 'TestController@destroy');
      });

      Route::prefix('testPhases')->group(function () {
          Route::get('', 'TestPhaseController@index');
          Route::get('create', 'TestPhaseController@create');
          Route::post('', 'TestPhaseController@store');
          Route::get('{testPhase}', 'TestPhaseController@show');
          Route::get('{testPhase}/edit', 'TestPhaseController@edit');
          Route::put('{testPhase}', 'TestPhaseController@update');
          Route::delete('{testPhase}', 'TestPhaseController@destroy');
      });

      Route::prefix('testTypes')->group(function () {
          Route::get('', 'TestTypeController@index');
          Route::get('create', 'TestTypeController@create');
          Route::post('', 'TestTypeController@store');
          Route::get('{testType}', 'TestTypeController@show');
          Route::get('{testType}/edit', 'TestTypeController@edit');
          Route::put('{testType}', 'TestTypeController@update');
          Route::delete('{testType}', 'TestTypeController@destroy');
      });

      Route::prefix('users')->group(function () {


          // Admin Middleware
          Route::group(['middleware' => 'isAdmin'], function () {
              Route::get('', 'UserController@index');
              Route::get('create', 'UserController@create');
              Route::delete('{user}', 'UserController@destroy');
              Route::post('', 'UserController@store');
          });


          Route::get('{user}', 'UserController@show');
          Route::get('{user}/edit', 'UserController@edit');
          Route::put('{user}', 'UserController@update');

      });

      Route::prefix('userTypes')->group(function () {
          Route::get('', 'UserTypeController@index');
          Route::get('create', 'UserTypeController@create');
          Route::post('', 'UserTypeController@store');
          Route::get('{userType}', 'UserTypeController@show');
          Route::get('{userType}/edit', 'UserTypeController@edit');
          Route::put('{userType}', 'UserTypeController@update');
          Route::delete('{userType}', 'UserTypeController@destroy');
      });

      Route::prefix('charts')->group(function () {
          Route::get('', 'TestController@chartIndex');
          Route::get('{groupId}/phases', 'TestController@chartPhasesIndex');
          Route::get('{groupId}/{phaseId}', 'TestController@chartPhase');


      });

      Route::get('charts/{groupId}/compare/{comp}', 'TestController@chartPhaseCompare');
      Route::get('charts/{groupId}/students/{st}', 'TestController@chartPhaseStudents');
  });
