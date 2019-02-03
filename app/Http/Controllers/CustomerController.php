<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
  public function index()
   {
      $customer = Customer::all();
     return view('welcome')->with('customer',$customer);
   }

   public function create()
   {
     return view('saleCreate');
   }

   public function store(Request $request)
   {
     $this->validate($request, [
       'name' => 'required|string',
       'email' => 'required|email',
       'tell' => 'required|string',
       'date' => 'required|string',
       'wr' => 'required|string',
       'message' => 'required|string'
     ]);

       //create post or stored in database
       $customer = new Customer;
       $customer->name = $request->input('name');
       $customer->email = $request->input('email');
       $customer->tell = $request->input('tell');
       $customer->date = $request->input('date');
       $customer->wr = $request->input('wr');
       $customer->message = $request->input('message');
       $customer->save();
       return redirect('/');
   }

   public function show()
   {
       return view('saleShow');
   }

   public function edit($id)
   {
       $customer = Customer::find($id);
       return view('saleEdit')->with('customer',$customer);;
   }

   public function update(Request $request, $id)
   {
     $this->validate($request, [
       'name' => 'required|string',
       'email' => 'required|email',
       'tell' => 'required|string',
       'date' => 'required|string',
       'wr' => 'required|string',
       'message' => 'required|string'
     ]);

       //edit post and store in database
       $customer = Customer::find($id);
       $customer->name = $request->input('name');
       $customer->email = $request->input('email');
       $customer->tell = $request->input('tell');
       $customer->date = $request->input('date');
       $customer->wr = $request->input('wr');
       $customer->message = $request->input('message');
       $customer->save();
       return redirect('/');
   }

 //delete reviewers
   public function destroy($id)
   {
       $customer = Customer::find($id);
       $customer->delete();
       return redirect('/');
   }
}
