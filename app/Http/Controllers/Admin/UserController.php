<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller implements ICRUD
{
    public function list()
    {
        $list = User::orderBy('updated_at','DESC')->paginate($this->paginateItems);
        return view('be.user.list',compact('list'));
    }

    public function add()
    {
        return view('be.user.add');
    }

    public function doAdd()
    {

    }
    
    public function edit($id)
    {
        $obj = User::find($id);
        return view('be.user.edit',compact('obj'));
    }

    public function doEdit($id,Request $request)
    {
        try{
            $data = $request->all();
            $data['password'] = Hash::make($data['password']); 
            unset($data['_token']);
            User::where('id',$id)->update($data);
        }catch(Exception $e){
            return redirect()->back()->with('error','Updated Failed');
        }
        return redirect()->back()->with('success','Updated Successfull');

        
    }

    public function delete($id)
    {
        try{
            User::where('id',$id)->delete();
        }catch(Exception $e){
            return redirect()->back()->with('error','Delete failed');
        }
        return redirect()->back()->with('success','Delete Successfull');
    }
}
