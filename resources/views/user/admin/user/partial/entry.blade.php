<div class="tab-pane active" id="details">
    <div class="row">
        <div class='col-md-3 col-sm-4'>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('name')
                -> label(trans('user.user.label.name'))
                -> placeholder(trans('user.user.placeholder.name')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('email')
                -> label(trans('user.user.label.email'))
                -> placeholder(trans('user.user.placeholder.email')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::datetime('dob')
                -> label(trans('user.user.label.dob'))
                -> placeholder(trans('user.user.placeholder.dob')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::datetime('password')
                -> label(trans('user.user.label.password'))
                -> placeholder(trans('user.user.placeholder.password')) !!}
            </div>
        </div>
        <!--
        <div class='col-md-3 col-sm-4'>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('address')
                -> label(trans('user.user.label.address'))
                -> placeholder(trans('user.user.placeholder.address')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('street')
                -> label(trans('user.user.label.street'))
                -> placeholder(trans('user.user.placeholder.street')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('city')
                -> label(trans('user.user.label.city'))
                -> placeholder(trans('user.user.placeholder.city')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('district')
                -> label(trans('user.user.label.district'))
                -> placeholder(trans('user.user.placeholder.district')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('state')
                -> label(trans('user.user.label.state'))
                -> placeholder(trans('user.user.placeholder.state')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('country')
                -> label(trans('user.user.label.country'))
                -> placeholder(trans('user.user.placeholder.country')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::url('web')
                -> label(trans('user.user.label.web'))
                -> placeholder(trans('user.user.placeholder.web')) !!}
            </div>
        </div>
        -->
        <div class='col-md-3 col-sm-4'>
            <div class='col-md-12 col-sm-12'>
                {!! Form::radios('sex')
                -> radios(trans('user.user.options.sex'))
                -> label(trans('user.user.label.sex')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::select('reporting_to')
                -> options(trans('user.user.options.reporting_to'))
                -> label(trans('user.user.label.reporting_to'))
                -> placeholder(trans('user.user.placeholder.reporting_to')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::select('department')
                -> options(trans('user.user.options.department'))
                -> label(trans('user.user.label.department'))
                -> placeholder(trans('user.user.placeholder.department')) !!}
            </div>
        </div>
        <div class='col-md-3 col-sm-4'>
            <div class='col-md-12 col-sm-12'>
                {!! Form::text('designation')
                -> label(trans('user.user.label.designation'))
                -> placeholder(trans('user.user.placeholder.designation')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::tel('mobile')
                -> label(trans('user.user.label.mobile'))
                -> placeholder(trans('user.user.placeholder.mobile')) !!}
            </div>
            <div class='col-md-12 col-sm-12'>
                {!! Form::tel('phone')
                -> label(trans('user.user.label.phone'))
                -> placeholder(trans('user.user.placeholder.phone')) !!}
            </div>
        </div>
        <div class='col-md-3 col-sm-4'>
            <div class='col-md-12 col-sm-12'>
                {!! Form::file('photo')
                -> label(trans('user.user.label.photo'))
                -> placeholder(trans('user.user.placeholder.photo')) !!}
            </div>
        </div>
    </div>

</div>
<div class="tab-pane " id="roles">
    <div class="row">
        <div class='col-md-3 col-sm-5'>
            <table class="table">
                <thead>
                    <th>Role</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{ ucfirst($role->name) }}</td>
                        <td>
                            <input name="roles[{{ $role->getRouteKey() }}]" type="checkbox" {{ ( $user-> hasRole($role->name)) ? 'checked' : '' }} value='{{ $role->getRouteKey() }}' >
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class='col-md-9 col-sm-7'>
            <table class="table">
                <thead>
                    <th>Modules</th>
                    <th>Permissions</th>
                </thead>
                <tbody>
                    @foreach($permissions as $keyPermission => $permission)
                    <tr>
                        <td>{{ucfirst($keyPermission)}}</td>
                        <td>
                            @forelse($permission as $key => $val)
                            &nbsp; <input name="permissions[{{ $keyPermission. '.' .$key }}]" type="checkbox" {{ (@array_key_exists($keyPermission. '.' .$key, $user->permissions)) ? 'checked' : '' }} value='1'> {{$val}}
                            @empty
                            No permissions assigned
                            @endforelse
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>