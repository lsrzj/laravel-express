<?php

namespace App\Mappings;

use LaravelDoctrine\Fluent\EntityMapping;
use App\Entities\Tag;

class TagMapping extends EntityMapping {

    public function mapFor() {
        return Tag::class;
    }

    public function map(\LaravelDoctrine\Fluent\Fluent $builder) {
        $builder->increments('id');
        $builder->string('name');

        $builder->belongsToMany('App\Entities\Post')->mappedBy('posts');
    }

}
