<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pendidikan;
use App\Models\Pelatihan;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Auth;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = Biodata::where('id_user', Auth::user()->id)->first();
        return view('biodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'address' => 'required',
            'city' => 'required|max:20',
            'home_phone' => 'required|max:14',
            'cell_phone' => 'required|max:14',
            'email' => 'required|unique:biodata',
            'applied_position' => 'required|max:30',
            'salary' => 'required',
            'skill' => 'required',
            'inputs.*.pendidikan_terakhir' => 'required',
            'inputs.*.intuisi_akademik' => 'required',
            'inputs.*.jurusan' => 'required',
            'inputs.*.tahun_lulus' => 'required',
            'inputs.*.ipk' => 'required',
            'inputs1.*.nama_pelatihan' => 'required',
            'inputs1.*.sertifikat' => 'required',
            'inputs1.*.tahun' => 'required',
        ]);

        $image = $request->file('gambar')->store('post-images/biodata');

        $validate['gambar'] = $image;

        $biodata = Biodata::create([
            'id_user' => Auth::user()->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gambar' => $validate['gambar'],
            'address' => $request->address,
            'city' => $request->city,
            'home_phone' => $request->home_phone,
            'cell_phone' => $request->cell_phone,
            'email' => $request->email,
            'applied_position' => $request->applied_position,
            'salary' => $request->salary,
            'skill' => $request->skill,
        ]);


        $newField = 'id_biodata';
        $newRecord = $biodata->id;

        foreach($request->inputs as $key => $value){
            $value[$newField] = $newRecord;
            Pendidikan::create($value);
        }

        foreach($request->inputs1 as $key => $value1){
            $value1[$newField] = $newRecord;
            Pelatihan::create($value1);
        }

        foreach($request->inputs2 as $key => $value2){
            $value2[$newField] = $newRecord;
            Pekerjaan::create($value2);
        }

        return redirect()->route('biodata.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $biodata = Biodata::findorFail($id);
        $pendidikan = Pendidikan::where('id_biodata', $biodata->id)->get();
        $pelatihan = Pelatihan::where('id_biodata', $biodata->id)->get();
        $pekerjaan = Pekerjaan::where('id_biodata', $biodata->id)->get();

        return view('biodata.show', compact('biodata', 'pendidikan', 'pelatihan', 'pekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::findorFail($id);
        $pendidikan = Pendidikan::where('id_biodata', $biodata->id)->get();
        $pelatihan = Pelatihan::where('id_biodata', $biodata->id)->get();
        $pekerjaan = Pekerjaan::where('id_biodata', $biodata->id)->get();

        return view('biodata.edit', compact('biodata', 'pendidikan', 'pelatihan', 'pekerjaan'));
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
