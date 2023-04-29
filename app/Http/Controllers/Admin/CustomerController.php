<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customerlist',[
            'page'  =>  'Customers',
            'records' => User::join('customers','customers.user','=','users.id')->orderBy('users.id','desc')->get(['users.*', 'customers.*']),
        ]);
    }

    public function edit($id)
    {
        $data = User::join('customers','customers.user','=','users.id')->where('users.id',$id)->get(['users.*', 'customers.*'])->first();
        return view('admin.customerform',[
            'page'  =>  'Customers',
            'data'  =>  $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        User::where('id',$id)->update([
            'status'    =>  $request->status,
        ]);
        return redirect('/admin/customer/edit/'.$id)->with('completed', 'Data has been saved!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/admin/customer')->with('completed', 'Data has been Deleted!');
    }
}
