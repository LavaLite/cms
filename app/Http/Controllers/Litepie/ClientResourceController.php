<?php

namespace App\Http\Controllers\Litepie;

use App\Forms\Client as ClientForm;
use App\Http\Controllers\ResourceController as BaseController;
use App\Http\Requests\Litepie\ClientRequest;
use App\Repositories\Eloquent\Filters\ClientResourceFilter;
use App\Repositories\Eloquent\Presenters\ClientListPresenter;
use Exception;
use Litepie\Repository\Filter\RequestFilter;
use Litepie\User\Interfaces\ClientRepositoryInterface;

/**
 * Resource controller class for client.
 */
class ClientResourceController extends BaseController
{

    /**
     * Initialize client resource controller.
     *
     *
     * @return null
     */
    public function __construct(ClientRepositoryInterface $client)
    {
        parent::__construct();
        $this->form = ClientForm::setAttributes()->toArray();
        $this->modules = $this->modules(config('user.modules'), 'user', guard_url('user'), '.');
        $this->repository = $client;
    }

    /**
     * Display a list of client.
     *
     * @return Response
     */
    public function index(ClientRequest $request)
    {

        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(ClientResourceFilter::class)
            ->setPresenter(ClientListPresenter::class)
            ->simplePaginate($pageLimit)
        // ->withQueryString()
            ->toArray();

        extract($data);
        $form = $this->form;
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('user.client.names'))
            ->view('litepie.user.client.index')
            ->data(compact('data', 'meta', 'links', 'modules', 'form'))
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
    public function show(ClientRequest $request, ClientRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response
            ->setMetaTitle(trans('app.view') . ' ' . trans('user.client.name'))
            ->data(compact('data', 'form', 'modules', 'form'))
            ->view('litepie.user.client.show')
            ->output();
    }

    /**
     * Show the form for creating a new client.
     *
     * @param Request $request
     *x
     * @return Response
     */
    public function create(ClientRequest $request, ClientRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('user.client.name'))
            ->view('litepie.user.client.create')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Create new client.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ClientRequest $request, ClientRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $attributes['user_type'] = user_type();
            $repository->create($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.created', ['Module' => trans('user.client.name')]))
                ->code(204)
                ->data(compact('data'))
                ->status('success')
                ->url(guard_url('user/client/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/user/client'))
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
    public function edit(ClientRequest $request, ClientRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();

        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('user.client.name'))
            ->view('litepie.user.client.edit')
            ->data(compact('data', 'form', 'modules'))
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
    public function update(ClientRequest $request, ClientRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $repository->update($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('user.client.name')]))
                ->code(204)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('user/client/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('user/client/' . $data['id']))
                ->redirect();
        }

    }

    /**
     * Remove the client.
     *
     * @param Model   $client
     *
     * @return Response
     */
    public function destroy(ClientRequest $request, ClientRepositoryInterface $repository)
    {
        try {
            $repository->delete();
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('user.client.name')]))
                ->code(202)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('user/client/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('user/client/' . $data['id']))
                ->redirect();
        }

    }
}
