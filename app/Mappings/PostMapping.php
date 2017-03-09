<?php

namespace App\Mappings;

use App\Entities\Post;
use LaravelDoctrine\Fluent\EntityMapping;

class PostMapping extends EntityMapping {

    public function mapFor() {
        return Post::class;
    }

    public function map(\LaravelDoctrine\Fluent\Fluent $builder) {
        $builder->increments('id');
        $builder->string('title');
        $builder->text('content');
        $builder->string('image');
        $builder->dateTime('created_at')->timestampable()->onUpdate();
        $builder->dateTime('updated_at')->timestampable()->onUpdate();

        $builder->belongsTo('App\Entities\User');
        $builder->hasMany('App\Entities\Comment')->mappedBy('post');
        $builder->manyToMany('App\Entities\Tag', 'tags')->inversedBy('posts');
        
    }

}
