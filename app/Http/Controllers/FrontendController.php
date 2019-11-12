<?php

/*
  |--------------------------------------------------------------------------
  | app/Http/Controllers/FrontendController.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
  |--------------------------------------------------------------------------
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enjoythetrip\Interfaces\FrontendRepositoryInterface; /* Lecture 12 Lecture 13 FrontendRepositoryInterface  */
use App\Enjoythetrip\Gateways\FrontendGateway; /* Lecture 17 */

class FrontendController extends Controller
{
    

    public function __construct(FrontendRepositoryInterface $frontendRepository, FrontendGateway $frontendGateway /* Lecture 17 */) /* Lecture 13 FrontendRepositoryInterface */
    {
        $this->fR = $frontendRepository;
        $this->fG = $frontendGateway; /* Lecture 17 */
    }

    

    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage(); /* Lecture 12 */       
        return view('frontend.index', ['objects' => $objects]); /* Lecture 12 second argument */
    }

    

    public function article()
    {
        return view('frontend.article');
    }

   

    public function object($id)
    {
        $object = $this->fR->getObject($id); /* Lecture 12 */
        return view('frontend.object', ['object' => $object]);
    }

   

    public function person()
    {
        return view('frontend.person');
    }

   

    public function room()
    {
        return view('frontend.room');
    }

   

    public function roomsearch()
    {
        return view('frontend.roomsearch');
    }

    public function searchCities(Request $request)
    {
        $results = $this->fG->searchCities($request);
        return response()->json($results);
    }

}
