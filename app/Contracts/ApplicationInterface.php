<?php

namespace App\Contracts;

interface ApplicationInterface
{
    public function latestApplications(array $columns, ?int $limit): Object;
    public function recentApplicant(): Int;
    public function countTodayApplicant(): Int;
    public function countApplicant(string $status, string $year = null, string $month = null): Int;
    public function checkLimitApplicant(): bool;
    public function results(): array;
}