<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index() {
        return view('shopping/index');
    }

    public function basketToSession(Request $request) {
        // $check = Session::put('sessionBasket', 'value');
        // if(!Request::ajax()) {
        //     abort(404, 'Page not found');
        // }
        // if (!empty($request->except('_token'))) {
        //     Session::put(['sessionBasket' => $request-all()]);
        //     return Response::json($request-all());
        // }
        $items = $request->all();
        return $items;
    }
}
