<?php

namespace App\Http\Controllers\Crud;

use App\Lib\Crud\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUser;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterUser $request)
    {
        try{
            $data = $request->all();
            $fname = $request->image->store('/public');
            // dd($fname);
            $data['image'] =$fname;
            $result = Registration::get($data);
            return redirect('registration_show');
        }catch(\Exception $e){
            return redirect('registration_show')->withErrors('Data Not Inserted'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        try{
            $data = Registration::show();
            return view('registration_show', compact('data'));
        }catch(\Exception $e){
            return redirect('registration_show')->withErrors('Data Not Found'); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $data = Registration::getById($id);
            if($data){
                return view('user_edit',['user_data'=>$data]);
            }
            else{
                return redirect('registration_show')->withErrors('Data Not Found'); 
            }
        }catch(\Exception $e){
            return redirect('registration_show')->withErrors('Data Not Found'); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterUser $request)
    {
        try{ 
            $data = $request->all();
            $fname = $request->image->store('/public');
            $data['image'] =$fname;
            $result= registration::update($data);
            if(!empty($result)){
                return redirect('registration_show');
            }else{
                return redirect('registration_show')->withError('Unable to save');
            }
        }catch(\Exception $e){
			return redirect('registration_show')->withErrors('Data Not Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try{
            $data = Registration::delete($id);
            if($data){
                return redirect('registration_show');
            }else{
                return redirect('registration_show')->withError('Unable to delete');
            }
        }catch(\Exception $e){
            return redirect('registration_show')->withErrors('Data Not Found');
        }
    }
}
