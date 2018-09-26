<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">{{ _i('Employee info') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <table class="w-100">
            <tr>
                <td class="text-center">{{ _i("First name") }}: {{ $employee->first_name }}</td>
            </tr>
            <tr>
                <td class="text-center">{{ _i("Last name") }}: {{ $employee->last_name }}</td>
            </tr>
            <tr>
                <td class="text-center">{{ _i("Email") }}: {!! $employee->email ? "<a>$employee->email</a>" : "N/A" !!}</td>
            </tr>
            <tr>
                <td class="text-center">{{ _i("Phone") }}: {{ $employee->phone }}</td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light btn-sm w-100" onclick="editEmployee('{{ $company->id }}', '{{ $employee->id }}');">{{ _i("Edit") }}</button>
        <button type="button" class="btn btn-danger btn-sm w-100" onclick="deleteEmployee('{{ $company->id }}', '{{ $employee->id }}');">{{ _i("Delete") }}</button>
    </div>
</div>