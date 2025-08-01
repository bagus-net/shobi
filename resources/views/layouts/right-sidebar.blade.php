<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>



        <!-- Settings -->
        <hr class="mt-0">
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ URL::asset('/assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked data-bsStyle="{{ URL::asset('/assets/css/bootstrap-light.min.css') }}" data-appStyle="{{ URL::asset('/assets/css/app-light.min.css') }}"/>
                <label class="form-check-label" for="light-mode-switch"> Light Mode </label>
            </div>
          
            <div class="mb-2">
                <img src="{{ URL::asset('/assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="{{ URL::asset('/assets/css/bootstrap-dark.min.css') }}" data-appStyle="{{ URL::asset('/assets/css/app-dark.min.css') }}" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div> 
    
          <div class="mb-2">
                <img src="{{ URL::asset('/assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div> 
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="{{ URL::asset('/assets/css/app.rtl.css') }}" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>