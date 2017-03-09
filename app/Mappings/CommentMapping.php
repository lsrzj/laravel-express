<?php

namespace App\Mappings;

use LaravelDoctrine\Fluent\EntityMapping;
use App\Entities\Comment;

class CommentMapping extends EntityMapping {

    public function mapFor() {
        return Comment::class;
    }

    public function map(\LaravelDoctrine\Fluent\Fluent $builder) {
        $builder->increments('id');
        $builder->string('name');
        $builder->string('email');
        $builder->string('comment');
        $builder->dateTime('created_at')->timestampable()->onCreate();
        $builder->dateTime('updated_at')->timestampable()->onUpdate();

        $builder->belongsTo('App\Entities\Post');
    }

}
