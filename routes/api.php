<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SaltEmployee\Controllers\ApiEmployeeResourcesController;
use SaltEmployee\Controllers\ApiNestedResourcesController;

use SaltEmployee\Controllers\BanksController;
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
    Route::get("employees", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employees", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employees/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employees/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employees/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employees/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employees/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employees/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employees/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employees/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employees/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employees/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employees/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEES IDENTITIES
    Route::get("employee_identities", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_identities", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_identities/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_identities/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_identities/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_identities/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_identities/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_identities/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_identities/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_identities/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_identities/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_identities/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_identities/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


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
    Route::get("employee_bank_accounts", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_bank_accounts", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_bank_accounts/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_bank_accounts/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_bank_accounts/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_bank_accounts/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_bank_accounts/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_bank_accounts/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_bank_accounts/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_bank_accounts/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_bank_accounts/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_bank_accounts/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_bank_accounts/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


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
    Route::get("employee_bpjs", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_bpjs", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_bpjs/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_bpjs/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_bpjs/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_bpjs/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_bpjs/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_bpjs/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_bpjs/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_bpjs/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_bpjs/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_bpjs/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_bpjs/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE FAMILIES
    Route::get("employee_families", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_families", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_families/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_families/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_families/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_families/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_families/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_families/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_families/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_families/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_families/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_families/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_families/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE CONTACTS
    Route::get("employee_contacts", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_contacts", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_contacts/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_contacts/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_contacts/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_contacts/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_contacts/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_contacts/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_contacts/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_contacts/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_contacts/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_contacts/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_contacts/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE EDUCATIONS
    Route::get("employee_educations", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_educations", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_educations/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_educations/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_educations/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_educations/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_educations/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_educations/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_educations/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_educations/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_educations/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_educations/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_educations/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: EMPLOYEE CERTIFICATIONS
    Route::get("employee_certifications", [ApiEmployeeResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("employee_certifications", [ApiEmployeeResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("employee_certifications/trash", [ApiEmployeeResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("employee_certifications/import", [ApiEmployeeResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("employee_certifications/export", [ApiEmployeeResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("employee_certifications/report", [ApiEmployeeResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("employee_certifications/{id}/trashed", [ApiEmployeeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_certifications/{id}/restore", [ApiEmployeeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_certifications/{id}/delete", [ApiEmployeeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("employee_certifications/{id}", [ApiEmployeeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("employee_certifications/{id}", [ApiEmployeeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("employee_certifications/{id}", [ApiEmployeeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_certifications/{id}", [ApiEmployeeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


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
