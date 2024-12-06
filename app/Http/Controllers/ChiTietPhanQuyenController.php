<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChiTietPhanQuyenRequest;
use App\Models\ChiTietPhanQuyen;
use Illuminate\Http\Request;

class ChiTietPhanQuyenController extends Controller
{
    
    public function store(ChiTietPhanQuyenRequest $request)
    {
        
        $id_chuc_nang = 38;

        $check = ChiTietPhanQuyen::where('id_quyen', $request->id_quyen)
                                 ->where('id_chuc_nang', $request->id_chuc_nang)
                                 ->first();

        if($check) {
            return response()->json([
                'status'    => false,
                'message'   => 'Quyền này đã được phân rồi'
            ]);
        }
        ChiTietPhanQuyen::create([
            'id_quyen' => $request->id_quyen,
            'id_chuc_nang' => $request->id_chuc_nang
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Đã Phân Quyền thành công!'
        ]);
    }
}
