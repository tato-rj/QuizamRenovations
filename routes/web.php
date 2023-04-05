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
            'description' => 'The existing space was first assessed for its layout and functionality. The old cabinetry and appliances were removed and replaced with new custom-built cabinetry, countertops, and a modern stainless-steel sink and faucet. The installation also included new lighting fixtures and electrical outlets to accommodate the new appliances. The chosen color scheme was a blend of neutral tones and modern finishes, giving the kitchen a fresh and sleek look. Finally, the new kitchen was thoroughly tested and inspected for safety and functionality, ensuring a successful installation that meets the needs and preferences of the client.',
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
            'description' => 'The installation work began with a thorough inspection of the area to determine the required materials and measurements. The existing grass was removed and the area was leveled before laying the foundation for the tile floor. A durable and weather-resistant tile was chosen for the outdoor area to ensure longevity and ease of maintenance. A fence was then installed around the perimeter of the area to provide privacy and security. The chosen fence material was a sturdy and stylish aluminum, painted in a color that complemented the tile floor. The installation was completed with a final inspection and testing to ensure that all components were properly installed and functioning as intended. The result was a beautiful and functional outdoor space that provided both privacy and a comfortable area for outdoor activities.',
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
            'description' => 'The installation began with the removal of the old fixtures, flooring, and tiles. The bathroom was then reconfigured to maximize space and functionality. New plumbing and electrical work were installed to accommodate the updated fixtures, including a modern shower, bathtub, toilet, and sink with a sleek and contemporary design. The walls and flooring were tiled with a durable and water-resistant material that complemented the overall design of the bathroom. A new ventilation system was also installed to ensure proper air circulation and prevent mold growth. The installation was completed with a final inspection to ensure that all components were properly installed and functioning as intended. The result was a stunning and luxurious bathroom that combined functionality with modern design.',
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
            'description' => 'The installation work began with the precise measurement of the opening to ensure a perfect fit. The storefront was designed to maximize natural light and visibility and was constructed with high-quality materials that provide excellent insulation and security. The door was also custom-built to match the aesthetic of the storefront and was equipped with advanced locking mechanisms to ensure maximum safety. The installation was completed with a final inspection to ensure that all components were properly installed and functioning as intended. The result was a stunning and durable storefront that provides both security and aesthetic appeal.',
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
            'description' => 'The installation work was a comprehensive process that involved the complete removal and replacement of all existing fixtures, wiring, and plumbing. The renovation included new walls, floors, and ceilings, as well as updated electrical and plumbing systems. High-quality materials and finishes were selected to give the space a modern and luxurious feel, while maximizing functionality and space utilization. The installation was completed with a final inspection to ensure that all components were properly installed and functioning as intended. The result was a stunning and fully renovated townhouse that met the needs and preferences of the client.',
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
