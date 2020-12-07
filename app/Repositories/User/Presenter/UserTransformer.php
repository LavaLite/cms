<?php

namespace App\Repositories\User\Presenter;

use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(\App\Models\User $user)
    {
        return [
            'id' => $user->getRouteKey(),
            'name' => $user->name,
            'email' => $user->email,
            'parent_id' => $user->parent_id,
            'api_token' => $user->api_token,
            'remember_token' => $user->remember_token,
            'sex' => $user->sex,
            'dob' => $user->dob,
            'designation' => $user->designation,
            'mobile' => $user->mobile,
            'phone' => $user->phone,
            'address' => $user->address,
            'street' => $user->street,
            'city' => $user->city,
            'district' => $user->district,
            'state' => $user->state,
            'country' => $user->country,
            'photo' => $user->photo,
            'web' => $user->web,
            'permissions' => $user->permissions,
            'status' => $user->status,
            'created_at' => format_date($user->created_at),
            'updated_at' => format_date($user->updated_at),
        ];
    }
}
