<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    public static function checkForNotifications() {
        $notification = json_decode(Storage::disk('local')->get('json/notification.json'), true)[0];

        $mytime = Carbon::now('Asia/Tokyo');

        if($mytime >= $notification['startTime'] && $mytime <= $notification['endTime']) {
            return $notification['url'];
        } else {
            return null;
        }
    }
}
