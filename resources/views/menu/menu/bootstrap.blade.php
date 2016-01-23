<ul class="nav nav-pills pull-right">
    <?php $i=0?>
    @while (isset($menu['0.' . ++$i]))
    @if (($menu['0.' . $i]->parent))
    <li class="{{ ($menu['0.' . $i]->active) ?  'active' : '' }}"  role="button" class="dropdown-toggle" data-toggle="dropdown">
        <a href="{{URL::to($menu['0.' . $i]->url)}}" >
            <i class="{{{ !empty($menu['0.' . $i]->icon) ?  $menu['0.' . $i]->icon : '' }}}"></i> <span>{{$menu['0.' . $i]->name}}</span>
            <b class="caret"></b>
        </a>
        @include('menu::menu.sub.bootstrap', array('menu' => $menu, 'key' => '0.' . $i))
    </li>
    @else
    <li  {{ isset($menu['0.' . $i]->active) ?  'class="active"' : '' }}>
        <a href="{{URL::to($menu['0.' . $i]->url)}}">
            <i class="{{{ !empty($menu['0.' . $i]->icon) ?  $menu['0.' . $i]->icon : '' }}}"></i>
            {{$menu['0.' . $i]->name}}
        </a>
    </li>
    @endif
    @endwhile
</ul>
