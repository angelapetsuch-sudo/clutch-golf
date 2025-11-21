<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;

class PageController extends Controller
{
    public function home()
    {
        // SEO Meta Tags
        SEOMeta::setTitle('Clutch Golf | Premium Indoor Golf Simulator');
        SEOMeta::setDescription('State-of-the-art simulators, craft drinks, upscale atmosphere.');
        SEOMeta::setCanonical(url('/'));

        // Open Graph (Facebook/Social)
        OpenGraph::setTitle('Clutch Golf');
        OpenGraph::setDescription('Experience golf reimagined.');
        OpenGraph::setUrl(url('/'));
        OpenGraph::addProperty('type', 'website');

        // JSON-LD Schema (Google Rich Results)
        JsonLd::setType('SportsActivityLocation');
        JsonLd::setTitle('Clutch Golf');
        JsonLd::setDescription('Premium indoor golf simulator experience.');
        JsonLd::addValue('address', [
            '@type' => 'PostalAddress',
            'streetAddress' => '123 Main Street',
            'addressLocality' => 'Blaine',
            'addressRegion' => 'MN',
            'postalCode' => '55434'
        ]);
        JsonLd::addValue('telephone', '(612) 555-1234');

        return view('welcome');
    }
}
