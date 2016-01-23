{!! Form::open_vertical()
-> action ('/admin/user/update-profile')
-> method ('POST')
-> id('form-update-profile')  !!}
{!! csrf_field(); !!}

        {!! Form::text('name')
        -> label(trans('user.user.label.name'))
        -> placeholder(trans('user.user.placeholder.name')) !!}

        {!! Form::tel('mobile')
        -> label(trans('user.user.label.mobile'))
        -> placeholder(trans('user.user.placeholder.mobile')) !!}

        {!! Form::tel('phone')
        -> label(trans('user.user.label.phone'))
        -> placeholder(trans('user.user.placeholder.phone')) !!}

        {!! Form::date('dob')
        -> label(trans('user.user.label.dob'))
        -> placeholder(trans('user.user.placeholder.dob')) !!}

        {!! Form::text('address')
        -> label(trans('user.user.label.address'))
        -> placeholder(trans('user.user.placeholder.address')) !!}

        {!! Form::text('street')
        -> label(trans('user.user.label.street'))
        -> placeholder(trans('user.user.placeholder.street')) !!}

        {!! Form::text('city')
        -> label(trans('user.user.label.city'))
        -> placeholder(trans('user.user.placeholder.city')) !!}

        {!! Form::text('district')
        -> label(trans('user.user.label.district'))
        -> placeholder(trans('user.user.placeholder.district')) !!}

        {!! Form::text('state')
        -> label(trans('user.user.label.state'))
        -> placeholder(trans('user.user.placeholder.state')) !!}

        {!! Form::text('country')
        -> label(trans('user.user.label.country'))
        -> placeholder(trans('user.user.placeholder.country')) !!}

        {!! Form::url('web')
        -> label(trans('user.user.label.web'))
        -> placeholder(trans('user.user.placeholder.web')) !!}

{!! Form::close() !!}