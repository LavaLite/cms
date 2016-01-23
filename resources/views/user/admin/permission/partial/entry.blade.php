                <div class='col-md-4 col-sm-6'>
                   {!! Form::text('name')
                   -> label(trans('user.permission.label.name'))
                   -> placeholder(trans('user.permission.placeholder.name'))!!}
               </div>
               <div class='col-md-4 col-sm-6'>
                   {!! Form::text('slug')
                   -> label(trans('user.permission.label.slug'))
                   -> placeholder(trans('user.permission.placeholder.slug'))!!}
               </div>
