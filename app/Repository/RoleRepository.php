<?php


namespace App\Repository;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Interfaces\RoleRepositoryInterface;


class RoleRepository implements RoleRepositoryInterface 
{
    public function index()
    {
        $roles = Role::all();
        return view('Backend.Role.index' , compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('Backend.Role.create' , compact('permissions'));
    }

    public function store($request)
    {
        try
        {
            $data['name']  = $request->name;
            
            $role = Role::create($data);

            $permissions = $request->permission;

            $role->syncPermissions($permissions);

            toastr()->success('تم حفظ البيانات بنجاح');
            return redirect()->route('Role.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function edit($id)
    {
        $role = Role::findorfail($id);
        $permissions = Permission::all();
        $rolePermissions = DB::table("role_has_permissions")->where("role_id",$id)->pluck('permission_id')->all();

        return view('Backend.Role.edit' , compact('role' , 'permissions' , 'rolePermissions'));
    }



    public function update($request)
    {
        try
        {    
            $role = Role::findorfail($request->id);

            $data['name']  = $request->name;

            $role->update($data);

            $permissions = $request->permission;

            $role->syncPermissions($permissions);

            toastr()->success('تم تعديل البيانات بنجاح');
            return redirect()->route('Role.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        
    }


    public function destroy($request)
    {
        try
        {
            Role::findorfail($request->id)->delete();

            toastr()->error('تم حذف البيانات بنجاح');
            return redirect()->route('Role.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    

