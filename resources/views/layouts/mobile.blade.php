<!DOCTYPE doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    html {
        color: #888;
        font-family: "Segoe UI", sans-serif;
    }

    body {
        background-color: #EFF2F7;
        padding: 30px 0;
        margin: 0;
        width: 100%;
    }

    .table-outer {
        width: 100%;
        max-width: 650px;
        border-radius: 6px 6px 6px 6px;
        margin: 0 auto;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .text-center {
        text-align: center;
    }

    .text-left {
        text-align: left;
    }

    .text-white {
        color: #fff;
    }

    .logo-head {
        display: inline-block;
        height: 40px;
    }

    .space-top {
        border-radius: 6px 6px 0px 0px;
    }

    .space-bottom {
        border-radius: 0px 0px 6px 6px;
    }

    p {
        color: #3c4858;
        font-size: 14px;
        line-height: 24px;
        font-weight: 300;
    }

    p.medium {
        font-size: 16px;
        line-height: 28px;
        color: #3c4858;
        text-align: left;
        font-weight: normal;
        font-style: normal;
        text-decoration: none;
    }

    p.lead {
        font-size: 20px;
        line-height: 28px;
        color: #090910;
        text-align: left;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        letter-spacing: -0.5px;
        text-align: left;
        margin-bottom: 20px;
        margin-top: 0px;
    }

    .m-0 {
        margin: 0;
    }

    .mt-0 {
        margin-top: 0;
    }

    .mb-10 {
        margin-bottom: 10px;
    }

    .mb-20 {
        margin-bottom: 20px;
    }

    .mr-5 {
        margin-right: 5px;
    }

    .btn {
        font-weight: 400;
        font-size: 14px;
        border-radius: 6px;
        padding: 10px 20px;
        display: inline-block;
        background-color: #e31f33;
        color: #fff;
        text-decoration: none;
    }

    .bg-gray {
        background-color: #e6e6e6;
    }

    .bg-secondary {
        background-color: #35363b;
    }

    .px-40 {
        padding: 0px 40px;
    }

    .text-decoration-none {
        text-decoration: none;
    }

    .social-icon {
        width: 18px;
        display: inline-block;
    }
    </style>
    <script src="{{assets('assets/jquery.min.js'}}"></script>

</head>

<body bgcolor="#EFF2F7">
    <table class="table-outer" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tbody>
            <tr>
                <td align="center" bgcolor="#EFF2F7" class="frame" style="padding: 0px 0px;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <img class="logo-head" src="{{asset('img/logo/lavalite.svg')}}" />
                                </td>
                            </tr>
                            <tr>
                                <td height="40"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>

            <tr>
                <td bgcolor="#fff" class="space-top" height="40"> </td>
            </tr>
            <tr>

               <td align="center" bgcolor="#ffffff" class="px-40">
               @yield('content')
               </td>
            </tr>
            <tr>
                <td class="bg-gray px-40 "> &nbsp;
                    
                </td>
            </tr>
            <tr>
                <td bgcolor="#35363b" class="bg-secondary px-40">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                            <tr>
                                <td height="30"></td>
                            </tr>

                            <tr>
                                <td align="center" class="bodyText" id="content-8">
                                    <div class="text">
                                        <p class="text-white mb-10">{{config('app.name')}} &copy; {{date('Y')}} All Rights Reserved. Proudly built
                                            with Laravel<br>Powered by RENFOS Technologies Pvt. Ltd.</p>
                                        <p class="m-0">
                                            <a class="text-decoration-none text-white mr-5"
                                                href="https://www.facebook.com/lavalite" target="_blank">
                                                <img class="social-icon" src="{{asset('img/social/facebook.png')}}" alt="facebook">
                                            </a>
                                            <a class="text-decoration-none text-white mr-5"
                                                href="https://twitter.com/lavalitecms" target="_blank">
                                                <img class="social-icon" src="{{asset('img/social/twitter.png')}}" alt="twitter">
                                            </a>
                                            <a class="text-decoration-none text-white mr-5"
                                                href="https://github.com/lavalite" target="_blank">
                                                <img class="social-icon" src="{{asset('img/social/github.png')}}" alt="github">
                                            </a>
                                        </p>
                                        <p class="m-0 text-white">Update your <a class="text-white" href="#">email
                                                preferences</a> to choose the types of emails you
                                            receive, or you can <a class="text-white" href="#">unsubscribe</a> from all
                                            future emails.</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor="#35363b" class="space-bottom" height="30"> </td>
            </tr>
        </tbody>
    </table>

</body>
<script>
$("body").on("click", "[data-action]", function (e) {
    e.preventDefault();
    e.stopPropagation();
    var tag = $(this);
    app.curd(tag);
});

/* ====== Application Object ======= */
class myApp {
  constructor() {}
  async curd(tag) {
    console.log(tag.data("action"), tag.data("method"), tag.data("href"));

    if (tag.data("action") == "WORKFLOW" || tag.data("action") == "ACTION") {
      return app.sendAction(tag);
    }

  }

  sendAction(tag) {
    var params;
    var method = tag.data("method");
    var target = tag.data("href");
    var formData = new FormData();
    var form = $(tag.data("form"));

    if (Object.keys(form).length !== 0) {
      if (form.valid() == false) {
        toastr.error("Please enter valid information.", "Error");
        return false;
      }

      params = form.serializeArray();

      $.each(params, function (i, val) {
        formData.append(val.name, val.value);
      });
    }
    
    formData.append('_method', method);

    $.ajax({
      url: target,
      type: 'POST',
      data: formData,
      async: false,

      cache: false,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (result) {
        app.load(tag.data("load-to"), result.url);
        app.index(tag.data("list"));
      },
    });
  }
}

var app = new myApp();

</script>

</html>