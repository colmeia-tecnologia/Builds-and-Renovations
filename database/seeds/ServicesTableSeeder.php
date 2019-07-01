<?php

use App\Models\Service;
use Illuminate\Database\Seeder;
use App\Models\Subservice;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Bathroom & Kitchen
        factory(Service::class)->create([
            'name' => 'Bathroom & Kitchen',
            'image' => env('APP_URL').'/img/bathroom-kitchen.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Bathroom Safety',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Bathroom Exhaust Fans & Parts',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Bathroom Faucets & Shower Heads',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Kitchen Faucets & Water Dispensers',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Water leaking',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Clogging',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Bathroom storage',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Bathroom storage furniture',
        ]);


        //Electrical
        factory(Service::class)->create([
            'name' => 'Electrical',
            'image' => env('APP_URL').'/img/electrical.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Electrical Wire & Cable',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Electrical Boxes & Covers',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Conduit & Fittings',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Breaker Boxes',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Light Switches & Dimmers',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Fire Safety',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Solar Power',
        ]);


        //Flooring
        factory(Service::class)->create([
            'name' => 'Flooring',
            'image' => null,
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'All Grout & Mortar',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Carpet & Tile Carpet',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Laminate Flooring on Walls',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Hardwood Flooring',
        ]);


        //Garden & Outdoor Living
        factory(Service::class)->create([
            'name' => 'Garden & Outdoor Living',
            'image' => env('APP_URL').'/img/garden-and-outdoor-living.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Design Your Landscape',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Pavers, Step Stones & Retaining Walls',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Garden Center',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Outdoor Drainage',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Greenhouses',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Outdoor Living Construction',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Outdoor Heating',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Outdoor Gas & Wood-Burning Fireplaces',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Swimming Pool Repairs',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Pool Fences',
        ]);

        
        //Heating & Cooling
        factory(Service::class)->create([
            'name' => 'Heating & Cooling',
            'image' => null,
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Air Conditioners',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Evaporative Coolers',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'HVAC Duct & Fittings',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Flexible Duct',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Nest Thermostat E',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Humidifiers & Dehumidifiers',
        ]);

        
        //Painting
        factory(Service::class)->create([
            'name' => 'Painting',
            'image' => env('APP_URL').'/img/painting.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Exterior Stains & Floor Coatings',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Patching & Repair',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Interior Stains & Finishes',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Rubberized Coatings',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Interior Paint',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Exterior Paint',
        ]);

        
        //Plumbing
        factory(Service::class)->create([
            'name' => 'Plumbing',
            'image' => null,
        ]);
        factory(Subservice::class)->create([
            'service_id' => 7,
            'name' => 'Augers, Plungers & Drain Openers',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 7,
            'name' => 'Plumbing Parts & Repair',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 7,
            'name' => 'Firestop Products & Systems',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 7,
            'name' => 'Plumbing Tools & Cements',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 7,
            'name' => 'Utility Sinks & Faucets',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 7,
            'name' => 'Water Heaters',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 7,
            'name' => 'Pipe & Fittings',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 7,
            'name' => 'Valves & Valve Repair',
        ]);

        
        //Roofinging
        
        factory(Service::class)->create([
            'name' => 'Roofing',
            'image' => null,
        ]);
        factory(Subservice::class)->create([
            'service_id' => 8,
            'name' => 'Roof Types',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 8,
            'name' => 'Roof solar panels',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 8,
            'name' => 'Gambrel Roof',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 8,
            'name' => 'Shed Roof',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 8,
            'name' => 'Flat Roof',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 8,
            'name' => 'Gable Roof',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 8,
            'name' => 'Mansard Roof',
        ]);

        
        //Smart Home & Security
        factory(Service::class)->create([
            'name' => 'Smart Home & Security',
            'image' => null,
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Dimmers and Lighting',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Security Systems & Access Control',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Home Theater',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Temperature & Climate Control',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Phone Systems',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Discover Smart Security',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Thermostats',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Cameras',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 9,
            'name' => 'Smart Lighting',
        ]);

        
        //Storage & Organization
        factory(Service::class)->create([
            'name' => 'Storage & Organization',
            'image' => env('APP_URL').'/img/storage-rganization.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 10,
            'name' => 'Interior Design',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 10,
            'name' => 'Property restructuring',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 10,
            'name' => 'House Painting',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 10,
            'name' => 'Structural Renovation',
        ]);
    }
}
