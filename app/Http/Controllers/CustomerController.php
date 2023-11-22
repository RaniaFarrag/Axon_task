<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Customer;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public $customerService;

    public function __Construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;

    }

    public function listPhoneNumbers(Request $request)
    {
        $countries = Country::all();
        $customers = $this->customerService->filterCustomersPhoneNumbers($request);

        if($request->ajax()){
            $data_json['viewBlade']= view('customers.table_partial', compact('customers'))->render();
            return response()->json($data_json);
        }

        return view('customers.index', compact('customers', 'countries'));
    }

}
