<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return mb_substr(trim($name), 0, 1, 'UTF-8');
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . ".";
    }

    public function initials(string $name): string
    {
        $parts = explode(' ', trim($name));
        return $this->initial($parts[0]) . " " . $this->initial($parts[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $sweetheart_a = $this->initials($sweetheart_a);
        $sweetheart_b = $this->initials($sweetheart_b);
        return <<<TEXT
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $sweetheart_a  +  $sweetheart_b     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
TEXT;

    }
}
