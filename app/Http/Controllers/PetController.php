<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    //
    public function index(){

        return [
            [
            'nome'=>'cachorro',
            'raca'=>'vira-lata',
            'idade'=>'2 anos',
            'peso'=>'10kg'
            ],
            [
                'nome'=>'cachorro2',
                'raca'=>'vira-lata',
                'idade'=>'2 anos',
                'peso'=>'10kg'
            ],
            [
                'nome'=>'cachorro3',
                'raca'=>'vira-lata',
                'idade'=>'2 anos',
                'peso'=>'10kg'
            ]
            ];

        
    }
}