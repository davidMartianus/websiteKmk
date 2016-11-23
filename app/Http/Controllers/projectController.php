<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Eventt;

class projectController extends Controller
{
    //
    public function show(){
    	return view('/admin/dashboard');
    }

    public function tulis(){
    	return view('/admin/create-event');
    }
    public function storeEvent(){
        $event = new Eventt;
        $event->judul   =$_POST['judul'];
        $event->isi   =$_POST['isi'];
        $event->save();
        return redirect('admin/lihat-event');
    }
    public function deleteEvent($id){
        $event = Eventt::find($id);
        $event->delete();
        return redirect('admin/lihat-event');
    }

    public function lihat(){
        $event = Eventt::all();
    	return view('/admin/show-event')->with('eventsdata',$event);
    }

    public function tulisRenungan(){
        return view('/admin/create-renungan');
    }

    public function lihatRenungan(){
        return view('/admin/show-renungan');
    }

    public function pengurus(){
        return view('/admin/pengurus');
    }

    public function viewEvent(){
        return view('/user/event');
    }

    public function viewRenungan(){
        return view('/user/renungan');
    }
}


