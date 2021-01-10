<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use App\Gallery;
use App\Photographer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{

    public function index(){
        $table = Gallery::orderBy('galleryID','DESC')->get();
        return view('admin.photos')->with(['table' => $table]);
    }

    public function create_photo_page(){
        $table = Photographer::orderBy('photographerID','DESC')->get();
        return view('admin.form.photos')->with(['table' => $table]);
    }

    public function save(Request $request){

        $validate = $request->validate([
            'photographerID' => 'required',
        ]);

        if ($request->hasFile('images')){

            $images_array = $request->file('images');
            $array_len = count($images_array);

            for ($i=0; $i<$array_len; $i++){
                $extension = $images_array[$i]->extension();
                $filename = rand(123456,999999).'.'.$extension;
                $path = public_path('uploads/gallery');
                $images_array[$i]->move($path,$filename);

                $table = new Gallery();
                $table->photographerID = $request->photographerID;
                $table->images  = $filename;
                $table->save();

            }

            return redirect()->to('admin/gallery/photos');

        }

    }

    public function del($id){
        $table = Gallery::find($id);
        $file = public_path('uploads/gallery/'.$table->images);
        if (file_exists($file)){
            unlink($file);
        }

        $table->delete();
        return redirect()->back();
    }
    public function deleteAll(Request $request)
    {
        //dd($request->all());
        $photos = $request->photos;
        $total = Gallery::whereIn('galleryID',$photos)->get();
        if (count($total) > 0){
            foreach ($total as $single){
                $path = public_path('uploads/gallery/'.$single->images);
                if (file_exists($path)){
                    unlink($path);
                }
            }
            Gallery::whereIn('galleryID',$photos)->delete();

            return redirect()->back()->with('success','Records Deleted successfully.');
        }else{
            return redirect()->back()->with('error','Nothing to delete! Please select.');
        }



    }
}
