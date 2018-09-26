@csrf
@if(isset($employee))
    <input type="hidden" name="_method" value="PUT">
@endif
<input type="hidden" name="company_id" id="employeeCompanyId">
<div class="form-group">
    <label for="employeeFirstName">{{ _i("First name") }}</label><span style="color:red;">*</span>
    <input class="form-control" type="text" id="employeeFirstName" name="first_name" placeholder="First name" value="{{ isset($employee) ? $employee->first_name : '' }}">
</div>
<div class="form-group">
    <label for="employeeLastName">{{ _i("Last name") }}</label>
    <input class="form-control" type="text" id="employeeLastName" name="last_name" placeholder="Last name" value="{{ isset($employee) ? $employee->last_name : '' }}">
</div>
<div class="form-group">
    <label for="employeeEmail">{{ _i("Email") }}</label>
    <input class="form-control" type="text" id="employeeEmail" name="email" placeholder="Email" value="{{ isset($employee) ? $employee->email : '' }}">
</div>
<div class="form-group">
    <label for="employeePhone">{{ _i("Phone") }}</label>
    <input class="form-control" type="text" id="employeePhone" name="phone" placeholder="Phone" value="{{ isset($employee) ? $employee->phone : '' }}">
</div>