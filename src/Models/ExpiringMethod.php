<?php

namespace Soap\LaravelLoyaltyPoint\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;

class ExpiringMethod extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'expiring_period', 'expiring_value', 'expiring_unit',
    ];

    /**
     * Calculate expring date
     * @param \DateTimeInterface|string $startDateTime 
     * @return \DatetimeInterface|boolean
     */
    public function getExpiringDate($startDateTime) 
    {
        $startDateTime = $this->resolveDateTime($startDateTime);
        if ($this->expiring_value === 0) return false;
        $expiringDate = $startDateTime;
        switch ($this->expiring_period) {
            case 'after': 
                    // expiring_unit = {day, week, month} 
                    $expiringDate = $startDateTime->add($this->expiring_value, $this->expiring_unit.'s');
                break;
            case 'end of':
                    if ($this->expiring_unit == 'week') {
                        $expiringDate = $startDateTime->endOfWeek();
                    }else if ($this->expiring_unit == 'month') {
                        $expiringDate = $startDateTime->endOfMonth();
                    }else if ($this->expiring_unit == 'year') {
                        $expiringDate = $startDateTime->endOfYear();
                    }
                    
                break;
        }

        return $expiringDate;
    } 

    /**
     * Verify if input is Carbon::instance
     * @param mixed $dateTime 
     * @return Carbon|void 
     * @throws InvalidFormatException 
     */
    protected function resolveDateTime($dateTime)
    {
        if ($dateTime instanceof DateTimeInterface) {
            return Carbon::instance($dateTime);
        }

        if (is_string($dateTime)) {
            return Carbon::parse($dateTime);
        }
    }

}