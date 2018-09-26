@if($company->wasRecentlyCreated)
    <tr id="company_{{ $company->id }}" class="clickable_row highlight" onclick="showCompany('{{ $company->id }}');">
        @include('companies.t_data')
    </tr>
@else
    @include('companies.t_data')
@endif