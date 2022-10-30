<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index($year=null, $month=null)
    {
        $posts = Post::where('selection', '支出')->groupBy('main')->select(['main', DB::raw("sum(amount) as total")])->get();

        $items = [['大項目', '金額']];
        foreach ($posts->toArray() as $key => $value) {
            $items[] = [$value['main'], intval($value['total'])];
        }
        $items = collect($items); //コレクションオブジェクトに変換して文字に描ける
        return view('dashboard', compact('items'));
    }
}
