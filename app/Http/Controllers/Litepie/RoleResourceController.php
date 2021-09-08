<?php

namespace App\Http\Controllers\Litepie;

use App\Forms\Role as RoleForm;
use App\Http\Requests\Litepie\RoleRequest;
use App\Repositories\Eloquent\Filters\RoleResourceFilter;
use App\Repositories\Eloquent\Presenters\RoleListPresenter;
use Exception;
use Litepie\Http\Controllers\ResourceController as BaseController;
use Litepie\Repository\Filter\RequestFilter;
use Litepie\Roles\Interfaces\RoleRepositoryInterface;

/**
 * Resource controller class for role.
 */
class RoleResourceController extends BaseController
{

    /**
     * Initialize role resource controller.
     *
     *
     * @return null
     */
    public function __construct(RoleRepositoryInterface $role)
    {
        parent::__construct();
        $this->form = RoleForm::setAttributes()->toArray();
        $this->modules = $this->modules(config('role.modules'), 'role', guard_url('role'), '.');
        $this->repository = $role;
    }

    /**
     * Display a list of role.
     *
     * @return Response
     */
    public function index(RoleRequest $request)
    {

        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(RoleResourceFilter::class)
            ->setPresenter(RoleListPresenter::class)
            ->simplePaginate($pageLimit)
        // ->withQueryString()
            ->toArray();

        extract($data);
        $form = $this->form;
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('role.role.names'))
            ->view('litepie.role.role.index')
            ->data(compact('data', 'meta', 'links', 'modules', 'form'))
            ->output();
    }

    /**
     * Display role.
     *
     * @param Request $request
     * @param Model   $role
     *
     * @return Response
     */
    public function show(RoleRequest $request, RoleRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response
            ->setMetaTitle(trans('app.view') . ' ' . trans('role.role.name'))
            ->data(compact('data', 'form', 'modules', 'form'))
            ->view('litepie.role.role.show')
            ->output();
    }

    /**
     * Show the form for creating a new role.
     *
     * @param Request $request
     *x
     * @return Response
     */
    public function create(RoleRequest $request, RoleRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('role.role.name'))
            ->view('litepie.role.role.create')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Create new role.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(RoleRequest $request, RoleRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $attributes['user_type'] = user_type();
            $repository->create($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.created', ['Module' => trans('role.role.name')]))
                ->code(204)
                ->data(compact('data'))
                ->status('success')
                ->url(guard_url('role/role/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/role/role'))
                ->redirect();
        }

    }

    /**
     * Show role for editing.
     *
     * @param Request $request
     * @param Model   $role
     *
     * @return Response
     */
    public function edit(RoleRequest $request, RoleRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();

        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('role.role.name'))
            ->view('litepie.role.role.edit')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Update the role.
     *
     * @param Request $request
     * @param Model   $role
     *
     * @return Response
     */
    public function update(RoleRequest $request, RoleRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $repository->update($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('role.role.name')]))
                ->code(204)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('role/role/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('role/role/' . $data['id']))
                ->redirect();
        }

    }

    /**
     * Remove the role.
     *
     * @param Model   $role
     *
     * @return Response
     */
    public function destroy(RoleRequest $request, RoleRepositoryInterface $repository)
    {
        try {
            $repository->delete();
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('role.role.name')]))
                ->code(202)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('role/role/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('role/role/' . $data['id']))
                ->redirect();
        }

    }
}
