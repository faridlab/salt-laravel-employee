<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SaltEmployee\Controllers\ApiEmployeeResourcesController;
use SaltEmployee\Controllers\ApiNestedResourcesController;

use SaltEmployee\Controllers\BanksController;
use SaltEmployee\Controllers\EmployeeBankAccountsController;
use SaltEmployee\Controllers\EmployeeBpjsController;
use SaltEmployee\Controllers\EmployeeCertificationsController;
use SaltEmployee\Controllers\EmployeeContactsController;
use SaltEmployee\Controllers\EmployeeEducationsController;
use SaltEmployee\Controllers\EmployeeFamiliesController;
use SaltEmployee\Controllers\EmployeeIdentitiesController;
use SaltEmployee\Controllers\EmployeesController;
use SaltEmployee\Controllers\ReligionsController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: RELIGIONS
    Route::get("religions", [ReligionsController::class, 'index']); // get entire collection
    Route::post("religions", [ReligionsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("religions/trash", [ReligionsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("religions/import", [ReligionsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("religions/export", [ReligionsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("religions/report", [ReligionsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("religions/{id}/trashed", [ReligionsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("religions/{id}/restore", [ReligionsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("religions/{id}/delete", [ReligionsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("religions/{id}", [ReligionsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("religions/{id}", [ReligionsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("religions/{id}", [ReligionsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("religions/{id}", [ReligionsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEES
    Route::get("employees", [EmployeesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employees", [EmployeesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employees/trash", [EmployeesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employees/import", [EmployeesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employees/export", [EmployeesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employees/report", [EmployeesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employees/{id}/trashed", [EmployeesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employees/{id}/restore", [EmployeesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employees/{id}/delete", [EmployeesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employees/{id}", [EmployeesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employees/{id}", [EmployeesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employees/{id}", [EmployeesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employees/{id}", [EmployeesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEES IDENTITIES
    Route::get("employee_identities", [EmployeeIdentitiesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_identities", [EmployeeIdentitiesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_identities/trash", [EmployeeIdentitiesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_identities/import", [EmployeeIdentitiesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_identities/export", [EmployeeIdentitiesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_identities/report", [EmployeeIdentitiesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_identities/{id}/trashed", [EmployeeIdentitiesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_identities/{id}/restore", [EmployeeIdentitiesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_identities/{id}/delete", [EmployeeIdentitiesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_identities/{id}", [EmployeeIdentitiesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_identities/{id}", [EmployeeIdentitiesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_identities/{id}", [EmployeeIdentitiesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_identities/{id}", [EmployeeIdentitiesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYMENTS
    Route::get("employments", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employments", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employments/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employments/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employments/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employments/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employments/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employments/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employments/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employments/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employments/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employments/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employments/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: BANKS
    Route::get("banks", [BanksController::class, 'index']); // get entire collection
    Route::post("banks", [BanksController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("banks/trash", [BanksController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("banks/import", [BanksController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("banks/export", [BanksController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("banks/report", [BanksController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("banks/{id}/trashed", [BanksController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("banks/{id}/restore", [BanksController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("banks/{id}/delete", [BanksController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("banks/{id}", [BanksController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("banks/{id}", [BanksController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("banks/{id}", [BanksController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("banks/{id}", [BanksController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE BANK ACCOUNTS
    Route::get("employee_bank_accounts", [EmployeeBankAccountsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_bank_accounts", [EmployeeBankAccountsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_bank_accounts/trash", [EmployeeBankAccountsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_bank_accounts/import", [EmployeeBankAccountsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_bank_accounts/export", [EmployeeBankAccountsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_bank_accounts/report", [EmployeeBankAccountsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_bank_accounts/{id}/trashed", [EmployeeBankAccountsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_bank_accounts/{id}/restore", [EmployeeBankAccountsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_bank_accounts/{id}/delete", [EmployeeBankAccountsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_bank_accounts/{id}", [EmployeeBankAccountsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_bank_accounts/{id}", [EmployeeBankAccountsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_bank_accounts/{id}", [EmployeeBankAccountsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_bank_accounts/{id}", [EmployeeBankAccountsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE TAXES
    Route::get("employee_taxes", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_taxes", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_taxes/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_taxes/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_taxes/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_taxes/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_taxes/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_taxes/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_taxes/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_taxes/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_taxes/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_taxes/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_taxes/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE BPJS
    Route::get("employee_bpjs", [EmployeeBpjsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_bpjs", [EmployeeBpjsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_bpjs/trash", [EmployeeBpjsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_bpjs/import", [EmployeeBpjsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_bpjs/export", [EmployeeBpjsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_bpjs/report", [EmployeeBpjsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_bpjs/{id}/trashed", [EmployeeBpjsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_bpjs/{id}/restore", [EmployeeBpjsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_bpjs/{id}/delete", [EmployeeBpjsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_bpjs/{id}", [EmployeeBpjsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_bpjs/{id}", [EmployeeBpjsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_bpjs/{id}", [EmployeeBpjsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_bpjs/{id}", [EmployeeBpjsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE FAMILIES
    Route::get("employee_families", [EmployeeFamiliesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_families", [EmployeeFamiliesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_families/trash", [EmployeeFamiliesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_families/import", [EmployeeFamiliesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_families/export", [EmployeeFamiliesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_families/report", [EmployeeFamiliesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_families/{id}/trashed", [EmployeeFamiliesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_families/{id}/restore", [EmployeeFamiliesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_families/{id}/delete", [EmployeeFamiliesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_families/{id}", [EmployeeFamiliesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_families/{id}", [EmployeeFamiliesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_families/{id}", [EmployeeFamiliesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_families/{id}", [EmployeeFamiliesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE CONTACTS
    Route::get("employee_contacts", [EmployeeContactsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_contacts", [EmployeeContactsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_contacts/trash", [EmployeeContactsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_contacts/import", [EmployeeContactsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_contacts/export", [EmployeeContactsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_contacts/report", [EmployeeContactsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_contacts/{id}/trashed", [EmployeeContactsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_contacts/{id}/restore", [EmployeeContactsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_contacts/{id}/delete", [EmployeeContactsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_contacts/{id}", [EmployeeContactsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_contacts/{id}", [EmployeeContactsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_contacts/{id}", [EmployeeContactsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_contacts/{id}", [EmployeeContactsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE EDUCATIONS
    Route::get("employee_educations", [EmployeeEducationsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_educations", [EmployeeEducationsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_educations/trash", [EmployeeEducationsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_educations/import", [EmployeeEducationsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_educations/export", [EmployeeEducationsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_educations/report", [EmployeeEducationsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_educations/{id}/trashed", [EmployeeEducationsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_educations/{id}/restore", [EmployeeEducationsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_educations/{id}/delete", [EmployeeEducationsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_educations/{id}", [EmployeeEducationsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_educations/{id}", [EmployeeEducationsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_educations/{id}", [EmployeeEducationsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_educations/{id}", [EmployeeEducationsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE CERTIFICATIONS
    Route::get("employee_certifications", [EmployeeCertificationsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_certifications", [EmployeeCertificationsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_certifications/trash", [EmployeeCertificationsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_certifications/import", [EmployeeCertificationsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_certifications/export", [EmployeeCertificationsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_certifications/report", [EmployeeCertificationsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_certifications/{id}/trashed", [EmployeeCertificationsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_certifications/{id}/restore", [EmployeeCertificationsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_certifications/{id}/delete", [EmployeeCertificationsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_certifications/{id}", [EmployeeCertificationsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_certifications/{id}", [EmployeeCertificationsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_certifications/{id}", [EmployeeCertificationsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_certifications/{id}", [EmployeeCertificationsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE WORK EXPERIENCES
    Route::get("employee_work_experiences", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_work_experiences", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_work_experiences/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_work_experiences/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_work_experiences/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_work_experiences/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_work_experiences/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_work_experiences/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_work_experiences/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_work_experiences/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_work_experiences/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_work_experiences/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_work_experiences/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

});
