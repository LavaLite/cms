<div class='col-md-3 col-sm-6'>
    {!! Form::text('name')
    -> label(trans('user.role.label.name'))
    -> placeholder(trans('user.role.placeholder.name'))!!}
</div>
<div class='col-md-9 col-sm-6'>
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
                    &nbsp; <input name="permissions[{{ $keyPermission. '.' .$key }}]" type="checkbox" {{ @array_key_exists($keyPermission. '.' .$key, $role->permissions) ? 'checked' : '' }} value='1'> {{$val}}
                    @empty
                    No permissions assigned
                    @endforelse
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
