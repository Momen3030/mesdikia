<?php

use App\notifications;
use Illuminate\Support\Facades\Route;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
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

Auth::routes();
Route::get('/sendemail/{id}',"EmailController@ship");
Route::post('/putmessage',"StoreMessController@storemessage");
Route::post('/putsupport',"StoreSuppController@storesupport");
Route::get('/livestream',"LiveController@Live")->name('stream');
//////////// register and login///////////////////////////
Route::post('/registerdata',"registercontroller@store");
Route::post('/logindata',"logincontroller@login");
Route::post('/editdatauser',"logincontroller@editacount");
////////////////////////// API //////////////////////////////
Route::get('gethighvalueapi','GetHighvalueApi@listhighvalue');
Route::get('getjeweleryapi','GetjewelryApi@listjewelery');
Route::get('getcarapi','GetCarApi@listCars');
Route::get('getpropertyapi','GetpropertiesApi@listproperty');
Route::get('getvichleapi','GetvichlesApi@listvichle');
/////////////// Menu bar views /////////////////////////////////////
Route::get('/mesdakia', function () {return view('MenubarViews.mesdakia');});
Route::get('/mesdakia2/{id}', function ($id) {
    Session::flush($id);
    return redirect('/');
})->name('mesdakiaroute');
Route::get('/sales',"Sales@fawrysales");//   المزادات الفورية
Route::get('/homemesdakia',"HomemesdakiaController@homeMed");
Route::get('/',"HomemesdakiaController@homeMed");
Route::get('/mazadat','mazadatController@ListMazadat');
////////////// category details/////////////////
Route::get('/cardetail',function (){return view('Basic_pages.carproductdetails');})->name('cardetail');
Route::get('/jewlerydetail',function (){return view('Basic_pages.jewelryproductdetails');})->name('jewlerydetail');
Route::get('/propertydetail',function (){return view('Basic_pages.propertyproductdetails');})->name('propertydetail');
Route::get('/vichledetail',function (){return view('Basic_pages.vichleproductdetails');})->name('vichledetail');
Route::get('/highvaluedetail',function (){return view('BFasic_pages.highvalueproductdetails');})->name('highvaluedetail');

//payment route
Route::get('/userpayment',function (){return view('userpayment');})->name('userpayment');
Route::get('/contiuepayment',function (){return view('contiuepayment');})->name('contiuepayment');



Route::get('/product_car/{id}', "ProductData@carsproduct")->name('Productt_car');
Route::get('/product_property/{id}',"ProductData@propertyproduct" )->name('Productt_property');
Route::get('/highvalue/{id}', "ProductData@highvalueproduct")->name('Productt_highvalue');
Route::get('/product_jewelry/{id}', "ProductData@jewelryproduct")->name('Productt_jewelry');
Route::get('/product_vichle/{id}', "ProductData@vichleproduct")->name('Productt_vichle');
///////////////////////////////////////////////////////////////////////////

/// ##########################user profile ################## //////////
Route::get('/enter_profile', function () {
    return view('pages_profile_list.enter');
})->name('profile');

Route::get('/addtocard/{productid}/{ownerID}/{image}/{type}/{price}','AddToCardController@addcard')->name('addtocard');
Route::get('/addtocard/{id}','AddToCardController@deletecard')->name('addtocard2');
Route::get('/controlmenu','MenuFrontController@controlmenu')->name('controlmenu');
////////////////////Basic pages//////////////////////////
Route::get('/cars',"carsController@ListCars");
Route::get('/jewelry',"jewelryController@ListJewelry");
Route::get('/highvalue',"HighValueController@ListHigh");
Route::get('/property',"propertiesController@ListProperty");
Route::get('/vichle',"vichleController@ListVichle");
/// //////////////////////////// ADD product //////////////////////////////////////
Route::get('/add_product',"productController@SelectProduct")->name('add_product');
Route::get('/formcars','productController@FormCar');
Route::get('/formjewelries','productController@FormJewelry');
Route::get('/formproperties','productController@FormProperty');
Route::get('/formvichles','productController@FormVichle');
Route::get('/formhighvalues','productController@Formhighvalue');

