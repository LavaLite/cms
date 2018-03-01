<?php

namespace App\Http\Controllers\ClientPay;

use App\Http\Controllers\Controller;
use App\ClientPay;
use Illuminate\Http\Request;

class ClientPayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        exit('Client Pays');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientPay  $clientPay
     * @return \Illuminate\Http\Response
     */
    public function show(ClientPay $clientPay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientPay  $clientPay
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientPay $clientPay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientPay  $clientPay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientPay $clientPay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientPay  $clientPay
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientPay $clientPay)
    {
        //
    }
}
