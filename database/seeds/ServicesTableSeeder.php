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
        //Builds and Renovations
        factory(Service::class)->create([
            'name' => 'Builds and Renovations',
            'image' => ENV('APP_URL').'/img/builds-and-renovations.png',
        ]);

        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Masonry',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Floors',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Pools'
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Roof',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Plaster and Drywall',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Demolitions',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Sink, Basin and Tank',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 1,
            'name' => 'Other Service',
        ]);

        //Hidraulic
        factory(Service::class)->create([
            'name' => 'Hidraulic',
            'image' => ENV('APP_URL').'/img/hidraulic.png',
        ]);

        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Vasamento',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Clogging',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Fat box',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Plumbing',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Tap',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Siphon',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Water Box',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 2,
            'name' => 'Other Service',
        ]);

        //Eletric
        factory(Service::class)->create([
            'name' => 'Eletric',
            'image' => ENV('APP_URL').'/img/eletric.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Cabling',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Circuit breakers',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Wiring',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Switches and Outlets',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Lamps and Luminaires',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Shower Resistance',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Intercoms',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Air conditioning',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Electrician',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Electrician with NR-10',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Cameras and Sensors',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 3,
            'name' => 'Other Service',
        ]);

        //Painting and Decoration
        factory(Service::class)->create([
            'name' => 'Painting and Decoration',
            'image' => ENV('APP_URL').'/img/painting-and-decoration.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Wood Lacquering',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Interior Wall Painting',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Exterior Wall Painting',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Street Sidewalk Painting',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Painting of Garage Spaces',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Metal Surface Painting',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Textures and Special Paintings',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 4,
            'name' => 'Other Service',
        ]);

        //Projects and Administration
        factory(Service::class)->create([
            'name' => 'Projects and Administration',
            'image' => ENV('APP_URL').'/img/projects-and-administration.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Architectural project',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Foundation Project',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Structural Design',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Electrical project',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Hydrosanitary Project',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Sustainable Projects',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => '3D mockup',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 5,
            'name' => 'Construction Management',
        ]);

        //Sustainability
        factory(Service::class)->create([
            'name' => 'Sustainability',
            'image' => ENV('APP_URL').'/img/sustainability.png',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Reuse Water Systems',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Solar Power Systems',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Sustainable Constructions',
        ]);
        factory(Subservice::class)->create([
            'service_id' => 6,
            'name' => 'Other Service',
        ]);
    }
}
