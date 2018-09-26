<?php
namespace App\Http\Localization;

class JS {

    public static function all() {

        return [
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