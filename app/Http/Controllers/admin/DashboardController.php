<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class DashboardController extends Controller
{
    public function showdashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function showsettings()
    {
        return view('pages.admin.settings');
    }

    public function checkpass(Request $request)
    {

        $data = $request->all();

        $current_password = $data['current_pwd'];
        $check_password = Auth::user()->password;
        if (Hash::check($current_password, $check_password)) {
            return response()->json('true');
        } else {
            return response()->json('false');
        }
    }

    public function updatePassword(Request $request)
    {
        if($request->isMethod('post')){
            $current_password=$request->cur_password;
            $check_password=Auth::user()->password;

            if(Hash::check($current_password,$check_password)){
                $new_password=bcrypt($request->new_pwd);
                $update=User::where('email','=',Auth::user()->email)->update(['password'=>$new_password]);
                if($update){
                    return redirect()->back()->with(['success'=>'Password Updated Successfully']);
                }else{
                    return redirect()->back()->with(['dismiss'=>'Password not Updated Successfully']);
                }
            }
        }

    }

    public function showprofile(){
        $user=User::where('id','=',Auth::user()->id)->first();
        if(!empty($user)){
            return view('pages.admin.profile.profile')->with(compact('user'));
        }

    }

    public function showuserlist(){
        $user=User::get();
        if(!empty($user)){
            return view('pages.admin.userlist.userlist')->with(compact('user'));
        }

    }
    public function usertosuperadmin($id){
       if(isset($id) && is_numeric($id)){
           $user=User::where('id','=',$id)->update(['role'=>3]);
           if($user){
               return redirect()->back()->with(['success'=>'Update successfull']);
           }
           else
               return redirect()->back()->with(['dismiss'=>'Update not successfull']);
       }

    }
    public function deleteUser($id=null){
     if (isset($id) && is_numeric($id)) {
        //$filepath = 'images/frontend_images/banners/';
       // $banners = Banner::where(['id' => $id])->first();
        //$fileName = $banners->image;
        //$old_image = $filepath . $fileName;
      //  if (file_exists($old_image)) {
            //@unlink($old_image);
       // }
        $deleteUser = User::where(['id' => $id])->delete();
        if ($deleteUser) {
            return redirect()->back()->with(['success' => 'User Deleted Successfully']);
        } else {
            return redirect()->back()->with(['dismiss' => 'User not Deleted']);
        }
    }
}



}
