<?php

namespace App\Support;

/**
 * Shim replacing the livewire/flux Flux facade.
 * Provides the Flux::classes() helper used in custom icon views.
 */
class Flux
{
    public static function classes(string ...$base): self
    {
        return new self(implode(' ', $base));
    }

    private string $classes;

    public function __construct(string $classes = '')
    {
        $this->classes = $classes;
    }

    public function add(string $classes): self
    {
        $this->classes = trim($this->classes . ' ' . $classes);
        return $this;
    }

    public function __toString(): string
    {
        return $this->classes;
    }
}
