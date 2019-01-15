<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Faker\Calculator\Luhn;
use Illuminate\Http\Request;

class luhnController extends Controller
{
    /**
     * @var Luhn
     */
    protected $luhn;

    /**
     * luhnController constructor.
     * @param Luhn $luhn
     */
    public function __construct(Luhn $luhn)
    {
        $this->luhn = $luhn;
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @throws \Exception
     */
    public function checkLuhn(Request $request)
    {
        $data = $request->input('number');

        if (Luhn::isValid($data) === true) {
            $luhn = new \App\Luhn();
            $luhn->number = $request->input('number');
            $luhn->created_at = Carbon::now();
            $luhn->save();
            return view('luhn');
        } else {
            throw new \Exception('Credit card number not valid');
        }
    }
}
