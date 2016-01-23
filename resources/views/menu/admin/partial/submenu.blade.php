<div class="tab-pane active" id="details">
    <div class="row">
        <div class="col-md-6 ">
            {!! Form::text('name')
            -> label(trans('menu::menu.label.name'))
            -> placeholder(trans('menu::menu.placeholder.name'))!!}
        </div>
        <div class="col-md-6 ">
            {!! Form::text('url')
            -> label(trans('menu::menu.label.url'))
            -> placeholder(trans('menu::menu.placeholder.url'))!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 ">
            {!! Form::text('order')
            -> label(trans('menu::menu.label.order'))
            -> placeholder(trans('menu::menu.placeholder.order'))!!}
        </div>
        <div class="col-md-6">
            {!! Form::select('status')
            -> options(trans('menu::menu.options.status'))
            -> label(trans('menu::menu.label.status'))
            -> placeholder(trans('menu::menu.placeholder.status'))!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 ">
            {!! Form::select('open')
            -> options(trans('menu::menu.options.open'))
            -> label(trans('menu::menu.label.open'))
            -> placeholder(trans('menu::menu.placeholder.open'))!!}
        </div>
        <div class="col-md-6 ">
            {!! Form::hidden('has_sub')
            -> forceValue('0')!!}
            {!! Form::checkbox('has_sub')
            -> label(trans('menu::menu.label.has_sub'))
            -> addClass('checkbox-has_sub')!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 ">
            {!! Form::text('key')
            -> label(trans('menu::menu.label.key'))
            -> placeholder(trans('menu::menu.placeholder.key'))!!}
        </div>
        <div class="col-md-6 ">
            {!! Form::text('icon')
            -> label(trans('menu::menu.label.icon'))
            -> placeholder(trans('menu::menu.placeholder.icon'))!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            {!! Form::textarea('description')
            -> label(trans('menu::menu.label.description'))
            -> placeholder(trans('menu::menu.placeholder.description'))!!}
            {!! Form::hidden('parent_id')->id('parent_id') !!}
        </div>
    </div>
</div>