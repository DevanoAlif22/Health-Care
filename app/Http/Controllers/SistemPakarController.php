<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Models\Penyakit;
use App\Models\Keputusan;
use App\Models\Linkdrive;
use Illuminate\Http\Request;

class SistemPakarController extends Controller
{


    // Sistem pakar
    private $gambar = ["jadi-infeksi.png","jadi-mata.png","jadi-kulit.png","jadi-gigi.png","jadi-lansia.png","jadi-anak.png","jadi-kejiwaan.png","jadi-saraf.png"];
    private $view = ["INFEKSI","MATA","KULIT","GIGI","LANSIA","ANAK","KEJIWAAN","SARAF"];
    private $keterangan = ["Infeksi","Mata","Kulit","Gigi","Lansia","Anak","Kejiwaan","Saraf"];

    public function sistempakar() {
        return view('sistempakar/sistempakar',['gambar' => $this->gambar, 'view' => $this->view, 'ket' => $this->keterangan]);
    }

    // function semua
    public function cekdata($penjelasan,$link,$kembali) {
        $kodepenyakit = null;
        foreach ($penjelasan as $item){
            $kodepenyakit = $item->kodepenyakit;
        }
        if($kodepenyakit == null) {
            return view('sistempakar/hasil',['penyakit' => null,'link' => null, 'penjelasan' => null,'kembali' => $kembali]);
        } else {
            $penyakit = Penyakit::Where('kode',$kodepenyakit)->get();
            return view('sistempakar/hasil',['penyakit' => $penyakit, 'link' => $link, 'penjelasan' => $penjelasan, 'kembali' => $kembali]);
        }
    }

    public function getgejala($kode) {
        return $gejala = gejala::where('kode','LIKE','%'.$kode.'%')->get();
    }

    public function formpenyakit(Request $request) {
        $kode = $request->penyakit;
        $potongkode = "G".substr($kode,0,2);
        $gejala = $this->getgejala($potongkode);
        return view('sistempakar/formgejala',['gejala' => $gejala,'penyakit' => '','data' => 0,'nama' => $request->penyakit]);
    }
    public function postgejala(Request $request)
    {
    
        $link = Linkdrive::where('nama','LIKE','%'.$request->penyakit.'%')->get();
        foreach($link as $item) {
            $link = $item['link'];
        }
        $kembali = strtolower($request->penyakit);
        $ambilkode = implode("," ,$request->all());
        $potongkode = substr($ambilkode,41);
        $carikodepenyakit = Keputusan::Where('kodegejala',$potongkode)->get();
        return $this->cekdata($carikodepenyakit,$link,$kembali);
    }

}
