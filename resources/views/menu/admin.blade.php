
    <?php $i=0?>
    @while(isset($menu['0.' . ++$i]))
    @if (($menu['0.' . $i]->parent))
    <li class="treeview {{ ($menu['0.' . $i]->active) ?  'active' : '' }}">
        <a href="{{URL::to($menu['0.' . $i]->url)}}" >
            <i class="{{{ !empty($menu['0.' . $i]->icon) ?  $menu['0.' . $i]->icon : 'fa fa-angle-double-right' }}}"></i> <span>{{$menu['0.' . $i]->name}}</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        @include('menu.sub.admin', array('menu' => $menu, 'key' => '0.' . $i))
    </li>
    @else
    <li  {{ ($menu['0.' . $i]->active == 'active') ?  'class="active"' : '' }}>
        <a href="{{URL::to($menu['0.' . $i]->url)}}">
            <i class="{{{ !empty($menu['0.' . $i]->icon) ?  $menu['0.' . $i]->icon : 'fa fa-angle-double-right' }}}"></i>
            <span>{{$menu['0.' . $i]->name}}</span>
        </a>
    </li>
    @endif
    @endwhile

