<div id="content" class="app-content" role="main">
    <div class="app-content-body">
        <div class="bg-light lter b-b wrapper-md">

            @section('heading')
                Heading
            @show


        </div>
        <div class="wrapper-md" ng-controller="FormDemoCtrl">
         @include('admin.notifications')
         <div class="row">
          <div class="col-sm-12">
              <div class="panel panel-default">
               <div class="panel-heading font-bold">
                @section('title')
                 Title
                @show
                </div>
                <div class="panel-body">
                  <div class="col-md-12">
                  <ul id="myTab" class="nav nav-tabs" role="tablist">
                     @section('tabs')
                        Tabs
                     @show
                 </ul>

                     @section('content')
                        Content
                     @show
                 </div>
             </div>
         </div>
     </div>
 </div>

</div>

</div>
</div>

@section('script')

@show
