<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function createJob(Request $request)
    {
        dump($request->get('types'));
        dump($request->get('counts'));
        die;
    }

    public function saveText(Request $request)
    {
        session(['text' => $request->get('text')]);

        return view('config', [
            'types' => [
                [
                    'id'   => 1,
                    'text' => 'Раз'
                ],
                [
                    'id'   => 2,
                    'text' => 'Два'
                ],
                [
                    'id'   => 3,
                    'text' => 'Три'
                ],
                [
                    'id'   => 4,
                    'text' => 'Четыре'
                ],
                [
                    'id'   => 5,
                    'text' => 'Пять'
                ],
            ]
        ]);
    }
}
