<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Violation;
use App\Models\Violator;
use App\Models\Document;
use App\Models\Achievement;
use App\Models\Student;
use App\Models\User;
use App\Models\Forum;
use App\Models\Permit;
use App\Models\Tanggapan;
use App\Models\Note;
use App\Models\PrestasiSiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Middleware\VerifyCsrfToken;

class HomeController extends Controller
{

    public function index()
    {
        $rplStudents = DB::table('students')->where('jurusan', 'rpl')->count();
        $rplStudents = $rplStudents/144*100;

        $mmStudents = DB::table('students')->where('jurusan', 'mm')->count();
        $mmStudents = $mmStudents/144*100;

        $pftvStudents = DB::table('students')->where('jurusan', 'pftv')->count();
        $pftvStudents = $pftvStudents/144*100;

        // Statistik Perkelas

        $statXiiMm = DB::table('students')->where('kelas', 'xiimm')->count();

        $statXiiRpl = DB::table('students')->where('kelas', 'xiirpl')->count();

        $statXiiPftv = DB::table('students')->where('kelas', 'xiipftv')->count();


        $statXiMm = DB::table('students')->where('kelas', 'ximm')->count();

        $statXiRpl = DB::table('students')->where('kelas', 'xirpl')->count();

        $statXiPftv = DB::table('students')->where('kelas', 'xipftv')->count();


        $statXMm1 = DB::table('students')->where('kelas', 'xmm1')->count();

        $statXRpl1 = DB::table('students')->where('kelas', 'xrpl1')->count();

        $statXPftv1 = DB::table('students')->where('kelas', 'xpftv1')->count();


        $statXMm2 = DB::table('students')->where('kelas', 'xmm2')->count();

        $statXRpl2 = DB::table('students')->where('kelas', 'xrpl2')->count();

        $statXPftv2 = DB::table('students')->where('kelas', 'xpftv2')->count();

        return view('home', [
            'title' => 'Dashboard',
            'totalAdmin' => DB::table('users')->count(),
            'totalSiswa' => DB::table('students')->count(),
            'pelanggaran' => DB::table('violations')->count(),
            'prestasi' => DB::table('achievements')->count(),
            'progressRpl' => $rplStudents,
            'progressMm' => $mmStudents,
            'progressPftv' => $pftvStudents,
            'statXiiMm' => $statXiiMm,
            'statXiiRpl' => $statXiiRpl,
            'statXiiPftv' => $statXiiPftv,
            'statXiMm' => $statXiMm,
            'statXiRpl' => $statXiRpl,
            'statXiPftv' => $statXiPftv,
            'statXMm1' => $statXMm1,
            'statXRpl1' => $statXRpl1,
            'statXPftv1' => $statXPftv1,
            'statXMm2' => $statXMm2,
            'statXRpl2' => $statXRpl2,
            'statXPftv2' => $statXPftv2
        ]);
    }

    public function docs() {
        return view('docs', [
            'title' => 'Dokumen Pribadi',
            'document' => DB::table('documents')->latest()->where('email', '=', auth()->user()->email)->where('visibility', '=', 'private')->get()
        ]);
    }

    public function docsPublic() {
        return view('docs-public', [
            'title' => 'Dokumen Publik',
            'document' => DB::table('documents')->latest()->where('visibility', '=', 'public')->get()
        ]);
    }

    public function violations() {
        return view('violations', [
            'title' => 'Poin Pelanggaran',
            'semua' => Violation::filter(request(['search']))->get(),
            'dataKelakuan' => DB::table('violations')->where('aspek', '=', 'kelakuan')->get(),
            'dataKerajinan' => DB::table('violations')->where('aspek', '=', 'kerajinan')->get(),
            'dataKerapian' => DB::table('violations')->where('aspek', '=', 'kerapian')->get(),
            'dataKebersihan' => DB::table('violations')->where('aspek', '=', 'kebersihan')->get()
        ]);
    }

