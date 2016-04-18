<?php
function getBroadcastState($room)
{
    $urlpanda='http://www.panda.tv/api_room?roomid='.$room;
    $dataRec=file_get_contents($urlpanda);
    $json_obj=json_decode($dataRec);
    return $json_obj->{'data'}->{'videoinfo'}->{"status"};
}
function getdata()
{
    $roomlist = Array("324101","322655","335019","319751","323346","322652","332495","315168","349196","312273","268792","324033","319709","316223");
    $dataRec=Array();
    for ($i=0;$i<count($roomlist);$i++)
    {
        $dataRec[]=getBroadcastState($roomlist[$i]);
    }
    return $dataRec;
}
?>