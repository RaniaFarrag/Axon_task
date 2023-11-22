<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerService
{

    public $request;

    public function __Construct(Request $request)
    {
        $this->request = $request;
    }

    public function filterCustomersPhoneNumbers($request)
    {
        $customers = Customer::query();
        if($request->has('country_id')){
            $customers = $customers->where('country_id', $request->country_id);
        }

        if($request->has('valid') == 1){
            $customers = $customers->where('phone','REGEXP', '^[[:digit:]]{10}$');
        }
        elseif($request->has('valid') == 2){
            $customers = $customers->whereNot('phone','REGEXP', '^[[:digit:]]{10}$');
        }
        return $customers->paginate(15);

    }

}