    public function notes(Request $request) {
        $pelanggaranSiswa = DB::table('violators')->latest()->join('students', 'students.nis', '=', 'violators.nis')->join('violations', 'violators.pelanggaran', '=', 'violations.pelanggaran')->select('violators.*', 'students.nama', 'students.kelas', 'violations.poin')->get();

        $prestasiSiswa = DB::table('prestasi_siswas')->latest()->join('students', 'students.nis', '=', 'prestasi_siswas.nis')->join('achievements', 'prestasi_siswas.prestasi', '=', 'achievements.prestasi')->select('prestasi_siswas.*', 'students.nama', 'students.kelas', 'achievements.poin')->get();

        if($request->search != null) {
            return view('notes', [
                'title' => 'Kelola Siswa',
                'semuaSiswa' => Student::where('nama', 'like', '%' . $request->search . '%')->orwhere('nis', 'like', '%' . $request->search . '%')->get(),
                'pelanggaranSiswa' => $pelanggaranSiswa,
                'prestasiSiswa' => $prestasiSiswa
            ]);
        } else {
            return view("notes", [
                'title' => 'Kelola Siswa',
                'semuaSiswa' => DB::table('students')->latest()->get(),
                'pelanggaranSiswa' => $pelanggaranSiswa,
                'prestasiSiswa' => $prestasiSiswa
            ]);
        }
    }

    public function kppsSiswa(Request $request) {
        $kpps = Student::find($request->idSiswa);
        $pelanggaranSiswa = Violator::where('nis', $kpps->nis)->join('violations', 'violators.pelanggaran', '=', 'violations.pelanggaran')->select('violators.pelanggaran', 'violations.poin', 'violators.created_at')->get();
        $prestasiSiswa = PrestasiSiswa::where('nis', $kpps->nis)->join('achievements', 'prestasi_siswas.prestasi', '=', 'achievements.prestasi')->select('prestasi_siswas.prestasi', 'achievements.poin', 'prestasi_siswas.created_at')->get();
        $notes = DB::table('notes')->where('nis', $kpps->nis)->latest()->get();

        return view('kppsSiswa', [
            'title' => 'KPPS Siswa',
            'kpps' => $kpps,
            'pelanggaran' => Violation::all(),
            'prestasi' => Achievement::all(),
            'pelanggaranSiswa' => $pelanggaranSiswa,
            'prestasiSiswa' => $prestasiSiswa,
            'notes' => $notes
        ]);
    }

    public function tambahPelanggaran(Request $request) {
        $poinSiswa = Student::find($request->siswa);
        $pelanggaran = Violation::find($request->pelanggaran);

        $poinPelanggaran = $pelanggaran->poin + $poinSiswa->pelanggaran;

        $poinSiswa->pelanggaran = $poinPelanggaran;
        $poinSiswa->save();

        $violator = new Violator;
        $violator->nis = $poinSiswa->nis;
        $violator->pelanggaran = $pelanggaran->pelanggaran;
        $violator->author = auth()->user()->name;
        $violator->save();

        return redirect(env('APP_URL') . "/notes")->with('pelanggaran', 'Pelanggaran berhasil dicatat, dan poin pelanggaran berhasil ditambahkan untuk ' . $poinSiswa->nama);
    }

    public function tambahPrestasi(Request $request) {
        $poinSiswa = Student::find($request->siswa);
        $prestasi = Achievement::find($request->prestasi);

        $poinPrestasi = $prestasi->poin + $poinSiswa->prestasi;

        $poinSiswa->prestasi = $poinPrestasi;
        $poinSiswa->save();

        $achievement = new PrestasiSiswa;
        $achievement->nis = $poinSiswa->nis;
        $achievement->prestasi = $prestasi->prestasi;
        $achievement->author = auth()->user()->name;
        $achievement->save();

        return redirect(env('APP_URL') . "/notes")->with('prestasi', 'Prestasi berhasil dicatat, dan poin prestasi berhasil ditambahkan untuk ' . $poinSiswa->nama);
    }

    public function tambahCatatan(Request $request) {
        $siswa = Student::find($request->siswa);
        $catatan = new Note;

        $catatan->nis = $siswa->nis;
        $catatan->catatan = $request->catatan;
        $catatan->author = auth()->user()->name;
        $catatan->save();

        return redirect(env('APP_URL') . "/notes")->with('catatan', 'Catatan berhasil ditambahkan untuk ' . $siswa->nama);
    }

