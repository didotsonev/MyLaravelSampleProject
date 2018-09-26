@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <button type="button" class="btn btn-success float-right bottom-space-btn" data-toggle="modal" data-target="#createCompanyModal">{{ _i('Create new company') }}</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ _i('Companies') }}</div>
                    <div class="card-body">
                        @include('companies.table')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createCompanyModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ _i('Create new company') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createCompanyForm">
                        @include('companies.create_edit_form')
                    </form>
                    <div id="createCompanyError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="createCompany();">{{ _i("Create") }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCompanyModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ _i('Edit company') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCompanyForm">

                    </form>
                    <div id="editCompanyError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="updateCompany" onclick="">{{ _i("Update") }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="showCompanyModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">

        </div>
    </div>

    <div class="modal fade" id="createEmployeeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ _i('Create new employee') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createEmployeeForm">
                        @include('employees.create_edit_form')
                    </form>
                    <div id="createEmployeeError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="storeEmployee();">{{ _i("Create") }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="showEmployeeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">

        </div>
    </div>

    <div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ _i('Edit employee') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editEmployeeForm">

                    </form>
                    <div id="editEmployeeError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="updateEmployee" onclick="">{{ _i("Update") }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
