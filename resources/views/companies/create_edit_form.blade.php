@csrf
@if(isset($company))
    <input type="hidden" name="_method" value="PUT">
@endif
<div class="form-group">
    <label for="companyName">{{ _i("Company name") }}</label><span style="color:red;">*</span>
    <input class="form-control" type="text" id="companyName" name="name" placeholder="Comapny name" value="{{ isset($company) ? $company->name : '' }}">
</div>
<div class="form-group">
    <label for="emailAddress">{{ _i("Email address") }}</label><span style="color:red;">*</span>
    <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Enter email" value="{{ isset($company) ? $company->email : '' }}">
</div>
<div class="form-group">
    <label for="website">{{ _i("Website") }}</label>
    <input type="text" class="form-control" id="website" name="website" placeholder="Enter website" value="{{ isset($company) ? $company->website : '' }}">
</div>
<div class="form-group">
    @if(isset($company))
        <b>{{ _i("Current logo") }}</b>: {{ $company->logo ? $company->logo : _i("Missing logo") }}<br/>
    @endif
    <label for="companyLogo">{{ _i("Logo (min. 100x100)") }}</label>
    <input type="file" class="form-control-file" id="companyLogo" name="logo">
</div>