<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use App\Http\Requests\StoreSubscribersRequest;
use App\Http\Requests\UpdateSubscribersRequest;
use App\Http\Resources\SubscribersCollection;
use App\Http\Resources\SubscribersResource;
class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscribers::all();
        return response()->json((new SubscribersCollection($subscribers)),200);
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
     * @param  \App\Http\Requests\StoreSubscribersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscribersRequest $request)
    {
        $subsribers   =   Subscribers::create([
            'name'   => $request->name,
            'email'   => $request->email
        ]);

        return response()->json((new SubscribersResource($subsribers)),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribers $subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscribersRequest  $request
     * @param  \App\Models\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscribersRequest $request, Subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribers $subscribers)
    {
        //
    }
}
