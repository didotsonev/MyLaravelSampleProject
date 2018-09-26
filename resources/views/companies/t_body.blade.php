@if($companies)
    @foreach($companies as $company)
        <tr id="company_{{ $company->id }}" class="clickable_row highlight" onclick="showCompany('{{ $company->id }}');">
            @include('companies.t_row')
        </tr>
    @endforeach
@endif
