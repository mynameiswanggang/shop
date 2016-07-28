<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\SmsController;

//测试控制器
class TestController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    //测试短链生成服务
    public function short($url){
        echo short_url($url);exit;
    }

    public function getip(){
        var_dump(get_client_ip());
    }

    public function bubble(){
        $arr = array(10,2,36,14,10,25,23,85,99,45);

        $this->bubble_sort($arr);

        print_r($arr);
    }

    //错误的冒泡排序
    // private function bubble_sort(&$arr){
    //     for($len=count($arr),$i=0;$i<$len;$i++){
    //       for($j=1;$j<$len-$i;$j++){
    //         if($arr[$j-1]>$arr[$j]){
    //           $tmp= $arr[$j-1];
    //           $arr[j-1] = $arr[$j];
    //           $arr[$j] = $tmp;
    //         }
    //       }
    //     }
    // }

    //正确的冒泡排序
    private function bubble_sort(&$arr,$direction='asc'){
        for($len=count($arr),$i=0;$i<$len;$i++){
          for($j=$i+1;$j<$len;$j++){
            if($arr[$i]>$arr[$j]){
              $tmp= $arr[$i];
              $arr[$i] = $arr[$j];
              $arr[$j] = $tmp;
            }
          }
        }
    }

    public function sock(){
        if($fp = fsockopen('www.shop.com', '80')) {
        //连接成功
        $request_data = "POST /sock.php HTTP/1.1" . "\r\n"; //请求行
        $request_data .= "Host: www.shop.com" . "\r\n"; //host 头信息
        $request_data .= "User-Agent:Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1;
        Trident/5.0)" . "\r\n";//host 头信息
        $request_content = "username=".urlencode('温柔一刀
        ')."&pwd=".urlencode('&123=321&321=123&')."&intro=".urlencode("Hello world!");
        $request_data .= "Content-Type: application/x-www-form-urlencoded" . "\r\n";
        $request_data .= "Content-Length: " . strlen($request_content) . "\r\n";
        $cur_query = urlencode("you&me");
        // 韩顺平,王超平收集整理《传智播客 PHP 面试宝典》
        // 20传播智慧,引领未来
        $last_tm = time()-10*60;
        $cur_tm = time();
        $request_data .= "Cookie:cur_query=$cur_query;last_tm=$last_tm;cur_tm=$cur_tm" . "\r\n";
        $request_data .= "\r\n"; //请求头信息结束时的空行
        //请求主体数据部分
        $request_data .= $request_content;
        //利用建立好的通道,将数据发送过去
        fwrite($fp, $request_data); //写入数据(发送数据)
        //读取数据
        while(!feof($fp)) { //判断是否没有到文件末尾
        $resp_data = fgets($fp);
        echo $resp_data . '<br>';
      }
      }
    }

    public function live(){

    }

}
