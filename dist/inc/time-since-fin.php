<?php
function aika($older_date, $newer_date = false)
    {
    // array of time period chunks
    $chunks = array(
    array(60 * 60 * 24 * 365 , 'vuosi'),
    array(60 * 60 * 24 * 30 , 'kuukausi'),
    array(60 * 60 * 24 * 7, 'viikko'),
    array(60 * 60 * 24 , 'päivä'),
    array(60 * 60 , 'tunti'),
    array(60 , 'minuutti'),
    );

    // $newer_date will equal false if we want to know the time elapsed between a date and the current time
    // $newer_date will have a value if we want to work out time elapsed between two known dates
    $newer_date = ($newer_date == false) ? (time()+(60*60*get_settings("gmt_offset"))) : $newer_date;

    // difference in seconds
    $since = $newer_date - $older_date;

    // we only want to output two chunks of time here, eg:
    // x years, xx months
    // x days, xx hours
    // so there's only two bits of calculation below:

    // step one: the first chunk
    for ($i = 0, $j = count($chunks); $i < $j; $i++)
        {
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];

        // finding the biggest chunk (if the chunk fits, break)
        if (($count = floor($since / $seconds)) != 0)
            {
            break;
            }
        }

    // set output var
    // eka!
    if ($count > 1 & $name == "päivä") {

//  $output = "$count";
    $output = ($count == 1) ? '1 '.$name : "$count {$name}ä";

  } elseif ($count > 1 & $name == "vuosi") {

    $output = ($count == 1) ? '1 '.$name : "$count vuotta";

  } elseif ($count > 1 & $name == "kuukausi") {

        $output = ($count == 1) ? '1 '.$name : "$count kuukautta";

    } else {
    $output = ($count == 1) ? '1 '.$name : "$count {$name}a";
    }

    // step two: the second chunk
    if ($i + 1 < $j)
        {
        $seconds2 = $chunks[$i + 1][0];
        $name2 = $chunks[$i + 1][1];

        if (($count2 = floor(($since - ($seconds * $count)) / $seconds2)) != 0)
            {
            // add to output var

    //toka!
    if ($count2 > 1 & $name2 == "päivä") {

    $output .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}ä";

  } elseif ($count2 > 1 & $name2 == "kuukausi") {

    $output .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 kuukautta";

    } else {
    $output .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}a";
    }

            }
        }

    return $output;
    }
