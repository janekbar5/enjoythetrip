<?php
/*
|--------------------------------------------------------------------------
| app/Enjoythetrip/Repositories/FrontendRepository.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Enjoythetrip\Repositories; /* Lecture 12 */


use App\Enjoythetrip\Interfaces\FrontendRepositoryInterface;  /* Lecture 13 */
use App\{TouristObject,City/*Lecture 17*/}; /* Lecture 12 */


/* Lecture 12 */
class FrontendRepository implements FrontendRepositoryInterface  {   /* Lecture 13 implements FrontendRepositoryInterface */
    
    /* Lecture 12 */
    public function getObjectsForMainPage()
    {
        //return TouristObject::all();
        return TouristObject::with('city','photos')->Ordered()->paginate(8);
    } 
     public function getObject($id){
         return TouristObject::with(['city','photos','address','users.photos','comments.user','articles.user','rooms.object.city'])->find($id);
     }
  
     public function getSearchCities( string $term)
    {
        return  City::where('name', 'LIKE', $term . '%')->get();               
    } 
}


