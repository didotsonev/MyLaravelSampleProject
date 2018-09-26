<table id="companiesDataTable" class="table table-bordered">
    <thead>
        <tr>
            <th>{{ _i("Name") }}</th>
            <th>{{ _i("Email") }}</th>
            <th>{{ _i("Website") }}</th>
        </tr>
    </thead>
    <tbody>
        @include('companies.t_body')
    </tbody>
</table>