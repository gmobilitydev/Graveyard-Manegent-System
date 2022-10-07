<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\deceased;
use App\Models\grave;
use Illuminate\Http\Request;

use App\Models\Region;
use App\Models\Location;
use App\Models\graveyard;
use App\Models\Sections;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $list_regions = Region::all();
        $list_locations = Location::all();
        return view('dashboard',['list_regions' => $list_regions, 'list_locations' => $list_locations]);

    }

    // public function show(Region $region, Location $location){
    //     return view('website.regions.show', [
    //         'region' => $region,
    //         'location' => $location
    //     ]);
    // }

    public function listRegions(){
        $list_regions = Region::with(['location','location.graveyard'])->get();
        return view('website.regions.index',['list_regions' => $list_regions]);
    }

    public function showRegion(Region $region){
        // $locations = Location::where('region_id', $region)->get();
        return view('website.regions.show',[
            'region' => $region, 
            // 'locations' => $locations
    ]);
    }

    /**
     *
     * Location Functions
     */
    public function listLocations(){
        $list_locations = Location::all();
    return view('website.locations.index',['list_locations'=>$list_locations]);
    }
    public function showLocation(Location $location){
        return view('website.locations.show',['location'=>$location]);
    }

    /**
     *
     * Graveyard Functions
     */
    public function listGraveyards(){
        $list_graveyards = graveyard::paginate(5);

        return view('website.graveyards.index',['list_graveyards'=>$list_graveyards]);
    }
    public function whkGraveyards(){
        // $location = location::where('name', '=', 'Windhoek')->first('id');
        $graveyards = graveyard::where('location_id', '=', 8)->get();

        // dump($graveyards);

        return view('dashboard',['graveyards'=>$graveyards]);
    }
    public function showGraveyard(graveyard $graveyard){
        return view('website.graveyards.show',['graveyard' => $graveyard]);
    }

    /**
     *
     * Search Functions
     */
    public function search(){
        return view('website.Site.search');
    }

    public function searchGrave(){
        $search = $_GET['grave-query'];
        $graves = grave::select('*')->where('grave_key', 'LIKE', '%'.$search.'%')->get();
        
        return view('website.Site.grave-search-results', compact('graves'));
    }

    public function searchGraveDashboard(){
        $search = $_GET['query-grave'];
        $graves = grave::select('*')->where('grave_key', 'LIKE', '%'.$search.'%')->get();
        
        return view('website.graves.search-results', compact('graves'));
    }

    public function showGrave(grave $grave){
        return view('website.graves.show',['grave' => $grave]);
    }

    // public function searchGraveyard(){
    //     $searchGraveyard = $_GET['graveyard-query'];
    //     $graveyard = graveyard::select('*')->where('name', 'LIKE', '%'.$searchGraveyard.'%')->get();
    //     return view('website.Site.graveyard-search-results', compact('graveyards'));
    // }

}

