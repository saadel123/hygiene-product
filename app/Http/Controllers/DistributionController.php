<?php

namespace App\Http\Controllers;

use App\Distribution;
use App\Mail\DistrubtionMail;
use App\Models\Ville;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $villes = Ville::all();
        $products = Product::whereIn('id', function ($query) {
            $query->select(DB::raw('MIN(id)'))
                ->from('products')
                ->groupBy('category_id');
        })
            ->orderBy('category_id', 'ASC')
            ->get();
        return view('main.distribution', compact('villes', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'ville_id' => 'required',
            'tele' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email',
            'adresse' => 'required',
            'message' => 'required|max:1000'
        ]);

        $details = $request->all();

        if ($request->has('produits_id')) {
            // split urls string into an array and trim any whitespace
            $details['produits_id'] = json_encode($details['produits_id']);
        }

        Distribution::create($details);
        Mail::to('elghanemysaad@gmail.com')->send(new DistrubtionMail($details));

        session()->flash('success', "Votre Produit a été envoyer avec succès");
        return redirect()->route('distribution.index', '#contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
