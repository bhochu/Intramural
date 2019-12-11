<?php

namespace App;

use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Team extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    /*public function get_tournament_name(){
      return Tournament::find($this->tournament_id)->name;
    }
*/
    public function get_sport_name(){
      return Sport::find($this->sport_id)->name;
    }

    public function get_tournament_name(){
      return Sport::find($this->sport_id)->get_tournament_name();
      /*$t_id = DB::table(sports)->select('tournament_id')
                ->where('sport_id',$this->sport_id)
                ->get();
      //$tournament_ids = Sport::get($this->sport_id);
      //$tournament_ids = Sport::get($this->sport_id)->tournament_id;
      $tournament = Tournament::all();
      return DB::table(tournaments)->select('name')
               ->where('tournament_id',$this->tournament_id)
               ->get();
      //return Tournament::find($tournament_ids->tournament_id)->name;*/
    }
}
