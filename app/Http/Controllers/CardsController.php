<?php

namespace App\Http\Controllers;
use App\Business;
use App\Card;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $businesses = Business::all();
        $user = Auth::user();
        $cards = Card::all();
            
        return view('cards.add', ['user' => $user, 'cards' => $card, 'businesses' => $businesses]);
    }
    public function store()
    {
        //set variables for dates
        $valid_date = Carbon::now();
        $expiration_date = $valid_date->addDays(365);

        //set variable for user
        $user = Auth::user();
        $cards = Card::all();
       
        Card::create([
            'business_id' => request('businessSelect'),
            'user_id' => $user->id,
            'valid_date'=> Carbon::now(),
            'expiration_date' => $expiration_date
        ]);

        

       //redirect to home page
       return redirect('/cards');
    }
}