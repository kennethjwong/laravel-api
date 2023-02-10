<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoiceFilter extends ApiFilter {
    
    // Schema::create('invoices', function (Blueprint $table) {
    //     $table->id();
    //     $table->integer('customer_id');
    //     $table->float('amount');
    //     $table->string('status'); // Billed, Paid, Voided
    //     $table->date('billed_date');
    //     $table->date('paid_date')->nullable();
    //     $table->timestamps();   
    // });


    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte']
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
        'ne' => '!='
    ];

}