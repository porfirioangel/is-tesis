<?php

namespace Tests\Feature\F04_InsertReport;

// phpcs:ignore
class F04S01_InsertReport_SuccessfulReportInsertion_Test extends F04_InsertReport
{
    public function testGivenIAmLoggedInTheSystem()
    {
        $this->iAmLoggedInTheSystem();
    }

    public function testWhenIMakeAReportWithTheCorrectData()
    {
        $this->iMakeAReportWithTheCorrectData();
        $this->iMakeAReportWithTheCorrectData();
    }

    public function testThenIGetTheInformationOfTheReport()
    {
        $this->iGetTheInformationOfTheReport();
    }
}
