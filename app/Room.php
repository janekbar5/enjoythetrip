<?php
/*
|--------------------------------------------------------------------------
| app/Room.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/
namespace App; /* Lecture 16 */

use Illuminate\Database\Eloquent\Model; /* Lecture 16 */

/* Lecture 16 */
class Room extends Model
{
    /* Lecture 16 */
    public function photos()
    {
        return $this->morphMany('App\Photo', 'photoable');
    }
     public function object()
    {
        return $this->belongsTo('App\TouristObject');
    }
    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}

