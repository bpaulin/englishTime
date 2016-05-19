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
        return $hourDisplayed . " o'clock";
      }
      elseif ($minute>30) {
        $hour++;
        $hourDisplayed = $nf->format($hour);
        $minute = 60 -$minute;
        $link = 'to';
      }
      else {
        $link = 'past';
      }
      switch ($minute) {
      case 15:
        $minuteDisplayed = 'quarter';
        break;
      case 30:
        $minuteDisplayed = 'half';
        break;
      default:
        $minuteDisplayed = $nf->format($minute);
      }
      return "$minuteDisplayed $link $hourDisplayed";
    }
}
