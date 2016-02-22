<ul class="dropdown-menu animated fadeIn" role="menu">
    <?php $i=0?>
    @while (isset($menu[$key . '.' . ++$i]))
    @if (($menu[$key . '.' . $i]->parent))
    <li class="{{ ($menu[$key . '.' . $i]->active) ?  'active' : '' }}"  role="button" class="dropdown-toggle" data-toggle="dropdown">
        <a href="{{URL::to($menu[$key . '.' . $i]->url)}}" >
            <i class="{{{ !empty($menu[$key . '.' . $i]->icon) ?  $menu[$key . '.' . $i]->icon : '' }}}"></i> <span>{{$menu[$key . '.' . $i]->name}}</span>
            <b class="caret"></b>
        </a>
        @include('menu::menu.sub.bootstrap', array('menu' => $menu, 'key' => $key . '.' . $i))
    </li>
    @else
    <li  {{ isset($menu[$key . '.' . $i]->active) ?  'class="active"' : '' }}>
        <a href="{{URL::to($menu[$key . '.' . $i]->url)}}">
            <i class="{{{ !empty($menu[$key . '.' . $i]->icon) ?  $menu[$key . '.' . $i]->icon : '' }}}"></i>
            {{$menu[$key . '.' . $i]->name}}
        </a>
    </li>
    @endif
    @endwhile
</ul>
