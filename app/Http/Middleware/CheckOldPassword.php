<?php

namespace App\Http\Middleware;

use Closure;
use Validator;
use Auth;
use App\User;
use Hash;

class CheckOldPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         $validator = Validator::make($request->all(),
            [
                'oldPassword' => 'required',
                'newPassword' => 'required|confirmed|min:6',
                'newPassword_confirmation' => 'required',
            ], [
                'oldPassword.required' => 'the field cannot be empty',
                'newPassword.required' => 'the field cannot be empty',
                'newPassword.confirmed' => 'password not confirmed',
                'newPassword.confirmed' => 'min 6 simvol',
                'newPassword_confirmation.required' => 'the field cannot be empty'                
            ]
        );  

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $oldPassword = $request->input('oldPassword');
        $newPassword = $request->input('newPassword');
        $newPassword_confirmation = $request->input('newPassword_confirmation');

        $id = Auth::id();
        $row = User::find($id);
        if (Hash::check($oldPassword, $row->password)) {
            
            return $next($request);
        } else {
            return back();
        }
        
        
    }
}
