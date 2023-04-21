<?php

namespace App\Http\Controllers;
use App\Models\LaraCRUD;
use Illuminate\Pagination\Paginator;
use App\Models\Link;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request; 
use App\Rules\allowRule;

class crudController extends Controller
{
   public function show(){
       $list=LaraCRUD::paginate(5);
      // $list=LaraCRUD::all();
      return view('show', compact('list'));
   //  return view('show');
   }
   public function add(){
    return view('add');
   }
   public function store( Request $request){

      //most usable apporoch

      //adding validation 

      request()->validate([
         'name' =>['required', 'min:3', 'max:20'],
         'email' =>'required|email',
         'phone' =>['required', new allowRule],
         'address' =>'required|max:20'
         

      ]);


      LaraCrud::create($request->all());

      // LaraCrud::create($request->only('name', 'email'));
      //LaraCrud::create($request->except('address'));


      //way of getting data
      // $name=request()->input('name');

      // // $name=request('name');
      // $email=request('email');
      // $address=request('address');

      // other way of input data
      // $name=$request->input('name');
      // $email=$request->input('email');
      // $address=$request->input('address');
   
      // return ($address); // check data



       //1st approoch to data add
      // LaraCRUD::create([
      //    'name'=>$name,
      //    'email'=>$email,
      //    'address'=>$address,
   // ]);
      //2nd apporch to data app to database creating object
      //   $LaraCRUD = new LaraCRUD;

      //   $LaraCRUD -> name=$name;
      //   $LaraCRUD -> email=$email;
      //   $LaraCRUD -> address=$address;

      //   $LaraCRUD->save();

        
      //   return back();

      return redirect('/');






 
      // dd('aarroves');
      // return $request->all();
   }

public function edit($id){

   //$LaraCRUD=LaraCrud::where('id',$id)->first();

   $LaraCRUD=LaraCrud::find($id);
   return view('edit', compact('LaraCRUD'));
}

// public function edit(LaraCRUD $LaraCRUD){ //route model bank

//    return view('edit', compact('edit'));

// }

public function update($id){

   $update=LaraCrud::find($id);



   $name=request()->input('name');

      // $name=request('name');
      $email=request('email');
      $phone=request('phone');
      $address=request('address');



      request()->validate([
         'name' =>['required', 'min:3', 'max:20'],
         'email' =>'required|email',
         'phone' =>['required', new allowRule],
         'address' =>'required|max:20'
         
   
      ]);
   

         //1st way of update 
      $update-> name=$name;
      $update -> email=$email;
      $update -> phone=$phone;
      $update -> address=$address;
      $update->save();



      // 2nd way of update
      // $update->update([
      //    'name'=>$name,
      //    'email'=>$email,
      //    'address'=>$address,
      // ]);



      

      return redirect('/');

      }

      public function delete($id){

         $delete=LaraCrud::find($id);

         $delete->delete();

         return back();

      }




}
