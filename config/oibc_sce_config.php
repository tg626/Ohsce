<?php
/*
OHSCE_V0.1.22_B
高可靠性的PHP通信框架。
HTTP://WWW.OHSCE.ORG
@作者:林友哲 393562235@QQ.COM
作者保留全部权利，请依照授权协议使用。
*/
define('OHSCE_MYIP', '127.0.0.1');//本机IP地址
define('OHSCE_MYIP_SYSTEM', '127.0.0.1');//本机IP地址（系统内）
define('OHSCE_PHPDIR', 'D:\php54\php.exe');//您的PHP所在路径
define('OHSCE_OLMD_MADDRESS',"20");//OLMD内存起始
define('OHSCE_OLMD_MADDRESSBACKUPS',"10");//OLMD内存起始（备）
define('OHSCE_OLMD_MADDRESSPORT',"7698");//OLMD监听端口
define('OHSCE_OLMD_MADDRESSPORTY',"7699");//OLMD监听端口(对外读取)
define('OHSCE_OLMD_MADDRESSPASS',"ohsceolmdpassword"); //OLMD写入密钥，如果你不善于维护防火墙，那么你必须修改它
define('OHSCE_OLMD_MADDRESSPASSY',"password");//这是OLMD对外读取密钥，如果你不善于维护防火墙，那么你必须修改它
$OHSCE_PLdir=OHSCE_ROOTDIR.'\PcenterRun\\';//PCENTER直启目录
$OHSCE_pdefend=OHSCE_ROOTDIR.'\OHSceRun.php -r engine -m pdefend -p';
$OHSCE_pdefend_vbs=OHSCE_ROOTDIR.'\pdefend.vbs';
$OHSCE_pdefendC_vbs=OHSCE_ROOTDIR.'\pdefendC.vbs';
$OHSCE_pdefend_recalltime=5;//当二级守护进程死亡重新呼叫间隔，不要太小！