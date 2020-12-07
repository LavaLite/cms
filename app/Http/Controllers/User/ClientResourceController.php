<?php

namespace App\Http\Controllers\User;

use App\Interfaces\User\ClientRepositoryInterface;
use App\Http\Requests\User\ClientRequest;
use App\Repositories\User\Presenter\ClientPresenter;
use App\Http\Controllers\ResourceController as BaseController;
use App\Models\Client;

/**
 * Resource controller class for client.
 */
class ClientResourceController extends BaseController
{
    /**
     * Initialize client resource controller.
     *
     * @param type ClientRepositoryInterface $client
     *
     * @return null
     */
    public function __construct(ClientRepositoryInterface $client, $type = null)
    {
        if (!in_array(request('type', 'client'), config('users.types'))) {
            abort(404);
        }
        parent::__construct();
        $this->repository = $client;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\App\Repositories\User\Criteria\ClientResourceCriteria::class);
    }

    /**
     * Display a list of client.
     *
     * @return Response
     */
    public function index(ClientRequest $request, String $type)
    {

        $pageLimit = $request->input('pageLimit', 10);
        $data = $this->repository
            ->setPresenter(ClientPresenter::class)
            ->paginate($pageLimit);
        extract($data);
        $view = 'user::default.index';
        if ($request->ajax()) {
            $view = 'user::default.more';
        }
        return $this->response->setMetaTitle(trans('user::client.names', ['client' => $type]))
            ->view($view)
            ->data(compact('data', 'meta', 'type'))
            ->output();
    }

    /**
     * Display client.
     *
     * @param Request $request
     * @param Model   $client
     *
     * @return Response
     */
    public function show(ClientRequest $request, String $type, Client $client)
    {
        if ($client->exists) {
            $view = ["user::{$type}.show", 'user::default.show'];
        } else {
            $view = ["user::{$type}.new", 'user::default.new'];
        }

        return $this->response->setMetaTitle(trans('app.view') . ' ' . trans('user::client.name', ['client' => $type]))
            ->data(compact('client', 'type'))
            ->view($view)
            ->output();
    }

    /**
     * Show the form for creating a new client.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(ClientRequest $request, String $type)
    {
        $client = $this->repository->newInstance([]);

        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('user::client.name', ['client' => $type]))
            ->view(["user::{$type}.create", 'user::default.create'])
            ->data(compact('client', 'type'))
            ->output();
    }

    /**
     * Create new client.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ClientRequest $request, String $type)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $attributes['user_type'] = user_type();
            $attributes['api_token'] = Str::random(60);
            $client = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('user::client.name', ['client' => $type])]))
                ->code(204)
                ->status('success')
                ->url(guard_url('user/' . $type . '/' . $client->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/user/' . $type))
                ->redirect();
        }
    }

    /**
     * Show client for editing.
     *
     * @param Request $request
     * @param Model   $client
     *
     * @return Response
     */
    public function edit(ClientRequest $request, String $type, Client $client)
    {
        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('user::client.name', ['client' => $type]))
            ->view(["user::{$type}.edit", 'user::default.edit'])
            ->data(compact('client', 'type'))
            ->output();
    }

    /**
     * Update the client.
     *
     * @param Request $request
     * @param Model   $client
     *
     * @return Response
     */
    public function update(ClientRequest $request, String $type, Client $client)
    {
        try {
            $attributes = $request->all();

            $client->update($attributes);

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('user::client.name', ['client' => $type])]))
                ->code(204)
                ->status('success')
                ->url(guard_url('user/' . $type . '/' . $client->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('user/' . $type . '/' . $client->getRouteKey()))
                ->redirect();
        }
    }

    /**
     * Remove the client.
     *
     * @param Model $client
     *
     * @return Response
     */
    public function destroy(ClientRequest $request, String $type, Client $client)
    {
        try {
            $client->delete();

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('user::client.name', ['client' => $type])]))
                ->code(202)
                ->status('success')
                ->url(guard_url('user/' . $type . '/0'))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('user/' . $type . '/' . $client->getRouteKey()))
                ->redirect();
        }
    }

    /**
     * Remove multiple client.
     *
     * @param Model $client
     *
     * @return Response
     */
    public function delete(ClientRequest $request, String $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('user::client.name', ['client' => $type])]))
                ->status('success')
                ->code(202)
                ->url(guard_url('user/' . $type))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->status('error')
                ->code(400)
                ->url(guard_url('/user/' . $type))
                ->redirect();
        }
    }

    /**
     * Restore deleted clients.
     *
     * @param Model $client
     *
     * @return Response
     */
    public function restore(ClientRequest $request, String $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('user::client.name', ['client' => $type])]))
                ->status('success')
                ->code(202)
                ->url(guard_url('/user/' . $type))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->status('error')
                ->code(400)
                ->url(guard_url('/user/' . $type))
                ->redirect();
        }
    }
}
