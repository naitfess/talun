@extends('layouts.be-layout')
@section('content')
<!--begin::Form-->
<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="apps/ecommerce/catalog/products.html">
    <!--begin::Aside column-->
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <!--begin::Category & tags-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Daftar Lembaga Desa</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-0">
                <!--begin::Input group-->
                <!--begin::Label-->
                {{-- <label class="form-label">Daftar Lembaga Desa</label> --}}
                <!--end::Label-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                        <!--begin::Tbody-->
                        <tbody class="fw-6 fw-semibold text-gray-600">
                            <tr class="border-0">
                                <td class="pt-0 px-0">
                                    <a href="#" class="text-hover-primary text-gray-600"><span>1. </span>Badan Pengusaha</a>
                                </td>
                            </tr>
                            <tr class="border-0">
                                <td class="pt-0 px-0">
                                    <a href="#" class="text-hover-primary text-gray-600"><span>1. </span>Badan Pengusaha</a>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Input group-->
                <!--begin::Button-->
                <a href="{{ route('admin.lembaga-desa.index') }}" class="btn btn-light-primary btn-sm mb-10">
                    <i class="ki-duotone ki-plus fs-2"></i>Tambah Lembaga Desa</a>
                    <!--end::Button-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category & tags-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Lembaga Desa</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Subjudul</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Foto dan nama kepala desa bisa di edit disini</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">Deskripsi</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->
                <div class="d-flex justify-content-end mt-10 mb-5">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-light me-5">Batal</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Simpan Perubahan</span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </div>
    </div>
</div>
</form>
<!--end::Form-->

@endsection
@section('scripts')
<script src="{{ asset('metronic') }}/js/custom/apps/ecommerce/catalog/save-product.js"></script>
@endsection