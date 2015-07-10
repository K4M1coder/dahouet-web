<?php
// src/DC/PlatformBundle/Antispam/OCAntispam.php

namespace DC\PlatformBundle\Antispam;

class DCAntispam
{
  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function isSpam($text)
  {
    return strlen($text) < 50;
  }
}