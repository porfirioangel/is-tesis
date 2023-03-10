<?php

namespace Tests\Feature\F04_InsertReport;

// phpcs:ignore
class F04S02_InsertReport_MissingDataReportInsertion_Test extends F04_InsertReport
{
    public function testGivenIAmLoggedInTheSystem()
    {
        $this->iAmLoggedInTheSystem();
    }

    public function testWhenIMakeAReportWithMissingData()
    {
        $this->iMakeAReportWithMissingData();
    }

    public function testThenIGetAReportInsertionErrorMessage()
    {
        $this->iGetAReportInsertionErrorMessage();
    }
}
