<?php

namespace davedev\Lending\Repositories;

use davedev\Lending\Entities\Loan;

class LoanRepository
{
    private $loan;

    function __construct(Loan $loan)
    {
        $this->loan = $loan;
    }

    function create($attributes)
    {
        $loan = $this->loan->create($attributes);

        return $loan;
    }
}
