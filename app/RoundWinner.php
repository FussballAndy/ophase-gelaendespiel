<?php

namespace App;

enum RoundWinner: int
{
    //
    case Unset = 0;
    case Tutor = 1;
    case Student = 2;

    public function is_unset(): bool
    {
        return $this == RoundWinner::Unset;
    }

    public function is_student(): bool
    {
        return $this == RoundWinner::Student;
    }

    public function is_tutor(): bool
    {
        return $this == RoundWinner::Tutor;
    }
}
