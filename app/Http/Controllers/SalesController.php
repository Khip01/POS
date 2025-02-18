<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // POS Transaction Main Page
        return view('sales.sales-home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Creating Transactions at POS
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Saving Transactions in POS
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Show detailed transaction in POS
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Editing Transactions in POS
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Updating Transactions at the POS
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete Transaction in POS
    }
}
