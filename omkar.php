<?php
error_reporting(0);

if (!isset($_GET['submit'])) {
    echo "<form action='' method='GET' accept-charset='utf-8'>
        <center>
            <span>Enter :- https://8lkpf.app.link Link<br></span>
            <br> 
            <input type='url' class='input' name='link' placeholder='Enter:- https://8lkpf.app.link' required style='width: 80%; padding: 15px; font-size: 16px; border-radius: 8px;'>
        </center>
        <center>
            <input type='submit' class='submit Shine' name='submit' value='BYPASS' style='width: 50%; padding: 12px; font-size: 18px; background-color:lightblue; color: white; border-radius: 8px; cursor: pointer;'>
        </center>
        <span>Made By :- OMKAR <br></span>
    </form>";
}

if (isset($_GET['submit'])) {
    $link = $_GET['link'];
    $k = urldecode($link);
    $kk = explode('&sub_id', explode('&click_id=', $k)[1])[0];
    $o = file_get_contents('https://www.vmtrk.com/conversion?click_id=' . $kk);

    echo "<div class='success'><font color=''>Bypass Successfully Done!!<br><br></div>";
    
    // Redirection after success message
    echo "<meta http-equiv='refresh' content='2;url=https://t.me/ninjascripterns0'>";
}
?>
