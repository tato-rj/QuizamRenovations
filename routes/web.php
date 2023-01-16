<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $services = [
        [
            'title' => 'Ceiling & Drywall',
            'description' => 'We build interior drywall partitions and interior drywall ceilings.'
        ],
        [
            'title' => 'Carpentry',
            'description' => 'We complete any custom work related to interior woodworking, millwork, cabinets, stairs, and more.'
        ],
        [
            'title' => 'Kitchen remodeling',
            'description' => 'We install brand new kitchens, from cabinets to countertops, and appliances.'
        ],
        [
            'title' => 'Bathroom remodeling',
            'description' => 'We install brand new bathrooms, from cabinets to tiling, sinks, and shower doors.'
        ],
        [
            'title' => 'Painting & Repairs',
            'description' => 'We provide finish painting work with moulding details for interior walls.'
        ],
        [
            'title' => 'Windows & Doors',
            'description' => 'Installation of any size and types of interior windows and doors.'
        ],
        [
            'title' => 'Hardwood floors',
            'description' => 'We intall hardwood floors for residential and commercial use.'
        ],
        [
            'title' => 'Decks & Sheds',
            'description' => 'Complete built of an outdoor deck or shed for storage purpose.'
        ],
    ];

    $cases = [
        [
            'title' => 'Kitchen Remodeling', 
            'subtitle' => 'Downtown Brooklyn',
            'images' => [1,2,3],
            'description' => 'Providing Furniture Installation, Relocation and Warehousing Services for this financial ratings giant, Certified has remained an integral part of S&P’s expansions, changes and re-stacks. From traditional open floor plans to their Conference Centers and satellite offices, we continue to provide project and day-to-day services.',
            'logistics' => [
                'Financial & Banking',
                '1,000,000 SF',
                '17,000 employees'
            ]
        ],
        [
            'title' => 'Outdoor Renovation', 
            'subtitle' => 'Brooklyn',
            'images' => [1,2],
            'description' => 'Providing Furniture Installation, Relocation and Warehousing Services for this financial ratings giant, Certified has remained an integral part of S&P’s expansions, changes and re-stacks. From traditional open floor plans to their Conference Centers and satellite offices, we continue to provide project and day-to-day services.',
            'logistics' => [
                'Financial & Banking',
                '1,000,000 SF',
                '17,000 employees'
            ]
        ],
        [
            'title' => 'Bathroom Renovation', 
            'subtitle' => 'Upper East Side, Manhattan',
            'images' => [1,2],
            'description' => 'Providing Furniture Installation, Relocation and Warehousing Services for this financial ratings giant, Certified has remained an integral part of S&P’s expansions, changes and re-stacks. From traditional open floor plans to their Conference Centers and satellite offices, we continue to provide project and day-to-day services.',
            'logistics' => [
                'Financial & Banking',
                '1,000,000 SF',
                '17,000 employees'
            ]
        ],
        [
            'title' => 'Doors & Storefront', 
            'subtitle' => 'Midtown, Manhattan',
            'images' => [1,2,3,4],
            'description' => 'Providing Furniture Installation, Relocation and Warehousing Services for this financial ratings giant, Certified has remained an integral part of S&P’s expansions, changes and re-stacks. From traditional open floor plans to their Conference Centers and satellite offices, we continue to provide project and day-to-day services.',
            'logistics' => [
                'Financial & Banking',
                '1,000,000 SF',
                '17,000 employees'
            ]
        ],
        [
            'title' => 'Townhouse Renovation', 
            'subtitle' => 'Brooklyn',
            'images' => [1,2,3,4,5],
            'description' => 'Providing Furniture Installation, Relocation and Warehousing Services for this financial ratings giant, Certified has remained an integral part of S&P’s expansions, changes and re-stacks. From traditional open floor plans to their Conference Centers and satellite offices, we continue to provide project and day-to-day services.',
            'logistics' => [
                'Financial & Banking',
                '1,000,000 SF',
                '17,000 employees'
            ]
        ],
    ];

    $testimonials = [
        [
            'name' => 'Homeowner, Brooklyn, NY',
            'text' => 'The bathroom is beautiful and everything works! Eddy did a terrific job... attentive, informative and on top of the project. I also liked the professional manner in which you handled the communication.'
        ],
        [
            'name' => 'General Contractor, New York, NY',
            'text' => 'The installers were on time and worked very fast. They made accurate cuts and fitted the countertop with no issues. They cleaned up afterwards. I was very pleased.'
        ],
        [
            'name' => 'Homeowner, New York, NY',
            'text' => 'The team did an absolutely amazing job on my counter tops, I give them an A+. They were on time, very skilled and cleaned up afterward.'
        ],
        [
            'name' => 'Landlord, Queens, NY',
            'text' => 'Quick and painless with a friendly and communicative team. Project was completed under the estimated time and under budget. Would definitely consider using them again.'
        ]
    ];

    return view('welcome.index', compact(['services', 'cases', 'testimonials']));
});
