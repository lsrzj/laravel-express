<?php

namespace App\Mappings;

use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;
use App\Entities\User;

class UserMapping extends EntityMapping {

    public function mapFor() {
        return User::class;
    }

    public function map(Fluent $builder) {
        $builder->increments('id');
        $builder->string('name');
        $builder->string('email');
        $builder->string('password');
        $builder->string('remember_token');
        $builder->dateTime('created_at')->timestampable()->onCreate();
        $builder->dateTime('updated_at')->timestampable()->onUpdate();

    }

}
