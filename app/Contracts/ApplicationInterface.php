<?php

namespace App\Contracts;

interface ApplicationInterface
{
    public function latestApplications(array $columns, ?int $limit): Object;
    public function pendingApplicant(string $today): Int;
    public function countTodayApplicant(): Int;
    public function countApplicant(string $option): Int;
    public function countApplicantLastThreeMonth(): int;
    public function checkLimitApplicant(): bool;
    public function results(): array;
}
