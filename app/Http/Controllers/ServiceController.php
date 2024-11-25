<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showService($service)
    {
        // Replace hyphens with spaces
        $service = str_replace('-', ' ', $service);
    
        // Service mapping
        $serviceViewMapping = [
            'Flex Printing' => 'flexprinting',
            'LED Signage' => 'ledsinage',
            '3D Acrylic Letter Sign Board' => '3dAcrylicLetter',
            'Hoarding Unipole' => 'hoardingUnipole',
            'Glow Sign Board' => 'glowSignBoard',
            'Vinyl Printing' => 'vinylprinting',
            'LED Crystal Signage' => 'ledCrystall',
            'ACP CLADDING WORK' => 'acpCladding',  
            '3D Steel Letter Sign Board' => '3dSteelLetter',
            'Acrylic Display' => 'acrylic',
            'Directional Sign Board' => 'directionalSignBoard',
            'Canopy And Standee' => 'canopy',
            'Reception And Office Signage' => 'reception&officeSignage',
            'UV LED Printing' => 'uvLED',
            '3D Brass Letter Sign Board' => '3dBrassLetter',
            'ACP SignBoard' => 'acpSignBoard',
            'Frosted Vinyl' => 'frostedvinyl',
            'Corporate Gifts' => 'corporateGifts',
            'Rollup Standees' => 'roolupStandees',
            'Commercial Signage' => 'commericalSinage',
            'Flanges And Lollipop' => 'flanges|lollipop',
            'Indoor Graphics' => 'indoorGraphics',
            'Outdoor Graphic' => 'outdoorGraphic',
            'TrimCap' => 'trimCap',
            'Fire Safety Signage' => 'fireSafetySignage',
        ];
    
        if (array_key_exists($service, $serviceViewMapping)) {
            return view('services.' . $serviceViewMapping[$service]);
        }
    
        return abort(404);
    }
    
}