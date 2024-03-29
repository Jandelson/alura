<?php

namespace Alura\Calisthenics\Domain\Student;

use Alura\Calisthenics\Domain\Email\Email;
use Alura\Calisthenics\Domain\Video\Video;
use DateTimeInterface;
use Ds\Map;

class Student
{
    private string $email;
    private DateTimeInterface $bd;
    private WatchedVideos $watchedVideos;
    private string $fName;
    private string $lName;
    public string $street;
    public string $number;
    public string $province;
    public string $city;
    public string $state;
    public string $country;

    public function __construct(Email $email, DateTimeInterface $bd, string $fName, string $lName, string $street, string $number, string $province, string $city, string $state, string $country)
    {
        $this->email = $email;
        $this->bd = $bd;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->street = $street;
        $this->number = $number;
        $this->province = $province;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function getFullName(): string
    {
        return "{$this->fName} {$this->lName}";
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getBd(): DateTimeInterface
    {
        return $this->bd;
    }

    public function watch(Video $video, DateTimeInterface $date)
    {
        $this->watchedVideos->add($video, $date);
    }

    public function age()
    {
        $today = new \DateTimeImmutable();
        return $this->bd->diff($today)->y;
    }

    public function hasAccess(): bool
    {
        if ($this->watchedVideos->count() === 0) {
            return true;
        }

        return $this->firstVideoWasWatchedInLessThan90Days();
    }

    private function firstVideoWasWatchedInLessThan90Days()
    {
        $this->watchedVideos->sort(fn (DateTimeInterface $dateA, DateTimeInterface $dateB) => $dateA <=> $dateB);
        /** @var DateTimeInterface $firstDate */
        $firstDate = $this->watchedVideos->first()->value;
        $today = new \DateTimeImmutable();

        return $firstDate->diff($today)->days < 90;
    }
}
