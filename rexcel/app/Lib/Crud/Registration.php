<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\RegistrationController;
use App\Models\Registration as Model;
use Illuminate\Support\Facades\Log;

class Registration{
    public static function get(array $data):string{
        try{
            // dd($data);
            $result = Model::create($data);
            if($result){
                return $result;
            }else{
                return '';
            }
        }catch(\exception $e){
            throw new \Exception('Unable to save data!');
        }
    }

    public static function show():array{
        try{
            $data = Model::all();
            if($data){
                return $data->toArray();
            }else{
                return '';
            }
        }catch(\Exception $e){
            throw new \Exception('Sumthing went Wrong');
        }
    }


    public static function getById(int $id):object{
        try{
            $data = Model::find($id);
            if($data){
                return $data;
            }else{
                return '';
            }
        }catch(\Exception $e){
            throw new \Exception('Sumthing went Wrong');
        }
    }

    public static function update(array $data):bool{
        try{
            // dd($data);
            $user_data = [
                'image'=>$data['image'],
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>$data['password'],
                'hobbies'=>$data['hobbies'],
            ];
            $id= $data['id'];
            $result= Model::where('id', $id)->update($user_data);
            // dd($data);
            if($result){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            throw new \Exception('Sumthing went Wrong');
        }
    }
    public static function delete(int $id):bool{
        try{
            $data = Model::find($id)->delete();
            if($data){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            throw new \Exception('Sumthing went Wrong');
        }
    }
}