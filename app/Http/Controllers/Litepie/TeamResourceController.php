<?php

namespace App\Http\Controllers\Litepie;

use App\Forms\Team as TeamForm;
use App\Http\Requests\Litepie\TeamRequest;
use App\Repositories\Eloquent\Filters\TeamResourceFilter;
use App\Repositories\Eloquent\Presenters\TeamListPresenter;
use Exception;
use Litepie\Http\Controllers\ResourceController as BaseController;
use Litepie\Repository\Filter\RequestFilter;
use Litepie\Team\Interfaces\TeamRepositoryInterface;

/**
 * Resource controller class for team.
 */
class TeamResourceController extends BaseController
{

    /**
     * Initialize team resource controller.
     *
     *
     * @return null
     */
    public function __construct(TeamRepositoryInterface $team)
    {
        parent::__construct();
        $this->form = TeamForm::setAttributes()->toArray();
        $this->modules = $this->modules(config('team.modules'), '', guard_url('team'), '');
        $this->repository = $team;
    }

    /**
     * Display a list of team.
     *
     * @return Response
     */
    public function index(TeamRequest $request)
    {

        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(TeamResourceFilter::class)
            ->setPresenter(TeamListPresenter::class)
            ->simplePaginate($pageLimit)
        // ->withQueryString()
            ->toArray();

        extract($data);
        $form = $this->form;
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('team.names'))
            ->view('litepie.team.team.index')
            ->data(compact('data', 'meta', 'links', 'modules', 'form'))
            ->output();
    }

    /**
     * Display team.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return Response
     */
    public function show(TeamRequest $request, TeamRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response
            ->setMetaTitle(trans('app.view') . ' ' . trans('team.team.name'))
            ->data(compact('data', 'form', 'modules', 'form'))
            ->view('litepie.team.team.show')
            ->output();
    }

    /**
     * Show the form for creating a new team.
     *
     * @param Request $request
     *x
     * @return Response
     */
    public function create(TeamRequest $request, TeamRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('team.team.name'))
            ->view('litepie.team.team.create')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Create new team.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(TeamRequest $request, TeamRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $attributes['user_type'] = user_type();
            $repository->create($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.created', ['Module' => trans('team.team.name')]))
                ->code(204)
                ->data(compact('data'))
                ->status('success')
                ->url(guard_url('team/team/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/team/team'))
                ->redirect();
        }

    }

    /**
     * Show team for editing.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return Response
     */
    public function edit(TeamRequest $request, TeamRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();

        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('team.team.name'))
            ->view('litepie.team.team.edit')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Update the team.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return Response
     */
    public function update(TeamRequest $request, TeamRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $repository->update($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('team.team.name')]))
                ->code(204)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('team/team/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('team/team/' . $data['id']))
                ->redirect();
        }

    }

    /**
     * Remove the team.
     *
     * @param Model   $team
     *
     * @return Response
     */
    public function destroy(TeamRequest $request, TeamRepositoryInterface $repository)
    {
        try {
            $repository->delete();
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('team.team.name')]))
                ->code(202)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('team/team/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('team/team/' . $data['id']))
                ->redirect();
        }

    }
}
