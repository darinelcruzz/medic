<!DOCTYPE html>
<html>

    @include('auth.admin.htmlhead')

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('auth.admin.mainheader')
            @include('auth.admin.sidebar')

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>@stack('headerTitle')</h1>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">
                    @yield('content')
                </section>
            </div>

            @include('auth.admin.footer')
        </div>

        @include('auth.admin.scripts')

    </body>
</html>
