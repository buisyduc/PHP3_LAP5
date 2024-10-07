<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gene;
use App\Models\Moive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MoiveController extends Controller{
    // public function index(){
    //     $listMoive =Moive::orderByDesc('id')->paginate(10);
    //     return view('admin.moive.home',compact('listMoive'));
    // }
    public function index(Request $request)
{
    $query = $request->input('query');

    if ($query) {
        $listMoive = Moive::where('title', 'LIKE', "%{$query}%")->paginate(10); 
    } else {
        $listMoive =Moive::orderByDesc('id')->paginate(10);
    }

    return view('admin.moive.home', compact('listMoive', 'query'));
}
    public function create(){
        $gene = Gene::all();
        return view('admin.moive.create', compact('gene'));
    }
    public function store(Request $request){
        $data = $request->except('poster');
        //khong nhap anh
        $data['poster']='';
        //co anh
        if($request->hasFile('poster')){
            $path_poster = $request->file('poster')->store('posters');
            $data['poster'] = $path_poster;

        };
        //luu
        Moive::query()->create($data);
        return redirect()->route('moive.home')->with('message','them du lieu thanh cong');

    }
    public function destroy(Moive $moive){
        $moive->delete();
        return redirect()->route('moive.home')->with('message','xoa du lieu thanh cong');


    }
    public function edit(Moive $moive){
        $gene =Gene::all();
        return view('admin.moive.edit',compact('gene','moive'));
    }
  public function update(Request $request, Moive $moive)
{
    $data = $request->except('poster');
    $data['poster'] = $moive->poster; // Keep existing poster unless a new one is uploaded

    if ($request->hasFile('poster')) {
        $path_poster = $request->file('poster')->store('posters');
        $data['poster'] = $path_poster; // Update to new poster path
    }

    $moive->update($data);
    return redirect()->route('moive.home')->with('message', 'Cập nhật dữ liệu thành công');
}

// public function search(Request $request)
// {
//     $query = $request->input('query');
//     $listMoive = Moive::where('title', 'LIKE', "%{$query}%")->get();

//     return view('admin.moive.home', compact('listMoive'));
// }
 
}

