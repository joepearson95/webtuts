<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ShoppingController extends Controller
{
    public function index() {
        return view('shopping/index');
    }

    public function basketToSession(Request $request) {
        # If the call is not AJAX, throw 404. If the request is also empty, don't add to session.
        $items = $request->all();
        if(!request()->ajax()) {
            abort(404, 'Page not found');
        }
        if (!empty($items)) {
            Session::put(['sessionBasket' => $items]);
            return response()->json(['url'=>url('/checkout')]);;
        }
    }
}
