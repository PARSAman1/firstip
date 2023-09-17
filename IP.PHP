<?PHP


function GetIp()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    return $ip;
}
echo(GetIp());
echo('rrr');
?>

