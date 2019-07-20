<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    protected $_data;

    public function sumView()
    {
        return view('sum-view');
    }

    public function sum(Request $request)
    {
        $n1 = $request->input('n1');
        $n2 = $request->input('n2');
        $n3 = $request->input('n3');
        $delta = ($n2 * $n2) - (4 * $n1 * $n3);
        if ($n1 == 0) {
            $kq = $n3 / $n2;
        } else {
            if ($delta < 0) {
                $kq = 'vo nghiem';
            } elseif ($delta == 0) {
                $kq = -($n2 / (2 * $n1));
            } else {
                $kq = array(
                    '0' => (-$n2 + sqrt($delta)) / 2 * $n1,
                    '1' => (-$n2 - sqrt($delta)) / 2 * $n1,
                );
            }
        }
        $this->_data['kq'] = $kq;

        return view('sum', $this->_data);
    }
}