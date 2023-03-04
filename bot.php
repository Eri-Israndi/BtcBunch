<?php
system('clear');
error_reporting(0);
$l = str_repeat("~",60);


        $url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
/*        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); */
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }


function get($url,$host){
  return curl($url,'',head($host))[1];
}

function post($url,$data,$host){
  return curl($url,$data,head($host))[1];
}

function head($host){
$user=json_decode(file_get_contents("data.json"),true)["User"];
$cookie=json_decode(file_get_contents("data.json"),true)["Cookie"];
  $h[]="Host: $host";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: $user";
  $h[]="cookie: $cookie";
  return $h;
}

if(!file_exists("data.json")){
while("true"){
system("clear");
jam();
ban();
$api["Cookie"]=readline("\033[1;97mInput Your Cookie : \033[1;92m");
if($api["Cookie"]!=""){
break;
}
}
while("true"){
system("clear");
jam();
ban();
$api["User"]=readline("\033[1;97mInput Your User-agent : \033[1;92m");
if($api["User"]!=""){
break;
}
}

  save("data.json",$api);
//$a=next($ran);
}


function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}


function timer($t){
     $timr=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
//  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo " \e[0;37mPlease Wait \e[0;32m".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}

date_default_timezone_set("Asia/Jakarta");






function ban(){
echo $ban = "
\033[1;91m███████╗██████╗ ██╗ [√] Creator  : ERI ISRANDI
\033[1;91m██╔════╝██╔══██╗██║ \033[1;97m[√] Youtube  : Eri VHF
\033[1;91m█████╗  ██████╔╝██║ \033[1;92m[√] Website  : btcbunch.com
\033[1;97m██╔══╝  ██╔══██╗██║ [√] Saweria  : https://saweria.co/EriVHF
\033[1;97m███████╗██║  ██║██║
\033[1;97m╚══════╝╚═╝  ╚═╝╚═╝
";
}

function garis(){
slow("\033[1;91m√ WARNING!! \033[1;97mPROGAM ILEGAL SEGALA RESIKO DI TANGGUNG SENDIRI"."\n");
}
system("clear");
ban();
print "\033[0;36m$l"."\n";
garis();
print "\033[0;36m$l"."\n";





function slow($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(5000);
  }
}
const 
b = "\0me[0;34m",
c = "\033[1;36m",
d = "\033[0m",
h = "\033[1;32m",
k = "\033[1;33m",
m = "\033[1;31m",
ln = "\n",
p = "\033[1;37m",
u = "\033[1;35m";




$url="https://btcbunch.com/dashboard";
$host="btcbunch.com";
$res = get($url,$host);
$bal = explode('</p>',explode('<p class="font-sans-serif lh-1 mb-1 fs-2">',$res)[1])[0];
echo p."balance ~> ".h."$bal\n";
print "\033[0;36m$l"."\n";
while(true){
$host="btcbunch.com";
$url="https://btcbunch.com/auto";
$res = get($url,$host);
$token = explode('">',explode('<input type="hidden" name="token" value="',$res)[1])[0];

timer(30);
$url="https://btcbunch.com/auto/verify";
$data="token=$token";
$ha = post($url,$data,$host);
$url="https://btcbunch.com/dashboard";
$host="btcbunch.com";
$res = get($url,$host);
$bal = explode('</p>',explode('<p class="font-sans-serif lh-1 mb-1 fs-2">',$res)[1])[0];
echo p."『".h."√".p."』".h."reward ".p."~> ".m."5 ".h."Bee Bits  |".p." balance ~> ".h."$bal\n";
print "\033[0;36m$l"."\n";
}
