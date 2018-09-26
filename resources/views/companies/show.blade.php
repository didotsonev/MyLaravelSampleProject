<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">{{ _i('Company info') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <table class="w-100">
            <tr>
                <td class="text-center">
                    <img src="{{ $company->logo_path }}" alt="Company logo" height="100" width="100">
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <h3>{{ $company->name }}</h3>
                </td>
            </tr>
            <tr>
                <td class="text-center">{{ _i("Email") }}: {!! $company->email ? "<a>$company->email</a>" : "N/A" !!}</td>
            </tr>
            <tr class="text-center">
                <td>{{ _i("Website") }}: {!! $company->website ? "<a href='$company->website' target='_blank'>$company->website</a>" : "N/A" !!}</td>
            </tr>
            <tr class="text-center">
                <td>
                    {{ _i("Employees") }}:<br/>
                    @forelse($company->employees as $employee)
                        <button type="button" class="btn btn-link" onclick="showEmployee('{{ $company->id }}', '{{ $employee->id }}');">{{ $employee->first_name. " " .$employee->last_name }}</button><br/>
                    @empty
                        <i>{{ _i("No employees") }}</i><br/>
                    @endforelse
                    <button type="button" class="btn btn-link" onclick="createEmployee('{{ $company->id }}');">- {{ _i("Create new employee") }} -</button>
                </td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light btn-sm w-100" onclick="editCompany('{{ $company->id }}');">{{ _i("Edit") }}</button>
        <button type="button" class="btn btn-danger btn-sm w-100" onclick="deleteCompany('{{ $company->id }}');">{{ _i("Delete") }}</button>
    </div>
</div>