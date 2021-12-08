<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Cart;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaction', [
            "title" => "Transaction",
            "desc" => "Your transaction history.",
            "items" => Transaction::where('email', auth()->user()->email)->get()
        ]);
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
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = uniqid();

        $array = $request->only([
            'email', 'file', 'jumlah', 'harga', 'alamat', 'amount'
        ]);

        $array["file"] = $file;

        Transaction::create($array);

        $products = Cart::where('email', auth()->user()->email)->get();

        $myfile = fopen("assets/txt/".$file.".txt", "w") or die("Unable to open file!");
        foreach ($products as $product) {
            fwrite($myfile, $product['id']);
            fwrite($myfile, "\n");
            fwrite($myfile, $product['roti']);
            fwrite($myfile, "\n");
            fwrite($myfile, $product['jumlah']);
            fwrite($myfile, "\n");
            fwrite($myfile, $product['harga']);
            fwrite($myfile, "\n");
        }
        fclose($myfile);

        $total = count($products);
  
        // delete cart
        for ($i=0; $i < $total; $i++) {

            $data['id'] = $products[$i]['id'];
            $data['email'] = auth()->user()->email;

            Cart::destroy($data['id']);
        }

        return redirect('/transaction')->with('success', 'Checkout Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
