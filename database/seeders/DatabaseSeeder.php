<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\TipeSenjata;
use App\Models\Senjata;
use App\Models\User;
use App\Models\Map;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        TipeSenjata::create([
            'name' => 'Sidearm',
            'slug' => 'sidearm'
        ]);

        TipeSenjata::create([
            'name' => 'Rifle',
            'slug' => 'rifle'
        ]);

        TipeSenjata::create([
            'name' => 'Sniper Rifle',
            'slug' => 'sniper-rifle'
        ]);

        TipeSenjata::create([
            'name' => 'Shotgun',
            'slug' => 'shotgun'
        ]);

        TipeSenjata::create([
            'name' => 'Sub-Machine Gun',
            'slug' => 'sub-machine-gun'
        ]);

        TipeSenjata::create([
            'name' => 'Machine Gun',
            'slug' => 'machine-gun'
        ]);

        TipeSenjata::create([
            'name' => 'Melee',
            'slug' => 'melee'
        ]);

        Senjata::create([

            'nama_senjata' => 'Spectre',
            'tipe_senjata_id' => 5,
            'link_gambar' => 'https://vgraphs.com/images/weapons/valorant-spectre-profile-icon.png',
            'deskripsi_senjata' => 'What is the Spectre? The Spectre is one of two SMG-type weapons in Valorant. Priced at 1,600 Creds, the Spectre offers a fast-firing, fully-automatic gun that is 1,300 creds cheaper than the two fully-automatic rifles in Valorant.'
        ]);

        Senjata::create([

            'nama_senjata' => 'Vandal',
            'tipe_senjata_id' => 2,
            'link_gambar' => 'https://vgraphs.com/images/weapons/valorant-vandal-profile-icon.png',
            'deskripsi_senjata' => 'The Vandal is a high-cost automatic rifle. One of VALORANT\'s best general-purpose weapons, it is most effective at picking off individual targets at longer ranges due to having no falloff, allowing it to kill any enemy with a single headshot at all ranges.'
        ]);

        Senjata::create([

            'nama_senjata' => 'Bucky',
            'tipe_senjata_id' => 4,
            'link_gambar' => 'https://vgraphs.com/images/weapons/valorant-bucky-profile-icon.png',
            'deskripsi_senjata' => 'Bucky is one of the two shotguns available in Valorant. Bucky holds 5 rounds and is an extremely effective weapon at close range - that is when most of the shrapnel from the shell hit the target. For one shot one kill; at close range (0-8m) you should shoot with Mouse 1 and you should use Mouse 2 for other ranges.'
        ]);

        Senjata::create([

            'nama_senjata' => 'Classic',
            'tipe_senjata_id' => 1,
            'link_gambar' => 'https://vgraphs.com/images/weapons/valorant-classic-profile-icon.png',
            'deskripsi_senjata' => 'The Classic is a pistol that all players receive upon spawning. It has two firing modes, a standard semi-automatic single-bullet primary fire and a semi-automatic shotgun alternate fire that fires three bullets instantly but only at around a third of its usual fire rate.'
        ]);

        Senjata::create([

            'nama_senjata' => 'Ghost',
            'tipe_senjata_id' => 1,
            'link_gambar' => 'https://vgraphs.com/images/weapons/valorant-ghost-profile-icon.png',
            'deskripsi_senjata' => 'The Ghost is a fairly cheap semi-automatic sidearm with good damage and low capacity. It usually is a 2 tap to the head and 5-6 shots to the body. The Ghost comes equipped with a silencer which helps to increase its overall accuracy and reduces the hearing range and silences the sound, making it useful for lurking.'
        ]);

        User::create([
            'name' => 'Muhammad Ilham',
            'email' => '2010817110008@mhs.ulm.ac.id',
            'username' => 'ilham123',
            'id_senjata'=> 1,
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Ilham God',
            'email' => 'ilhamgod@gmail.com',
            'username' => 'ilhamgod123',
            'id_senjata'=> 3,
            'password' => bcrypt('123456')
        ]);

        Map::create([

            'nama_map' => 'Fracture',
            'link_layout' => 'https://cdn.esportsdriven.com/media/upload/images/FRACTURE_CALLOUTS.large.jpg',
            'link_gambar_map' => 'https://assets.skor.id/crop/0x0:0x0/x/photo/2021/09/06/2045678105.jpeg',
            'deskripsi_map' => 'A top secret research facility split apart by a failed radianite experiment. With defender options as divided as the map, the choice is yours: meet the attackers on their own turf or batten down the hatches to weather the assault.'
        ]);

        Map::create([

            'nama_map' => 'Breeze',
            'link_layout' => 'https://www.dexerto.com/wp-content/uploads/2021/05/04/Valorant-Breeze-Minimap.jpg',
            'link_gambar_map' => 'https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt9834851b906877fe/6082129712dc9d3c683578ec/4_27_2021_Patch2.8Article_Banner.jpg',
            'deskripsi_map' => 'Breeze\'s \'unique\' features are present on the A side of the map, mostly to do with A Hall. There are ropes to get players into A Hall. On the defending side players can use the rope at the back of A Site to get onto Bridge and into Hall, and on the attacking side players can use the rope in A Lobby to get into Hall.'
        ]);

        Map::create([

            'nama_map' => 'Icebox',
            'link_layout' => 'https://cdn.esportsdriven.com/media/upload/images/db73bd9e504575ee2e703c1142b68a14_1.large.jpg',
            'link_gambar_map' => 'https://firstsportz.com/wp-content/uploads/2021/06/IMG-20210609-WA0274_copy_1600x900-1024x576.jpg',
            'deskripsi_map' => 'Icebox is the first map to introduce horizontal ziplines, seen at the A Site. Each Icebox site is a complex combat space that features plenty of cover and verticality. This map emphasizes skirmishes, sharp aim, and adaptive play.'
        ]);

        About::create([
            'nama'=> 'Muhammad Ilham Nor Ramadhani',
            'nim'=> '2010817110008',
            'email'=> '2010817110008@mhs.ulm.ac.id',
        ]);

        About::create([
            'nama'=> 'Muhammad Hidayatullah',
            'nim'=> '2010817110012',
            'email'=> '2010817110012@mhs.ulm.ac.id',
        ]);

        About::create([
            'nama'=> 'Muhammad Hasan Adli',
            'nim'=> '2010817210015',
            'email'=> '2010817210015@mhs.ulm.ac.id',
        ]);

    }
}
