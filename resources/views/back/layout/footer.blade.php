    </div>
    <!-- end:: Body -->
    </div>
    <!-- end:: Page -->
    <!-- begin::Scroll Top -->
    <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->		    
    <!--begin::Base Scripts -->
    <script src="{{ asset('admin/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/scripts.bundle.js') }}" type="text/javascript"></script>
    <!--end::Base Scripts -->   
    <!--begin::Page Vendors -->
    <script src="{{ asset('admin/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
    <!--end::Page Vendors -->  
    <!--begin::Page Snippets -->
    <!-- <script src="//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js" type="text/javascript"></script>
    <script src="{{ asset('admin/custom.js') }}" type="text/javascript"></script>
    <!--end::Page Snippets -->

    @yield('scripts')
    </body>
    <!-- end::Body -->
</html>