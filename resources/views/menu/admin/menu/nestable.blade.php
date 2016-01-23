<div class="dd" id="nestable">
    <ol class="dd-list">
        <?php $i=0?>
        @while (isset($menu['0.' . ++$i]))
        @if (($menu['0.' . $i]->parent))
        <li class="dd-item dd3-item" data-id="{!!$menu['0.' . $i]->eid!!}">
            <div class="dd-handle dd3-handle">Drag</div>
            <div class="dd3-content">
                <a href="{{Trans::to('admin/menu/submenu')}}/{!!$menu['0.' . $i]->eid!!}" data-target='menu-entry'>
                    <i class="{!! !empty($menu['0.' . $i]->icon) ?  $menu['0.' . $i]->icon : '' !!}"></i> {!!$menu['0.' . $i]->name!!}
                    <span class="pull-right"><i class="fa fa-angle-double-right"></i></span>
                </a>
            </div>
            <ol class="dd-list">
                @include( 'menu::admin.menu.sub.nestable', array('menu' => $menu, 'key' => '0.' . $i))
            </ol>
        </li>
        @else
        <li class="dd-item dd3-item" data-id="{!!$menu['0.' . $i]->eid!!}">
            <div class="dd-handle dd3-handle">Drag</div>
            <div class="dd3-content">
                <a href="{{Trans::to('admin/menu/submenu')}}/{!!$menu['0.' . $i]->eid!!}" data-target='menu-entry'>
                    <i class="{!! !empty($menu['0.' . $i]->icon) ?  $menu['0.' . $i]->icon : '' !!}"></i> {!!$menu['0.' . $i]->name!!}
                    <span class="pull-right"><i class="fa fa-angle-double-right"></i></span>
                </a>
            </div>
        </li>
        @endif
        @endwhile
    </ol>
</div>