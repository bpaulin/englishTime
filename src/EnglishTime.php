<?php
namespace Bpaulin\EnglishTime;

class EnglishTime {
  private function __construct() {}
    public static function fromTimeStamp( $timestamp ){
      $hour = date('H', $timestamp);
      $minute = date('i', $timestamp);
      $nf = new \NumberFormatter("en", \NumberFormatter::SPELLOUT);
      $hourDisplayed = $nf->format($hour);
      if ($minute == 0) {
        $minuteDisplayed = "o'clock";
      }
      return $hourDisplayed . ' ' . $minuteDisplayed;
    }
}
