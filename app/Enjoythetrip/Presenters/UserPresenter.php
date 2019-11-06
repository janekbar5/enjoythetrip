<?php
/*
|--------------------------------------------------------------------------
| app/Enjoythetrip/Presenters/UserPresenter.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/
namespace App\Enjoythetrip\Presenters; /* Lecture 16 */

/* Lecture 16 */
trait UserPresenter {
    
    /* Lecture 16 */
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->surname;
    }
    
}

