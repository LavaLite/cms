<?php

namespace App\Http\Controllers\Litepie;

use App\Forms\Permission as PermissionForm;
use App\Http\Controllers\ResourceController as BaseController;
use App\Http\Requests\Litepie\PermissionRequest;
use App\Repositories\Eloquent\Filters\PermissionResourceFilter;
use App\Repositories\Eloquent\Presenters\PermissionListPresenter;
use Exception;
use Litepie\Repository\Filter\RequestFilter;
use Litepie\Roles\Interfaces\PermissionRepositoryInterface;

/**
 * Resource controller class for permission.
 */
class PermissionResourceController extends BaseController
{

    /**
     * Initialize permission resource controller.
     *
     *
     * @return null
     */
    public function __construct(PermissionRepositoryInterface $permission)
    {
        parent::__construct();
        $this->form = PermissionForm::setAttributes()->toArray();
        $this->modules = $this->modules(config('role.modules'), 'role', guard_url('role'), '.');
        $this->repository = $permission;
    }

    /**
     * Display a list of permission.
     *
     * @return Response
     */
    public function index(PermissionRequest $request)
    {
        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(PermissionResourceFilter::class)
            ->setPresenter(PermissionListPresenter::class)
            ->simplePaginate($pageLimit)
        // ->withQueryString()
            ->toArray();

        extract($data);
        $form = $this->form;
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('role.permission.names'))
            ->view('litepie.role.permission.index')
            ->data(compact('data', 'meta', 'links', 'modules', 'form'))
            ->output();
    }

    /**
     * Display permission.
     *
     * @param Request $request
     * @param Model   $permission
     *
     * @return Response
     */
    public function show(PermissionRequest $request, PermissionRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response
            ->setMetaTitle(trans('app.view') . ' ' . trans('role.permission.name'))
            ->data(compact('data', 'form', 'modules', 'form'))
            ->view('litepie.role.permission.show')
            ->output();
    }

    /**
     * Show the form for creating a new permission.
     *
     * @param Request $request
     *x
     * @return Response
     */
    public function create(PermissionRequest $request, PermissionRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('role.permission.name'))
            ->view('litepie.role.permission.create')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Create new permission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(PermissionRequest $request, PermissionRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $attributes['user_type'] = user_type();
            $repository->create($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.created', ['Module' => trans('role.permission.name')]))
                ->code(204)
                ->data(compact('data'))
                ->status('success')
                ->url(guard_url('role/permission/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/role/permission'))
                ->redirect();
        }

    }

    /**
     * Show permission for editing.
     *
     * @param Request $request
     * @param Model   $permission
     *
     * @return Response
     */
    public function edit(PermissionRequest $request, PermissionRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();

        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('role.permission.name'))
            ->view('litepie.role.permission.edit')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Update the permission.
     *
     * @param Request $request
     * @param Model   $permission
     *
     * @return Response
     */
    public function update(PermissionRequest $request, PermissionRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $repository->update($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('role.permission.name')]))
                ->code(204)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('role/permission/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('role/permission/' . $data['id']))
                ->redirect();
        }

    }

    /**
     * Remove the permission.
     *
     * @param Model   $permission
     *
     * @return Response
     */
    public function destroy(PermissionRequest $request, PermissionRepositoryInterface $repository)
    {
        try {
            $repository->delete();
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('role.permission.name')]))
                ->code(202)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('role/permission/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('role/permission/' . $data['id']))
                ->redirect();
        }

    }
}
