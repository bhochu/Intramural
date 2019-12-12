<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Player extends Authenticatable
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
    public function get_team_name(){
      return Team::find($this->team_id)->name;
    }

    public function get_sport_name(){
      return Team::find($this->sport_id)->get_sport_name();
    }

    /*public function get_tournament_name(){
      return Sport::find($this->sport_id)->get_sport_name()->get_tournament_name();
    }*/
}
