<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;


Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings',[ListingController::class, 'store']);

Route::get('/listings/{listing}',[ListingController::class, 'show']);



// Route::get('/listings/{listing}',function(Listing $listing){
//     return view('listing', [
//         'listing'=>$listing
//     ]);
// });

// Route::get('/listings/{id}',function($id){
//     return view('listing',[
//         'listing' => Listing::find($id)
//     ]);
// });
