@extends('layouts.be-layout')
@section('content')
<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack mb-6">
    <!--begin::Heading-->
    <h3 class="fw-bold my-2">Gambar Utama Beranda
        <span class="fs-6 text-gray-500 fw-semibold ms-1"></span>
    </h3>
    <!--end::Heading-->
    <!--begin::Actions-->
    <div class="d-flex flex-wrap my-2">
        <button type="button" class="btn btn-light-primary" onclick="window.location.href='{{ route('admin.slider.create') }}'">
            <i class="ki-duotone ki-plus-square fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>Tambah Gambar</button>
        </div>
    </div>
    @include('inc.alert')
    <!--end::Actions-->
    <!--end::Toolbar-->
    <!--begin::Row-->
    <div class="row g-6 g-xl-9">
        @foreach ($sliders as $slider)
        <!--begin::Col-->
        <div class="col-md-6 col-xl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-9">
                    <!--begin::Card Title-->
                    <div class="card-title m-0 w-100">
                        <!--begin::Avatar-->
                        <img src="{{ asset('uploads') }}/{{ $slider->image }}" alt="image" class="p-0 slider-image-size" />
                        <!--end::Avatar-->
                    </div>
                    <!--end::Car Title-->
                </div>
                <!--end:: Card header-->
                <!--begin:: Card body-->
                <div class="card-body p-9">
                    <!--begin::Name-->
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="fs-3 fw-bold text-gray-900">{{ $slider->title }}</div>
                        <div>
                            <a class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary p-0" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-dots-square fs-1 p-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ route('admin.slider.edit', ['id' => $slider->id]) }}" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 delete-btn" data-bs-toggle="modal" data-bs-target="#delete-modal" data-id="{{ $slider->id }}">
                                    <a class="menu-link px-3">Hapus</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-0">{{ $slider->subtitle }}</p>
                    <!--end::Description-->
                </div>
                <!--end:: Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        @endforeach
    </div>
    <!--end::Row-->
    {{-- <!--begin::Pagination-->
    <div class="d-flex flex-stack flex-wrap pt-10">
        <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
        <!--begin::Pages-->
        <ul class="pagination">
            <li class="page-item previous">
                <a href="#" class="page-link">
                    <i class="previous"></i>
                </a>
            </li>
            <li class="page-item active">
                <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">3</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">4</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">5</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">6</a>
            </li>
            <li class="page-item next">
                <a href="#" class="page-link">
                    <i class="next"></i>
                </a>
            </li>
        </ul>
        <!--end::Pages-->
    </div>
    <!--end::Pagination--> --}}
    @endsection
    @section('scripts')
    <script>
        $('.delete-btn').on('click', function() {
            var id = $(this).data('id');
            var url = '{{ route("admin.slider.destroy", ":id") }}';
            url = url.replace(':id', id);
            $('#delete-form').attr('action', url);
        });
    </script>
    @endsection