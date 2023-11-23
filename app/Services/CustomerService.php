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

    /** Filter phone numbers */
    public function filterCustomersPhoneNumbers()
    {
        $query = Customer::query();

        if($this->request->country_id){
            $query->where('country_id', $this->request->country_id);
        }

        if($this->request->valid == 1){
            $query->whereRaw('LENGTH(phone) < 10');
        }
        elseif($this->request->valid == 2){
            $query->whereRaw('LENGTH(phone) >= 10');
        }

        return $query->orderBy('id' , 'desc')->paginate(15);
    }

}
