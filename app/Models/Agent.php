<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Agent
{
    private static $blog_agents = [
        [
            "name" => "Brimstone",
            "slug" => "brimstone",
            "roles" => "Controller",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo accusantium, 
            natus architecto fugit nihil voluptatum vitae itaque consequuntur accusamus a impedit nostrum? Ullam, 
            aperiam autem id quasi dicta possimus voluptatibus placeat dolore, reiciendis quae quidem libero 
            consequatur beatae voluptatum! Mollitia recusandae incidunt esse illo reiciendis a fuga, delectus 
            quia tempore officia tenetur, doloribus perspiciatis impedit, ipsum atque. Dolorem, incidunt quod et 
            dignissimos aut rerum dolor perspiciatis autem qui soluta eos aspernatur molestiae! Dignissimos porro 
            nostrum, nulla quo quam illo."
        ],
        [
            "name" => "Viper",
            "slug" => "viper",
            "roles" => "Controller",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis hic exercitationem, 
            ipsa eligendi dicta neque. Molestiae et sit, nisi sint asperiores deleniti eum itaque 
            maiores unde quos quisquam quibusdam rem cum necessitatibus est, vero minus atque 
            amet voluptate eaque! Atque similique animi consectetur? Eveniet omnis expedita 
            reprehenderit maiores odit id a sunt. Optio atque obcaecati architecto fugiat esse 
            illum! Ea, perspiciatis ipsam quisquam, distinctio perferendis eius debitis aliquam 
            unde soluta accusamus vel repudiandae quos enim? Molestiae, sapiente beatae id ex 
            nobis, saepe, quia quidem fugit repellendus ipsum a quas omnis modi delectus explicabo. 
            Esse perferendis earum facere numquam architecto quibusdam."
        ]
    ];
    
    public static function all(){
        return collect(self::$blog_agents);
    }

    public static function find($slug){
        $blog_agents = static::all();
        return $blog_agents->firstWhere('slug', $slug); 
    }
}
