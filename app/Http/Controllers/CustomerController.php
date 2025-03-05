<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        if ($customers->isEmpty()) {
            return response()->json(['message' => 'No customers found'], 404);
        }
        return response()->json($customers, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:customers,email',
            'phone' => 'nullable|string|max:15',
        ]);

        $customer = Customer::create($validatedData);
        return response()->json($customer, 200);
    }

    /**
     * Display the specified customer.
     *
     * This function retrieves a customer based on the provided ID and returns it as a JSON response.
     * If the customer is found, it returns the customer data with a 200 status code.
     * If the customer is not found, it returns an error message with a 404 status code.
     *
     * @param string $id The ID of the customer to retrieve
     *
     * @return \Illuminate\Http\JsonResponse The JSON response containing either the customer data or an error message
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        $customer = Customer::find($id);
        if ($customer) {
            return response()->json($customer, 200);
        } else {
            return response()->json(['error' => 'Customer not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
