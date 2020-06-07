<?php
if(isset($_POST['action'])){
        echo "start\n";
        $ip=$_POST['action'];
        $cmd='besttrace -g cn -q 1';
        $handle=popen("{$cmd} '{$ip}'","r");
        $read=stream_get_contents($handle);
        echo $read;
        pclose($handle);
        echo "end";
}
?>
