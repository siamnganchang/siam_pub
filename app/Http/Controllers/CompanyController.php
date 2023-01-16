<?php

namespace App\Http\Controllers;
use App\Models\CompanyInformation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $mycompany = CompanyInformation::all();
        return view('mycompany.index', compact('mycompany'));
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
        //dd($request);
        try{
                $data = $this->validate($request, [
                    'name' => 'required',
                    'capital' => 'required',
                    'juristic_person_type' => 'required',
                    'business_type' => 'required',
                    'target' => 'required',
                    'registration_number' => 'required',
                    'address' => 'required',
                    'phone' => 'required',
                    'email' => 'required',
                    'url_dbd' => 'required',
                ]);

                
                if(!$request['id']){
                    CompanyInformation::create($data);
                    Alert::toast('เพิ่มข้อมูลเรียบร้อย','success');
                    return redirect()->back();
                }else {
                    $company = CompanyInformation::find($request['id']);
                    $company->update($data);
                    Alert::toast('อัพเดตข้อมูลเรียบร้อย','success');
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
        $com = CompanyInformation::find($id);
        return response()->json([
            'status' => 200,
            'data' => $com
        ]);
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
