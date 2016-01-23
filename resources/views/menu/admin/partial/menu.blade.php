            <div class="tab-pane active" id="details">
                <div class="row">
                    <div class="col-md-6 ">
                        {!! Form::text('name')
                        -> label(trans('menu::menu.label.name'))
                        -> required()
                        -> placeholder(trans('menu::menu.placeholder.name'))!!}
                    </div>
                    <div class="col-md-6 ">
                        {!! Form::text('key')
                        -> label(trans('menu::menu.label.key'))
                        -> required()
                        -> placeholder(trans('menu::menu.placeholder.key'))!!}
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
                        -> options(Lang::get('menu::menu.options.status'))
                        -> label(trans('menu::menu.label.status'))
                        -> placeholder(trans('menu::menu.placeholder.status'))!!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        {!! Form::textarea('description')
                        -> label(trans('menu::menu.label.description'))
                        -> placeholder(trans('menu::menu.placeholder.description'))!!}
                    </div>
                </div>
            </div>
