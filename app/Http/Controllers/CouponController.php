<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('created_at', 'DESC')->Paginate(3);;
        return view('dashboard.kupon.index', ['coupons' => $coupons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createkupon = new Coupon;

        $createkupon->code = $request->code;
        $createkupon->nama = $request->nama;
        $createkupon->kuota = $request->kuota;
        $createkupon->date = $request->date;
        $createkupon->slug = Str::slug($request->nama);

        $createkupon->save();
        return redirect('/kupon/all-kupon')->with('success', 'Kupon berhasil dibuat !');
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
    public function edit(Coupon $coupons)
    {
        return view('dashboard.kupon.edit', ['coupons' => $coupons]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupons)
    {
        $coupons->code = $request->code;
        $coupons->nama = $request->nama;
        $coupons->kuota = $request->kuota;
        $coupons->date = $request->date;
        $coupons->slug = Str::slug($request->nama);

        $coupons->update();
        return redirect('/kupon/all-kupon')->with('success', 'Kupon berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupons)
    {
        $coupons->delete();
        return redirect('kupon/all-kupon')->with('success', 'Kupon berhasil dihapus !');
    }
}
