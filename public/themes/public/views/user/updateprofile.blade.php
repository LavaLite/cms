
			<h1> Update profile {{ get_users('name') }}. </h1>	
            {!!Form::vertical_open()
            ->id('contact')
            ->method('POST')
            ->class('update-profile')!!}

                {!! Form::text('name')
                -> label(trans('user.user.label.name'))
                -> placeholder(trans('user.user.placeholder.name'))!!}

                {!! Form::date('dob')
                -> label(trans('user.user.label.dob'))
                -> value('26 May, 2015')
                -> placeholder(trans('user.user.placeholder.dob'))!!}

                {!! Form::time('time')
                -> label(trans('user.user.label.dob'))
                -> value('05:30 PM')
                -> placeholder(trans('user.user.placeholder.dob'))!!}

                {!! Form::text('designation')
                -> label(trans('user.user.label.designation'))
                -> placeholder(trans('user.user.placeholder.designation')) !!}

                {!! Form::tel('mobile')
                -> label(trans('user.user.label.mobile'))
                -> placeholder(trans('user.user.placeholder.mobile')) !!}

                {!! Form::tel('phone')
                -> label(trans('user.user.label.phone'))
                -> placeholder(trans('user.user.placeholder.phone')) !!}

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

              {!! Form::submit(trans('cms.save'))!!}
            <br>
            <br>

            {!! Form::close() !!}
