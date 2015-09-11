
<style>
    .tab-pane {
        min-height: 500px;
    }
</style>
<div class="content-wrapper" style="min-height: 1096px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User Profile</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-warning">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{!!User::users('picture')!!}" alt="User profile picture">
                        <h3 class="profile-username text-center">{!!User::users('name')!!}</h3>
                        <p class="text-muted text-center">{!!User::users('designation')!!} - Member Since {!!User::users('joined')!!}</p>
                        <button  class="btn btn-primary btn-block" data-toggle="modal" data-target="#update-profile"><b>Update Profile</b></button>
                        <button  class="btn btn-warning btn-block" data-toggle="modal" data-target="#change-password"><b>Change Password</b></button>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <!-- About Me Box -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me <small> Customize this widget</small></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
                        <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>
                        <hr>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                        <p class="text-muted">Malibu, California</p>
                        <hr>
                        <strong><i class="fa fa-pencil margin-r-5"></i> Projects</strong>
                        <p>
                        <span class="label label-danger">UI Design</span>
                        <span class="label label-success">Coding</span>
                        <span class="label label-info">Javascript</span>
                        <span class="label label-warning">PHP</span>
                        <span class="label label-primary">Node.js</span>
                        </p>
                        <hr>
                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tasks" data-toggle="tab" aria-expanded="false">Task</a></li>
                        <li class=""><a href="#calendar" data-toggle="tab" aria-expanded="false">Calendar</a></li>
                        <li class=""><a href="#settings" data-toggle="tab" aria-expanded="true">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tasks">
                            {!! Task::display('profile') !!}
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="calendar">
                            {!! Calendar::display('profile') !!}
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="settings">
                            {!! Settings::display('setting') !!}
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<!-- Update Profile Modal -->
<div class="modal fade" id="update-profile" tabindex="-1" role="dialog" aria-labelledby="update-profile-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="update-profile-label">Update Profile</h4>
      </div>
      <div class="modal-body">
        {!! User::profile('edit') !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn-update-profile">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Change Password Modal -->
<div class="modal fade" id="change-password" tabindex="-1" role="dialog" aria-labelledby="change-password-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="change-password-label">Change Password</h4>
      </div>
      <div class="modal-body">
        {!! User::password('change') !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn-change-password">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
(function ($) {

    $('#btn-change-password').click(function(){
        $('#form-change-password').submit();
    });

    $('#form-change-password')
    .submit( function( e ) {
        if($('#form-change-password').valid() == false) {
            toastr.error('Unprocessable entry.', 'Warning');
            return false;
        }

        var url  = $(this).attr('action');
        var formData = new FormData( this );

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend:function()
            {
            },
            success:function(data, textStatus, jqXHR)
            {
                $('#change-password').modal('hide');
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
        e.preventDefault();
    });

    $('#btn-update-profile').click(function(){
        $('#form-update-profile').submit();
    });

    $('#form-update-profile')
    .submit( function( e ) {
        if($('#form-update-profile').valid() == false) {
            toastr.error('Unprocessable entry.', 'Warning');
            return false;
        }

        var url  = $(this).attr('action');
        var formData = new FormData( this );

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend:function()
            {
            },
            success:function(data, textStatus, jqXHR)
            {
                $('#update-profile').modal('hide');
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
        e.preventDefault();
    });
}(jQuery));
</script>