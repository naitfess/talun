@extends('layouts.be-layout')
@section('content')
@include('inc.alert')
<!--begin::Products-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <form action="{{ route('admin.artikel.index') }}" method="GET">
                    <input type="text" name="search" class="form-control form-control-solid w-250px ps-12" placeholder="Cari Judul" value="{{ request('search') }}" />
                </form>
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <div class="w-100 mw-150px">
                <!--begin::Select2-->
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Kategori">
                    <option></option>
                    <option value="all">All</option>
                    @foreach(\App\Helpers\AppHelper::getCategories() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <!--end::Select2-->
            </div>
            <!--begin::Add product-->
            <button type="button" class="btn btn-light-primary" onclick="window.location.href='{{ route('admin.artikel.create') }}'">
                <i class="ki-duotone ki-plus-square fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>Tambah Artikel
            </button>        
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0 table-responsive">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-175px">Judul</th>
                    <th class="text-end min-w-75px">Kategori</th>
                    <th class="text-end min-w-100px">Penulis</th>
                    <th class="text-end min-w-50px">Tanggal Rilis</th>
                    <th class="text-end min-w-50px">Tanggal Diubah</th>
                    <th class="text-end min-w-50px">Status</th>
                    <th class="text-end min-w-50px">Aksi</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                @foreach ($articles as $article)
                <tr>
                    <td class="text-start">
                        <span class="fw-semibold">{{ $article->title }}</span>
                    </td>
                    <td class="text-end">
                        {{ $article->category->name }}
                    </td>
                    <td class="text-end">
                        {{-- {{ $article->author->name }} --}}
                    </td>
                    <td class="text-end">
                        {{ \Carbon\Carbon::parse($article->created_at)->format('Y-m-d H:i') }}
                    </td>
                    <td class="text-end">
                        {{ \Carbon\Carbon::parse($article->updated_at)->format('Y-m-d H:i') }}
                    </td>
                    <td class="text-end">
                        <!--begin::Badges-->
                        <div class="badge badge-light-{{ $article->is_published == 1 ? 'success' : 'danger' }}">{{ $article->is_published == 1 ? 'Aktif' : 'Nonaktif' }}</div>
                        <!--end::Badges-->
                    </td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Aksi 
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <form action="{{ route('admin.artikel.update-status', ['slug' => $article->slug]) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <a class="menu-link px-3" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ $article->is_published == 1 ? 'Nonaktifkan' : 'Aktifkan' }}
                                        </a>
                                    </form>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="{{ route('admin.artikel.edit', ['slug' => $article->slug]) }}" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 delete-btn" data-bs-toggle="modal" data-bs-target="#delete-modal" data-slug="{{ $article->slug }}">
                                    <a class="menu-link px-3">Hapus</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </a>
                    </td>
                </tr>
                @endforeach
                @if($articles->isEmpty())
                <tr>
                    <td colspan="7" class="text-center text-muted fs-6 fw-semibold">Belum ada data yang tersedia</td>
                </tr>
                @endif
            </tbody>
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->
@endsection
@section('scripts')
<script>
    $('.delete-btn').on('click', function() {
        var slug = $(this).data('slug');
        var url = '{{ route("admin.artikel.destroy", ":slug") }}';
        url = url.replace(':slug', slug);
        $('#delete-form').attr('action', url);
    });
</script>
@endsection