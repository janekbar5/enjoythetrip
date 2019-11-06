<?php
/*
|--------------------------------------------------------------------------
| app/Comment.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App;/* Lecture 16 */

use Illuminate\Database\Eloquent\Model;/* Lecture 16 */

/* Lecture 16 */
class Comment extends Model
{
    
    use Enjoythetrip\Presenters\CommentPresenter; /* Lecture 16 */

    
    /* Lecture 16 */
    public function commentable()
    {
        return $this->morphTo();
    }
    
    /* Lecture 16 */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

