<?php
namespace Bpaulin\EnglishTime;

class EnglishTime {
  private function __construct() {}
    public static function fromTimeStamp( $timestamp ){
      $hour = date('H', $timestamp);
      $minute = date('i', $timestamp);
      $minute = round($minute/5)*5;
      $nf = new \NumberFormatter("en", \NumberFormatter::SPELLOUT);
      if ($minute>30) {
        $hour++;
        $minute = 60 - $minute;
        $link = 'to';
      }
      else {
        $link = 'past';
      }
      $hourDisplayed = $nf->format($hour);
      if ($minute == 0) {
        return "$hourDisplayed o'clock";
      }
      switch ($minute) {
      case 15:
        $minuteDisplayed = 'a quarter';
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
