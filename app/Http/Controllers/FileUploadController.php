<?php

namespace App\Http\Controllers;
use App\Models\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
         $this->validate($request, [
                'imageFile.*' => 'mimes:jpeg,jpg,png|max:2048'
            ]);

            if(!$request->has('imageFile') ){
                Alert::toast('เกิดข้อผิดพลาด กรุณาเพิ่มไฟล์รูป','error');
                return redirect()->back();

            } else {
        
                if($request->has('imageFile')){
                    foreach($request->file('imageFile')as $image){
                        
                        $imageName = $request->id.'-image-'.time().rand(1,1000).'.'.$image->extension();
                        $path_name = '/storage/uploads/works/'.$imageName;
                        $image->move(public_path('/storage/uploads/works/'),$imageName);


                        Image::create([
                            'work_id'=>$request->id,
                            'name'=>$imageName,
                            'image_path'=>$path_name
                        ]);
                    }
                }
            
                Alert::toast('เพิ่มข้อมูลเรียบร้อย','success');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
