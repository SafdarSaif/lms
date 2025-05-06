@extends('layouts.main')

@section('content')
    <script type="module">
        var table = $("#users-datatable").DataTable({
            ajax: "{{ route('users') }}",
            columns: [{
                    data: 'name',
                    render: function(data, type, full, meta) {
                        return `
                    <div class="d-flex align-items-center">
                        ${full.avatar ? 
                            `<img src="${full.avatar}" alt="${data}" 
                                      class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">` : 
                            `<span class="avatar-initial rounded-circle bg-label-secondary" 
                                      style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                     ${data.charAt(0)}
                                 </span>`}
                        <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">${data}</span>
                            <small class="text-muted d-block">${full.email}</small>
                        </div>
                    </div>`;
                    }
                },
                {
                    data: 'role'
                },
                {
                    data: 'id',
                    render: function(data, type, full, meta) {
                        return `
                    <div class="d-flex align-items-center gap-10 justify-content-center">
                        <button type="button" class="bg-info-focus bg-hover-info-200 text-info-600 fw-medium 
                            w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle">
                            <iconify-icon icon="majesticons:eye-line" class="icon text-xl"></iconify-icon>
                        </button>
                        <button type="button" class="bg-success-focus text-success-600 bg-hover-success-200 
                            fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle">
                            <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                        </button>
                        <button type="button" class="remove-item-btn bg-danger-focus bg-hover-danger-200 
                            text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle">
                            <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                        </button>
                    </div>`;
                    }
                }
            ],
            order: [
                [0, 'desc']
            ],
            dom: '<"d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24"<"d-flex align-items-center gap-3"l<"navbar-search">>B>t<"d-flex align-items-center justify-content-between flex-wrap gap-2 mt-24"ip>',
            language: {
                search: "",
                searchPlaceholder: "Search..",
                lengthMenu: "Show _MENU_",
                paginate: {
                    previous: '<iconify-icon icon="ep:d-arrow-left"></iconify-icon>',
                    next: '<iconify-icon icon="ep:d-arrow-right"></iconify-icon>'
                }
            },
            buttons: [{
                text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>Add New User',
                className: 'btn btn-primary waves-effect waves-light',
                action: function() {
                    window.location.href = "{{ route('users.create') }}";
                }
            }],
            initComplete: function() {
                $('.navbar-search').html(`
            <div class="navbar-search">
                <input type="text" class="form-control bg-base h-40-px" 
                       placeholder="Search" aria-controls="users-datatable">
                <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
            </div>
        `);
                $('.navbar-search input').on('keyup', function() {
                    table.search(this.value).draw();
                });
            },
            responsive: {
                details: {
                    type: 'column',
                    target: 'tr'
                }
            }
        });
    </script>

    <div class="dashboard-main-body">
        <div class="card h-100 p-0 radius-12">
            <div class="card-body p-24">
                <div class="table-responsive scroll-sm">
                    <table id="users-datatable" class="table bordered-table sm-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