Route::post('/addcarsform','productController@addcar');
Route::post('/addjewelriesform','productController@addjewelry');
Route::post('/addpropertiesform','productController@addproperty');
Route::post('/addhighvaluesform','productController@addhighvalue');
Route::post('/addvichlesform','productController@addvichles');
////////////////////////////////////////////////////////////////////
Route::get('/search_car','SearchController@CarSearch')->name('sca');
Route::get('/search_jewelry','SearchController@JewelrySearch');
Route::get('/search_property','SearchController@PropertySearch');
Route::get('/search_vichle','SearchController@VichleSearch');
Route::get('/search_highvalue','SearchController@HighvalueSearch');
/////////////////////////////////////////////////////////////////
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);
Route::get('profile', function () {
    return '<h1>This is profile page</h1>';
})->middleware('verified');

//***************************** amin ***********************************************//

/****************************************************************
 * **********          المركبات       ***************
 ****************************************************/

Route::get('/ships',function (){

    return redirect('/vichle');
})->name('سفـن');
            //سفـن
Route::get('/marine_boots',function (){

    return redirect('/vichle');
})->name('بوتات بحرية');

//بوتات بحرية
Route::get('/hovercraft',function (){

    return redirect('/vichle');
})->name('حوامـات');

        //حوامـات
Route::get('/jet_ski',function (){

    return redirect('/vichle');
})->name('جيـت سكـي');
    //جيـت سكـي
Route::get('/vehicles_new_advertiser',function (){
    return redirect('/vichle');
})->name('المعلن الجديد');
        //المعلن الجديد
//************** ********************* الشـاحنات *******************************//
Route::get('/small_trucks',function (){
    return redirect('/vichle');
})->name('شاحنـات صغيرة');

             //شاحنـات صغيرة
Route::get('/large_trucks',function (){

    return redirect('/vichle');
})->name('شاحنـات كبيرة');

    //شاحنـات كبيرة
Route::get('/trailers',function (){

    return redirect('/vichle');
})->name('تريـلات');
      //تريـلات
Route::get('/trucks_new_advertiser',function (){
    return redirect('/vichle');
})->name('المعلن الجديد');
     //المعلن الجديد

//******************************* السيـارات **********************************************//
Route::get('/family_cars',function (){
    return redirect('/cars');
})->name('سيـارات عائيليـة');
             //سيـارات عائيليـة
Route::get('/small_cars',function (){
    return redirect('/cars');
})->name('سيـارات صغيـرة');
   ;    //سيـارات صغيـرة
Route::get('/buses',function (){
    return redirect('/cars');
})->name('حافـلات');
        //حافـلات
Route::get('/cars_new_advertiser',function (){

    return redirect('/vichle');
})->name('المعلن الجديد');
       //المعلن الجديد
//****************************** الدرجات الناريـة ***************************************//
Route::get('/two_wheeled',function (){
    return redirect('/vichle');
})->name('ثنائية العجـلات');

            // ثنائية العجـلات
Route::get('/tricycle',function (){
    return redirect('/vichle');
})->name('ثلاثيـة العجـلات');

        //ثلاثيـة العجـلات
Route::get('/four_wheel',function (){

    return redirect('/vichle');
})->name('رباعيـة العجـلات');
   ;     //رباعيـة العجـلات
Route::get('/motorcycles_new_advertiser',function (){

    return redirect('/vichle');
})->name('/المعلن الجديد');
      //المعلن الجديد

//****************************** العربات *****************************/
Route::get('/trailers',function (){

    return redirect('/vichle');
})->name('مقطـورات');

              //مقطـورات
Route::get('/carnivals',function (){

    return redirect('/vichle');
})->name('كرنفـالات');

       // كرنفـالات
Route::get('/hovercraft',function (){

    return redirect('/vichle');
})->name('فـود تـرك');

        //فـود تـرك
