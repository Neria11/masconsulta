<?php
function haceCuanto($time_ago){
  $cur_time   = time();
  $time_elapsed   = $cur_time - $time_ago;
  $seconds  = $time_elapsed ;
  $minutes  = round($time_elapsed / 60 );
  $hours    = round($time_elapsed / 3600);
  $days     = round($time_elapsed / 86400 );
  $weeks    = round($time_elapsed / 604800);
  $months   = round($time_elapsed / 2600640 );
  $years    = round($time_elapsed / 31207680 );
// Seconds
  if($seconds <= 60){
    return "Hace $seconds segundos";
  }
//Minutes
  else if($minutes <=60){
    if($minutes==1){
      return "hace un minuto";
    }
    else{
      return "hace $minutes minutos";
    }
  }
//Hours
  else if($hours <=24){
    if($hours==1){
      return "hace una hora";
    }else{
      return "hace $hours horas";
    }
  }
//Days
  else if($days <= 7){
    if($days==1){
      return "ayer";
    }else{
      return "hace $days días";
    }
  }
//Weeks
  else if($weeks <= 4.3){
    if($weeks==1){
      return "hace una semana";
    }else{
      return "hace $weeks semanas";
    }
  }
//Months
  else if($months <=12){
    if($months==1){
      return "hace un mes";
    }else{
      return "hace $months meses";
    }
  }
//Years
  else{
    if($years==1){
      return "hace un año";
    }else{
      return "hace $years años";
    }
  }
}

?>