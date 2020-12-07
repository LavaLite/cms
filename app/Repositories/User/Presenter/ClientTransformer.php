<?php

namespace App\Repositories\User\Presenter;

use League\Fractal\TransformerAbstract;

class ClientTransformer extends TransformerAbstract
{
    public function transform(\Litepie\User\Models\Client $client)
    {
        return [
            'id' => $client->getRouteKey(),
            'name' => $client->name,
            'email' => $client->email,
            'password' => $client->password,
            'api_token' => $client->api_token,
            'remember_token' => $client->remember_token,
            'sex' => $client->sex,
            'dob' => $client->dob,
            'mobile' => $client->mobile,
            'phone' => $client->phone,
            'address' => $client->address,
            'street' => $client->street,
            'city' => $client->city,
            'district' => $client->district,
            'state' => $client->state,
            'country' => $client->country,
            'photo' => $client->photo,
            'web' => $client->web,
            'status' => $client->status,
            'upload_folder' => $client->upload_folder,
            'deleted_at' => $client->deleted_at,
            'created_at' => $client->created_at,
            'updated_at' => $client->updated_at,
            'url' => [
                'public' => trans_url('user/' . $client->getPublicKey()),
                'user' => guard_url('user/client/' . $client->getRouteKey()),
            ],
            'status' => trans($client->status),
            'created_at' => format_date($client->created_at),
            'updated_at' => format_date($client->updated_at),
        ];
    }
}
