<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index($year=null, $month=null)
    {
        if(is_null($year) || is_null($month)) {
            $now = Carbon::now();
        } else {
            $now = Carbon::create($year, $month);
        };

        $fixedCostList = [
            '住居費' ,
            '水道・光熱費' ,
            '通信費' ,
            '税' ,
            '社会保障費' ,
            '保険' ,
            'サブスク' ,
            'その他固定費' ,
        ];

        // グラフ①
        $posts = Post::whereYear('day', '=', $now->year)->whereMonth('day', '=', $now->month)
                        ->where('selection', '支出')
                        ->groupBy('main')
                        ->whereIn('main', $fixedCostList)
                        ->select(['main', DB::raw("sum(amount) as total")])
                        ->get();

        $items = [['大項目', '金額']];
        foreach ($posts->toArray() as $key => $value) {
                $items[] = [$value['main'], intval($value['total'])];
            }
        $items = collect($items);

        // グラフ②
        $posts = Post::whereYear('day', '=', $now->year)->whereMonth('day', '=', $now->month)
                        ->where('selection', '支出')
                        ->groupBy('main')
                        ->whereNotIn('main', $fixedCostList)
                        ->select(['main', DB::raw("sum(amount) as total")])
                        ->get();

        $items1 = [['大項目', '金額']];
        foreach ($posts->toArray() as $key => $value) {
            $items1[] = [$value['main'], intval($value['total'])];
        }
        $items1 = collect($items1);

        // グラフ③
        $posts = Post::whereYear('day', '=', $now->year)->whereMonth('day', '=', $now->month)
                        ->where('selection', '収入')
                        ->groupBy('main')
                        ->select(['main', DB::raw("sum(amount) as total")])
                        ->get();

        $items2 = [['大項目', '金額']];
        foreach ($posts->toArray() as $key => $value) {
            $items2[] = [$value['main'], intval($value['total'])];
        }
        $items2 = collect($items2);

        // 前月参照ボタン
        $prev = Carbon::create($now->year, $now->month-1);
        $prev = ['year' => $prev->year ,'month' => $prev->month];

        // 翌月参照ボタン
        $next = Carbon::create($now->year, $now->month+1);
        $next = ['year' => $next->year, 'month' => $next->month];

        // 現在の年と月を取得
        $displayDate = "{$now->year}年{$now->month}月";

        return view('dashboard', compact('items','items1', 'items2' ,'prev','next', 'displayDate'));
    }
}
