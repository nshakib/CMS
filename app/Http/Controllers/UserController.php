<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    private $perpage = 6;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
        {$users = [];
            if($request->has('keyword')){
                $users =  User::where('name','LIKE', "%{$request->keyword}%")->paginate($this->perpage); 
            }else{
                $users = User::paginate($this->perpage);
            }
        return view('users.index',[
            'users'=> $users->appends(['keyword'=>$request->keyword])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required|string|max:30",
                "role" => "required",
                "email" => "required|unique:users,email",
                "password" => "required|min:6|confirmed"
            ],
          [],
          $this->attributes()
        );

        if($validator->fails()){
            $request['role'] = Role::select('id', 'name')->find($request->role);
            return redirect()
            ->back()
            ->withInput($request->all())
            ->withErrors($validator);
        }

        DB::beginTransaction();
        try{
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password)
            ]);
            $user->assignRole($request->role);
            Alert::success(
                trans('users.alert.create.title'),
                trans('users.alert.create.message.success'),
            );

            return redirect()->route('users.index');
        }catch(\Throwable $th){
            DB::rollBack();

            Alert::error(
                trans('users.alert.create.title'),
                trans('users.alert.create.message.error',['error'=>$th->getMessage()])
            );

            return redirect()->route('roles.index');

        }finally{
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',[
            'user'=>$user,
            'roleSelected'=> $user->roles->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required|string|max:30",
                "role" => "required",
                "email" => "required|unique:users,email,". $user->id,
            ],
          [],
          $this->attributes()
        );

        if($validator->fails()){
            $request['role'] = Role::select('id', 'name')->find($request->role);
            return redirect()
            ->back()
            ->withInput($request->all())
            ->withErrors($validator);
        }

        DB::beginTransaction();
        try{
            $user->update([
                "name" => $request->name,
                "email" => $request->email
            ]);
            $user->syncRoles($request->role);
            Alert::success(
                trans('users.alert.update.title'),
                trans('users.alert.update.message.success'),
            );

            return redirect()->route('users.index');
        }catch(\Throwable $th){
            DB::rollBack();

            Alert::error(
                trans('users.alert.update.title'),
                trans('users.alert.update.message.error',['error'=>$th->getMessage()])
            );

            return redirect()->route('roles.index');

        }finally{
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();
        try {
            $user->removeRoles($user->roles->first());
            $user->delete();
            Alert::success(
                trans('users.alert.delete.title'),
                trans('users.alert.delete.message.success'),
            );
        } catch (\Throwable $th) {
            Alert::error(
                trans('users.alert.delete.title'),
                trans('users.alert.delete.message.error', ['error' => $th->getMessage()])
            );
        }finally{
            DB::commit();
            return redirect()->back();
        }
       
    }

    public function attributes()
    {
       return[
            "name" => trans('users.form_control.input.name.attribute'),
            "role" => trans('users.form_control.select.role.attribute'),
            "email" => trans('users.form_control.input.email.attribute'),
            "password" => trans('users.form_control.input.password.attribute')
       ];
    }
}
