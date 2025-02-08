<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ="Fournisseurs";
        $suppliers = Supplier::get();
        return view('suppliers',compact('title','suppliers'));
    }

    /**
     * Display a form for adding the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Ajouter Fournisseur";
        $products = Product::get();
        return view('add-supplier',compact(
            'title','products'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'product'=>'required',
            'email'=>'email|string',
            'phone'=>'max:13',
            'company'=>'max:200|required',
            'address'=>'required|max:200',
            'description' =>'max:200',
        ]);
        Supplier::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'company'=>$request->company,
            'address'=>$request->address,
            'product'=>$request->product,
            'description'=>$request->description,
        ]);
        $notification = array(
            'message'=>"Le fournisseur a été ajouté",
            'alert-type'=>'success',
        );
        return redirect()->route('suppliers')->with($notification);
    }

    /**
     * Display the specified resource.
     *@param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $title = "Supprimer un Fournisseur";
        $products = Product::get();
        $supplier = Supplier::find($id);
        return view('edit-supplier',compact(
            'title','products','supplier'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $this->validate($request,[
            'name'=>'required',
            'product'=>'required',
            'email'=>'email|string',
            'phone'=>'max:13',
            'company'=>'max:200|required',
            'address'=>'required|max:200',
            'description' =>'max:200',
        ]);

        $supplier->update($request->all());
        $notification = array(
            'message'=>"Le fournisseur a été mis à jour",
            'alert-type'=>'success',
        );
        return redirect()->route('suppliers')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $supplier = Supplier::find($request->id);
        $supplier->delete();
        $notification = array(
            'message'=>"Le fournisseur a été supprimé",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}
