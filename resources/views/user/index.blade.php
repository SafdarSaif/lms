@extends('layouts.main')

@section('content')
    <style>
        .dt-buttons {
            display: flex !important;
            gap: 10px;
            flex-wrap: wrap;
        }

        .navbar-search {
            position: relative;
            width: 100%;
            max-width: 300px;
        }

        .navbar-search input {
            padding-left: 32px;
            border-radius: 6px;
            border: 1px solid #ddd;
        }

        .navbar-search iconify-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .btn {
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 6px;
        }

        .avatar-initial {
            font-weight: 600;
            color: #fff;
            background: #6c757d;
        }

        .card {
            border: 1px solid #e3e6f0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.03);
        }

        .rounded-circle {
            object-fit: cover;
        }
    </style>

    <div class="dashboard-main-body">
        <div class="card h-100 p-0 radius-12">
            <div class="card-body p-24">

                <!-- Manual Add Button -->
                <div class="d-flex justify-content-end mt-6">
                    <button type="button" onclick="add('{{ route('users.create') }}', 'modal-lg')"
                        class="btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-1"></i> Add New User
                    </button>
                </div>

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

    <!-- Modal for Add/Edit -->
    <div class="modal fade" id="modal-lg" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" id="modal-lg-content">
                <!-- AJAX content loaded here -->
            </div>
        </div>
    </div>

    <script type="module">
        $(document).ready(function() {
            var table = $("#users-datatable").DataTable({
                ajax: "{{ route('users') }}",
                columns: [{
                        data: 'name',
                        render: function(data, type, full, meta) {
                            return `
                        <div class="d-flex align-items-center gap-4">
                            ${full.avatar ? 
                                `<img src="${full.avatar}" alt="${data}" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">` :
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
                dom: '<"d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24"' +
                    '<"d-flex align-items-center gap-3"l<"navbar-search">>' +
                    '<"d-flex align-items-center"B>>t' +
                    '<"d-flex align-items-center justify-content-between flex-wrap gap-2 mt-24"ip>',
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
                    text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i> Add New User',
                    className: 'btn btn-primary waves-effect waves-light',
                    action: function() {
                        add('{{ route('users.create') }}', 'modal-lg');
                    }
                }],
                initComplete: function() {
                    $('.navbar-search').html(`
                    <div class="navbar-search w-100">
                        <input type="text" class="form-control bg-base h-40-px" placeholder="Search" aria-controls="users-datatable">
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
        });
    </script>
@endsection
