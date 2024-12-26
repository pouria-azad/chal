<?php

namespace App\Http\Controllers;

use App\Models\ChalUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class DashboardController extends Controller
{
    private function Left($date)
    {
        $diffInSeconds = Carbon::now()->diffInSeconds(Carbon::parse($date)->addDay()); // محاسبه تفاوت زمانی

        $hoursLeft = floor($diffInSeconds / 3600); // ساعت‌ها
        $minutesLeft = floor(($diffInSeconds % 3600) / 60); // دقیقه‌ها
        $secondsLeft = $diffInSeconds % 60; // ثانیه‌ها

        return sprintf('%02d:%02d:%02d', $hoursLeft, $minutesLeft, $secondsLeft);
    }

    public function index(Request $request){

        $chalusers = ChalUser::where(['user_id' => $request->user()->id, 'status' => 0 ])->where('created_at', '>=', today())->get();
        $chalusers = $chalusers->map(function ($item) {
            $item->remain = $this->Left($item->created_at);
            return $item;
        });

        $num =  ChalUser::where(['chal_id'=>5])->count();
        return view('dashboard', compact(['chalusers', 'num']));
    }
}
