<?php

namespace Alura\Calisthenics\Domain\Student;

use Countable;
use Ds\Map;

class WatchedVideos implements Countable
{
    private Map $videos;

    public function __construct()
    {
        $this->videos = new Map();
    }
    
    public function add(Video $video, \DateTimeInterface $date): void
    {
        $this->videos->put($video, $date);
    }

    public function count(): int
    {
        $this->videos->count();
    }
}