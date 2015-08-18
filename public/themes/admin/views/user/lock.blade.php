<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        <a href="{!! URL::to('/admin') !!}">{!! trans('cms.name.html') !!}</a>
    </div>
    <!-- User name -->
    <div class="lockscreen-name">{!! User::users('name') !!}</div>
    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
            <img src="{!! User::users('photo') !!}" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->
        <!-- lockscreen credentials (contains the form) -->
        <form class="lockscreen-credentials">
            <div class="input-group">
                <input type="password" class="form-control" placeholder="password">
                <div class="input-group-btn">
                    <button class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                </div>
            </div>
        </form>
        <!-- /.lockscreen credentials -->
    </div>
    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
        Enter your password to retrieve your session
    </div>
    <div class="text-center">
        <a href="{!! URL::to('/admin/login') !!}">Or sign in as a different user</a>
    </div>
</div>
<!-- /.center -->