<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookPriceRequest;
use App\Http\Requests\UpdateBookPriceRequest;
use App\Models\BookPrice;

class BookPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBookPriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookPriceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookPrice  $bookPrice
     * @return \Illuminate\Http\Response
     */
    public function show(BookPrice $bookPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookPrice  $bookPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(BookPrice $bookPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookPriceRequest  $request
     * @param  \App\Models\BookPrice  $bookPrice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookPriceRequest $request, BookPrice $bookPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookPrice  $bookPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookPrice $bookPrice)
    {
        //
    }
}
