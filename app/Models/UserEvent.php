<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserEvent extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function loginEvent($useId){
        return $this->create(['user_id'=>$useId]);
    }
    public function logoutEvent($userId){
        $eventId = DB::table("user_events")->where("user_id", $userId)->max("id");
        return $this->where(["id"=>$eventId])->update(["updated_at"=>Carbon::now()]);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
