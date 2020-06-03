<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kehu;
class StatisticController extends Controller
{
    // 综合分析
    public function statistic(){
        $admin=session('admin');
        if($admin->a_level!=2){
            // return redirect('login');
            dd('权限不够');
        }
        // 查询客户行业
        $repast=Kehu::where('k_hang',1)->count();
        $architecture=Kehu::where('k_hang',2)->count();
        $petroleum=Kehu::where('k_hang',3)->count();
        $mineral=Kehu::where('k_hang',4)->count();
        $electronic=Kehu::where('k_hang',5)->count();
        // 计算百分比
        $hang=Kehu::count();
        $repasts=$repast/$hang*100;
        $architectures=$architecture/$hang*100;
        $petroleums=$petroleum/$hang*100;
        $minerals=$mineral/$hang*100;
        $electronics=$electronic/$hang*100;
        // 查询客户来源
        $introduce=Kehu::where('k_lai',1)->count();
        $advertising=Kehu::where('k_lai',2)->count();
        $else=Kehu::where('k_lai',3)->count();
        // 计算来源百分比
        $introduces=$introduce/$hang*100;
        $advertisings=$advertising/$hang*100;
        $elses=$else/$hang*100;
        return view('admin.statistic.index',compact('repasts','architectures','petroleums','minerals','electronics','introduces','advertisings','elses'));
    }
}
