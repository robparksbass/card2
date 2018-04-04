<?php

namespace App\Http\Controllers;
use App\Card;
use DB;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }
    
    public function add(Card $card)
    {
        return view('cards.add', compact('card'));
    }
}