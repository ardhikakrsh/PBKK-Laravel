<?php

namespace App\Http\Controllers;

use App\Models\Barang;  // Include the Barang model
use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // Include the DB facade

class DashboardController extends Controller
{
    public function index(){
        return view('index');  // Pass the data to the view
    }
    public function product(){
        $barangs = Barang::all(); // Fetch all barang records
        return view('MADU.layouts.userAuth.product', compact('barangs'));  // Pass the data to the view
    }

    public function review(){
        $barangs = Barang::all(); // Fetch all barang records
        // $reviews = Review::with('user', 'barang'); // Fetch reviews with user and barang relationships
        // // dump(request('search'));
        // if(request('search')){
        //     $reviews = $reviews->whereHas('barang', function($query){
        //         $query->where('nama', 'like', '%'.request('search').'%');
        //     });

        //     $reviews = $reviews->orWhereHas('user', function($query){
        //         $query->where('nama', 'like', '%'.request('search').'%');
        //     });
        // }

        // $reviews = $reviews->get(); // Fetch all reviews
        $reviews = Review::with(['user', 'barang'])->filter(request(['search']))->get();
        return view('MADU.layouts.userAuth.review', compact('barangs', 'reviews'));  // Pass the data to the view
    }

    public function contact(){
        return view('MADU.layouts.userAuth.contact');
    }

    public function barang(){
        return view('MADU.layouts.userAuth.barang');
    }
}

// 0. without search
// $barangs = Barang::all(); // Fetch all barang records
// $reviews = Review::with('user', 'barang')->get(); // Fetch reviews with user and barang relationships

// 1. Update the review method in the DashboardController:
// $barangs = Barang::all(); // Fetch all barang records
// $reviews = Review::with('user', 'barang'); // Fetch reviews with user and barang relationships
// // dump(request('search'));
// if(request('search')){
//     $reviews = $reviews->whereHas('barang', function($query){
//         $query->where('nama', 'like', '%'.request('search').'%');
//     });

//     $reviews = $reviews->orWhereHas('user', function($query){
//         $query->where('nama', 'like', '%'.request('search').'%');
//     });
// }

// $reviews = $reviews->get(); // Fetch all reviews

//  2. Update the Review model to include the filter scope method:
// $barangs = Barang::all(); // Fetch all barang records
// $reviews = Review::with(['user', 'barang'])->filter()->get();
