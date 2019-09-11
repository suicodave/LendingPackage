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
    function canCreateLoanWithRepository()
    {
        $loanAttributes = factory(Loan::class)->make()->toArray();

        $loan = $this->loanRepository->create($loanAttributes);

        $loans = Loan::all();

        Log::info($loan->toArray());

        Log::info($loans->toArray());

        $this->assertCount(1, $loans);

        $this->assertTrue($loans[0]->id == $loan->id);

        $this->assertContains($loan->toArray(), $loans->toArray());

        $this->assertDatabaseHas('loans', $loan->toArray());

        $this->assertArrayHasKey('user_id', $loan->toArray());
    }
}
