<?php
/*
|--------------------------------------------------------------------------
| app/Article.php *** Copyright netprogs.pl | avaiable only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App; /* Lecture 16 */

use Illuminate\Database\Eloquent\Model; /* Lecture 16 */

/* Lecture 16 */
class Article extends Model
{
    /* Lecture 16 */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

