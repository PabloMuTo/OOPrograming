<?php

namespace OOProgramming\src\Domain;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use InvalidArgumentException;
use OOProgramming\src\Domain\Exception\IncorrectProductDateException;

final class ProductPublicationDate
{
    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $month;

    /**
     * @var int
     */
    private $day;

   /**
     * @var int
     */
    private $hour;

    /**
     * @var int
     */
    private $minute;

    /**
     * @var int
     */
    private $second;

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     */
    private function __construct($year, $month, $day, $hour, $minute, $second)
    {
        if (!is_int($year)) {
            throw new InvalidArgumentException(sprintf('%s is not integer', '$year'));
        }
        if (!is_int($month)) {
            throw new InvalidArgumentException(sprintf('%s is not integer', '$month'));
        }
        if (!is_int($day)) {
            throw new InvalidArgumentException(sprintf('%s is not integer', '$day'));
        }

        // TODO: hour, minute and second validation

        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return self
     */
    public static function create($year, $month, $day, $hour, $minute, $second)
    {
        return new static($year, $month, $day, $hour, $minute, $second);
    }

    /**
     * @param DateTimeInterface $dateTime
     *
     * @return self
     */
    public static function createFromDateTime(DateTimeInterface $dateTime)
    {
        return static::create(
            (int)$dateTime->format('Y'), 
            (int)$dateTime->format('m'), 
            (int)$dateTime->format('d'),
            (int)$dateTime->format('H'),
            (int)$dateTime->format('i'),
            (int)$dateTime->format('s'),
        );
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public static function createFromString($date)
    {
        return static::createFromDateTime(new DateTimeImmutable($date));
    }

    /**
     * @return self
     */
    public static function now()
    {
        return static::createFromDateTime(new DateTimeImmutable());
    }

    /**
     * @return int
     */
    public function year()
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function month()
    {
        return $this->month;
    }

    /**
     * @return int
     */
    public function day()
    {
        return $this->day;
    }

    public function hour()
    {
        return $this->hour;
    }

    public function minute()
    {
        return $this->minute;
    }

    public function second()
    {
        return $this->second;
    }

    /**
     * @return DateTime
     */
    public function toDateTime()
    {
        $dateTime = new DateTime();
        $dateTime->setDate($this->year(), $this->month(), $this->day());
        $dateTime->setTime($this->hour(), $this->minute(), $this->second());

        return $dateTime;
    }

    /**
     * @return string
     */
    public function toIso8601Format()
    {
        return $this->toDateTime()->format('Y-m-d\TH:i:s');
    }


}