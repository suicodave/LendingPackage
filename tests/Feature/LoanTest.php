<?php

namespace davedev\Lending\Tests\Feature;

use davedev\Lending\Entities\Loan;
use davedev\Lending\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;

class LoanTest extends TestCase
{
    use RefreshDatabase;
    /** 
     * @test
     */
    function canCreateLoanWithFactory()
    {
        $loan = factory(Loan::class)->create();

        Log::info($loan);

        dd($loan);

        $this->assertCount(1, Loan::all());
    }
}
