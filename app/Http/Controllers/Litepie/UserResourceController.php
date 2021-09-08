<?php

namespace App\Http\Controllers\Litepie;

use App\Forms\User as UserForm;
use App\Http\Controllers\ResourceController as BaseController;
use App\Http\Requests\Litepie\UserRequest;
use App\Repositories\Eloquent\Filters\UserResourceFilter;
use App\Repositories\Eloquent\Presenters\UserListPresenter;
use Exception;
use Litepie\Repository\Filter\RequestFilter;
use Litepie\User\Interfaces\UserRepositoryInterface;

/**
 * Resource controller class for user.
 */
class UserResourceController extends BaseController
{

    /**
     * Initialize user resource controller.
     *
     *
     * @return null
     */
    public function __construct(UserRepositoryInterface $user)
    {
        parent::__construct();
        $this->form = UserForm::setAttributes()->toArray();
        $this->modules = $this->modules(config('user.modules'), 'user', guard_url('user'), '.');
        $this->repository = $user;
    }

    /**
     * Display a list of user.
     *
     * @return Response
     */
    public function index(UserRequest $request)
    {

        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(UserResourceFilter::class)
            ->setPresenter(UserListPresenter::class)
            ->simplePaginate($pageLimit)
            ->toArray();

        extract($data);
        $form = $this->form;
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('user.user.names'))
            ->view('litepie.user.user.index')
            ->data(compact('data', 'meta', 'links', 'modules', 'form'))
            ->output();
    }

    /**
     * Display user.
     *
     * @param Request $request
     * @param Model   $user
     *
     * @return Response
     */
    public function show(UserRequest $request, UserRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response
            ->setMetaTitle(trans('app.view') . ' ' . trans('user.user.name'))
            ->data(compact('data', 'form', 'modules', 'form'))
            ->view('litepie.user.user.show')
            ->output();
    }

    /**
     * Show the form for creating a new user.
     *
     * @param Request $request
     *x
     * @return Response
     */
    public function create(UserRequest $request, UserRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('user.user.name'))
            ->view('litepie.user.user.create')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Create new user.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(UserRequest $request, UserRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $attributes['user_type'] = user_type();
            $repository->create($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.created', ['Module' => trans('user.user.name')]))
                ->code(204)
                ->data(compact('data'))
                ->status('success')
                ->url(guard_url('user/user/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/user/user'))
                ->redirect();
        }

    }

    /**
     * Show user for editing.
     *
     * @param Request $request
     * @param Model   $user
     *
     * @return Response
     */
    public function edit(UserRequest $request, UserRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();

        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('user.user.name'))
            ->view('litepie.user.user.edit')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Update the user.
     *
     * @param Request $request
     * @param Model   $user
     *
     * @return Response
     */
    public function update(UserRequest $request, UserRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $repository->update($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('user.user.name')]))
                ->code(204)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('user/user/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('user/user/' . $data['id']))
                ->redirect();
        }

    }

    /**
     * Remove the user.
     *
     * @param Model   $user
     *
     * @return Response
     */
    public function destroy(UserRequest $request, UserRepositoryInterface $repository)
    {
        try {
            $repository->delete();
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('user.user.name')]))
                ->code(202)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('user/user/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('user/user/' . $data['id']))
                ->redirect();
        }

    }
}
