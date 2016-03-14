
            <h1> Change password {{ get_users('name') }}. </h1>   
            {!!Form::vertical_open()
            ->id('contact')
            ->method('POST')
            ->class('change-password')!!}

            {!! Form::text('current_password')
            -> label(trans('user.user.label.current_password'))
            -> placeholder(trans('user.user.placeholder.current_password'))!!}

            {!! Form::password('password')
            -> label(trans('user.user.label.new_password'))
            -> placeholder(trans('user.user.placeholder.new_password'))!!}
            

            {!! Form::password('password_confirmation')
            -> label(trans('user.user.label.new_password_confirmation'))
            -> placeholder(trans('user.user.placeholder.new_password_confirmation'))!!}
            
            {!! Form::submit(trans('user.changepword'))!!}
            <br>
            <br>

            {!! Form::close() !!}
