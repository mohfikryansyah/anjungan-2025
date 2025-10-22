<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\ISDHTL;
use App\Models\Layanan;
use App\Models\PKH;
use App\Models\Profile;
use App\Models\Publikasi;
use App\Models\TataUsaha;
use Illuminate\Http\Request;

class ContentShowController extends Controller
{
    public function showProfile($title)
    {
        $profile = Profile::where('published', true)->where('title', $title)->first();
        if (!$profile)
            abort(404);
        return response()->view('contents.show', [
            'item' => $profile,
            'items' => Profile::where('published', true)->latest()->get(),
            'commentParam' => get_class($profile),
            'comments' => $this->getComments($profile),
            'othersRoute' => 'profile.show'
        ]);
    }

    public function showTataUsaha($title)
    {
        $tataUsaha = TataUsaha::where('published', true)->where('title', $title)->first();
        if (!$tataUsaha)
            abort(404);
        return response()->view('contents.show', [
            'item' => $tataUsaha,
            'items' => TataUsaha::where('published', true)->latest()->get(),
            'commentParam' => get_class($tataUsaha),
            'comments' => $this->getComments($tataUsaha),
            'othersRoute' => 'tu.show'
        ]);
    }

    public function showPKH($title)
    {
        $pkh = PKH::where('published', true)->where('title', $title)->first();
        if (!$pkh)
            abort(404);
        return response()->view('contents.show', [
            'item' => $pkh,
            'items' => PKH::where('published', true)->latest()->get(),
            'commentParam' => get_class($pkh),
            'comments' => $this->getComments($pkh),
            'othersRoute' => 'pkh.show'
        ]);
    }

    public function showISDHTL($title)
    {
        $isdhtl = ISDHTL::where('published', true)->where('title', $title)->first();
        if (!$isdhtl)
            abort(404);
        return response()->view('contents.show', [
            'item' => $isdhtl,
            'items' => ISDHTL::where('published', true)->latest()->get(),
            'commentParam' => get_class($isdhtl),
            'comments' => $this->getComments($isdhtl),
            'othersRoute' => 'isdhtl.show'
        ]);
    }

    public function showPublikasi()
    {
        $publikasi = new Publikasi();
        return response()->view('contents.show', [
            'item' => 'Publikasi',
            'items' => Publikasi::where('published', true)->latest()->get(),
            'commentParam' => get_class($publikasi),
            'comments' => $this->getComments($publikasi),
            'othersRoute' => 'publikasi.show'
        ]);
    }

    public function showLayanan($title)
    {
        $layanan = Layanan::where('published', true)->where('title', $title)->first();
        if (!$layanan)
            abort(404);
        return response()->view('contents.show', [
            'item' => $layanan,
            'items' => Layanan::where('published', true)->latest()->get(),
            'commentParam' => get_class($layanan),
            'comments' => $this->getComments($layanan),
            'othersRoute' => 'layanan.show'
        ]);
    }

    private function getComments($class)
    {
        return Comment::where('model', get_class($class))->where('published', true)->latest()->get();
    }

}