<?php

function is_logged_in()
{
    $ci = get_instance();
    $user_session = $ci->session->userdata('email');
    if (!$user_session) {
        redirect('auth');
    }
}

function is_not_logged_in()
{
    $ci = get_instance();
    $user_session = $ci->session->userdata('email');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_role()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->id_role != 2) {
        redirect('dashboard');
    }
}

function check_role_danru()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->danru_login()->id_role != 3) {
        redirect('danru/dashboard');
    }
}


function indo_date($date)
{
    $d = substr($date, 8, 2);
    $m = substr($date, 5, 2);
    $y = substr($date, 0, 4);
    return $d . '/' . $m . '/' . $y;
}
function indo_longdate($date)
{
    $bulan = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];
    $pisah_tanggal = explode("-", $date);
    return $pisah_tanggal[2] . " " . $bulan[$pisah_tanggal[1]] . " " . $pisah_tanggal[0];
}
function indo_time($time)
{
    $h = substr($time, 11, 2);
    $i = substr($time, 14, 2);
    // $s = substr($time, 17, 2);
    return $h . ':' . $i;
}
