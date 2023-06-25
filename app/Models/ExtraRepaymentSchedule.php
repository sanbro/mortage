<?php

namespace App\Models;

use App\Traits\ResponseTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraRepaymentSchedule extends Model
{
    use HasFactory,ResponseTrait;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'extra_repayment_schedule';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

}
