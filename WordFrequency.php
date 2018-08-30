/**
* @Author Emmanuel E.J
*/
function wordFrequency($string, $limit, $sort_desc = true, $return_array = false)
{

    $mword = str_word_count($string, 1);
    $retain = array_count_values($mword);
    asort($retain);
    if($sort_desc == true)
    {
        $retain = array_reverse($retain);
    }

    $top_keys = array(); // only
    $cnt = 0;

    foreach ($retain as $key => $value) 
    {
        if(strlen($key) > 2)
        {
            $cnt++;
            $top_keys[] = $key." (".$value.") "; 
        }
        if($cnt >= $limit)
        {
            break;
        }

    }
    if($return_array == true)
    {
        return $top_keys;
    }
    $paras = implode(", ", $top_keys);

    return $paras;
}
