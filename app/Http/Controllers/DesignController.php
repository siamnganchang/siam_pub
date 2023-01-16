<?php

namespace App\Http\Controllers;

use App\Models\Design;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;


class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Design::paginate(5);
        return view('design.home', compact('images'));
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
        try{
            $data = $this->validate($request, [
                'imageFile.*' => 'mimes:jpeg,jpg,png|max:20480'
            ]);

            if(!$request->has('imageFile') ){
                Alert::toast('เกิดข้อผิดพลาด กรุณาเพิ่มไฟล์รูป','error');
                return redirect()->back();

            } else {
        
                if($request->has('imageFile')){
                    foreach($request->file('imageFile')as $image){
                        
                        $imageName = 'design-image-'.time().rand(1,1000).'.'.$image->extension();
                        $path_name = '/storage/uploads/designs/'.$imageName;
                        $image->move(public_path('/storage/uploads/designs/'),$imageName);

                        Design::create([
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
        $images = Design::find($id);
        return response()->json([
            'status' => 200,
            'data' => $images
        ]);
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

    public function deleteFile(Request $request){

        $request->validate( [
            'image_id'=>'required',
        ]);
        $id = $request->input('image_id');
        $images = Design::find($id);
        Design::destroy($id);
        if (File::exists(public_path($images->image_path))) {
            File::delete(public_path($images->image_path));
        }

        Alert::toast('ลบข้อมูลสำเร็จ','success',$id);
        return redirect()->back();
    }
}
