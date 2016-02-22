<ul class="treeview-menu {{ ($menu[$key]->active) ?  'active' : '' }}">
    <?php $i=0?>
    @while (isset($menu[$key . '.' . ++$i]))
    @if (($menu[$key . '.' . $i]->parent))
    <li class="treeview {{ ($menu[$key . '.' . $i]->active) ?  'active' : '' }}">
        <a href="{{URL::to($menu[$key . '.' . $i]->url)}}" >
            <i class="{{{ !empty($menu[$key . '.' . $i]->icon) ?  $menu[$key . '.' . $i]->icon : 'fa fa-angle-double-right' }}}"></i> <span>{{$menu[$key . '.' . $i]->name}}</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        @include('menu.sub.admin', array('menu' => $menu, 'key' => $key . '.' . $i))
    </li>
    @else
    <li  {{ ($menu[$key . '.' . $i]->active) ?  'class="active"' : '' }}>
        <a href="{{URL::to($menu[$key . '.' . $i]->url)}}">
            <i class="{{{ !empty($menu[$key . '.' . $i]->icon) ?  $menu[$key . '.' . $i]->icon : 'fa fa-angle-double-right' }}}"></i>
            <span>{{$menu[$key . '.' . $i]->name}}</span>
        </a>
    </li>
    @endif
    @endwhile
</ul>
