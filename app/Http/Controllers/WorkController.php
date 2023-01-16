<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Work;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as InterventionImage;
use Error;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\WorkResource;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       
        $search = $request->input('search');
        if ($search == null) {
            $works = WorkResource::collection(Work::paginate(5));
        } else {
            $works = WorkResource::collection(Work::where('title','LIKE','%'. $search.'%')->orWhere('description','LIKE','%'. $search.'%')->orWhere('company','LIKE','%'. $search.'%')->paginate(5));
        }
        return view('work.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        try{
            $data = $this->validate($request, [
                'title' => 'required',
                'company' => 'required',
                'description' => 'required',
                'imageFile.*' => 'mimes:jpeg,jpg,png|max:10000'
            ]);

            if(!$request->has('imageFile') ){
                Alert::toast('เกิดข้อผิดพลาด กรุณาเพิ่มไฟล์รูป','error');
                return redirect()->back();

            } else {
        
                $new_work = Work::create($data);
                if($request->has('imageFile')){
                    foreach($request->file('imageFile')as $image){
                        
                        $imageName = $data['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                        $path_name = '/storage/uploads/works/'.$imageName;
                        $image->move(public_path('/storage/uploads/works/'),$imageName);

                        // $img = InterventionImage::make($thumbnailpath)->resize(5000,5000, function($constraint) {
                        //     $constraint->aspectRatio();
                        // });
                        // $img->save($thumbnailpath);

                        Image::create([
                            'work_id'=>$new_work->id,
                            'name'=>$imageName,
                            'image_path'=>$path_name
                        ]);
                    }
                }
            
                Alert::toast('เพิ่มข้อมูลเรียบร้อย','success');
                return redirect()->back();
            }
        } catch(\Exception){
            Alert::toast('เกิดข้อผิดพลาด','error');
            return redirect()->back();
        }
    

    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $works = Work::find($id);
        if(!$works) abort(404);
        $images = $works->images;
        return view('work.show',compact('works','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = Image::find($id);
        return response()->json([
            'status' => 200,
            'data' => $images
        ]);
    }

    public function getBtnDel($id)
    {
        $works = Work::find($id);
        return response()->json([
            'status' => 200,
            'data' => $works
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $work = Work::find($id);
        $work->title = $request->title;
        $work->description = $request->description;
        $work->update();
        
        Alert::toast('อัพเดตข้อมูลเรียบร้อย','success');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {   
        $id = $request->input('works_id');
        Work::destroy($id);
        $images = Image::where('work_id', $id)->get();
        foreach($images as $image){
            $image->delete();
            if (File::exists(public_path($image->image_path))) {
                File::delete(public_path($image->image_path));
            }
        }
        


        Alert::toast('ลบข้อมูลสำเร็จ','success',$id);
        return redirect()->back();
    }

  



    public function fileupload(Request $request)
    {   
        try{
            $data = $this->validate($request, [
                'xid'=>'required',
                'imageFile.*' => 'mimes:jpeg,jpg,png|max:20480'
            ]);

            if(!$request->has('imageFile') ){
                Alert::toast('เกิดข้อผิดพลาด กรุณาเพิ่มไฟล์รูป','error');
                return redirect()->back();

            } else {
        
                if($request->has('imageFile')){
                    foreach($request->file('imageFile')as $image){
                        
                        $imageName = $data['xid'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                        $path_name = '/storage/uploads/works/'.$imageName;
                        $image->move(public_path('/storage/uploads/works/'),$imageName);

                        Image::create([
                            'work_id'=>$data['xid'],
                            'name'=>$imageName,
                            'image_path'=>$path_name
                        ]);
                    }
                }
            
                Alert::toast('เพิ่มข้อมูลเรียบร้อย','success');
                return redirect()->back();
            }
        } catch(\Exception){
            Alert::toast('เกิดข้อผิดพลาด','error');
            return redirect()->back();
        }
    }

    public function deleteFile(Request $request){

        $request->validate( [
            'image_id'=>'required',
        ]);
        $id = $request->input('image_id');
        $images = Image::find($id);
        Image::destroy($id);
        if (File::exists(public_path($images->image_path))) {
            File::delete(public_path($images->image_path));
        }

        Alert::toast('ลบข้อมูลสำเร็จ','success',$id);
        return redirect()->back();
    }
    




    
}