Route::get('/food_turk',function (){


    return redirect('/vichle');
})->name('البيـوت المتنقلـة');

          //البيـوت المتنقلـة
Route::get('/wagons_new_advertiser',function (){


    return redirect('/vichle');
})->name('المعلن الجديد');
       //المعلن الجديد

/****************************************************************
 * **********         العقارات       ***************
 ****************************************************/

//******************************  المباني ***************************************//
Route::get('/villas',function (){
      return redirect('/property');
})->name('فـلل');

             // فـلل
Route::get('/buildings',function (){

    return redirect('/property');
})->name('مباني');
      //مباني
Route::get('/apartments',function (){

    return redirect('/property');
})->name('شـقق');
       //شـقق
Route::get('/builds_new_advertiser',function (){

    return redirect('/property');
})->name('/المعلن الجديد');
      //المعلن الجديد

//****************************** الأراضي *****************************/
Route::get('/schemes',function (){
    return redirect('/property');
})->name('مخططـات');
        //مخططـات
Route::get('/land_plots',function (){

    return redirect('/property');
})->name('قطـع أرضي');
        //قطـع أرضي
Route::get('/lands_new_advertiser',function (){

    return redirect('/property');
})->name('المعلن الجديد');
       //المعلن الجديد

/****************************************************************
 * **********         المجوهرات       ***************
 ****************************************************/
//******************************  الماس ***************************************//
Route::get('/stones',function (){

    return redirect('/jewelry');
})->name('أحجـار');


       //أحجـار
Route::get('/sweets',function (){
    return redirect('/jewelry');
})->name('حُلـي');

      //حُلـي
Route::get('/diamond_new_advertiser',function (){

    return redirect('/jewelry');
})->name('المعلن الجديد');
      //المعلن الجديد

//****************************** الفضـة *****************************/
Route::get('/mills_and_alloys',function (){

    return redirect('/jewelry');
})->name('ُمـلات و سبـائك');

       //ُمـلات و سبـائك
Route::get('/trinkets',function (){

    return redirect('/jewelry');
})->name('حُلـي رجالي');
         //  حُلـي رجالي
Route::get('/Women_jewelery',function (){
    return redirect('/jewelry');
})->name('حُلـي نسـائية');
         //  حُلـي نسـائية
Route::get('/silver_new_advertiser',function (){

    return redirect('/jewelry');
})->name('المعلن الجديد');

      //المعلن الجديد

//****************************** الذهب *****************************/
Route::get('/bullion',function (){

    return redirect('/jewelry');
})->name('السبـائك');

       //السبـائك
Route::get('/currencies',function (){
    return redirect('/jewelry');
})->name('العمـلات');

       //العمـلات
Route::get('/ornaments',function (){
    return redirect('/jewelry');
})->name('الحُلـي');

         //الحُلـي
Route::get('/gold_new_advertiser',function (){

    return redirect('/jewelry');
})->name('المعلن الجديد');
       //المعلن الجديد

//************ أخري ثمينة *************************//
//************ أخري ثمينة *************************//
//************ أخري ثمينة *************************//
Route::get('/bullion',function (){

    return redirect('/highvalue');
})->name('لوحـات');
       //لوحـات
Route::get('/hours',function (){
    return redirect('/highvalue');
})->name('سـاعـات');

         //سـاعـات
Route::get('/animals',function (){

    return redirect('/highvalue');
})->name('حيـوانـات');
      //حيـوانـات
Route::get('/antiques',function (){

    return redirect('/highvalue');
})->name('تحـف');
         //تحـف
Route::get('/other',function (){

    return redirect('/highvalue');
})->name('أخري');

       //أخري
Route::get('/others_precious',function (){

    return redirect('/highvalue');
})->name('المعلن الجديد');
        //المعلن الجديد







//============================= Categroies =============

Route::get('/singlepage/{pagename}','HomeController@singlepage')->name('singlepage');
