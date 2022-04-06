<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// public function ubahAdmin($id){
//     $user = User::find($id);
//     $data = [
//         'role' => 'user'
//     ];
//     $user->update($data);
//     return redirect ('/admin');

// public function cetakHanyaUser(){
//     $user = User::all();
    
   
//     $pdf = PDF::loadview('hanyaUser-pdf',['user'=>$user]);
//     return $pdf->stream();