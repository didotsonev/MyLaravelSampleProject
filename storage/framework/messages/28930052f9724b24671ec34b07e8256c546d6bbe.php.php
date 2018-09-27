<?php
namespace App\Http\Localization;

class JS {

    public static function all() {

        return [
            "dt_next" => _i("Next"),
            "dt_previous" => _i("Previous"),
            "dt_info" => _i("Showing _START_ to _END_ of _TOTAL_ entries"),
            "dt_lengthMenu" => _i("Show _MENU_ entries"),
            "dt_search" => _i("Search:"),
            "dt_info_empty" => _i("Showing 0 to 0 of 0 records"),
            "dt_zero_records" => _i("No data available in table"),
            "unexpected_error_title" => _i("Whoops something went wrong."),
            "unexpected_error_message" => _i("An unexpected error occurred. Please try again later."),
            "error_bootbox_title" => _i("There is a problem"),
            "error" => _i("Error"),
            "delete_company_question" => _i("Are you sure that you want to delete this company?"),
            "company_successfully_updated" => _i("Company successfully updated"),
            "employee_successfully_updated" => _i("Employee successfully updated"),
            "delete_employee_question" => _i("Are you sure that you want to delete this employee?"),
            "employee_successfully_deleted" => _i("Employee successfully deleted"),
        ];
    }
}