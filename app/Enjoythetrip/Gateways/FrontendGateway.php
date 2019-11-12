<?php
/*
|--------------------------------------------------------------------------
| app/Enjoythetrip/Gateways/FrontendGateway.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/
namespace App\Enjoythetrip\Gateways; /* Lecture 17 */

use App\Enjoythetrip\Interfaces\FrontendRepositoryInterface; /* Lecture 17 */ 

/* Lecture 17 */
class FrontendGateway { 
    
     
    /* Lecture 17 */
    public function __construct(FrontendRepositoryInterface $fR ) 
    {
        $this->fR = $fR;
    }
       
   
    public function searchCities($request)
    {
        $term = $request->input('term');
        $results = array();
        $queries = $this->fR->getSearchCities($term);
        foreach ($queries as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->name];
        }
        return $results;
    } 

}


