<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserEmployee;
use App\UserBooking;
use Auth;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editProfile()
    {
        $data = [
            'user' => User::with('userEmployee')->find(Auth::user()->id),
        ];
        return view('edit-profile',$data);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateProfile(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->update($request->all());
        // $user->fname    =   $request->fname;
        // $user->lname    =   $request->lname;
        // $user->email    =   $request->email;
        // $user->phone_no =   $request->phone_no;
        // $user->save();

        $user_count  =   UserEmployee::where('user_id',auth()->user()->id)->first();
        if($user_count != null)
        {
            $user_employee  =   UserEmployee::where('user_id',auth()->user()->id)->first();
        }
        else
        {
            $user_employee  =   new UserEmployee;
        }
        $user_employee->user_id = auth()->user()->id;
        $user_employee->cnic_no = $request->cnic_no;
        $user_employee->address = $request->address;
        $user_employee->dob = $request->dob;
        $user_employee->profession = $request->profession;
        $user_employee->working_exp = $request->working_exp;
        $user_employee->description = $request->description;
        $user_employee->tags = $request->tags;
        $user_employee->save();
        return redirect()->route('edit-profile');
    }

    public function resume()
    {
        return view('resume');
    }
    
    public function editResume()
    {
        return view('add-resume');
    }
    public function workDone()
    {
        $data = [
            'work_done' => UserBooking::with('client','employee.employeeCategory.category')->where('status',1)->get(),
        ];
        return view('work-done',$data);
    }


}