    public function mm() {
        return view('mm', [
            'title' => 'Multimedia',
            'xmm1' => DB::table('students')->where('jurusan', '=', 'mm')->where('kelas', '=', 'xmm1')->get(),
            'xmm2' => DB::table('students')->where('jurusan', '=', 'mm')->where('kelas', '=', 'xmm2')->get(),
            'ximm' => DB::table('students')->where('jurusan', '=', 'mm')->where('kelas', '=', 'ximm')->get(),
            'xiimm' => DB::table('students')->where('jurusan', '=', 'mm')->where('kelas', '=', 'xiimm')->get()
        ]);
    }

    public function rpl() {
        return view('rpl', [
            'title' => 'Rekayasa Perangkat Lunak',
            'xrpl1' => DB::table('students')->where('jurusan', '=', 'rpl')->where('kelas', '=', 'xrpl1')->get(),
            'xrpl2' => DB::table('students')->where('jurusan', '=', 'rpl')->where('kelas', '=', 'xrpl2')->get(),
            'xirpl' => DB::table('students')->where('jurusan', '=', 'rpl')->where('kelas', '=', 'xirpl')->get(),
            'xiirpl' => DB::table('students')->where('jurusan', '=', 'rpl')->where('kelas', '=', 'xiirpl')->get()
        ]);
    }

    public function pftv() {
        return view('pftv', [
            'title' => 'Produksi Film & Televisi',
            'xpftv1' => DB::table('students')->where('jurusan', '=', 'pftv')->where('kelas', '=', 'xpftv1')->get(),
            'xpftv2' => DB::table('students')->where('jurusan', '=', 'pftv')->where('kelas', '=', 'xpftv2')->get(),
            'xipftv' => DB::table('students')->where('jurusan', '=', 'pftv')->where('kelas', '=', 'xipftv')->get(),
            'xiipftv' => DB::table('students')->where('jurusan', '=', 'pftv')->where('kelas', '=', 'xiipftv')->get()
        ]);
    }

    public function achievement() {
        return view('achievement', [
            'title' => 'Poin Prestasi',
            'semua' => Achievement::filter(request(['search']))->get(),
            'dataAkademik' => DB::table('achievements')->where('aspek', '=', 'akademik')->get(),
            'dataNonAkademik' => DB::table('achievements')->where('aspek', '=', 'non-akademik')->get()
        ]);
    }

    public function permit() {
        return view("permit", [
            'title' => 'Perizinan',
            'permit' => DB::table('permits')->latest()->get()
        ]);
    }

    public function permitRefresh() {
        return view('permit-refresh', [
            'title' => 'Perizinan',
            'permit' => DB::table('permits')->latest()->get()
        ]);
    }

    public function permitDetail(Request $request) {
        return view('permit-detail', [
            'title' => 'Perizinan',
            'data' => Permit::find($request->id)
        ]);
    }

    public function forum() {
        return view('forum', [
            'title' => 'Forum Diskusi',
            'data' => DB::table('forums')->latest()->get()
        ]);
    }

    public function forumRefresh() {
        return view('forum-refresh', [
            'data' => DB::table('forums')->latest()->get()
        ]);
    }

    public function kirim(Request $request) {

        $data['author'] = auth()->user()->name;
        $data['pesan'] = $request->isi;

        Forum::create($data);

        return redirect(env('APP_URL') . '/forum');

    }

    public function hapusForum(Request $request) {
        DB::table('forums')->where('id', $request->id)->delete();
        return redirect(env('APP_URL') . "/forum");
    }

