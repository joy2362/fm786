@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <header class="card-heading">
                    <h4 class="card-title float-left">{{ _lang('Users') }}</h4>
                    <a class="btn btn-outline-primary btn-xs float-right ajax-modal" data-title="{{ _lang('Add New') }}"
                        href="{{ route('users.create') }}">
                        {{ _lang('Add New') }}
                    </a>
                </header>
                <table class="table table-bordered" id="data-table">
                    <thead>
                        <tr>

                            <th class="no-export">{{ _lang('Profile') }}</th>
                            <th>{{ _lang('Name') }}</th>
                            <th>{{ _lang('Email') }}</th>
                            <th>{{ _lang('User Type') }}</th>
                            <th>{{ _lang('Status') }}</th>

                            <th class="text-center no-export">{{ _lang('Action') }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js-script')
<script type="text/javascript">
    $('#data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('users') }}",
        "columns": [

            {
                data: "image",
                name: "image",
                className: "image"
            },
            {
                data: "name",
                name: "name",
                className: "name"
            },
            {
                data: "email",
                name: "email",
                className: "email"
            },
            {
                data: "user_type",
                name: "user_type",
                className: "user_type"
            },
            {
                data: "status",
                name: "status",
                className: "status"
            },
            {
                data: "action",
                name: "action",
                className: "text-center"
            },

        ],
        responsive: true,
        "bStateSave": true,
        "bAutoWidth": false,
        "ordering": false,
        lengthChange: false,
        dom: 'Blfrtip',
        buttons: [{
                extend: 'copy',
                exportOptions: {
                    columns: "thead th:not(.no-export)"
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: "thead th:not(.no-export)"
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: "thead th:not(.no-export)"
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: "thead th:not(.no-export)"
                }
            }
        ],
    });

</script>
@endsection
