<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\aboutus;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\infoWis;
use App\Http\Controllers\tanya;
use App\Http\Controllers\penggunaController;

Route::get('/', [PageController::class, 'index']);
Route::get('/galeri',[PageController::class, 'galeri']);
Route::get('/informasiWisata',[PageController::class, 'informasiWisata']);
Route::get('/kulinerWisata',[PageController::class, 'kuliner']);
Route::get('/budayaWisata',[PageController::class, 'budayacon']);
Route::get('/informasiStatistik',[PageController::class, 'informasiStatistik']);
Route::get('/tanyajawab', [PageController::class, 'tanyajawab']);
Route::get('/loginPengguna',[PageController::class, 'login']);
Route::get('/loginAdmin',[PageController::class, 'loginAdmin']);
Route::get('/lihat/{id_info_wisata}',[PageController::class, 'selengkap']);
Route::get('/aboutUs',[aboutus::class, 'aboutUs']);
Route::post('saran/store', [aboutus::class, 'store'])->name('saran.store');


Route::group(['middleware' => ['auth', 'role']], function () {
    
        Route::get('/indexadmin',[AdminController::class, 'index']);
        Route::get('/aboutadmin',[AdminController::class, 'tentang']);
        Route::get('/tambahAbout',[AdminController::class, 'tambahAbout']);
        Route::post('About/Tambah', [AdminController::class, 'tentangKami'])->name('tentangKami.tambah');
        Route::get('/About/edit/{id_aboutUs}',[AdminController::class,'editAbout']);
        Route::post('About/edit/editAbout/{id_aboutUs}',[AdminController::class, 'updateEdit'])->name('AboutEdit.edit');
        Route::get('/about/delete/{id_aboutUs}', [AdminController::class, 'deleteAbout'])->name('about.delete');
        
        Route::get('/kulinerAdmin',[AdminController::class, 'kulAdmin']);
        Route::get('/tambahkuliner',[AdminController::class, 'tambahkul']);
        Route::post('/TambahDataKuliner', [AdminController::class, 'tambahKuliner'])->name('Kuliner.tambah');
        Route::get('/kulinerAdmin/edit/{id_kuliner}',[AdminController::class,'editKul']);
        Route::post('/kulinerAdmin/editdata/{id_kuliner}',[AdminController::class, 'updateKul'])->name('Kuliner.edit');
        Route::get('/kuliner/delete/{id_kuliner}', [AdminController::class, 'deleteKuliner'])->name('kuliner.delete');

        Route::get('/budayaAdmin',[AdminController::class, 'budaya']);
        Route::get('/tambahbudaya',[AdminController::class, 'Tambahbudaya']);
        Route::post('/TambahDataBudaya', [AdminController::class, 'tambahdatabudaya'])->name('Budaya.tambah');
        Route::get('/budayaAdmin/edit/{id_budaya}',[AdminController::class,'editBud']);
        Route::post('/budayaAdmin/editdata/{id_budaya}',[AdminController::class, 'updateBud'])->name('Budaya.edit');
        Route::get('/budayaAdmin/delete/{id_budaya}', [AdminController::class, 'deleteBudaya'])->name('Budaya.delete');
        
        
        Route::get('/infostatistikAdmin',[AdminController::class, 'infostatistikAdmin']);
        Route::get('/tambahdata',[AdminController::class, 'tambah']);        
        Route::post('infostatistikAdmin/plus', [AdminController::class, 'plus'])->name('infostatistikAdmin.plus');
        Route::get('/infostatistikAdmin/edit/{id_info_statistik}',[AdminController::class,'edit']);
        Route::post('infostatistikAdmin/update/{id_info_statistik}',[AdminController::class, 'update'])->name('infostatistikAdmin.update');
        Route::get('/infostatistikAdmin/delete/{id_info_statistik}', [AdminController::class, 'delete'])->name('infostatistikAdmin.delete');
        
        Route::get('/galeriadmin',[AdminController::class, 'galeri']);
        Route::get('/tambahgaleri',[AdminController::class,'tambahGaleri']);
        Route::post('galeriadmin/add', [AdminController::class, 'add'])->name('galeriadmin.add');
        Route::get('/galeriadmin/edits/{id_galeri}',[AdminController::class,'edits']);
        Route::post('galeriadmin/updates/{id_galeri}',[AdminController::class,'updates'])->name('galeriadmin.update');
        Route::get('galeriadmin/del/{id_galeri}', [AdminController::class, 'del'])->name('galeriadmin.delete');
        

        Route::get('/infoWis',[infoWis::class, 'infoWisata']);
        Route::get('/lengkapAdmin/{id_info_wisata}',[infoWis::class, 'selengkap']);
        Route::get('/editWis',[infoWis::class, 'addInfo']);
        Route::get('/tambahEdit',[infoWis::class, 'tampil']);
        Route::post('editWis/add', [infoWis::class, 'add'])->name('editWis.add');
        Route::get('/editWis/edit/{id_info_wisata}',[infoWis::class,'edit']);
        Route::post('editWis/update/{id_info_wisata}',[infoWis::class, 'update'])->name('editWis.update');
        Route::get('editWis/delete/{id_info_wisata}', [infoWis::class, 'delete'])->name('editWis.delete');

        Route::get('/tanyaAdmin',[tanya::class, 'tanyajawab']);
        Route::get('tanyaAdmin/balas/{id_pertanyaan}',[tanya::class, 'balas']);
        Route::post('tanyaAdmin/reply/{id_pertanyaan}',[tanya::class,'reply'])->name('tanyaAdmin.reply');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/tanyaPengguna',[penggunaController::class, 'tanya']);
    Route::get('/lamanBertanya',[penggunaController::class, 'answ']);
    Route::post('lamabBertanya/add', [penggunaController::class, 'add'])->name('bertanya.add');
    Route::get('/aboutUsPengguna',[penggunaController::class, 'aboutUsPengguna']);
    Route::get('/indexPengguna',[penggunaController::class, 'index']);
    Route::get('/galeriPengguna',[penggunaController::class, 'galeri']);
    Route::get('/infoWisataPengguna',[penggunaController::class, 'informasiWisata']);
    Route::get('/infostatistikPengguna',[penggunaController::class, 'informasiStatistik']);
    Route::get('/lengkapPengguna/{id_info_wisata}',[penggunaController::class, 'selengkap']);
    Route::get('/kulinerPengguna',[penggunaController::class, 'kuliner']);
    Route::get('/budayaPengguna',[penggunaController::class, 'budayacon']);
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
