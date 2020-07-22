<?php

namespace App\Http\Controllers;

use App\Http\Responses\JsonResponse;
use App\Http\Validators\InsertReportValidator;
use App\Services\ReportService;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function getReports(Request $request)
    {
        $reports = ReportService::getInstance()->getReports();
        return JsonResponse::ok($reports);
    }

    public function insertReport(Request $request)
    {
        $validator = new InsertReportValidator($request);

        if (!$validator->validate()) {
            return JsonResponse::error($validator->getErrors(), 400);
        }

        $result = ReportService::getInstance()->insertReport($request);

        return JsonResponse::ok($result);
    }
}
