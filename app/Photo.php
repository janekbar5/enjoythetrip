<?php
/*
|--------------------------------------------------------------------------
| app/Photo.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App; /* Lecture 14 */

use Illuminate\Database\Eloquent\Model; /* Lecture 14 */

/* Lecture 14 */
class Photo extends Model
{
    /* Lecture 14 */
    public function photoable()
    {
        return $this->morphTo();
    }
    
    
}

