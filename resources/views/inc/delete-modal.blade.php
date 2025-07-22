<div class="modal fade" tabindex="-1" id="delete-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!--begin::Alert-->
            <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-0">
                <!--begin::Close-->
                <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </button>
                <!--end::Close-->
                
                <!--begin::Icon-->
                <i class="ki-duotone ki-information-5 fs-5tx text-danger mb-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                <!--end::Icon-->
                
                <!--begin::Wrapper-->
                <div class="text-center">
                    <!--begin::Title-->
                    <h1 class="fw-bold mb-5">Konfirmasi Hapus</h1>
                    <!--end::Title-->
                    
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
                    <!--end::Separator-->
                    
                    <!--begin::Content-->
                    <div class="mb-9 text-gray-900">
                        Apakah Anda yakin ingin menghapus item ini? <strong>Tindakan ini tidak dapat dibatalkan</strong>.
                    </div>
                    <!--end::Content-->
                    
                    <!--begin::Buttons-->
                    <form id="delete-form" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="d-flex flex-center flex-wrap">
                            <a class="btn btn-outline btn-outline-danger btn-active-danger m-2" data-bs-dismiss="modal">Batal</a>
                            <button type="submit" class="btn btn-danger m-2">Hapus</button>
                        </div>
                    </form>
                    <!--end::Buttons-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Alert-->
        </div>
    </div>
</div>