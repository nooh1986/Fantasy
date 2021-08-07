<?php


namespace App\Repository;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\PlayerRepositoryInterface;

class PlayerRepository implements PlayerRepositoryInterface 
{
    public function index()
    {
        $players = User::all();
        $roles = Role::all();
        
        return view('Backend.Player.index' , compact('players' , 'roles' ));
    }

    public function store($request)
    {
        try
        {
            $data['name']     = $request->name;
            $data['title']    = $request->title;
            $data['email']    = $request->email;
            $data['password'] = Hash::make($request->password);

            $player = User::create($data);

            $player->assignRole($request->roles);

            toastr()->success('تم حفظ البيانات بنجاح');
            return redirect()->route('Player.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        try
        {
            $player           = User::findorfail($request->id);
            $data['name']     = $request->name;
            $data['title']    = $request->title;
            $data['email']    = $request->email;
            $data['status']   = $request->status;

            $player->update($data);

            $player->syncRoles($request->roles);

            toastr()->success('تم تعدبل البيانات بنجاح');
            return redirect()->route('Player.index');
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
            User::findorfail($request->id)->delete();

            toastr()->error('تم حذف البيانات بنجاح');
            return redirect()->route('Player.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function update_password($request)
    {
        try
        {
            $player = User::findorfail($request->id);

            $data['password'] = Hash::make($request->password);

            $player->update($data);

            toastr()->success('تم تعديل البيانات بنجاح');
            return redirect()->route('Player.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}    