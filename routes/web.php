<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Location\TrackingController;
use App\Http\Controllers\TournoisController;
use App\Http\Controllers\AssociationController;
use App\Models\Evennement;
use App\Models\Tournoit;
use App\Models\Associations;
use App\Http\Controllers\Client\EventController;
use App\Http\Controllers\WebScrapping\ScraperController;
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

$controller_path = 'App\Http\Controllers';

// Admin Route
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () use ($controller_path) {
  //*******-event admin  ******/
  Route::resource('events',EventController::class);
  Route::any('/events/delete/{id}', $controller_path . '\Client\EventController@destroy')->name('events.delete');
  Route::any('/events/edit/{id}', $controller_path . '\Client\EventController@edit2')->name('events.edit2');
  Route::any('/events/update/{id}', $controller_path . '\Client\EventController@update2')->name('events.update2');

  
    //*******-event admin  ******/

  Route::get('/home', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
  Route::resource('/location',\App\Http\Controllers\Location\LocationBackOfficeController::class);
 Route::resource('tracking', TrackingController::class);
 Route::get('/ajax/tracks', [TrackingController::class, 'ajax']);
 Route::get('/test/{id}',  $controller_path . '\Location\TrackingController@showing');

  Route::get('/ajax/track/{id}', [TrackingController::class, 'ajaxid']);


  Route::resource('review',\App\Http\Controllers\ReviewController::class);

  Route::resource('post', \App\Http\Controllers\PostController::class);




  Route::resource('balade', \App\Http\Controllers\balade\BaladeController::class);
  Route::get('/participations', $controller_path . '\balade\BaladeController@participations')->name('balade_participations');



  //Category Routes
Route::controller(App\Http\Controllers\CategoryController::class)->group(function () {
  Route::get('/category', 'index');
  Route::get('/category/create','create');
  Route::post('/category','ajouter');
  Route::get('/category/{category}/edit','editT');
  Route::put('/category/{category}','update');
  Route::get('/category/{cat_id}/delete','delete');

});

    //Velo Routes
  Route::controller(App\Http\Controllers\VeloController::class)->group(function () {
    Route::get('/velo', 'index');
    Route::get('/velo/create','create');
    Route::post('/velo','ajouter');
    Route::get('/velo/{velo}/edit','editT');
    Route::put('/velo/{velo}','update');
    Route::get('/velo/{velo_id}/delete','delete');
    Route::get('/velo-image/{velo_image_id}/delete','destroyImage');



  });


Route::resource('tournois', tournoisController::class);
Route::resource('association', AssociationController::class);

});

//Client Route
Route::get('/', function () { return redirect('/home');});
Route::get('/home', $controller_path . '\Client\Home\ClientHome@index')->name('home');
Route::resource('clientbalade', \App\Http\Controllers\balade\client\balade_client::class);
Route::resource('clientreview',\App\Http\Controllers\ReviewFrontController::class);
Route::resource('clientpost',\App\Http\Controllers\PostController::class);


Route::post('/addparticipation/{balade}', $controller_path . '\balade\client\balade_client@participation')->name('addparticipation');
Auth::routes();
Route::get('/velofront',[App\Http\Controllers\VeloController::class, 'indexfront']);
Route::get('/allcategories',[App\Http\Controllers\CategoryController::class, 'categories']);
Route::get('/allcategories/{category_slug}',[App\Http\Controllers\CategoryController::class, 'productsofcategorie']);
Route::get('/allvelo',[App\Http\Controllers\VeloController::class, 'store']);
Route::get('/detailsvelo/{velo_id}/details',[App\Http\Controllers\VeloController::class,'details']);
Route::get('/search',[App\Http\Controllers\VeloController::class, 'searchProduct']);
//Route::get('/filtervelotByCategory/{idCategory}', 'filtervelotByCategory');

Route::resource('/c_location', \App\Http\Controllers\Location\client\locationFrontController::class);


//Route::view('/evennements', 'events.index', ['evennements' => $Array]);


//event , sponspor client side 

Route::resource('scrap',ScraperController::class);
Route::get('sponspor','App\Http\Controllers\WebScrapping\ScraperController@showsponsor');

Route::get('/events', $controller_path . '\Client\EventClientController@index')->name('events');
Route::get('/events/{id}', $controller_path . '\Client\EventClientController@show')->name('events.show.client');










/////////////////////////////// Hezo menhom html css/////////////////////////////////////////////////////

// Example
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
  Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');


