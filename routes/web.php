<?php

use App\Http\Controllers\ameencontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// route::get('form',[ameencontroller::class,'form'])->name('form');
// route::post('form_data',[ameencontroller::class,'form_data'])->name('form_data');


route::get('ameen',[ameencontroller::class,'ameen'])->name('ameen');
route::post('ameendata',[ameencontroller::class,'ameendata'])->name('ameendata');


// route::get('form1',[newcontroller::class,'form1'])->name('form1');
// route::post('form1',[newcontroller::class,'form1_data'])->name('form1_data');


route::get('form2',[ameencontroller::class,'form2'])->name('form2');
route::post('form2_data',[ameencontroller::class,'form2_data'])->name('form2_data');

route::get('form3',[ameencontroller::class,'form3'])->name('form3');
route::post('form3-data',[ameencontroller::class,'form3_data'])->name('form3_data');

route::get('contact',[ameencontroller::class,'contact'])->name('contact');
route::post('contactdata',[ameencontroller::class,'contactdata'])->name('contactdata');



route::get('orders',[ameencontroller::class,'orders']);














