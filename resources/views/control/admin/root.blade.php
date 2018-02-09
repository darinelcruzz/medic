<!DOCTYPE html>
<html>

    @include('control.admin.htmlhead')

    <body class="hold-transition skin-blue sidebar-mini">
        <div id="app">
            <div class="wrapper">
                @include('control.admin.mainheader')
                @include('control.admin.sidebar')

                <div class="content-wrapper">
                    <section class="content-header">
                        <h1>@stack('headerTitle')</h1>
                    </section>

                    <section class="content container-fluid">
                        @yield('content')
                    </section>
                </div>

                @include('control.admin.footer')
            </div>
        </div>

        @include('control.admin.scripts')

    </body>
</html>
