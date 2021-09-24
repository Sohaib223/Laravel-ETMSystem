<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function EmployeeReport()
    {   
        return View('pages.Reporting.EmployeeReporting');

        $daterange = explode('-',$request->daterange);
        $startdate = $daterange[0];
        $enddate = $daterange[1];
    }
    
    public function InquiriesReport()
    {
        return View('pages.Reporting.InquiriesReporting');
    }

    public function DutiesReport()
    {
        return View('pages.Reporting.DutiesReporting');
    }

    public function NotificationReport()
    {
        return View('pages.Reporting.NotificationReporting');
    }
    
}
