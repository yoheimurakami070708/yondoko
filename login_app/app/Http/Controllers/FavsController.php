<?php

namespace App\Http\Controllers;

use App\Models\Fav;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavsController extends Controller
{
    public function index(Request $request) {

        $keywords = [
            'user_id' => Auth::user()->id,
            'scores_id' => $request -> scores_id
        ];

        $payload = Fav::where($keywords)->exists();

        if($payload) {
            $this->_destroy(Auth::user()->id,$request->scores_id);
        } else {
            $this->_insert($request);
        }
    }

    private function _destroy($id,$tId) {
        $keywords = [
            'user_id' => $id,
            'scores_id' => $tId
        ];

        $payload = Fav::where($keywords);
        $payload -> delete();
        $response = [
            'status' => 200,
            'scores_id' => $tId
        ];
        echo json_encode($response);
    }

    private function _insert($request) {
        $favs = new Fav();
        $favs -> scores_id = $request -> scores_id;
        $favs -> user_id = Auth::user() -> id;
        $ret = $favs -> save();
        if (!$ret) {
            return false;
        }

        $payload = [
            'status' => 200,
            'scores_id' => $request -> scores_id
        ];
        echo json_encode($payload);
    }
}