    public function hapusSemua(Request $request) {
        DB::table('forums')->where('author', auth()->user()->name)->delete();
        return redirect(env('APP_URL') . "/forum");
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'file' => 'file|max:20480|required',
            'judul' => 'required'
        ]);

        $folder = auth()->user()->email;
        $folder = explode('@', $folder);
        $folder = array_shift($folder);
        $folder = explode('.', $folder);
        $folder = array_shift($folder);

        $type = $request->file('file')->store($folder);
        $type = explode('/', $type);
        $type = end($type);
        $type = explode('.', $type);
        $type = end($type);

        if($type == "pdf") {
            $icon = '<i class="fas fa-file-pdf pdf-file"></i>';
        } elseif($type == "docx") {
            $icon = '<i class="fa-solid fa-file-word"></i>';
        } elseif($type == "pptx") {
            $icon = '<i class="fas fa-file-powerpoint ppt-file"></i>';
        } elseif($type == "xlsx") {
            $icon = '<i class="fas fa-file-excel excel-file"></i>';
        } elseif($type == "txt") {
            $icon = '<i class="fas fa-file-alt text-file"></i>';
        } elseif($type == "jpg") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "jpeg") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "png") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "webm") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "svg") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "mp4") {
            $icon = '<i class="fas fa-file-video video-file"></i>';
        } elseif($type == "mp3") {
            $icon = '<i class="fa-solid fa-music"></i>';
        } elseif($type == "mov") {
            $icon = '<i class="fas fa-file-video video-file"></i>';
        } elseif($type == "mkv") {
            $icon = '<i class="fas fa-file-video video-file"></i>';
        } elseif($type == "wmv") {
            $icon = '<i class="fas fa-file-video video-file"></i>';
        } elseif($type == "zip") {
            $icon = '<i class="fas fa-file-archive zip-file"></i>';
        } elseif($type == "rar") {
            $icon = '<i class="fas fa-file-archive zip-file"></i>';
        } else {
            $icon = '<i class="fa-solid fa-file-circle-question"></i>';
        }

        $validatedData['author'] = auth()->user()->name;
        $validatedData['judul'] = $request->judul;
        $validatedData['link'] = $request->file('file')->store($folder);
        $validatedData['icon'] = $icon;
        $validatedData['type'] = $type;
        $validatedData['email'] = auth()->user()->email;
        $validatedData['visibility'] = $request->visibilitas;

        Document::create($validatedData);

        return redirect('/docs');
    }

    public function permitUpload(Request $request) {

        $validatedData = $request->validate([
            'file' => 'image|file|max:20480|required'
        ]);

        $unggah = $request->file('file')->store("permit");

        $validatedData['author'] = auth()->user()->name;
        $validatedData['nama'] = $request->nama;
        $validatedData['nis'] = $request->nis;
        $validatedData['link'] = $unggah;
        $validatedData['keterangan'] = addslashes(htmlspecialchars($request->keterangan));

        Permit::create($validatedData);

        return redirect('/permit');

    }

    public function permitHapus(Request $request) {

        DB::table('permits')->where('id', $request->id)->delete();
        Storage::delete("permit/" . $request->link);
        return redirect(env('APP_URL') . "/permit");

    }

    public function delete($user, $link) {

        Storage::delete($user . "/" . $link);
        DB::table('documents')->where('link', '=', $user . "/" . $link)->delete();

        return redirect()->back();

    }

    public function account() {
        return view('account', [
            'title' => auth()->user()->name
        ]);
    }

    public function changeInfo() {
        return view('change-info');
    }

    public function changeInfoSystem(Request $request) {
        User::where('email', $request->email)->update(['nikki' => $request->nikki]);
    }

    public function changePass(Request $request) {

        if(Auth::attempt([

            'email' => auth()->user()->email,
            'password' => $request->oldPass

        ])) {

            if($request->newPass === $request->confNewPass) {

                if($request->newPass === $request->oldPass) {

                    return redirect('account')->with('gantiPassword', 'Password anda masih sama! password tidak diubah');

                } else {

                    $password = Hash::make($request->newPass);
                    User::where('email', auth()->user()->email)->update(['password' => $password]);
                    return redirect('account')->with('gantiPasswordBerhasil', 'Password anda berhasil diubah');

                }

            } else {

                return redirect('account')->with('gantiPassword', 'Konfirmasi password salah');

            }

        } else {

            return redirect('account')->with('gantiPassword', 'Password anda salah');

        }

    }

    public function help() {
        return view('help', [
            'title' => 'Bantuan'
        ]);
    }

    public function helpMasukan() {
        return view('help-masukan', [
            'title' => "Tanggapi"
        ]);
    }

    public function helpRefresh() {
        return view('help-refresh', [
            'title' => "Bantuan"
        ]);
    }

    public function tanggapan(Request $request) {
        $validatedData = $request->validate([
            'subjek' => "required",
            'tanggapan' => "required"
        ]);

        $validatedData['subjek'] = $request->subjek;
        $validatedData['tanggapan'] = $request->tanggapan;
        $validatedData['email'] = auth()->user()->email;

        Tanggapan::create($validatedData);

        return redirect("help")->with("success", "Tanggapan anda berhasil dikirim");
    }
    
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
