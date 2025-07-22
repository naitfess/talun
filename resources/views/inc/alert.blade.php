@if (session('message'))
<!--begin::Alert-->
<div class="alert alert-dismissible bg-light-{{ session('status') }} d-flex flex-column flex-sm-row p-5 mb-7">
    <!--begin::Icon-->
    <i class="ki-duotone ki-notification-bing fs-2hx text-{{ session('status') }} me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
    <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-column pe-0 pe-sm-10 text-{{ session('status') }}">
        <!--begin::Title-->
        <h4 class="fw-semibold mb-1 text-{{ session('status') }}">{{ session('title') }}</h4>
        <!--end::Title-->
        
        <!--begin::Content-->
        <span>{{ session('message') }}</span>
        <!--end::Content-->
    </div>
    <!--end::Wrapper-->
    
    <!--begin::Close-->
    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
        <i class="ki-duotone ki-cross fs-1 text-{{ session('status') }}"><span class="path1"></span><span class="path2"></span></i>
    </button>
    <!--end::Close-->
</div>
<!--end::Alert-->
@endif