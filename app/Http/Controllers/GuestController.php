<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationCategories;
use App\Models\Publication;
use App\Models\Career;

class GuestController extends Controller
{
    function __construct()
    {
        $this->publication = new Publication;
        $this->pub_cat = new PublicationCategories;
        $this->career = new Career;
    }

    public function index()
    {
        $pubs = $this->publication->get_pub_data();
        return view('index', compact('pubs'));
    }

    public function about_us()
    {
        return view('guest.about-us');
    }

    public function projects()
    {
        return view('guest.projects');
    }

    // Parks

    public function projectsParks()
    {
        return view('guest.projects.parks');
    }

    public function haciendaEscudero()
    {
        return view('guest.projects.parks.hacienda-escudero');
    }

    public function tribeca()
    {
        return view('guest.projects.parks.tribeca');
    }

    public function montelago()
    {
        return view('guest.projects.parks.montelago');
    }

    public function woodgrovePark()
    {
        return view('guest.projects.parks.woodgrove-park');
    }

    public function ponderosaLeisureFarms()
    {
        return view('guest.projects.parks.ponderosa-leisure-farms');
    }

    public function courtyard()
    {
        return view('guest.projects.parks.courtyard');
    }

    public function leisureFarms()
    {
        return view('guest.projects.parks.leisure-farms');
    }

    // Peaks

    public function projectsPeaks()
    {
        return view('guest.projects.peaks');
    }

    // Shores

    public function projectsShores()
    {
        return view('guest.projects.shores');
    }

    public function terrazasDePuntaFuego()
    {
        return view('guest.projects.shores.terrazas-de-punta-fuego');
    }

    public function peninsulaDePuntaFuego()
    {
        return view('guest.projects.shores.peninsula-de-punta-fuego');
    }

    public function waterwoodPark()
    {
        return view('guest.projects.parks.waterwood-park');
    }

    public function stonecrest()
    {
        return view('guest.projects.parks.stonecrest');
    }

    // Beachtowns

    public function beachtowns()
    {
        return view('guest.beachtowns');
    }

    public function casobe()
    {
        return view('guest.projects.beachtowns.casobe');
    }

    public function clubLaiya()
    {
        return view('guest.projects.beachtowns.club-laiya');
    }

    public function costaAzalea()
    {
        return view('guest.projects.beachtowns.costa-azalea');
    }

    public function playaLaiya()
    {
        return view('guest.projects.beachtowns.playa-laiya');
    }

    public function playaCalatagan()
    {
        return view('guest.projects.beachtowns.playa-calatagan');
    }

    public function playaAzalea()
    {
        return view('guest.projects.beachtowns.playa-azalea');
    }

    public function faq()
    {
        return view('guest.faq');
    }
    
    public function privilege_club()
    {
        return view('guest.privilege-club');
    }

    public function careers()
    {
        $careers = $this->career->get_career_data();
        return view('guest.careers', compact('careers'));
    }

    public function career_details($created_at, $slug)
    {
        $career_details = $this->career->get_career_details_by_slug($slug);

        return view('guest.career-details', compact('career_details'));
    }

    public function publications()
    {
        $pubs = $this->publication->get_pub_data();
        $categories = $this->pub_cat->get_pub_cat_data();
        return view('guest.publication', compact('pubs', 'categories'));
    }

    public function details($slug_url)
    {
        $details = $this->publication->get_details($slug_url);

        return view('guest.publication-details', compact('details'));
    }

    public function contact_us()
    {
        return view('guest.contact-us');
    }

}
