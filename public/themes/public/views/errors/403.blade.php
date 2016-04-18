<div class="head">
    <div class="overlay force-height-full">
        <div class="container">
            <div class="col-md-12" style="height:500px;">
                <div class="text-center" style="margin-top: 40px;">
                    <h1>
                        Authorization Error
                        <small>
                            (error # {{$exception->getStatusCode()}})
                        </small>
                    </h1>
                    <h2>
                        {{$exception->getMessage()}}
                    </h2>
                    <h3>
                        Please contact the System Administrator for assistance.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
